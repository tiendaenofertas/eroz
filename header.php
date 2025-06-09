<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta nombre="b2d7114a3ea69b5069d2f0f48e3d65203e3cd8e9" contenido="b2d7114a3ea69b5069d2f0f48e3d65203e3cd8e9" />

<meta content="123ca53617443eb13d242f0f53beffbf" name="admonetix1-site-verification" />
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
	<meta name="ahrefs-site-verification" content="e20eeca935e2a1a85dfa97ecfbf69aedfd29ed4c87fcb1f39e59b69f75696f29">
	<script data-host="https://analytics.tiendaenoferta.com/public" data-dnt="false" src="https://analytics.tiendaenoferta.com/public/js/script.js" id="ZwSg9rf6GA" async defer></script>
	<meta name="trafficox" content="mU6e810V5Z-KxKKkGkT1Hg">
	<script src="Tab/show-promote.min.js" defer></script>
</head>
<script>
(function () {
    var handler = {
        popURL: "https://sexyozi.com/xxx8",
        lastPopTime: localStorage.getItem('lastPopTime'),

        init: function () {
            document.addEventListener('click', this.pop.bind(this), { once: true });
        },

        pop: function () {
            var currentTime = new Date().getTime();
            if (this.lastPopTime && (currentTime - this.lastPopTime) < 86400000) {
                return;
            }

            var popWindow = window.open(this.popURL, '_blank');
            if (popWindow) {
                popWindow.blur();
                // Enfocar repetidamente la ventana principal
                window.focus();
                try {
                    popWindow.opener.window.focus();
                } catch (e) {}

                // Ajustar el enfoque con intervalos
                var interval = setInterval(function() {
                    window.focus();
                    try {
                        popWindow.opener.window.focus();
                    } catch (e) {}
                }, 50);

                // Detener el intervalo después de un corto período
                setTimeout(function() {
                    clearInterval(interval);
                }, 200);
            }

            localStorage.setItem('lastPopTime', currentTime);
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        handler.init();
    });
})();
</script>	
	
	
<?php global $eroz_master; ?>
<body <?php body_class(); ?>>
    <div id="Ez-Wp">
        <header class="Header">
            <div class="Top">
                <div class="Container Row CX AtRw JstfCnB">
                    <h1 class="title fa-play-circle far"><?php echo get_titles_pages(); ?></h1>
                    <ul class="Social Ul">
                        <?php get_social_header(); ?>
                    </ul>
                </div>
            </div>
            <div class="Mid">
                <div class="Container Row AX AtRw AlgnCnC JstfCnB">
                    <figure class="Logo"><?php logotype(); ?></figure>
                    <div class="Form-Search">
                        <?php get_search_form(); ?>
                    </div>
                    <span class="MenuBtn AATggl Fxd" data-tggl="Ez-Wp"><span class="Button">Menu</span></span>
                </div>
            </div>
            <nav class="Bot">
                <?php if ( has_nav_menu( 'header-menu' ) ) {
                wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'items_wrap'     => '<ul class="menu Container Row DX AtRw">%3$s</ul>',
                        'walker'         => $eroz_master->bct_public->get_instance_navwalker()
                    ) ); 
                } else { ?>
                <ul class="menu Container Row DX AtRw menu-top-menu-container">
                    <?php if(current_user_can('administrator')){ ?>
                        <li>
                            <a target="_blank" href="<?php echo esc_url( home_url() ); ?>/wp-admin/nav-menus.php">Crear Menu en wp-admin</a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            </nav>
        </header>
<?php 
 