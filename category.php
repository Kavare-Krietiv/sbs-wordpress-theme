<?php
/**
 * A Simple Category Template
 */

get_header(); ?>

    <div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px">

        <?php
        if (have_posts()) : ?>

            <?php while (have_posts()) :the_post(); ?>
                <div class="card" style="margin-top: 10px">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url("smallest"); ?>" class="img-thumbnail">
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <h5><a href="<?php the_permalink() ?>" rel="bookmark"
                                       title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <small><?php the_time('F jS, Y') ?></small>

                                <p style="font-size: 10px;color: #E3E3E2">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php

        else: ?>
            <p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>
    </div>
<?php get_footer(); ?>