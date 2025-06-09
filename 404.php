<?php get_header(); ?> <div class="Body">
    <div class="Container">
        <div class="Page Row DX Nsp SdbN">
            <main>
                <section class="error-404 not-found fa-sad-cry">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'eroz' ); ?></h1>
                    </header>
                    <div class="page-content">
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'eroz' ); ?>
                        </p> <?php get_search_form(); ?>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div><?php get_footer();