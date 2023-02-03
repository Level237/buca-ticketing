<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Webinning" name="author">

            <!-- Theme CSS -->
            <link rel="stylesheet" href="{{ asset('assets/css/themes/themes.css') }}" id="stylesheetLTR">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            <link rel="stylesheet" href="assets/css/theme.rtl.bundle.css" id="stylesheetRTL">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="preload" as="style" href="css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">

        <!-- no-JS fallback -->
        <noscript>
            <link rel="stylesheet" href="css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        </noscript>

        <script>
         // Theme switcher

            let themeSwitcher = document.getElementById('themeSwitcher');

            const getPreferredTheme = () => {
                if (localStorage.getItem('theme') != null) {
                    return localStorage.getItem('theme');
                }

                return document.documentElement.dataset.theme;
            };

            const setTheme = function (theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                } else {
                    document.documentElement.dataset.theme = theme;
                }

                localStorage.setItem('theme', theme);
            };

            const showActiveTheme = theme => {
                const activeBtn = document.querySelector(`[data-theme-value="${theme}"]`);

                document.querySelectorAll('[data-theme-value]').forEach(element => {
                    element.classList.remove('active');
                });

                activeBtn && activeBtn.classList.add('active');

             // Set button if demo mode is enabled
                document.querySelectorAll('[data-theme-control="theme"]').forEach(element => {
                    if (element.value == theme) {
                        element.checked = true;
                    }
                });
            };

            function reloadPage() {
                window.location = window.location.pathname;
            }


            setTheme(getPreferredTheme());

            if(typeof themeSwitcher != 'undefined') {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if(localStorage.getItem('theme') != null) {
                        if (localStorage.getItem('theme') == 'auto') {
                            reloadPage();
                        }
                    }
                });

                window.addEventListener('load', () => {
                    showActiveTheme(getPreferredTheme());

                    document.querySelectorAll('[data-theme-value]').forEach(element => {
                        element.addEventListener('click', () => {
                            const theme = element.getAttribute('data-theme-value');

                            localStorage.setItem('theme', theme);
                            reloadPage();
                        })
                    })
                });
            }
        </script>
        <!-- Favicon -->
        <link rel="icon" href="{{asset('assets/favicon/buca.jpg')}}" sizes="any">

            <!-- Demo script -->
            <script>
                var themeConfig = {
                    theme: JSON.parse('"light"'),
                    isRTL: JSON.parse('false'),
                    isFluid: JSON.parse('true'),
                    sidebarBehaviour: JSON.parse('"fixed"'),
                    navigationColor: JSON.parse('"inverted"')
                };

                var isRTL = localStorage.getItem('isRTL') === 'true',
                    isFluid = localStorage.getItem('isFluid') === 'true',
                    theme = localStorage.getItem('theme'),
                    sidebarSizing = localStorage.getItem('sidebarSizing'),
                    linkLTR = document.getElementById('stylesheetLTR'),
                    linkRTL = document.getElementById('stylesheetRTL'),
                    html = document.documentElement;

                if (isRTL) {
                    linkLTR.setAttribute('disabled', '');
                    linkRTL.removeAttribute('disabled');
                    html.setAttribute('dir', 'rtl');
                } else {
                    linkRTL.setAttribute('disabled', '');
                    linkLTR.removeAttribute('disabled');
                    html.removeAttribute('dir');
                }
            </script>

        <!-- Page Title -->
        <title>Connexion</title>
    </head>

    <body class="d-flex align-items-center bg-light-green">

            <!-- THEME CONFIGURATION -->
            <script>
                let themeAttrs = document.documentElement.dataset;

                for(let attr in themeAttrs) {
                    if(localStorage.getItem(attr) != null) {
                        document.documentElement.dataset[attr] = localStorage.getItem(attr);

                        if (theme === 'auto') {
                            document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

                            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                                e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement.dataset.theme = 'light';
                            });
                        }
                    }
                }
            </script>
        <!-- MAIN CONTENT -->
        <main class="container">

            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-6">

                    <!-- Title -->

                    <h1 class="mb-2 text-center">
                        <img src="{{asset('assets/favicon/buca.jpg')}}" class="" alt="..." width="60" height="60">
                        Connectez-vous
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-secondary text-center">
                        Entrez votre adresse e-mail et votre mot de passe pour accéder au panneau d'administration
                    </p>

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Adresse Email
                                    </label>

                                    <!-- Input -->
                                    <input type="email" class="form-control" placeholder="Votre Adresse Email">
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Password -->
                                <div class="mb-4">

                                    <div class="row">
                                        <div class="col">

                                            <!-- Label -->
                                            <label class="form-label">
                                                Mot de Passe
                                            </label>
                                        </div>

                                        <div class="col-auto">

                                            <!-- Help text -->
                                            <a href="#" class="form-text small text-muted link-primary">Mot de passe Oublié</a>
                                        </div>
                                    </div> <!-- / .row -->

                                    <!-- Input -->
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" autocomplete="off" data-toggle-password-input="" placeholder="Votre Mot de passe">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password=""></button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="form-check">

                            <!-- Input -->
                            <input type="checkbox" class="form-check-input" id="remember">

                            <!-- Label -->
                            <label class="form-check-label" for="remember">
                                Se Souvenir de moi
                            </label>
                        </div>

                        <div class="row align-items-center text-center">
                            <div class="col-12">

                                <!-- Button -->
                                <button type="button" class="btn w-100 buca-color mt-6 mb-2">Connectez-vous</button>
                            </div>

                            <div class="col-12">

                                <!-- Link -->

                            </div>
                        </div> <!-- / .row -->
                    </form>
                </div>
            </div> <!-- / .row -->
        </main> <!-- / main -->

        <!-- JAVASCRIPT-->
        <!-- Theme JS -->
        <script src="{{asset('assets/js/bundle.js')}}"></script>    </body>
</html>
