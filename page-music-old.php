<?php
/**
 * Theme: twintide
 * 
 * Template Name: Music - old
 *
 * @package flat-bootstrap
 */

get_header(); ?>
<?php get_sidebar();?>
   <div class="container-fluid">
       <div class="container">

         <!-- CREATE THE SONG FILTER UI -->
          <form method="post">
             
              <!-- GENRE FILTER -->
              SEARCH BY GENRE
              <input list="genre" name="genres">
                 <datalist id="genre">
                  <?php
                    $terms = get_terms( 'genre' );
                     if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                         foreach ( $terms as $term ) {
                           echo '<option value="'.$term->name.'">'.$term->name.'</option>';
                         }
                     }?>
                  </datalist>
              
              <!-- MOOD FILTER -->
              SEARCH BY MOOD
              <input list="mood" name="moods">
                 <datalist id="mood">
                  <?php
                    $terms = get_terms( 'mood' );
                     if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                         foreach ( $terms as $term ) {
                           echo '<option value="'.$term->name.'">'.$term->name.'</option>';
                         }
                     }?>
                  </datalist>
              
              
              <input type="submit" value="Submit">
            </form>
            
            <br/><br/>

          
          <!-- FILTER SONGS -->
           <?php  
               if (!empty($_POST['genres']) && !empty($_POST['moods'])) { 
                   echo '<h1>BOTH FIELDS ARE SELECTED</h1>';
                    $songs = array(
                    'showposts' => -1,
                    'post_type' => 'song',
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'genre',
                            'field' => 'slug',
                            'terms' => $_POST['genres'],
                        ),
                        array(
                            'taxonomy' => 'mood',
                            'field' => 'slug',
                            'terms' => $_POST['moods'],
                        ),
                    ),
                   );
               } 
                else if (!empty($_POST['genres']) || !empty($_POST['moods'])) {
                    echo '<h1>ONE OPTION SELECTED</h1>';
                    $songs = array(
                    'showposts' => -1,
                    'post_type' => 'song',
                    'tax_query' => array(
                        'relation' => 'OR',
                        array(
                            'taxonomy' => 'genre',
                            'field' => 'slug',
                            'terms' => $_POST['genres'],
                        ),
                        array(
                            'taxonomy' => 'mood',
                            'field' => 'slug',
                            'terms' => $_POST['moods'],
                        ),
                    ),
                   );
               } 
                else {
                    $songs = array(
                        'showposts' => -1,
                        'post_type' => 'song',
                        'orderby'=>'song_artist',
                        'order'=>'ASC',
                       );
               }
           ?>
           
           <!-- SHOW LIST OF SONGS -->
            <?php $loop = new WP_Query( $songs );?>
            <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <?php $genre = strip_tags( get_the_term_list( $loop->post->ID, 'genre', '', '', '' ) ); ?>
            <?php $mood = strip_tags( get_the_term_list( $loop->post->ID, 'mood', '', '', '' ) ); ?>

            <div class="row song-list-item">
                <div class="col-sm-3">
                    <span class="song-title"><?php the_title(); ?></span>
                </div>
                <div class="col-sm-2">
                    <span class="song-artist"><b>Artist: </b><?php the_field('song_artist'); ?></span>
                </div>
                <div class="col-sm-1">
                    <span class="song-genre"><?php echo $genre; ?></span>
                </div>
                <div class="col-sm-1">
                    <span class="song-mood"><?php echo $mood; ?></span>
                </div>
                <div class="col-sm-5">
                    <audio controls>
                        <source src="<?php the_field('song_file'); ?>">
                    </audio>  
                </div>
            </div>

            <?php endwhile; ?>

       </div>
   </div>
       
        



<?php get_footer(); ?>
