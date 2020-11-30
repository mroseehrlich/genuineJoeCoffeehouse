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
        <h2>Instagram</h2>
        <div class="instagram-feed-container">
            <div class="container">
                <?php echo do_shortcode("[instagram-feed num=9]"); ?>
            </div>
          
        </div>  
    </section>

   <section class="cta-container">
       <div class="container">
            <div class="row">
                <div class="cta-menu col-md-3">
                    <a class="cta-container__link" href="<?php site_url(); ?>/menu">
                        <h3>Menu</h3>
                        <p>Check out our drinks menu</p>
                        <p><i class="fas fa-long-arrow-alt-right"></i></p>
                    </a>
                </div>
                <div class="cta-about col-md-3">
                    <a class="cta-container__link" href="<?php site_url(); ?>/about">
                        <h3>About Us</h3>
                        <p>Established 2006 in Austin, TX</p>
                        <p><i class="fas fa-long-arrow-alt-right"></i></p>
                    </a>
                </div>
                <div class="cta-contact col-md-3">
                    <a class="cta-container__link" href="<?php site_url(); ?>/contact">
                        <h3>Contact</h3>
                        <p>Questions? Concerns? Let us know</p>
                        <p><i class="fas fa-long-arrow-alt-right"></i></p>
                    </a>
                </div>
            </div>
       </div>
   </section>

   <section class="contact">
       <h2>Visit Us</h2>

        <div class="contact-container container-fluid">
            <div class="contact-container__map">
                <iframe class="contact-map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.891976856561!2d-97.7295214847857!3d30.35401978177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cbb11d2292a5%3A0x25bb3fa206d43524!2s2001%20W%20Anderson%20Ln%2C%20Austin%2C%20TX%2078757!5e0!3m2!1sen!2sus!4v1605980819315!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
            </div>
            <div class="contact-container__contact-info">
                <h4>Genuine Joe Coffeehouse</h4>
                <address>
                    <p>2001 W Anderson Ln</p>
                    <p>Austin, TX &nbsp; 78757</p>
                </address>
                <p>
                    <a href="mailto:info@genuinejoecoffee.com">
                        info@genuinejoecoffee.com
                    </a>
                </p>
                <p>
                    <a href="tel:+15122025156">(512) 202-1576</a>
                </p>
            </div>
            <div class="contact-container__hours">
                <h4>Hours</h4>
                <p>Monday - Friday &nbsp;&nbsp;&nbsp; 7AM - 6PM</p>
                <p>Saturday & Sunday &nbsp;&nbsp;&nbsp; 7AM - 3PM </p>
            </div>
        </div> 
   </section>

</main>


 <?php get_footer() ?>