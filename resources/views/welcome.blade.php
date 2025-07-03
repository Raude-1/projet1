<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bienvenue - T.T.G Network</title>

    <!-- Style personnalisé -->
    <style>
        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            background: url('{{ asset('images/bg-school.jpg') }}') center/cover no-repeat fixed;
            backdrop-filter: blur(4px);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: white;
        }

        header, footer {
            max-width: 1200px;
            width: 100%;
            margin: auto;
            padding: 20px;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        nav a:hover {
            color: #34d399; /* vert menthe */
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            backdrop-filter: blur(3px);
        }

        h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px #00000055;
        }

        p {
            font-size: 1.1rem;
            max-width: 600px;
            color: #e0f2f1;
            margin-bottom: 30px;
            text-shadow: 1px 1px #00000033;
        }

        .btn {
            padding: 12px 30px;
            margin: 0 10px;
            font-weight: bold;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-green {
            background-color: #34d399;
            color: #1e3a8a;
        }

        .btn-green:hover {
            background-color: #6ee7b7;
        }

        .btn-white {
            background-color: white;
            color: #0f766e;
        }

        .btn-white:hover {
            background-color: #f0fdf4;
        }

        /* Styles des sections supplémentaires */
        section.features-faq {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            color: #e0f2f1;
            text-align: left;
            width: 100%;
        }
        section.features-faq h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
            color: #6ee7b7;
        }
        section.features-faq .features-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        section.features-faq .feature-item {
            flex: 1 1 280px;
            background: rgba(52, 211, 153, 0.15);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        section.features-faq .feature-item h4 {
            margin-top: 0;
        }
        section.features-faq details {
            background: rgba(0,0,0,0.2);
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        section.features-faq details summary {
            font-weight: 600;
            font-size: 1.1rem;
        }

        footer {
            background-color: rgba(0, 51, 51, 0.8);
            text-align: center;
            font-size: 0.875rem;
            width: 100%;
        }

        /* Animation */
        [data-fade] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        [data-fade].show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            section.features-faq .features-list {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <!-- Message succès (au cas où) -->
    @if(session('success'))
        <div style="max-width: 600px; margin: 20px auto; padding: 15px; background-color: #34d399; color: white; border-radius: 8px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header -->
    <header>
        <h1 style="font-size: 2rem; font-weight: bold;">T.T.G Network</h1>
    </header>

    <!-- Main Content -->
    <main>
        <h2 data-fade>Bienvenue sur <span style="color: #6ee7b7;">T.T.G Network</span></h2>
        <p data-fade>La solution éducative innovante conçue pour optimiser la gestion des étudiants, des enseignants, des cours et bien plus, au service de votre excellence académique.</p>

        <div data-fade>
            <a href="{{ route('register') }}" class="btn btn-green" style="text-decoration:none;">Créer un compte</a>
            <a href="{{ route('login') }}" class="btn btn-white" style="text-decoration:none;">Se connecter</a>
        </div>

        <!-- Sections supplémentaires -->
        <section class="features-faq" aria-label="Fonctionnalités et FAQ">

            <!-- Fonctionnalités -->
            <h3>Fonctionnalités clés</h3>
            <div class="features-list">
                <div class="feature-item">
                    <h4>Gestion Étudiants</h4>
                    <p>Suivi complet des inscriptions, notes et progression académique.</p>
                </div>
                <div class="feature-item">
                    <h4>Planning Cours</h4>
                    <p>Organisation simplifiée des emplois du temps et ressources pédagogiques.</p>
                </div>
                <div class="feature-item">
                    <h4>Communication</h4>
                    <p>Messagerie intégrée entre étudiants, formateurs et administration.</p>
                </div>
            </div>

            <!-- FAQ -->
            <h3>Questions fréquentes</h3>
            <div>
                <details>
                    <summary>Comment créer un compte ?</summary>
                    <p>Cliquer sur le bouton "Créer un compte" en haut de la page et remplir le formulaire d'inscription.</p>
                </details>
                <details>
                    <summary>Comment suivre mes notes ?</summary>
                    <p>Après connexion, accédez à votre tableau de bord et consultez la section "Notes".</p>
                </details>
                <details>
                    <summary>Puis-je contacter mes formateurs directement ?</summary>
                    <p>Oui, la plateforme propose une messagerie interne pour faciliter la communication.</p>
                </details>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <footer>
        © {{ date('Y') }} <strong>T.T.G Network</strong>. Tous droits réservés.
    </footer>

    <!-- Animation JS -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('[data-fade]').forEach(el => {
                setTimeout(() => el.classList.add('show'), 200);
            });
        });
    </script>
</body>
</html>
