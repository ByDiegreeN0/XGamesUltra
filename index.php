<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
        require('imports/FullHeadImport.php') // para importar el head
    ?>

    <link rel="icon" href="img/body/Icon/XGamesUltra.ico">

    <title>XgamesUltra | Consigue juegos para xbox clasica</title>
</head>

<body>

   <?php
    require('imports/nav.php') // para importar el nav
   ?>


    <div class="carousel">
        <div class="carousel-images">
            <img src="img/body/caca.jpg" alt="Image 1">
            <img src="img/body/wallpaperflare.com_wallpaper (1).jpg" alt="Image 2">
            <img src="img/body/caca.jpg" alt="Image 3">
        </div>
        <button class="carousel-button" id="prevBtn" onclick="prevSlide()"><i
                class="fa-solid fa-arrow-left"></i></button>
        <button class="carousel-button" id="nextBtn" onclick="nextSlide()"><i
                class="fa-solid fa-arrow-right"></i></button>
    </div>


    <div class="main-sec">
        <section class="main-info">
            <div class="main-info-img">
                <img src="img/games/Far Cry Instincts Frontal Por Patacho99 AMP - xbox.jpg" alt="">
            </div>

            <div class="main-info-container">
                <h3>XgamesUltra</h3>
                <p>¡Bienvenido a nuestra plataforma de descarga para juegos de Xbox Clásica! Aquí encontrarás una amplia
                    selección de títulos icónicos y populares para revivir la nostalgia de la era dorada de los
                    videojuegos. Desde aventuras épicas hasta emocionantes juegos de acción, nuestra colección está
                    cuidadosamente seleccionada para ofrecerte la mejor experiencia de juego retro. Explora, descubre y
                    revive los momentos inolvidables con nuestra biblioteca de juegos para Xbox Clásica. ¡Prepárate para
                    jugar como nunca antes!</p>
                <div class="main-info-container-button">
                    <a href=""><button class="recomendations-button ">Ver Catalogo</button></a>
                </div>
            </div>
        </section>
    </div>


    <section class="categories-container">
        <h2>Categorias</h2>

        <div class="categories-card-container">

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-hat-cowboy"></i>
                        <p>Aventura</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-car"></i>
                        <p>Carreras</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-futbol"></i>
                        <p>Deportes</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-gun"></i>
                        <p>Disparos</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-hand-fist"></i>
                        <p>Peleas</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content">
                    <div class="categories-card">
                        <p>15020</p>
                        <i class="fa-solid fa-skull"></i>
                        <p>Terror</p>
                    </div>
                </div>
            </a>


        </div>


    </section>

    <section class="recomendations-container">
        <h2>Juegos que te recomendamos</h2>

        <div class="card-container">

            <div class="card">
                <div class="card-content">
                    <img src="img/games/2005610223937_1.jpg" alt="">
                    <h3>Grand Thef Auto: San Andreas</h3>
                    <p>Aventura</p>
                    <div class="card-button">
                        <a href=""><button class="nav-categories-button">Conseguir</button></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <img src="img/games/2005610223937_1.jpg" alt="">
                    <h3>Grand Thef Auto: San Andreas</h3>
                    <p>Aventura</p>
                    <div class="card-button">
                        <a href=""><button class="nav-categories-button">Conseguir</button></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <img src="img/games/2005610223937_1.jpg" alt="">
                    <h3>Grand Thef Auto: San Andreas</h3>
                    <p>Aventura</p>
                    <div class="card-button">
                        <a href=""><button class="nav-categories-button">Conseguir</button></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <img src="img/games/2005610223937_1.jpg" alt="">
                    <h3>Grand Thef Auto: San Andreas</h3>
                    <p>Aventura</p>
                    <div class="card-button">
                        <a href=""><button class="nav-categories-button">Conseguir</button></a>
                    </div>
                </div>
            </div>



        </div>

        <div class="recomendations-button-container">
            <a href=""><button class="recomendations-button">Ver Más</button></a>
        </div>

    </section>


    <section class="categories-container utilities-main-container">
        <h2>Herramientas</h2>
        <p>Dale click a la tarjeta para descargar la herramienta</p>

        <div class="categories-card-container utilities-container">

            <a class="categories-card-link" href="">
                <div class="categories-card-content utilities-card">
                    <div class="categories-card">
                        <i class="fa-solid fa-file"></i>
                        <p>FlashFXP</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content utilities-card">
                    <div class="categories-card">
                        <i class="fa-solid fa-compact-disc"></i>
                        <p>UltraISO</p>
                    </div>
                </div>
            </a>

            <a class="categories-card-link" href="">
                <div class="categories-card-content utilities-card">
                    <div class="categories-card">
                        <i class="fa-solid fa-car"></i>
                        <p>Carreras</p>
                    </div>
                </div>
            </a>

        </div>


    </section>

    <?php 
        require('imports/Footer.php') // para importar el footer
    ?>


    <?php
        require('imports/FullJavascrptImport.php') // para importar los scripts
    ?>



</html>