<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">

    <title>CHIMMO</title>
</head>

<body>

    <div class="container-fluid">

        <div class="header-container apropos">
            <img src="<?php echo get_field('banniere_wp')['sizes']['apropos_head']; ?>" class="bg">
            <div class="container ninety-five-vh xs-fifty-vh aproposimg">
                <header class="header dark clearfix">
                    <div class="logo-container">
                        <a href="javascript:;">
                            <img src="<?php echo get_template_directory_uri() ?>/images/icons/logo-dark.svg" alt="Logo CHIMMO" class="logo"
                                onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/logo.png'">
                        </a>
                    </div>

                    <nav class="menu-container">
                        <ul class="menu">

                            <li class="menu-item home">
                                <a href="<?php the_permalink(6); ?>" class="active">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/icons/home-minimal-dark.svg" alt="Home"
                                        onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/home-minimal.png'">
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
                            <img src="<?php echo get_template_directory_uri() ?>/images/icons/ic_local_phone_48px.svg" alt="Call"
                                onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/ic_local_phone_48px.png'">
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
                <div class="scroll-down-button-container">
                        <a href="javascript:;" class="scroll-down-button">
                            <img class="scroll-down-icon" src="<?php echo get_template_directory_uri() ?>/images/icons/arrow-right2.svg"
                                alt="Scroll down ⬇️"
                                onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/arrow-right2.png'">
                        </a>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-7 col-sm-18 col-xs-18">
                    <div class="titre2 i-inline"><?php echo get_field('titre') ?></div>
                    <div class="broch">
                    <div class="choicebox">
                        <select class='select' name="Prix">
                            <option value="default">Prix jusque :</option>
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                        </select>
                        <select class='select' name="chambres">
                            <option value="default">Chambres (min.) :</option>
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                        </select> 
                        </div>
                        <img src="<?php echo get_field('image_brochure')['sizes']['brochure']; ?>" class="brochure">
                        <div class="btn">
                        <?php 
                            $group = get_field('bouton');
                            if($group['title']) :
                            $url = $group['url'];
                            $target = 'target="_blank" rel="noopener"';
                            if( $group['choice'] == 'pagelink' ) {
                                $url = $group['page_link'];
                                $target = '';
                            } ?>
                            <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
                                <div class="icon-container">
                                    <div class="icon"><?php get_template_part('template-parts/icons/arrows/arrow-right2') ?></div>
                                </div>
                                <p><?php echo $group['title']; ?></p>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-11 text1 col-sm-18 col-xs-18">
                    <div class="flex-content">
                    </div>
                </div>
        </div>
        
        <main class="main" id="first-main">
                <div class="contact-us-container clearfix">
                    <p class="contact-us-text">
                        Vous souhaitez <span class="light-blue">plus d'informations ?</span>
                    </p>
                    <a href="javascript:;" class="button-wrapper">
                        <div class="button-container white clearfix">
                            <div class="icon-container">
                                <img src="<?php echo get_template_directory_uri() ?>/images/icons/arrow-right2.svg" alt="Here ➡"
                                    onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/arrow-right2.png'">
                            </div>
                            <div class="link-text">
                                <p>Contactez-nous !</p>
                            </div>
                        </div>
                    </a>
                </div>
            </main>
    </div>


    <div class="container-fluid">
        <div class="footer-container">
            <div class="container">
                <footer class="clearfix">
                    <div class="row">
                        <div class="logo-container">
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/icons/logo-footer.svg">
                            </a>
                        </div>

                        <ul class="footer-nav">
                            <li class="home-icon-container">
                                <a href="<?php the_permalink(6); ?>">
                                    <img class="home-minimal"
                                        src="<?php echo get_template_directory_uri() ?>/images/icons/home-minimal.svg"
                                        onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/home-minimal.png'">
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
                                <img src="<?php echo get_template_directory_uri() ?>/images/becode-logo-white.png" class="becode-logo"
                                    onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() ?>/images/icons/png-fallback/becode-logo-white.png'">
                            </a>
                        </div>

                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.4.1.min.js">
    </script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js">
    </script>
</body>

</html>