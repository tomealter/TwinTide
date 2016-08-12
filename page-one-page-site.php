<?php
/**
 * Theme: twintide
 * 
 * Template Name: One Pager
 *
 * @package flat-bootstrap
 */
?>

<?php get_header(); ?>

<span id="landing">
</span>

<div class="landing-image" > 
    <img src="<?php the_field('landing_bg_image'); ?>" />
</div>

<!-- LANDING SECTION -->
<div class="container-fluid landing" >
    <div class="container landing-content">
       <div class="row">
                <h1><?php the_field('landing_tagline'); ?></h1>
                <p><?php the_field('landing_text'); ?></p>
                <a class="aligncenter smoothscroll" href="#music">EXPLORE OUR MUSIC</a>
       </div>
    </div>
</div>

<!-- ABOUT US -->
<div class="container-fluid section" id="about">
    <div class="row">

        <div class="container about-us">
            <div class="col-sm-4 aligncenter">
                <img src="<?php the_field('about_us_image')?>" alt="" class="img-circle img-responsive">
            </div>
            
            <div class="col-sm-8 about-us-content">
                <h1><?php the_field('about_us_header')?></h1>
                <p><?php the_field('about_us_text')?></p>
                <a href="#contact" class="smoothscroll">Contact Us</a>  
            </div>
        </div>
    </div>
</div>


<!-- MUSIC EXAMPLES -->
<div class="container-fluid section" id="music">
    <div class="section-title">
       <h1>SAMPLE WORK</h1>
       <p>Some of our recent tunes</p>
   </div>
   
   <div class="container song-list">
    
     <?php $songs = array(
        'showposts' => -1,
        'post_type' => 'song',
        'orderby'=>'title',
        'order'=>'ASC',
       );?>
       
       <?php $loop = new WP_Query( $songs );?>
            <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <?php $genre = strip_tags( get_the_term_list( $loop->post->ID, 'genre', '', '', '' ) ); ?>
            <?php $mood = strip_tags( get_the_term_list( $loop->post->ID, 'mood', '', '', '' ) ); ?>

            <div class="row song-list-item">
                <div class="col-sm-6">
                    <span class="song-title"><?php the_title(); ?></span>
                </div>
                <div class="col-sm-6">
                    <audio controls preload="none">
                        <source src="<?php the_field('song_file'); ?>">
                    </audio>  
                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>

<!-- MEET THE TEAM -->
<div class="container-fluid section" id="team">
    <div class="section-title">
       <h1>MEET OUR TEAM</h1>
       <p>A talented group of diverse musicians and videographers</p>
   </div>
    <div class="container meet-the-team">
       <div class="row">
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/mike2-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Mike Douaire</h3>
                <i>Founder, Writer</i>
                <p>Mike has an extensive background in writing and scoring in all genres. He’s a multi-instrumentalist, though his strengths lie in all things guitar, jazz arrangements, orchestral scoring, and electro backbeats. A fan of epic scores and eerie soundscapes, no project is too unusual. </p>
            </div>
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/Thom-Gray-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Thomas Bridgwood</h3>
                <i>Founder, Writer</i>
                <p>Thomas grew up in a household of music with a father rooted in jazz. His strengths lie in all things piano, orchestral scoring, and vocal work with an impeccable ear and creative mindset. He has a wonderful sense of creating unorthodox chord progressions and seamlessly puts together full arrangements. 
                </p>
            </div>
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/Tommy-Gray-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Tommy Alter</h3>
                <i>Founder, Writer</i>
                <p>Tommy has a fundamental understanding for all things rhythm. Being an outstanding drummer and percussionist allows him to create unique and interesting movements within songs. He has a great vocabulary with both acoustic and electronic rhythmic textures. His ability to pinpoint nuances in songs make him a great asset. 
                </p>
            </div>
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/Brett-Gray-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Brett Line</h3>
                <i>Writer</i>
                <p>Brett currently walks the line between video producer and music writer. His background in video production makes him invaluable in knowing how music works in conjunction with any video project. 
                </p>
            </div>
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/Clint-Gray2-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Clint Petty</h3>
                <i>Writer</i>
                <p>A natural talent in the world of music, Clint’s strength lies in his bass work. His unique approach to his instrument allows him to create original arrangements in the low end. Everything from thunderous funk to upbeat indie rock, Clint has the bass covered. 
                </p>
            </div>
       </div>
    </div>
</div>

<!-- CONTACT -->
<div class="container-fluid section contact" id="contact">
    <div class="section-title">
       <h1>GET IN TOUCH</h1>
       <p>Have questions or an idea? Give us a ring</p>
   </div>
   <div class="container">
        <div class="row">
           <div class="col-sm-4 contact-info">
               <img src="http://twintide.com/wp-content/uploads/2015/10/email.png" alt="email graphic" class="img-responsive">
               <h3>EMAIL</h3>
               <p><a href="mailto:info@twintide.com">info@twintide.com</a></p>
           </div>
           <div class="col-sm-4 contact-info">
               <img src="http://twintide.com/wp-content/uploads/2015/10/phone.png" alt="email graphic" class="img-responsive">
               <h3>PHONE</h3>
               <p>703.967.8813</p>
           </div>
           <div class="col-sm-4 contact-info">
               <img src="http://twintide.com/wp-content/uploads/2015/10/location.png" alt="email graphic" class="img-responsive">
               <h3>LOCATION</h3>
               <p>Washington, DC</p>
           </div> 
       </div>
   </div>
</div>


<?php get_footer(); ?>
