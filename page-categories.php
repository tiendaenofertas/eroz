<?php 
/* template name: Categories Page */
get_header(); ?> 

<div class="Body">
    <div class="Container precook"> <?php get_breadcrumb(); ?> <div
            class="Page Row DX Nsp <?php echo eroz_position_sidebar(); ?>">
            <main>
                <section class="widget recommended_categories">
                    <h3 class="widget-title"><?php the_title(); ?></h3>
                    <section class="Eroz-Thumbs List">
                        <?php $categories = get_terms( 'category', array('orderby'    => 'name','order'     => 'ASC','hide_empty' => 0,) ); 
                        if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
                            foreach ( $categories as $category ) { ?>
                                <article class="post category">
                                    <header class="entry-header"> <a
                                            href="<?php echo esc_url( get_term_link( $category ) ); ?>">
                                            <h2 class="entry-title"><?php echo $category->name; ?></h2>
                                            <figure class="post-thumbnail"> <?php if(get_image_category($category->term_id)){ ?>
                                                <?php echo get_image_category($category->term_id); ?> <?php } else { ?> <img
                                                    loading="lazy" src="<?php echo EROZ_DIR_URI; ?>public/img/post-noimg.png"
                                                    alt="<?php echo $category->name; ?>"> <?php } ?> </figure>
                                        </a> </header>
                                </article> 
                            <?php } 
                        } ?> 
                    </section>
                </section>
            </main>
            <?php get_template_part( 'public/templates/sidebar' ); ?>
        </div>
    </div>
</div><?php get_footer(); ?>