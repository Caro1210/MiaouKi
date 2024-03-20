<?php

get_header();
?>

    <main id="primary" class="site-main">
        
    <section class="banner">
        <!-- add video-->
            <video class="banner__video" autoplay loop muted>
                <source src="<?php echo get_theme_file_uri() .'/assets/video.mp4'; ?>"
                    type="video/mp4">
            </video>
            <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
                alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section id="story" class="story">
            <h2>
                <span class="title__animation">L'</span>
                <span class="title__animation">histoire</span>
            </h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
           
            <!--add carrousel-->
            <article id="characters" class="characters__swiper">
                <h3>
                    <span class="title__animation">Les</span>
                    <span class="title__animation">Personnages</span>
                </h3>
                <?php echo get_template_part('template-parts/characters'); ?>
            </article>
                 
            <article id="place" class="story__place">
                <div>
                    <h3>
                        <span class="title__animation">Le</span>
                        <span class="title__animation">lieu</span>
                    </h3>

                    <div class="parallax-container">
                            <img class="clouds" src="<?php echo get_stylesheet_directory_uri().'/assets/images/clouds.png'; ?>" alt="nuages qui se déplacent"/>    
                    </div>
                            
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="studio-animation">
            <h2>
                <span class="title__animation">Studio</span>
                <span class="title__animation">Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
                </div>
        </section>
        
       
        <!-- add oscars nomination section & add flowers sunflower & orchid-->
        <section id="nomination" class="nomination">
        <div class="sunflower">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/Sunflower.png'; ?>"alt="paquerette">
            </div> 
            <div class="nomination_title">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/orange_background.png'; ?>"alt="arrière plan orange du titre des nominations">
                <h3>
                    <span class="title__animation">Fleurs d'oranger & chats errants</span>
                    <span class="title__animation">est nominé aux Oscars Short</span>
                    <span class="title__animation">Film Animated de 2022 !</span>
                </h3>
            </div> 
               <img class="oscars_logo" src="<?php echo get_theme_file_uri() . '/assets/images/oscars_logo.png'; ?>" alt="image de nomination aux Oscars 2022">          
            <div class="orchid">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?>"alt="orchidée bleue">
            </div> 
        </section>

              
    </main><!-- #main -->

<?php
get_footer();
