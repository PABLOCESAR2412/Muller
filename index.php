<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siente el ritmo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    * {
        font-family: Consolas, monospace;
    }
</style>

<body>

    <header class="container-fluid py-2">
        <nav class="navbar bg-dark navbar-expand-lg rounded-2" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Siente el ritmo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Generos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pop Latino</a></li>
                                <li><a class="dropdown-item" href="#">Reggaetón</a></li>
                                <li><a class="dropdown-item" href="#">Música Urbana</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Artistas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pop Latino</a></li>
                                <li><a class="dropdown-item" href="#">Reggaetón</a></li>
                                <li><a class="dropdown-item" href="#">Música Urbana</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">

        <section class="row">
            <div class="col-md-6">
                <img src="img/logo.svg" alt="Imagen principal" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-6">
                <h2>"Tu blog de música en español"</h2><br>
                <p>Un blog que te conecta con la mejor música en español
                    <br><br>
                    ¿Eres un amante de la música en español? ¿Te apasionan los ritmos latinos, las letras profundas y
                    las melodías contagiosas? Si es así, entonces Siente el ritmo es el blog perfecto para ti.
                    <br><br>
                    En Siente el ritmo, encontrarás:
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">- Reseñas de álbumes nuevos: Analizamos en profundidad los últimos lanzamientos de tus artistas favoritos,
                        tanto consagrados como emergentes.</li>
                    <li class="list-group-item">- Entrevistas exclusivas: Conversamos con músicos de diversos géneros y estilos, para descubrir sus historias,
                        sus procesos creativos y sus planes para el futuro.</li>
                    <li class="list-group-item">- Noticias de la industria: Te mantenemos informado sobre las últimas noticias y tendencias del mundo de
                        la música en español.</li>
                    <li class="list-group-item">- Listas de reproducción temáticas: Creamos listas de reproducción para que descubras nuevos artistas,
                        redescubras clásicos y disfrutes de la música que te gusta en cualquier momento.</li>
                    <li class="list-group-item">- Opinión y análisis: Compartimos nuestras reflexiones sobre temas relacionados con la música, la cultura
                        y la sociedad.</li>
                    <li class="list-group-item">- Y mucho más: Además, encontrarás reportajes, crónicas de conciertos, concursos, sorteos y otras sorpresas.</li>
                </ul>
                <br>
                <a href="#" class="btn btn-dark">Leer más</a>
            </div>
        </section>

        <section class="row mt-4">
            <div class="col h-250">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pop Latino</h5>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Reseñas de los últimos álbumes de pop latino más esperados.</li>
                            <li class="list-group-item">Entrevistas con artistas pop latino emergentes.</li>
                            <li class="list-group-item">Listas de reproducción con las mejores canciones pop latinas del momento.</li>
                            <li class="list-group-item">Análisis de las tendencias del pop latino actual.</li>
                            <li class="list-group-item">Artículos de opinión sobre la influencia del pop latino en la cultura popular.</li>
                        </ul>
                        <hr>
                        <div class="items-center">
                            <img class="rounded mx-auto d-block img-thumbnail" src="https://media.tenor.com/XhnO4Y0MfqAAAAAM/reina-del-pop-latino-queen-of-latin-pop.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reggaetón</h5>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Reseñas de los últimos álbumes de reggaetón más exitosos.</li>
                            <li class="list-group-item">Entrevistas con productores y compositores de reggaetón.</li>
                            <li class="list-group-item">Listas de reproducción con las mejores canciones de reggaetón para diferentes ocasiones.</li>
                            <li class="list-group-item">Análisis de la evolución del reggaetón a lo largo de los años.</li>
                            <li class="list-group-item">Artículos de opinión sobre el impacto del reggaetón en la sociedad.</li>
                        </ul>
                        <hr>
                        <div class="items-center">
                            <img class="rounded mx-auto d-block img-thumbnail w-20" src="https://media.tenor.com/Pk1tXRd6cFcAAAAM/interesado-guau.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Música Urbana</h5>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Reseñas de los mixtapes y álbumes de música urbana más aclamados por la crítica.</li>
                            <li class="list-group-item">Entrevistas con artistas de la escena underground de la música urbana.</li>
                            <li class="list-group-item">Listas de reproducción con las mejores canciones de música urbana para diferentes estados de ánimo.</li>
                            <li class="list-group-item">Análisis de la lírica de la música urbana y su conexión con la realidad social.</li>
                            <li class="list-group-item">Artículos de opinión sobre el papel de la mujer en la música urbana.</li>
                        </ul>
                        <hr>
                        <div class="items-center">
                            <img class="rounded mx-auto d-block img-thumbnail" src="https://imggraficos.gruporeforma.com/2022/01/giphy.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row mt-4">
            <div class="col text-center">
                <h2>¿Estás listo para comenzar?</h2><br />
                <a href="#" class="btn btn-lg btn-dark">Contáctanos</a>
            </div>
        </section>

    </main>

    <footer class="container-fluid bg-dark text-light mt-4 mb-2 py-2 rounded-2" style="width: 99%;">
        <div class="row">
            <div class="col mt-2 px-4">
                <p>&copy; 2024 Siente el ritmo</p>
            </div>
            <div class="col-md-auto mt-2 px-4">
                <a href="#" class="text-light"><i class="bi bi-facebook" style="font-size: 1.1rem;"></i></a>
                <a href="#" class="text-light"><i class="bi bi-instagram" style="font-size: 1.1rem;"></i></a>
                <a href="#" class="text-light"><i class="bi bi-twitter" style="font-size: 1.1rem;"></i></a>
                <a href="#" class="text-light"><i class="bi bi-youtube" style="font-size: 1.1rem;"></i></a>
                <a href="#" class="text-light"><i class="bi bi-telegram" style="font-size: 1.1rem;"></i></a>
                <a href="#" class="text-light"><i class="bi bi-tiktok" style="font-size: 1.1rem;"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>