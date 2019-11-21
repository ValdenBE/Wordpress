<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="wp-content/themes/CHIMMO/style.css">

    <title>CHIMMO</title>
</head>

<body>

    <div class="container-fluid">

        <div class="header-container">
            <img src="<?php echo get_field('bandeau_image')['sizes']['home_top']; ?>" class="bg">
            <div class="container ninety-five-vh xs-fifty-vh">

                <header class="header clearfix">
                    <div class="logo-container">
                        <a href="javascript:;">
                            <img src="wp-content/themes/CHIMMO/images/icons/logo.svg" alt="Logo CHIMMO" class="logo"
                                 onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/logo.png'">
                        </a>
                    </div>

                    <nav class="menu-container">
                        <ul class="menu">

                            <li class="menu-item home">
                                <a href="<?php the_permalink(6); ?>" class="active">
                                    <img src="wp-content/themes/CHIMMO/images/icons/home-minimal.svg" alt="Home"
                                         onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/home-minimal.png'">
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="<?php the_permalink(68); ?>">À Vendre</a>
                            </li>

                            <li class="menu-item">
                                <a href="<?php the_permalink(199); ?>">La Région</a>
                            </li>

                            <li class="menu-item">
                                <a href="<?php the_permalink(315); ?>">À Propos</a>
                            </li>

                            <li class="menu-item">
                                <a href="<?php the_permalink(331); ?>">Nos Projets</a>
                            </li>

                            <li class="menu-item">
                                <a href="<?php the_permalink(190); ?>">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="phone-contact-button">
                        <a href="tel:+3243519298">
                            <span class="number">
                                +32 (0)4 351 92 98
                            </span>
                            <img src="wp-content/themes/CHIMMO/images/icons/ic_local_phone_48px.svg" alt="Call"
                                 onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/ic_local_phone_48px.png'">
                        </a>
                    </div>

                    <div class="show-menu-button-container">
                        <a href="javascript:;" class="show-menu-button">
                            <div class="show-menu-text">
                                Menu
                            </div>
                            <div class="show-menu-icon clearfix">
                                <span class="menu-bar bar-1"></span>
                                <span class="menu-bar bar-2"></span>
                                <span class="menu-bar bar-3"></span>
                            </div>
                        </a>
                    </div>

                </header>

                <div class="site-advertise-container clearfix">

                    <div class="site-title-container">
                        <p class="site-title"><?php the_field('bandeau_titre') ?></p>
                        <p class="address"><?php the_field('bandeau_soustitre') ?></p>
                    </div>

                    <a href="javascript:;" class="button-wrapper">
                        <div class="button-container dark-button">
                            <div class="icon-container">
                                <img src="wp-content/themes/CHIMMO/images/icons/arrow-right.svg" alt="Here ➡"
                                    onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/arrow-right.png'">
                            </div>
                            <div class="link-text">
                            <?php 
  $group = get_field('bouton');
$group = $group['bouton'];
  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

  <a class="link-text" href="<?php echo $url ?>" <?php echo $target; ?> >
      <p><?php echo $group['title']; ?></p>
  </a>

  <?php endif; ?>
                            </div>
                        </div>
                    </a>

                </div>


                <div class="circles-container clearfix">
                    <div class="circle header-circle light-blue">
                        <p class="circle-content"><span class="remaining-apartments"><?php the_field('bandeau_past_pastg') ?></p>
                    </div>

                    <div class="circle header-circle white">
                        <p class="circle-content">
                        <?php the_field('bandeau_past_pastd') ?>
                        </p>
                    </div>
                </div>

                <div class="scroll-down-button-container">
                    <a href="javascript:;" class="scroll-down-button">
                        <img class="scroll-down-icon" src="wp-content/themes/CHIMMO/images/icons/arrow-right2.svg"
                            alt="Scroll down ⬇️"
                            onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/arrow-right2.png'">
                    </a>
                </div>

            </div>
        </div>

        <div class="container">
            <main class="main" id="first-main">

                <div class="row">
                    <div class="col-18 mon-text">
                        <div class="texte">
                            <div class="titre1">
                                <p><?php the_field('apropos_sur_titre') ?></p>
                            </div>
                            <div class="titre2">
                                <p class="part1"><?php the_field('apropos_titre') ?></p>
                            </div>
                            <div class="photo-container">
                                <img src="<?php echo get_field('apropos_image')['sizes']['apropos_img']; ?>"
                                    alt="Family together in an apartment">
                            </div>
                            <div class="texte-container">
                                <div class="row liste">
                                    <div class="col-xs-18 text1">
                                        <?php the_field('apropos_texte') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="learn-more-button-container">
                    <a class="link" href="javascript:;">
                        <div class="inline-block arrow-icon-container">
                            <img src="wp-content/themes/CHIMMO/images/icons/arrow-right2.svg"
                                onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/arrow-right2.png'">
                        </div>
                        <div class="inline-block">
                            <p>En savoir plus</p>
                        </div>
                    </a>
                </div>

                <div class="i1600">
                    <img class="image" src="<?php echo get_field('apropos_batimage')['sizes']['bati_img']; ?>">
                </div>

                <div class="description-cards-container">
                    <div class="row">

                        <div class="col-9 col-xs-18 description-card">
                            <p class="card-title"><?php the_field('spec_titre') ?></p>
                            <ul class="list">
                                <div class="card-icon-container">
                                    <img class="card-icon" src="<?php echo get_field('spec_icone_left')['sizes']['icon']; ?>">
                                </div>
                                        <?php
                                            if( have_rows('spec_liste') ):
                                                while ( have_rows('spec_liste') ) : the_row();
                                                    echo '<li class="list-item"><p>',the_sub_field('texte'),'</p></li>';
                                                endwhile;
                                        else :
                                        endif;
                                        ?>
                            </ul>
                        </div>

                        <div class="col-9 col-xs-18 description-card">
                            <p class="card-title"><?php the_field('spec_titre_copie') ?></p>
                            <ul class="list">
                                <div class="card-icon-container">
                                    <img class="card-icon" src="<?php echo get_field('spec_icone_right')['sizes']['icon']; ?>">  
                                </div>
                                <?php
                                            if( have_rows('spec_liste_copie') ):
                                                while ( have_rows('spec_liste_copie') ) : the_row();
                                                    echo '<li class="list-item"><p>',the_sub_field('texte'),'</p></li>';
                                                endwhile;
                                        else :
                                        endif;
                                        ?>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="contact-us-container clearfix">
                    <p class="contact-us-text">
                        Vous souhaitez <span class="light-blue">plus d'informations ?</span>
                    </p>
                    <a href="javascript:;" class="button-wrapper">
                        <div class="button-container white clearfix">
                            <div class="icon-container">
                                <img src="wp-content/themes/CHIMMO/images/icons/arrow-right2.svg" alt="Here ➡"
                                    onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/arrow-right2.png'">
                            </div>
                            <div class="link-text">
                                <p>Contactez-nous !</p>
                            </div>
                        </div>
                    </a>
                </div>
            </main>
        </div>
    </div>


    <div class="container-fluid">
        <div class="footer-container">
            <div class="container">

                <footer class="clearfix">
                    <div class="row">
                        <div class="logo-container">
                            <a href="#">
                                <img class="logo" src="wp-content/themes/CHIMMO/images/icons/logo-footer.svg">
                            </a>
                        </div>

                        <ul class="footer-nav">
                            <li class="home-icon-container">
                                <a href="<?php the_permalink(6); ?>" class="active">
                                    <img class="home-minimal"
                                         src="wp-content/themes/CHIMMO/images/icons/home-minimal.svg"
                                         onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/home-minimal.png'">
                                </a>
                            </li>

                            <li>
                                <a href="<?php the_permalink(68); ?>">À Vendre</a>
                            </li>

                            <li>
                                <a href="<?php the_permalink(199); ?>">La Région</a>
                            </li>

                            <li>
                                <a href="<?php the_permalink(315); ?>">À Propos</a>
                            </li>

                            <li>
                                <a href="<?php the_permalink(331); ?>">Nos Projets</a>
                            </li>

                            <li>
                                <a href="<?php the_permalink(190); ?>">Contact</a>
                            </li>
                        </ul>

                        <div class="footer-copy-right clearfix">
                            <a class="copyright-text" href="javascript:;">
                                Respect vie privee-contact
                            </a>
                            <a class="website-by" href="javascript:;">
                                Website by
                                <img src="wp-content/themes/CHIMMO/images/becode-logo-white.png" class="becode-logo"
                                     onerror="this.onerror=null; this.src='wp-content/themes/CHIMMO/images/icons/png-fallback/becode-logo-white.png'">
                            </a>
                        </div>

                    </div>
                </footer>

            </div>
        </div>
    </div>

    <script src="wp-content/themes/CHIMMO/js/jquery-3.4.1.min.js">
    </script>
    <script src="wp-content/themes/CHIMMO/js/main.js">
    </script>
</body>

</html>