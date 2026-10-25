<?php get_header(); ?>

<?php get_template_part('nav'); ?>

<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article>
                            <h1><?php the_title(); ?></h1>

                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>