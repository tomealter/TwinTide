<?php
/**
 * Theme: twintide
 * 
 * Template Name: About
 *
 * @package flat-bootstrap
 */
?>
<?php get_header(); ?>

<div class="container-fluid section">
    <div class="row">

        <div class="container about-us">
            <div class="col-sm-4 aligncenter">
                <img src="<?php the_field('about_us_image')?>" alt="" class="img-circle img-responsive">
            </div>
            
            <div class="col-sm-8 about-us-content">
                <h1><?php the_field('about_us_header')?></h1>
                <p><?php the_field('about_us_text')?></p>
                <a href="#contact-us">Contact Us</a>  
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section">
    <div class="section-title">
       <h1>MEET OUR TEAM</h1>
       <p>Something about us being talented and creative minded here</p>
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
                <p>Thomas grew up in a household of music with a father rooted in jazz. His strengths lie in all things piano, orchestral scoring, and vocal work with an impeccable ear and creative mindset. He has a wonderful sense of creating unique chord progressions and seamlessly puts together full arrangements. 
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
                <img src="http://twintide.com/wp-content/uploads/2015/10/dudeman.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Brett Line</h3>
                <i>Writer</i>
                <p>Brett currently walks the line between video producer and music writer. His background in video production makes him invaluable in knowing how music works in conjunction with any video project. 
                </p>
            </div>
            <div class="col-md-4 col-sm-6 team-member">
                <img src="http://twintide.com/wp-content/uploads/2015/10/Clint-Gray-01.png" alt="" class="img-circle img-responsive aligncenter"/>
                <h3>Clint Petty</h3>
                <i>Writer</i>
                <p>A natural talent in the world of music, Clint’s strength lies in his bass work. His unique approach to his instrument allows him to create original arrangements in the low end. Everything from thunderous funk to upbeat indie rock, Clint has the bass covered. 
                </p>
            </div>
       </div>
    </div>
</div>

<div class="container-fluid section meet-the-team">
    <div class="section-title">
       <h1>GET IN TOUCH</h1>
       <p>Have questions or an idea? Give us a ring</p>
   </div>
   <div class="container">
       <div class="col-sm-4 email">
           
       </div>
       <div class="col-sm-4 phone">
           
       </div>
       <div class="col-sm-4 address">
           
       </div> 
       
   </div>
</div>


<?php get_footer(); ?>
