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
                <h1 id="js-rotating" class="main-title">Kambarių nuoma Palangoje, Apgyvendinimas Palangoje, Atostogos Palangoje</h1>
            </div>
            <div class="cta-wrap">
                <a class="cta" href="tel:+37069316777">
                    <span>+370 693 16777</span>
                </a>
            </div>

            <div class="row">
                <div class="col">
                    <a href="https://testas.vladis.lt/gavno/index.html" class="wrapper">
                        <div class="watch">Žiūrėti</div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/img/guesthouse777.jpg" alt="Guest house 777">
                            <div class="info">
                                <h1>Guest house 777</h1>
                                <ul>
                                    <li>Pačioje Palangos širdyje</li>
                                    <li>Kaina nuo 45€ už numerį</li>
                                    <li>Wc ir dušas kiekviename numeryje</li>
                                    <li>Iki jūros 10 minučiu Pėščiomis</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="wrapper">
                        <div class="watch">Žiūrėti</div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/img/test.jpg" alt="Malūno vila 777">
                            <div class="info">
                                <h1>Basanke 777</h1>
                                <ul>
                                    <li>Pačioje Palangos širdyje</li>
                                    <li>Kaina nuo 45€ už numerį</li>
                                    <li>Wc ir dušas kiekviename numeryje</li>
                                    <li>Iki jūros 10 minučiu Pėščiomis</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="#" class="wrapper">
                        <div class="watch">Žiūrėti</div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/img/malunovila777.jpg" alt="Malūno vila 777">
                            <div class="info">
                                <h1>Malūno vila 777</h1>
                                <ul>
                                    <li>Pačioje Palangos širdyje</li>
                                    <li>Kaina nuo 45€ už numerį</li>
                                    <li>Wc ir dušas kiekviename numeryje</li>
                                    <li>Iki jūros 10 minučiu Pėščiomis</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="wrapper">
                        <div class="watch">Žiūrėti</div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/img/vipalanga777.jpg" alt="VIPalanga 777">
                            <div class="info">
                                <h1>VIPalanga 777</h1>
                                <ul>
                                    <li>Pačioje Palangos širdyje</li>
                                    <li>Kaina nuo 45€ už numerį</li>
                                    <li>Wc ir dušas kiekviename numeryje</li>
                                    <li>Iki jūros 10 minučiu Pėščiomis</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer(); 