<?php
/**
 * Template Name: Contact Page
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="contact-info">
    <div class="row">
        <div class="contact-info__heading col-sm-6">
            <h2>Contact</h2>
        </div>
            
        <div class="contact-info__links col-sm-6">
            <a class="contact-info__links-phone">
                <span class="contact-phone__icon"><i class="fas fa-phone-square-alt"></i></span>
                <span class="contact-phone__num">(512)202-1576</span>
            </a>
            <a class="contact-info__links-email">
                <span class="contact-email__icon"><i class="far fa-paper-plane"></i></span>
                <span class="contact-email__address">info@genuinejoecoffee.com</span>
            </a>
        </div>
    </div>
</div>



<div class="contact-address">
    <div class="row">
        <div class="contact-address__map col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.891976856561!2d-97.7295214847857!3d30.35401978177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cbb11d2292a5%3A0x25bb3fa206d43524!2s2001%20W%20Anderson%20Ln%2C%20Austin%2C%20TX%2078757!5e0!3m2!1sen!2sus!4v1605980819315!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="contact-address__info col-sm-6">
            <h2>Visit</h2>
            <address>
                2001 W Anderson Ln. <br/>
                Austin, TX 78757
            </address>
        </div>
    </div>
</div>

<div class="contact-social">
    <div class="row">
        <div class="contact-social__heading col-sm-6">
            <h2>Social</h2>
            <p>Follow us on social media and see what we're up to</p>
        </div>
        <div class="contact-social__links col-sm-6">
            <div class="contact-social__icons">
                <i class="fab fa-facebook-f fa-2x"></i><i class="fab fa-instagram fa-2x"></i>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>