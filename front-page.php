<?php
/**
 * Template Name: Landing Page
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<main>
    <div class="jumbotron jumbotron-fluid fade-in">
        <h1 class="brand-title">Genuine Joe Coffeehouse</h1>
        <p class="lead brand-subtitle">Stay kind. Stay genuine.</p>
    </div>

    <?php echo do_shortcode("[instagram-feed num=9]"); ?>

</main>


 <?php get_footer() ?>