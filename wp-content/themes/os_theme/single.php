<?php
get_header();
the_post();
?>



<section id="content">
    <article id="post">
        <header>
            <h1><?php the_title(); ?></h1>
            <div class="info">
                <span><i class="fa fa-clock-o"></i> <?php the_time('Y-m-d h:i:s'); ?></span>
                <span><i class="fa fa-pencil"></i>
                    <?php the_author(); ?>
                </span>
                <span><i class="fa fa-tag"></i>
                    <?php the_category(',') ?>
                </span>
            </div>
        </header>

        <figure>
            <?php the_post_thumbnail() ?>
        </figure>

        <section id="post-content">
            <p><?php the_content(); ?></p>
        </section>
        <div class="tags">
            <span>كلمات ذات صلة</span>
            <a href="#">آيفون</a>
            <a href="#">iOS</a>
            <a href="#">آيباد</a>
            <a href="#">آيبود تتش</a>
        </div>

    </article>


</section>



<?php
get_sidebar();


get_footer();
?>

