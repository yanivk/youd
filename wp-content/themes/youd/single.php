<?php get_header(); ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <?php if ( has_post_thumbnail() ): ?>
        <div class="post__thumbnail">
            <?php the_post_thumbnail('square'); ?>
        </div>
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>


        <div class="post__meta">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
            <p>
                Publié le <?php the_date(); ?>
                par <?php the_author(); ?>
                Dans la catégorie <?php the_category(); ?>
                Avec les étiquettes <?php the_tags(); ?>
            </p>
            <?php comments_template(); // Par ici les commentaires ?>
        </div>
    </article>

    <?php endwhile; endif; ?>
<?php get_footer(); ?>