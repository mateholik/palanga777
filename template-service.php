<?php
/**
 * The template for displaying the homepage.
 * Template Name: Service
 *
 */
get_header();
?>



<div class="loader"></div>

    <main id="main">

        <!-- ======= About Section ======= -->
        <?php
        $sidebar = get_field('sidebar');
        $punktai = get_field('apie');
        $punktaiList = $punktai['punktai'];
        ?>
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2><?php echo $sidebar['title']; ?></h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <style>
                            .fix {
                                max-width: 100%;
                                height: auto;
                            }
                        </style>
                        <?php echo wp_get_attachment_image( $punktai['image'], 'medium_large',"", ["class" => "fix"] );
                        ; ?>
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3><?php echo $punktai['subtitle']; ?></h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="d-flex flex-wrap">
                            <?php
                            $rows = $punktaiList;
                            if( $rows ) {
                                foreach( $rows as $row ) {
                                    $item = $row['punktas'];
                                    echo '<li><i class="icofont-rounded-right"></i>'. $item . '</li>';
                                }
                            }
                            ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <p><?php echo $punktai['text']; ?></p>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">
                <?php
                $kodelMes = get_field('kodel_mes');
                ?>
                <div class="section-title">
                    <h2><?php echo $kodelMes['taitlas']; ?></h2>
                </div>

                <div class="row no-gutters">
                    <?php
                    if( $kodelMes['blokelis'] ) {
                        foreach( $kodelMes['blokelis'] as $row ) {
                            ?>
                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="<?php echo $row['ikonke']; ?>"></i>
                                    <span data-toggle="counter-up"><?php echo $row['skaicius']; ?></span>
                                    <p><?php echo $row['tekstas']; ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Facts Section -->




        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <?php
                $galerijosSekcija = get_field('galerijos_sekcija');

                ?>

                <div class="section-title">
                    <h2><?php echo $galerijosSekcija['sekcijos_pavadinimas']; ?></h2>
                </div>

                <?php
//                var_dump($galerijosSekcija['konkreti_galerija']); exit;
                ?>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <?php
                                $rows = $galerijosSekcija['konkreti_galerija'];
                                $count = 0;
                                if( $rows ) {
                                    foreach( $rows as $row ) {?>
                                        <li data-filter=".filter-<?php echo $count; ?>"><?php echo $row["galerijos_pavadinimas"]; ?></li>
                                        <?php
                                    $count ++;
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>


                <!--                <div class="row">-->
                <!--                    <div class="col-lg-12 d-flex justify-content-center">-->
                <!--                        <ul id="portfolio-flters">-->
                <!--                            <li data-filter="*" class="filter-active">Visos</li>-->
                <!--                            <li data-filter=".filter-kiemas">Kiemas</li>-->
                <!--                            <li data-filter=".filter-dvivietis">Dvivietis</li>-->
                <!--                            <li data-filter=".filter-trivietis">Trivietis</li>-->
                <!--                            <li data-filter=".filter-keturvietis">Keturvietis</li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="row portfolio-container">
                    <?php
                    $rows = $galerijosSekcija['konkreti_galerija'];
                    if( $rows ) {
                        $count = 0;
                        foreach( $rows as $row ) {
                            $images = $row['nuotraukos'];
                            foreach( $images as $image ):?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $count; ?>">
                                    <div class="portfolio-wrap">
                                        <img src="<?php echo esc_url($image['sizes']['gallery_thumb']); ?>" class="img-fluid" alt="<?php echo $image['filename']; ?>">
                                        <div class="portfolio-links">
                                            <a href="<?php echo $image['url']; ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $image['filename']; ?>"><i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                            $count ++; ?>
<!--                            Kita galerija-->
                            <?php
                        }
                    } ?>

                </div>
            </div>
            </div>
        </section><!-- End Portfolio Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <?php
                $kontaktai = get_field('kontaktai');
                if( $kontaktai ): ?>
                    <div class="section-title">
                        <h2><?php echo $kontaktai['sekcijos_pavadinimas']; ?></h2>
                    </div>

                <?php endif; ?>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <?php
                            if( $kontaktai['blokelis'] ):
                                $rows = $kontaktai['blokelis'];
                                if( $rows ) {
                                    foreach( $rows as $row ) {
                                       ?>
                                        <div class="address">
                                            <i class="<?php echo $row['ikonke']; ?>"></i>
                                            <h4><?php echo $row['taitlas']; ?></h4>
                                            <?php echo $row['textas']; ?>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            <?php endif; ?>
                            <style>
                                .mapsas p {
                                    margin: 0!important;
                                    padding: 0!important;
                                }
                            </style>
                            <div class="mapsas">
                                <?php echo $kontaktai['zemelapis']; ?>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <?php
                        $contact_form = $kontaktai['contact_form_shortcode'] ;
                        echo do_shortcode($contact_form)
                        ?>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
<?php
get_footer();