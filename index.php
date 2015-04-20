<?php get_header(); ?>


<h2 class="page-header">Home page</h2>
<div class="row">

    <div class="col-md-10">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>

                <div class="<?php post_class();?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>

                    <?php the_content(); ?>
                    <ul class="pagination">
                        <li><?php the_time('F jS Y'); ?></li>
                        <li>Posted in <?php the_category(', ');?></li>
                        <li><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></li>
                    </ul>
                </div>

            <?php endwhile; ?>

            <div class="pagination">
                <ul>
                    <li class="older"> <?php next_post_link('Older');?> </li>
                    <li class="newer"> <?php previous_post_link('Newer');?> </li>
                </ul>
            </div>

        <?php else : ?>

            <h2>NOTHING</h2>

        <?php endif; ?>

    </div>
    <div class="col-md-2">
        <?php get_sidebar(); ?>
    </div>
</div>



<?php get_footer(); ?>

