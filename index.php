<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELPHIN DOSSA | Précision et Rigueur Architecturale</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">DELPHIN DOSSA</div>
            
            <ul class="nav-menu">
                <li><a href="">Accueil</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Liens</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <a href="#" class="btn-connect">Télécharger CV</a>
            <button id="burger" class="menuAction">
                <i class="ri-menu-line"></i>
            </button>
        </nav>
        <div class="navMobile">
            <ul class="nav-menu-mobile">
                <li><a href="">Accueil</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Liens</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <button id="closer" class="menuAction">
                <i class="ri-close-large-fill"></i>
            </button>
        </div>
        
    </header>

    <main>
        <!-- hero -->
        <section id="hero">
            <div class="hero-container">
                <div class="hero-text">
                    <p class="kicker">TECHNICIEN SUPÉRIEUR</p>
                    <h1>Delphin DOSSA  <br> <span>Structure & Stratégie</span></h1>
                    <h2>La Précision dans chaque Dimension</h2>
                    
                    <p class="hero-description">
                        Synthèse de la rigueur du génie civil et de l'analyse financière à haute fréquence. 
                        Bâtir des structures et des portefeuilles capables de résister à la volatilité.
                    </p>

                    <div class="hero-btns">
                        <button class="btn-primary"><a href="#services">VOIR LES SERVICES</a></button>
                        <button class="btn-secondary"><a href="">TERMINAL DE TRADING</a></button>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="DELPHIN DOSSA - L'Architecte Maître">
                </div>

                <!-- <div class="live-status-card">
                    <span class="status-label">MÉTRIQUE EN DIRECT //</span>
                    <span class="status-value">94.8% Intégrité Structurelle</span>
                </div> -->
            </div>
        </section>

        <!-- Compténces -->

        <section id="competences" class="section-padding">
            <div class="content-wrapper">
                <h3 class="section-title">COMPÉTENCES</h3>
                <div class="competence-row">
                    <div class="competence-media">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Expertise BTP" class="competence-image">
                    </div>

                    <div class="competence-text">
                        <p class="subtitle">Maîtrise technique en Bâtiment et travaux publics</p>
                        <div class="expertise-block">
                            <span class="index">01</span>
                            <h3 style="text-transform: uppercase;">CONSTRUCTION de Bâtiment et Travaux Publics</h3>
                            <p>
                                Une fondation bâtie sur la précision mathématique. Mon diplôme technique en bâtiment 
                                informe chaque aspect de mon cadre analytique, des calculs de charge à la 
                                gestion des risques sur les marchés volatiles.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="competence-row reversed" id="trading">
                    <div class="competence-media">
                        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&q=80&w=1000" alt="Analyse Trading Forex" class="competence-image">
                    </div>

                    <div class="competence-text">
                        <p class="subtitle">Maîtrise de l'Analyse Technique sur les Marchés de change.</p>
                        <div class="expertise-block">
                            <span class="index">02</span>
                            <h3 style="text-transform: uppercase;">TRADING FOREX & INDICES SYNTHétiques</h3>
                            <p>
                                Utilisation de modèles statistiques pour naviguer dans la liquidité mondiale. 
                                Recherche de marché haute fidélité et exécution algorithmique pour des actifs à enjeux élevés.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section-dark">
            <div class="container">
                <h3 class="section-title">SERVICES</h3>
                
                <div class="competency-grid">
                    <article class="domain-card">
                        <span class="icon-box"><i class="ri-building-2-line" id="btp"></i></span>
                        <h4>GÉNIE CIVIL</h4>
                        <p>Surveillance technique pour projets d'infrastructure complexes. Spécialisation en durabilité du béton.</p>
                        <ul class="tag-list">
                            <li>ANALYSE STRUCTURELLE</li>
                            <li>GESTION & RÉALISATION DE PROJET</li>
                            <li>ESTIMATION DES COÛTS</li>
                        </ul>
                    </article>

                    <article class="domain-card">
                        <span class="icon-box"><i class="ri-stock-line" id="trade"></i></span>                        
                        <h4>ANALYSE TRADING</h4>
                        <p>Modélisation quantitative et évaluation de la volatilité pour les actifs financiers.</p>
                        <ul class="tag-list">
                            <li>ANALYSE TECHNIQUE</li>
                            <li>FORMATIONS</li>
                            <li>COATCHING & SUIVI</li>
                        </ul>
                    </article>

                    <article class="domain-card" id="mentorat">
                        <span class="icon-box"><i class="ri-user-voice-line" id="mentoratIcon"></i></span>
                        <h4>MENTORAT</h4>
                        <p>Orientation de nouveaux Bacheliers dans le choix de fillières et d'Université</p>
                        <ul class="tag-list">
                            <li>Décryptage d'orientation</li>
                            <li>Informations clés</li>
                            <li>Opportunités de bourses</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <!-- Liens -->

        <section id="portfolio" class="section-padding">
            <h3 class="section-title">QUELQUES LIENS IMPORTANTS</h3>
            
            <div class="important-links-container">
                <div class="link-card">
                    <span class="link-number">01</span>
                    <i class="ri-file-pdf-2-line"></i>
                    <h4>Mon CV Professionnel</h4>
                    <a href="#" target="_blank" class="link-action">Consulter le PDF</a>
                </div>

                <div class="link-card">
                    <span class="link-number">02</span>
                    <i class="ri-community-line"></i>
                    <h4>Orientation Universitaire</h4>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="link-action">Rejoindre le Groupe</a>
                </div>

                <div class="link-card">
                    <span class="link-number">03</span>
                    <i class="ri-discord-line"></i>
                    <h4>Discord des Traders</h4>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="link-action">Accéder à la communautés</a>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="contact-grid">
                <div class="conatct-info">
                    <div class="contact-header">
                        <h2>CONNECTONS-NOUS</h2>
                        <p>Bâtissons ensemble la prochaine frontière.</p>
                    </div>
    
                    <div class="contact-methods">
                        <div class="method">
                            <span class="method-label"><i class="ri-whatsapp-line"></i> QUESTIONS WHATSAPP</span>
                            <p class="method-detail"><a href="https://wa.me//+2290194853019" target="_blank" rel="noopener noreferrer">+229 01 56 46 86 58</a></p>
                        </div>
                        <div class="method">
                            <span class="method-label"><i class="ri-mail-send-line"></i> EMAIL PROFESSIONNEL</span>
                            <p class="method-detail"><a href="mailto:wasfade423@gmail.com" target="_blank" rel="noopener noreferrer">wasfade423@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <form class="contact-form" method="POST" action="traitement/traitement.php">
                    <?php
                        if(isset($_SESSION["succes"])){?>
                            
                            <div class="succes">
                                <?= $_SESSION["succes"] ?? "" ?>
                            </div>
                        <?php }
                    ?>

                    <?php
                        if(isset($_SESSION["error"]["send"])){?>
                            
                            <div class="errorSend">
                                <?= $_SESSION["error"]["send"] ?? "" ?>
                            </div>
                        <?php }
                    ?>                                                          
                    <div class="form-group">
                        <input type="text" id="nom" name="nom" placeholder="NOM" value="<?= @$_SESSION['nom'] ?>" required>
                        <span class="error"><?= @$_SESSION["error"]["nom"] ?? "" ?></span>
                    </div>
                    <div class="form-group">
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" value="<?= @$_SESSION['prenom'] ?>" required>
                        <span class="error"><?= @$_SESSION["error"]["prenom"] ?? "" ?></span>
                    </div>                    
                    <div class="form-group">
                        <input type="text" id="subject" name="subject"" placeholder="SUJET" value="<?= @$_SESSION['subject'] ?>" required>
                        <span class="error"><?= @$_SESSION["error"]["subject"] ?? "" ?></span>
                    </div>                    
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="ADRESSE EMAIL" value="<?= @$_SESSION['email'] ?>" required>
                        <span class="error"><?= @$_SESSION["error"]["email"] ?? "" ?></span>
                    </div>
                    <div class="form-group">
                        <textarea id="message" style="resize: vertical;" name="message" placeholder="Contenu de votre message."><?= @$_SESSION['message'] ?></textarea>
                        <span class="error"><?= @$_SESSION["error"]["message"] ?? "" ?></span>
                    </div>
                    <button type="submit" class="btn-submit">ENVOYEZ</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content1">
            <div class="logo">DELPHIN DOSSA</div>
            <div>
                <h3>NAVIGATION</h3>                
                <ul class="nav-menu">
                        <li><a href="">Accueil</a></li>
                        <li><a href="#competences">Compétences</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Liens</a></li>
                        <li><a href="#contact">Contact</a></li>
                </ul>           
            </div>
        </div>
        <div class="footer-content">
            <p class="copyright">&copy; 2026 DELPHIN DOSSA | LA PRÉCISION PAR LA RIGUEUR ARCHITECTURALE</p>
            <p class="author">WALFRECHERCHE LOWEEN</p>
        </div>
    </footer>

    <script>
        let burger = document.getElementById("burger");
        let closer = document.getElementById("closer");

        burger.addEventListener('click', ()=>{
            document.querySelector('.navMobile').style.display = "flex";
        })

        closer.addEventListener('click', ()=>{
            document.querySelector('.navMobile').style.display = "none";
        })        
    </script>
<?php 
    //session_unset();
?>
</body>
</html>