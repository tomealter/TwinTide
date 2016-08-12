<?php
/**
 * Theme: twintide
 * 
 * Template Name: Music
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<div class="container filtered-song-list">

        <?php do_action('show_beautiful_filters'); ?>
        
		<?php if ( have_posts() ) : ?>
            
            <div class="row song-list-headers">
                <div class="col-md-3 col-sm-4">SONG TITLE</div>
                <div class="col-md-2 col-sm-4">ARTIST</div>
                <div class="col-md-1 col-sm-2">GENRE</div>
                <div class="col-md-1 col-sm-2">MOOD</div>
                <div class="col-md-5"></div>
            </div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();           
                $genre_term = get_the_terms( $post_id , 'genre' );
                $mood_term = get_the_terms( $post_id , 'mood' );
                $genre_slug = $genre_term[0]->slug;
                $mood_slug = $mood_term[0]->slug;
            ?>

				<div class="row song-list-item">
                    <div class="col-md-3 col-sm-4">
                        <span class="song-title"><?php the_title(); ?></span>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <span class="song-artist"><b class="hidden-header">Artist:</b> <?php the_field('song_artist'); ?></span>
                    </div>
                    <div class="col-md-1 col-sm-2">
                        <span class="song-genre"><b class="hidden-header">Genre:</b> <?php echo $genre_slug; ?></span>
                    </div>
                    <div class="col-md-1 col-sm-2">
                        <span class="song-mood"><b class="hidden-header">Mood:</b> <?php echo $mood_slug; ?></span>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <audio controls>
                            <source src="<?php the_field('song_file'); ?>">
                        </audio>  
                    </div>
                </div>

			<?php endwhile; ?>

			<?php get_template_part( 'content', 'index-nav' ); ?>

		<?php else : ?>
            
            
			<h3>NO RESULTS FOUND</h3>

		<?php endif; ?>

		
</div><!-- .container -->

<?php get_footer(); ?>