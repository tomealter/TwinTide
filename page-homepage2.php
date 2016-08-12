<?php
/**
 * Theme: twintide
 * 
 * Template Name: Homepage - 2
 *
 * @package flat-bootstrap
 */
?>
<span id="shrink" class="homepage-header2">
<?php get_header(); ?>
</span>

<div class="landing-image">
    <img src="<?php the_field('landing_bg_image'); ?>" />
</div>

<!-- LANDING SECTION -->
<div class="container-fluid landing">
    <div class="container landing-content">
       <div class="row">
                <h1><?php the_field('landing_tagline'); ?></h1>
                <p><?php the_field('landing_text'); ?></p>
                <a class="aligncenter" href="#">EXPLORE OUR MUSIC</a>
       </div>
    </div>
</div>

<!-- FIND YOUR SOUND SECTION -->
<div class="container-fluid find-sound section">
   <div class="section-title">
       <h1>FIND YOUR SOUND</h1>
       <p>Search our library of music to find the right sound for your project</p>
   </div>
   
   <div class="container find-genre">
        <a href="#">
            <div class="row">
               <div class="col-sm-5">
                    <section>
                        <h3>SEARCH BY GENRE</h3>
                        <p>Etsy cliche pork belly, polaroid Thundercats gluten-free Portland scenester viral ethical Austin flannel PBR.</p>
                    </section>
               </div> 
               <div class="col-sm-7">
                    <img src="<?php the_field('genre_image');?>" />
               </div>
            </div>
        </a>
   </div>
   <div class="container find-mood">
        <a href="#">
            <div class="row">
               <div class="col-sm-5 pull-right">
                    <section>
                        <h3>SEARCH BY MOOD</h3>
                        <p>Neutra fap narwhal whatever Intelligentsia raw denim distillery Blue Bottle, fixie Williamsburg ennui normcore.</p>
                   </section>
               </div>
               <div class="col-sm-7">
                    <img src="<?php the_field('mood_image');?>" />
               </div>
            </div>
       </a>
   </div>
    
</div>


<!-- FEATURED SECTION -->
<div class="container-fluid featured section">
    <div class="container">
         <div class="row">
             <div class="section-title">
                 <h1>EXPERIENCE TWINTIDE</h1>
                 <p>See what others have been able to accomplish with our help</p>
             </div>
             <div class="col-md-6 featured-content">
                 <h3><?php the_field('featured_header'); ?></h3>
                 <p><?php the_field('featured_body'); ?></p>
             </div>
             <div class="col-md-6 featured-video"> 
                 <?php the_field('featured_video'); ?>
             </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
