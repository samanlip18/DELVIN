<?php get_header(); ?>
<div class="container" style="padding:70px 0">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p>محتوایی پیدا نشد.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
