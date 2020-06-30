<?php
/**
 * The template for displaying the homepage.
 * Template Name: Homepage
 *
 */
get_header();
?>



<div class="loader"></div>

<section class="homepage">
    <video autoplay muted loop class="video">
        <source src="<?php echo get_template_directory_uri(); ?>/custom-assets/video/juraHD.mp4" type="video/mp4">
    </video>
    <div class="container container--homepage">
        <div style="width: 100%;">
            <div class="main-title-wrap">
                <h1 id="js-rotating" class="main-title">
                    <?php
                    if( have_rows('besikeiciancios_frazes') ):
                        $field_object = get_field_object('besikeiciancios_frazes');
                        $total_rows = count($field_object['value']);
                        // loop through the rows of data
                        $counter = 0;

                        while ( have_rows('besikeiciancios_frazes') ) : the_row();
                            $counter++;
                            if($counter != $total_rows) {
                                echo get_sub_field('fraze') . ',';
                            } else {
                                echo get_sub_field('fraze');
                            }
                        endwhile;
                    endif;
                    ?>
                </h1>
            </div>
            <div class="cta-wrap">
                <a class="cta" href="tel:<?php echo str_replace(' ', '', get_field('numeris')); ?>7">
                    <span><?php the_field('numeris'); ?></span>
                </a>
            </div>

            <div class="row">

                <?php if( have_rows('postas') ):
                    while( have_rows('postas') ): the_row();
                        $kontentas = get_sub_field('kontentas');
                    ?>
                        <div class="col">
                            <a href="<?php echo $kontentas['posto_nuoroda']; ?>" class="wrapper">
                                <div class="watch"><?php echo $kontentas['ziureti']; ?></div>
                                <div class="card">
                                    <img src="<?php echo $kontentas['paveiksliukas']; ?>" alt="Guest house 777">
                                    <div class="info">
                                        <h1><?php echo $kontentas['taitlas']; ?></h1>

                                        <?php
                                        $rows = $kontentas['punktas'];
                                        if( $rows ) {
                                            echo '<ul>';
                                            foreach( $rows as $row ) {
                                                $prideti = $row['prideti_punkta'];
                                                echo '<li>';
                                                echo $prideti;
                                                echo '</li>';
                                            }
                                            echo '</ul>';
                                        } ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php
get_footer(); 