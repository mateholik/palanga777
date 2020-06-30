<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palanga777
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<!-- ======= Header ======= -->
<?php
if(!is_page_template( 'template-homepage.php' )) { ?>
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <?php
                $sidebar = get_field('sidebar');
                $socials = $sidebar['sicials'];
                if( $sidebar ): ?>
                    <img src="<?php echo esc_url( $sidebar['logo'] ); ?>" alt="logo" class="img-fluid rounded-circle" />
                    <h1 class="text-light"><?php echo $sidebar['title']; ?></h1>
                    <div class="social-links mt-3 text-center">
                        <?php
                        $rows = $sidebar['sicials'];
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                if($row['rodyti'] == 'Taip') { ?>
                                <a href="<?php echo $row['nuoroda']; ?>" target="_blank">
                                    <i class="bx <?php echo $row['ikonke']; ?>"></i>
                                </a>
                                <?php }
                            }
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <nav class="nav-menu">
                <ul>
                <?php

                if( have_rows('nav_linkas', 'option') ):
                    $count = 0;
                    while ( have_rows('nav_linkas', 'option') ) : the_row();
                        $prideti_linka = get_sub_field('prideti_linka');
                        $homepage = $count == 0 ? 'to-homepage': 'lox';

                        ?>
<!--                        <li class="to-homepage"><a href=""><i class="bx bx-home"></i> <span>GRĮŽTI</span></a></li>-->
                        <li class="<?php echo $homepage; ?>">
                            <a href="<?php echo $prideti_linka['nuoroda']; ?>">
                                <i class="bx <?php echo $prideti_linka['ikonke']; ?>"></i>
                                <span><?php echo $prideti_linka['tekstas']; ?></span>
                            </a>
                        </li>
                    <?php
                        $count++;
                    endwhile;
                endif;
                ?>
                </ul>
<!--                <ul>-->
<!--                    <li class="to-homepage"><a href=""><i class="bx bx-home"></i> <span>GRĮŽTI</span></a></li>-->
<!--                    <li><a href="#about"><i class="bx bx-user"></i> <span>Apie</span></a></li>-->
<!--                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Nuotraukos</a></li>-->
<!--                    <li><a href="#contact"><i class="bx bx-envelope"></i> Kontaktai</a></li>-->
<!--                </ul>-->
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->
<?php } ?>

