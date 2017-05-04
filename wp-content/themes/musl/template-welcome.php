<?php /* Template Name: Welcome Page */ get_header(); ?>
	<div class="wrapper">
	<div class="logo"><img src="/wp-content/themes/musl/img/logo.png" width="430" alt="MUSL" /></div>

    <div class="welcome_copy"><span class='welcome_copy_bold'>A new Social Connection app is coming soon.</span> MUSL has been created based on insights from men like you and what you expect from an app.  The features and functionality of MUSL have been crafted to deliver a well-lit, more honest, social connection app full of men who are looking for the same type of relationship as you.</div>

    <div class="welcome_copy">We are launching in June (very exciting). But before our launch we would love your feedback.  Testing is open to 1,000 users. If you are interested in becoming a Beta user, please submit your email address below.  We will be in contact in mid-May.</div>

    <div class="email_form"><?php echo do_shortcode( '[contact-form-7 id="9" title="Sign Up"]' ); ?></div>

    <div class="sign_up_more">Sign up for more information.</div>

    <div class="fff"><img src="/wp-content/themes/musl/img/fff.png" width="100%" alt="Friend, Flirt, Fun." /></div>

    </div>
<?php get_footer(); ?>
