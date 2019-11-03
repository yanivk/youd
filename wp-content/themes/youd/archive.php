<?php get_header(); ?>
    <h1>You'd</h1>
    
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
        <?php 
            if ( is_category() ) {
                $title = "Catégorie : " . single_tag_title( '', false );
            }
            elseif ( is_tag() ) {
                $title = "Étiquette : " . single_tag_title( '', false );
            }
            elseif ( is_search() ) {
                $title = "Vous avez recherché : " . get_search_query();
            }
            else {
                $title = 'Le Blog';
            }
        ?>
			<h2><?php echo $title; ?></h2>
            <?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>

	<?php endwhile; endif; ?>
    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_posts_link(); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_posts_link(); ?> 
        </div>
    </div>
    <aside class="site__sidebar">
        <?php get_template_part( 'parts/newsletter' ); ?>
        <ul>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </ul>
    </aside>
<?php get_footer(); ?>