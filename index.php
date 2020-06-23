<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://kit.fontawesome.com/dfa8884d75.js" crossorigin="anonymous"></script>
    <title>Podcast</title>
</head>
<body>
    <header>
        <img src="Sources/logo.svg" alt="logo" class="logo">
        <nav>
            <div class="menu">
                <input type="checkbox" id="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
                <ul class="nav-items">                
                    <li><a href="#Episodios">EPISODIOS</a></li>
                    <li><a href="#Nosotros">NOSOTROS</a></li>
                    <li><a href="#Entrevistas">ENTREVISTAS</a></li>
                    <li><a href="#Temas">TÓPICOS</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="primera_seccion">
            <h1>Hello <s>world</s> pale blue dot <span>.</span></h1>

            <p id="mobile" >Un podcast que explora el mundo de la programación. Nuevos episodios, todos los jueves cada 15 días.</p>
            
            <p id="desktop">El portal de podcasts que explora el mundo de la programación y la tecnología. Nuevos episodios, todos los jueves cada 15 días.</p>
            
            <button>CONOCE MÁS</button>
        </section>

        <div class="listas_episodios" id="Episodios">
            <section class="background">

                <h2>Episodios</h2>

                <div class="lista">
                    
                    <iframe src="https://open.spotify.com/embed/episode/7AZZy2nJ4R9ZndHW0h2yxt?si=ZZZqwpbgTOKKjkVOq89RQA"  allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/episode/1ezdL2ivAGLwSE6Xbssxqt?si=Or_PpARlQOqbZ0KioLFGCg"  allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/episode/3cWta1iiQSfvrdHaCbLkSD?si=ZgYlQJCIS6SDdOMCL7gOYg"  allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/episode/31VyAQAwBiKoHVoYUCEzjQ?si=omQPNOwmSluuKcnB_cgREg"  allow="encrypted-media"></iframe>
                </div>

            </section>

        </div>

        <section class="tercera_seccion" id="Nosotros">
            <div class="phone">
                <img src="Sources/phone.png" alt="phone">
            </div>
            

            <div class="texto">
                <h2> De dónde venimos</h2>
                <p>
                    Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light.
                    <br>
                    <br>
                    Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.
                </p>
            </div>

        </section>

        <section class="cuarta_seccion" id="Entrevistas">
            <h2>Invitadas/os estelares</h2>

            <div class="imagenes">
                <img src="Sources/grace-hopper.png" alt="Grace Hopper">
                <img src="Sources/Katie-Bouman.png" alt="Katie Bouman">
                <img src="Sources/Margaret_Hamilton.png" alt="Margaret Hamilton">
                <img src="Sources/computer1950s.png" alt="Old computer">
                <img src="Sources/Computer.png" alt=" Computer operators">
                <img src="Sources/susan-kare.png" alt="Susan kare">
            </div>

        </section>

        <section class="quinta_seccion" id="Temas">
            <h2>Algunos de nuestros temas</h2>

            <div class="temas">
                <div class="orden">
                    <img src="Sources/icon1.svg" alt="Trabajo remoto">
                    <p>Trabajo remoto</p> 
                </div>
                <div class="orden">
                    <img src="Sources/icon2.svg" alt="Pensador">
                    <p>Repensando la programación</p>
                </div>
                <div class="orden">
                    <img src="Sources/icon3.svg" alt="Computador">
                    <p>Bases del código</p>
                </div>
                <div class="orden">
                    <img src="Sources/icon4.svg" alt="Base de datos">
                    <p>Seguridad informática</p>
                </div>
            </div>

        </section>

        <section class="sexta_seccion">
            
            <h2>¿Quieres las últimas novedades?</h2>
            
            <button>ESCUCHA LOS EPISODIOS</button>
        </section>
    </main>

    <footer>
        
        <p> &#169; 2020- Hello blue pale dot</p>

        <div class="enlaces">
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter" ></i></a>
            <a href="https://telegram.org/" target="_blank">  <i class="fab fa-telegram"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://open.spotify.com/settings/account" target="_blank"><i class="fab fa-spotify" ></i></a>
        </div>

    </footer>

</body>

</html>
