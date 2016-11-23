<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
 <section class="about-hero">
      <h1><?php the_title(); ?></h1>
    </section>
<div id="primary" class="content-area">
  <main id="main" class="about-main">
   
    <section class="about-text">
      <h2>Our Story</h2>
      <?php echo CFS()->get( 'our_story' ); ?>
      <h2>Our Team</h2>
      <?php echo CFS()->get( 'our_team' ); ?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>

