<?php
/**
 * Template Name: Landing Page
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

 <article class="covid-info">
     <div class="container">
        <div class="row">
            <section class="covid-info__text col-md-6">
                <h2>Open For Outdoor Seating!</h2>
                <p>
                    We can't wait to reopen fully, but for now, we're open for patio service only. Order coffee at the side door
                    and grab a seat on our front porch or newly shaded patio. All seating has been spaced to maintain
                    social distancing. Masks are required and dogs are welcome. Thank you for all your support through these tough
                    times. We wouldn't be here without you. We love you, Austin! 
                </p>
            </section>
            <section class="covid-info__hours col-md-6">
                <h2>Hours</h2>
                <p>Monday - Friday &nbsp;&nbsp;&nbsp; 7AM - 6PM</p>
                <p>Saturday & Sunday &nbsp;&nbsp;&nbsp; 7AM - 3PM </p>
            </section>
        </div>
     </div>
 </article>

<main>
    <section class="jumbotron jumbotron-fluid fade-in">
        <h1 class="brand-title">Genuine Joe Coffeehouse</h1>
        <p class="lead brand-subtitle">Stay kind. Stay genuine.</p>
    </section>
    
    <section class="instagram-feed">
        <h2 class="center">Instagram</h2>
        <?php echo do_shortcode("[instagram-feed num=9]"); ?>
    </section>

   <section class="cta-container">
       <div class="container">
            <div class="row">
                <div class="cta-menu col-md-3">
                <a class="cta-container__link" href="<?php site_url(); ?>/menu">Menu</a>
                </div>
                <div class="cta-about col-md-3">
                <a class="cta-container__link" href="<?php site_url(); ?>/about">About Us</a>
                </div>
                <div class="cta-contact col-md-3">
                <a class="cta-container__link" href="<?php site_url(); ?>/contact">Contact</a>
                </div>
            </div>
       </div>
   </section>

</main>


 <?php get_footer() ?>