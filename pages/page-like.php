<?php 
/*template name: Most Popular*/
get_header(); ?> 
<div class="Body">
    <div class="Container precook"> <?php get_breadcrumb(); ?> 
        <div class="Page Row DX Nsp <?php echo eroz_position_sidebar(); ?>">
            <main>
                <section class="Eroz-Thumbs List">
                    <div class="page-top">
                        <h3 class="page-header"><?php the_title(); ?></h3>
                    </div>
                    <?php $ads_home_loop = get_option( 'eroz_ads_home_loop');
                    if($ads_home_loop){ ?>
                    <div class="DvrCn">
                        <div class="Dvr-B"> <?php echo $ads_home_loop; ?> </div>
                    </div> <?php } ?>
                    <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                                'post_type'           => 'post',
                                'paged'               => $paged,
                                'posts_per_page'      => get_option( 'posts_per_page' ),
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => true,
                                'meta_key'            => 'like',
                                'orderby'             => 'meta_value_num',
                                'order'               => 'DESC' 
                            );
                    $wp_query = new WP_Query( $args );
                    if ( $wp_query->have_posts() ) : 
                        while ( $wp_query->have_posts() ) : 
                            $wp_query->the_post(); 
                            get_template_part( 'public/templates/loop', 'principal' ); 
                        endwhile; ?>
                        <div class="numeration">
                            <nav class="navigation pagination" role="navigation"> <?php eroz_pagination(); ?> </nav>
                        </div> 
                    <?php else: ?> 
                        <div> <?php _e('No hay articulos', 'eroz'); ?> </div>
                    <?php endif; wp_reset_postdata();  ?>
                </section>
            </main> 
            <?php get_template_part( 'public/templates/sidebar' ); ?>
        </div>
    </div>
</div><?php get_footer(); ?>