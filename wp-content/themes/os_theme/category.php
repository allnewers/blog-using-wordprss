<?php get_header(); ?>


<section id="content">
    <div id="posts">
        <div class="title">
            <h3><?php single_cat_title() ?></h3>
        </div>
        <div class="posts-loop">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <article>
                    <a href="#" class="thumbnail"><?php the_post_thumbnail() ?></a>
                    <div class="post-content">
                        <h3><a href="#"><?php the_title() ?></a></h3>
                        <p><?php echo only_20(get_the_content()); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn">اقراء المزيد</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>

</section>

<?php
get_sidebar();


get_footer();
?>
