<?php 
/* template name: Pornstar Page */
get_header(); ?> 
    <div class="Body">
        <div class="Container precook"> 
            <?php get_breadcrumb(); ?> 
            <div class="Page Row DX Nsp <?php echo eroz_position_sidebar(); ?>">
                <main>
                    <section class="widget recommended_categories">
                        <h3 class="widget-title"><?php the_title(); ?></h3>
                        <section class="Eroz-Thumbs List">
                            <?php 
                            $number           = get_option( 'pornstar_page_number', false );
                            if(!$number) $number = 10;
                            $posts_per_page   = $number;
                            $page             = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $offset           = ( $page - 1 );
                            $terms            = get_terms(array( 'taxonomy'   => 'toro_pornstar', 'orderby'    => 'name', 'order'      => 'ASC', 'hide_empty' => 0, ) );
                            for( $i = $offset * $posts_per_page; $i < ( $offset + 1 ) * $posts_per_page; $i++ ) { if( isset($terms[$i]) ){ $term = $terms[$i]; } else { $term = null; } 
                                    if($term!=null){  ?>
                                        <article class="post stars">
                                            <header class="entry-header"> <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                                    <h2 class="entry-title"><?php echo $term->name; ?></h2>
                                                    <figure class="post-thumbnail"> <?php if(get_image_pornstar($term->term_id)){ ?>
                                                        <?php echo get_image_pornstar($term->term_id); ?> <?php } else { ?> <img
                                                            loading="lazy"
                                                            src="<?php echo EROZ_DIR_URI; ?>public/img/post-noimg-stars.png"
                                                            alt="<?php echo $term->name; ?>"> <?php } ?> </figure>
                                                </a> </header>
                                        </article> 
                                    <?php } 
                                } ?> 
                            <nav class="nav-links"><?php pagination_pornstar(); ?></nav>
                        </section>
                    </section>
                </main> 
                <?php get_template_part( 'public/templates/sidebar' ); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>