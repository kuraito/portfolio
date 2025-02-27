<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .zoom-img {
            width: 600px;
            height: auto;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .zoom-img.zoomed {
            transform: scale(1.5);
        }

        .course-list {
            max-height: 0; /* Altezza iniziale 0 */
            overflow: hidden; /* Nasconde il contenuto quando max-height è 0 */
            transition: max-height 0.5s ease; /* Animazione fluida */
            list-style-type: disc;
            padding-left: 20px;
        }

        .course-list.visible {
            max-height: 300px; /* Altezza massima (sufficiente per mostrare tutti i corsi) */
        }

        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Giuseppe Sabia</title>
    <!-- Bootswatch Darkly CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/darkly/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Giuseppe Sabia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Chi Sono</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Esperienza</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Progetti Universitari</a></li>
                    <li class="nav-item"><a class="nav-link" href="#istruzione">Istruzione</a></li>
                    <li class="nav-item"><a class="nav-link" href="#other">Altro</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contatti</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1>Benvenuto nel mio Portfolio</h1>
            <p class="lead">Scopri i miei progetti, le mie esperienze e competenze.</p>
        </div>
    </header>

    <main class="container my-5">
        <section id="about" class="mb-5">
            <img src = "Tirocinio/photo.jpg" class= "zoom-img" id = "image" style="width: 23%; height: auto; border-radius: 50%;" >
            <h2>Chi Sono</h2>
            <p> Sono un neolaureato in Informatica con esperienza nello sviluppo web. 
                Mi appassionano il problem solving e l'implementazione di soluzioni innovative. 
                Questo portfolio mette in mostra i miei progetti e competenze tecniche.</p></p>
            <button type="button" class="btn btn-primary" onclick="downloadCV()">Scarica il mio CV</button>
        </section>

        <section id="experience" class="mb-5">
            <h2>Esperienza Lavorativa</h2>
            <div class="row">
                <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                <h5 class="card-title">Web developer</h5>
                <p class = "card-text">Presso: <img src="inreception.png" alt="inReception" style="width: 150px; height: auto;"> </p>
                <p class = "card-text">Periodo: 3 mesi</p>
                <p>
                <h5 class = "card-text">Linguaggi utilizzati:</h5>
                <div>
                    <img src = "Tirocinio/css.png" alt = "css" style="width: 10%; height: auto;">
                    <img src = "Tirocinio/php.png" alt = "php" style="width: 15%; height: auto;">
                    <img src = "Tirocinio/html.png" alt = "html" style="width: 9%; height: auto;">
                    <img src = "Tirocinio/curl.png" alt = "curl" style="width: 15%; height: auto;">
                    <img src = "Tirocinio/javascript.png" alt = "javascript" style="width: 10%; height: auto;">
                </div>
                </p>
                </div>
                </div>
            </div>
        </section>

        <section id="istruzione" class="mb-5">
            <h2>Istruzione</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Laurea in Scienze e Tecnologie Informatiche</h5>
                            <p class = "card-text">Presso: Università degli studi di Salerno></p>
                            <p class = "card-text">Periodo: 2019-2024</p>
                            <button class="btn btn-primary" onclick="toggleList()" >Mostra Corsi</button>
                            <?php
                            // Array di corsi
                            $corsi = ["HTML e CSS", "JavaScript", "PHP", "Python", "React"];
                            ?>

                            <ul class="course-list" id="courseList">
                                <?php foreach ($corsi as $corso): ?>
                                <li><?= $corso; ?></li>
                                <?php endforeach; ?>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Diploma Tecnologia/tecnico di elettronica industriale</h5>
                            <p class = "card-text">Periodo: 2014-2019</p>
                        </div>
                    </div>
                </div>
            </div>

        <section id="projects" class="mb-5">
            <h2>Progetti Universitari</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Progetto Basi di Dati</h5>
                            <p class="card-text">Descrizione del progetto: gestione di una piattaforma online (concessionaria online), sulla quale è possibile effettuare un acquisto di un veicolo</p>
                            <p>
                            <img src = "Tirocinio/java.png" alt = "java" style="width: 20%; height: auto;">
                            <img src = "Tirocinio/sql.png" alt = "sql" style="width: 20%; height: auto;">
                            </p>
                            <a href="https://github.com/kuraito/Progetto_BD_VeicHome" class="btn btn-primary">Vedi su GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Progetto Tecnologie web</h5>
                            <p class="card-text">Descrizione del progetto: servizio di e-commerce per la vendita di auto e moto.</p>
                            <p>
                                <img src = "Tirocinio/java.png" alt = "java" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/css.png" alt = "css" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/html.png" alt = "html" style="width: 20%; height: auto;">
                            </p>
                            <a href="https://github.com/kuraito/Progetto_TSW" class="btn btn-primary">Vedi su GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Progetto Interazione Uomo Macchina</h5>
                            <p class="card-text">Descrizione del progetto: piattaforma progettata per facilitare e organizzare l'integrazione, supportando gli utenti nella ricerca di opportunità lavorative e promuovendo la tutela dei diritti umani.</p>
                            <p>
                                <img src = "Tirocinio/Figma.png" alt = "figma" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/css.png" alt = "css" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/html.png" alt = "html" style="width: 20%; height: auto;">
                            </p>
                            <a href="https://github.com/kuraito/Gruppo-n-10/tree/main" class="btn btn-primary">Vedi su GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Progetto Ingegneria del software</h5>
                            <p class="card-text">Descrizione del progetto: (INGEGNERIA DEL SOFTWARE) servizio di e-commerce per la vendita di auto e moto.</p>
                            <p>
                                <img src = "Tirocinio/java.png" alt = "java" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/css.png" alt = "css" style="width: 20%; height: auto;">
                                <img src = "Tirocinio/html.png" alt = "html" style="width: 20%; height: auto;">
                            </p>
                            <a href="https://github.com/kuraito/Armando9889-Progetto_Ingegneria_del_software" class="btn btn-primary">Vedi su GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="other">
            <div class="row">
                <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
            <p><h6>Esperienze di volontariato:</h6> Donatore di sangue volontario - AVIS (Associazione Volontari Italiani del Sangue)</p>
        </div>
        </div>
        <div class="card text-white bg-secondary mb-3">
            <div class="card-body">
            <p><h6>Altro:</h6> Durante il periodo delle scuole superiori, ho partecipato a diversi corsi su Udemy e a corsi 
                offerti dalla scuola, approfondendo competenze tecniche e digitali. 
                Inoltre, ho creato e gestito canali e pagine su piattaforme social come YouTube, Telegram e Instagram, 
                acquisendo esperienza nella comunicazione digitale e nella gestione dei contenuti.

                Durante gli studi universitari, ho svolto lavori occasionali in ambiti non direttamente collegati al mio
                percorso accademico. Queste esperienze, tuttavia, mi hanno permesso di sviluppare soft skills fondamentali,
                come la capacità di adattamento, il lavoro in team e la gestione del tempo, utili in qualsiasi contesto 
                professionale. </p>
            </div>
        </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contatti</h2>
            <ul class="list-unstyled">
                <li>Email: <a href="mailto:giusaff99@gmail.com">giusaff99@gmail.com</a></li>
                <li>GitHub: <a href="https://github.com/kuraito">github</a></li>
                <li>Linkedin: <a href="https://www.linkedin.com/in/giuseppe-sabia-2a5888239/">Linkedin</a></li>
                <li>Telefono: +39 3466863409</li>
            </ul>
        </section>
    </main>

    <footer class="bg-primary text-white text-center py-3">

    </footer>

    <!-- Bootstrap JavaScript Bundle -->



    <script>
        function toggleList() {
            const courseList = document.getElementById('courseList');
            courseList.classList.toggle('visible'); // Aggiunge/rimuove la classe 'visible'
        }

        function downloadCV() {
            const link = document.createElement('a');
            link.href = 'curriculumdef.pdf'; // Percorso del file CV
            link.download = 'curriculumdef.pdf'; // Nome del file scaricato
            link.click();
        }

        const img = document.getElementById('image');

        img.addEventListener('click', () => {
            img.classList.toggle('zoomed'); // Aggiunge o rimuove la classe "zoomed"
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>