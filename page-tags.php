<?php 
/*template name: Tags Page*/
get_header(); ?> 
<div class="Body">
    <div class="Container precook"> <?php get_breadcrumb(); ?>
        <div class="Page Row DX Nsp <?php echo eroz_position_sidebar(); ?>">
            <main>
                <section class="widget">
                    <h3 class="widget-title"><?php the_title(); ?></h3> 
                    <section class="tagcloud list">
                        <?php $tags = get_terms( 'post_tag', array( 'orderby'    => 'name', 'order'     => 'ASC', 'hide_empty' => 0, ) );
                        if ( ! empty( $tags ) && ! is_wp_error( $tags ) ){                                foreach ( $tags as $tag ) { ?>
                        <a href="<?php echo esc_url( get_term_link( $tag ) ); ?>"><?php echo $tag->name; ?></a>
                        <?php } } ?>
                    </section>
                </section>
            </main>
            <?php get_template_part( 'public/templates/sidebar' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>