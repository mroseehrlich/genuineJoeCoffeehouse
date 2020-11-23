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
     <div class="row">
         <div class="col-md-6">
             <h2>Patio Seating Now Open!</h2>
             <p>
                We can't wait to reopen fully, but for now, we're open for patio service only. Order coffee at the side door
                and grab a seat on our front porch or on our newly shaded patio. All seating has been spaced to maintain
                social distancing. Masks are required and dogs are welcome. Thank you for all your support through these tough
                times. We wouldn't be here without you. We love you, Austin! 
             </p>
         </div>
         <div class="hours">
             <h2>Hours</h2>
             <p>Monday-Friday 7AM-6PM</p>
             <p>Saturday & Sunday 7AM - 3PM </p>
         </div>
     </div>
 </article>

<main>
    <div class="jumbotron jumbotron-fluid fade-in">
        <h1 class="brand-title">Genuine Joe Coffeehouse</h1>
        <p class="lead brand-subtitle">Stay kind. Stay genuine.</p>
    </div>

    <?php echo do_shortcode("[instagram-feed num=9]"); ?>

</main>


 <?php get_footer() ?>