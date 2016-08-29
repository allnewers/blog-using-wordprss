<section id="content">
    <div class="content-slider news-loop">
        <div class="title">
            <h3>أحدث المقالات</h3>
        </div>   
        <div class="block-content full-row" dir="ltr">
            <?php
                $posts=new WP_Query('orderby=last&showposts=5');
                while($posts->have_posts()):
                    $posts->the_post()
            ?>
            <article>
                <a href="<?php the_permalink() ?>" class="thumbnail"><?php the_post_thumbnail() ?></a>
                <h4><a href="#"><?php the_title(); ?></a></h4>
                 <p><?php echo only_20(get_the_content()); ?></p>
            </article>

            <?php
                endwhile;
            ?>                
        </div>
    </div>
</section>
                            
                