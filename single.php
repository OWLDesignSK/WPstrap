<?php
/**
 * Created by PhpStorm.
 * User: Martina W
 * Date: 21. 4. 2015
 * Time: 0:01
 */

get_header(); ?>


        <h2 class="page-header"><?php the_title(); ?></h2>
        <div class="row">

            <div class="col-md-12">
                <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post();?>

                        <div class="post">


                            <?php the_content(); ?>
                        </div>


                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </div>




<?php get_footer(); ?>