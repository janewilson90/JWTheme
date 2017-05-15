<?
/**
 * Template for the Home-Site containing a teaser-image.
 *
 * @author      Flurin Dürst
 * @version     1.1.1
 * @since       WPSeed 0.2
 *
 */
?>
<? /* Template Name: Home */ ?>

<? get_header(); ?>

<!-- content » home -->

  <div class="cover">

    <? if (have_posts() ) : while (have_posts()) : the_post(); ?>
      <article>
        <h1><span class="fancy-cookie">Hello</span>my name is <span class="fancy-cookie">Jane</span> and I'm a <span class="fancy-cookie">UX Developer</span></h1>

      </article>
    <? endwhile; endif; ?>

  </div>

<? get_footer(); ?>
