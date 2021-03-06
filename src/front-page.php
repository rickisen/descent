<?php get_header(); ?>
      <?php the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
        <header class="entry-header">
          <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
        </div>
      </article>
<?php get_footer(); ?>
