<?php

/**
 * Page.php
 * 
 * @package     WordPress
 * @subpackage  WP From Scratch
 * @since       1.0
 */

get_header(); ?>

<div id="content" class="content">
  <?php do_action('theme_main_before'); ?>
  <div id="main" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="page-<?php the_ID(); ?>" itemprop="about" itemscope itemtype="http://schema.org/Article" <?php post_class(); ?>>
      <h1 itemprop="name"><?php the_title(); ?></h1>
      <div itemprop="text">
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Edit', 'theme_aq' ), '', '' ); ?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php do_action('theme_main_after'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>