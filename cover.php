<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>SolidConcept - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        :root {
            --primary: #B78D65;
            --light: #F8F8F8;
            --dark: #252525;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Open Sans', Arial, sans-serif;
            background: var(--dark);
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: contain;
            object-position: center center;
            z-index: 0;
            filter: brightness(0.5);
            background: #252525;
        }

        .cover-content {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(37, 37, 37, 0.6);
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid var(--primary);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
            margin-bottom: 30px;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .enter-btn {
            padding: 15px 40px;
            font-size: 1.5rem;
            border: none;
            border-radius: 30px;
            background: var(--primary);
            color: #fff;
            cursor: pointer;
            font-weight: 500;
            letter-spacing: 2px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.15);
            transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        }

        .enter-btn:hover {
            background: #fff;
            color: var(--primary);
            box-shadow: 0 8px 32px rgba(183, 141, 101, 0.2);
        }

        .choice-section {
            display: none;
            width: 100vw;
            height: 100vh;
            margin-top: 0;
            flex-direction: row;
            gap: 0;
        }

        .choice-half {
            position: relative;
            flex: 1 1 0;
            height: 100vh;
            cursor: pointer;
            overflow: hidden;
            transition: transform 0.3s;
            display: flex;
            align-items: stretch;
            justify-content: stretch;
        }

        .choice-half img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s;
        }

        .choice-half:hover img {
            transform: scale(1.05);
        }

        .choice-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: background 0.3s, opacity 0.3s;
        }

        .choice-half:hover .choice-overlay {
            background: rgba(0, 0, 0, 0.65);
        }

        .choice-text {
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
            padding: 20px 30px;
            border-radius: 12px;
            background: rgba(183, 141, 101, 0.85);
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.15);
        }

        .choice-half:hover .choice-text {
            opacity: 1;
        }

        .cover-title {
            color: #fff;
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .cover-subtitle {
            color: var(--primary);
            font-size: 1.3rem;
            font-weight: 500;
            margin-bottom: 40px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 900px) {
            .choice-section {
                flex-direction: column;
                width: 100vw;
                height: 100vh;
            }

            .choice-half {
                height: 50vh;
            }
        }
    </style>
</head>

<body>
    <!-- Vidéo de fond -->
    <video class="video-bg" autoplay muted loop>
        <source src="video/loader.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <!-- Couche de contenu -->
    <div class="cover-content" id="coverContent">
        <div class="loader" id="loader"></div>
        <div style="display:none;" id="coverText">
            <div class="cover-title">Bienvenue chez SolidConcept</div>
            <div class="cover-subtitle">BTP & IT - Construction, Innovation, Solutions numériques</div>
            <button class="enter-btn" id="enterBtn">Entrer</button>
        </div>
        <div class="choice-section" id="choiceSection">
            <a href="btp.php" class="choice-half">
                <img src="img/render_btp.png" alt="BTP">
                <div class="choice-overlay">
                    <span class="choice-text">Entrer dans l'univers BTP</span>
                </div>
            </a>
            <a href="it.php" class="choice-half">
                <img src="img/render_it.png" alt="IT">
                <div class="choice-overlay">
                    <span class="choice-text">Entrer dans l'univers IT</span>
                </div>
            </a>
        </div>
    </div>
    <script>
        // Animation de chargement puis affichage du bouton et titre
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('coverText').style.display = 'block';
            }, 1800);
        };
        // Au clic sur "Entrer", affichage du choix des pôles
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('enterBtn').onclick = function() {
                document.getElementById('coverText').style.display = 'none';
                document.getElementById('choiceSection').style.display = 'flex';
            };
        });
    </script>
</body>

</html>