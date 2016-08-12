<?php
/**
 * Theme: twintide
 * 
 * Template Name: Music
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<div class="container">

        <?php do_action('show_beautiful_filters'); ?>
        
		<?php if ( have_posts() ) : ?>
            
            <div class="row song-list-headers">
                <div class="col-sm-3">SONG TITLE</div>
                <div class="col-sm-2">ARTIST</div>
                <div class="col-sm-1">GENRE</div>
                <div class="col-sm-1">MOOD</div>
                <div class="col-sm-5">AUDIO SAMPLE</div>
            </div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                


				<div class="row song-list-item">
                    <div class="col-sm-3">
                        <span class="song-title"><?php the_title(); ?></span>
                    </div>
                    <div class="col-sm-2">
                        <span class="song-artist"><?php the_field('song_artist'); ?></span>
                    </div>
                    <div class="col-sm-1">
                        <span class="song-genre"><?php echo $genre; ?></span>
                    </div>
                    <div class="col-sm-1">
                        <span class="song-mood"><?php echo $mood; ?></span>
                    </div>
                    <div class="col-sm-5">
                        <audio controls="controls" preload="none">
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