<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="inverted" data-is-fluid="true">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Webinning" name="author">

            <!-- Theme CSS -->
            <link rel="stylesheet" href="{{ asset('assets/css/themes/themes.css') }}" id="stylesheetLTR">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

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
        <title>Dashboard Buca</title>
    </head>

    <body>

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
        <!-- NAVIGATION -->
        <nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar buca-color navbar-dark">

            <!-- Theme configuration (navbar)
                <script>
                    let navigationColor = localStorage.getItem('navigationColor'),
                        navbar = document.getElementById('mainNavbar');

                    if(navigationColor != null && navbar != null) {
                        if(navigationColor == 'inverted') {
                            navbar.classList.add('bg-dark', 'navbar-dark');
                            navbar.classList.remove('bg-white', 'navbar-light');
                        } else {
                            navbar.classList.add('bg-white', 'navbar-light');
                            navbar.classList.remove('bg-dark', 'navbar-dark');
                        }
                    }
                </script>
                 -->
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/favicon/buca.jpg')}}" class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
                    <img src="{{asset('assets/favicon/buca.jpg')}}" class="navbar-brand-img logo-light logo-large" alt="..." width="125" height="25">

                    <img src="{{asset('assets/favicon/buca.jpg')}}" class="navbar-brand-img logo-dark logo-small" alt="..." width="19" height="25">
                    <img src="{{asset('assets/favicon/buca.jpg')}}" class="navbar-brand-img logo-dark logo-large" alt="..." width="70" height="70"> <span style="color:white">Buca Voyage Douala</span>
                </a>

                <!-- Navbar toggler -->
                <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenavCollapse">

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-lg-7">
                        <li class="nav-item dropdown">
                            <a class="nav-link active " href="{{route('dashboard')}}">
                                <svg viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                <span class="text-buca-secondary -bottom-3">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#pagesCollapse1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ticket-detailed text-buca-secondary" viewBox="0 0 16 16"> <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/> <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/> </svg>
                                <span class="text-buca-secondary" style="margin-left: 5px"> Tickets</span>
                            </a>
                            <div class="collapse " id="pagesCollapse1">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">
                                            <span class="text-buca-secondary">Ajouter un Ticket</span>
                                        </a>
                                        <a href="{{route('tickets.index')}}" class="nav-link ">
                                            <span class="text-buca-secondary">Listes de tickets</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" id="mainIconPathAttribute" fill="#ffffff"></path> </svg>
                                <span class="text-buca-secondary -bottom-3" style="margin-left: 5px">Bordereau</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="IconChangeColor"  height="20" width="20"><path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" id="mainIconPathAttribute" fill="#ffffff" stroke-width="0.1" stroke="#ff0000"></path></svg>
                                <span class="text-buca-secondary -bottom-3" style="margin-left: 5px">Voyages</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#pagesCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">
                                <svg viewbox="0 0 24 24" height="20" width="20" class="text-buca-secondary" xmlns="http://www.w3.org/2000/svg"><path d="M2.250 6.000 A2.250 2.250 0 1 0 6.750 6.000 A2.250 2.250 0 1 0 2.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M4.5,9.75A3.75,3.75,0,0,0,.75,13.5v2.25h1.5l.75,6H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.250 6.000 A2.250 2.250 0 1 0 21.750 6.000 A2.250 2.250 0 1 0 17.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M19.5,9.75a3.75,3.75,0,0,1,3.75,3.75v2.25h-1.5l-.75,6H18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M9.000 3.750 A3.000 3.000 0 1 0 15.000 3.750 A3.000 3.000 0 1 0 9.000 3.750 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.25,13.5a5.25,5.25,0,0,0-10.5,0v2.25H9l.75,7.5h4.5l.75-7.5h2.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                <span class="text-buca-secondary"  style="margin-left: 5px">Passagers</span>
                            </a>
                            <div class="collapse " id="pagesCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">
                                            <span class="text-buca-secondary">Mes Passagers</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>





                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#tasksCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tasksCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="IconChangeColor" height="20" width="20"><path d="M13 18H7v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1zM4 5v6h5V5H4zm7 0v6h5V5h-5zM5 2v1h10V2H5zm.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" id="mainIconPathAttribute" fill="#ffffff"></path></svg>
                                <span class="text-buca-secondary" style="margin-left: 5px">Bus</span>
                            </a>
                            <div class="collapse " id="tasksCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">
                                            <span class="text-buca-secondary">Listes des Bus</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">
                                            <span class="text-buca-secondary">Ajouter un bus</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item w-100">
                            <hr>
                        </li>


                    </ul>
                    <!-- End of Navigation -->

                    <!-- Info box -->

                </div>
                <!-- End of Collapse -->
            </div>
        </nav>
        <!-- MAIN CONTENT -->
        <main>

            <!-- HEADER -->
            <header class="container-fluid d-flex py-6 mb-4">

                <!-- Search -->
                <form class="d-none d-md-inline-block me-auto">
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input type="text" class="form-control bg-light-green border-light-green w-250px" placeholder="Rechercher...." aria-label="Search for any term">

                        <!-- Button -->
                        <span class="input-group-text bg-light-green border-light-green p-0">

                            <!-- Button -->
                            <button class="btn buca-color rounded-2 w-30px h-30px p-0 mx-1" type="button" aria-label="Search button">
                                <svg viewbox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)"></path><path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                            </button>
                        </span>
                      </div>
                </form>

                <!-- Top buttons -->
                <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

                    <!-- Dropdown -->
                    <div class="dropdown" id="themeSwitcher">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="18" width="18"><g><path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor"></path><path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor"></path><path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor"></path><path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor"></path><path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor"></path><path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor"></path><path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor"></path><path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor"></path><path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor"></path></g></svg>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <button type="button" class="dropdown-item active" data-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2" height="18" width="18"><g><path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor"></path><path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor"></path><path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor"></path><path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor"></path><path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor"></path><path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor"></path><path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor"></path><path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor"></path><path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor"></path></g></svg>
                                    Mode Clair
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2" height="18" width="18"><path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor"></path></svg>
                                    Mode Sombre
                                </button>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
                            <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="{{asset('assets/svg/fr.svg')}}" alt="..." width="18" height="18"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header text-uppercase">Selectionnez une langue</h6>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item active">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="{{asset('assets/svg/us.svg')}}" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">Anglais</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img" src="{{asset('assets/svg/fr.svg')}}" alt="..." width="18" height="18"></span><span class="text-truncate ms-2">Français</span>
                                </a>
                            </li>


                        </ul>
                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Button -->
                    <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
                        <svg viewbox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M10,21.75a2.087,2.087,0,0,0,4.005,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M12 3L12 0.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                            2<span class="visually-hidden">Messages non lues</span>
                        </span>
                    </a>

                    <!-- Notifications offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications" aria-labelledby="offcanvasNotificationsLabel">
                        <div class="offcanvas-header px-5">
                            <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>

                        </div>

                        <div class="offcanvas-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="{{asset('assets/img/kipart.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Kipart</h5>
                                                <small class="text-muted">il y a 10 minutes</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Titre:Recapitulatif de la journée</p>
                                                <small class="text-secondary">Nous passerons dans vos locaux pour vous formez en maintenance de vos système de ticketing...</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="{{asset('assets/img/kipart.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Kipart</h5>
                                                <small class="text-muted">il y 1 Heure</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Titre:Ticketing</p>
                                                <small class="text-secondary">Bien evidement nous sommes disponible...</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>





                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
                            <div class="avatar avatar-circle avatar-sm avatar-online">
                                <img src="{{asset('assets/img/buca.jpg')}}" alt="..." class="avatar-img" width="40" height="40">
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img src="{{asset('assets/img/buca.jpg')}}" alt="..." class="avatar-img" width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-0">Buca Voyage Douala</h4>
                                        <p class="card-text">Mballa Etienne</p>
                                    </div>
                                </div>
                            </div>

                            <hr class="dropdown-divider">



                            <a class="dropdown-item" href="javascript: void(0);">Profil et Compte</a>
                            <a class="dropdown-item" href="javascript: void(0);">Paramètres</a>

                            <hr class="dropdown-divider">

                            <a class="dropdown-item" href="javascript: void(0);">Deconnexion</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-fluid">

                <!-- Title -->
                <div class="row mb-3">
                    <div class="col-9">
                        <h1 class="h2">
                            Ticketing

                        </h1>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn buca-color ms-md-4" data-bs-toggle="modal" data-bs-target="#createKeyModal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14" class="me-1"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: currentColor"></path></svg>
                            Ajouter un Ticket
                        </button>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-6 col-xxl-3 d-flex">

                        <!-- Card -->
                        <div class="card border-0 flex-fill w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                            Tickets
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            6 328
                                        </h2>
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket-detailed text-buca-theme" viewBox="0 0 16 16"> <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/> <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/> </svg>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Cette Semaine
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            200
                                        </p>
                                    </div>
                                    <div class="col text-end text-truncate">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Mensuel
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            1050
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-3 d-flex">

                        <!-- Card -->
                        <div class="card border-0 flex-fill w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                            Passagers
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            6,328
                                        </h2>
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <svg viewbox="0 0 24 24" height="30" width="30" class="text-buca-theme" xmlns="http://www.w3.org/2000/svg"><path d="M2.250 6.000 A2.250 2.250 0 1 0 6.750 6.000 A2.250 2.250 0 1 0 2.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M4.5,9.75A3.75,3.75,0,0,0,.75,13.5v2.25h1.5l.75,6H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.250 6.000 A2.250 2.250 0 1 0 21.750 6.000 A2.250 2.250 0 1 0 17.250 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M19.5,9.75a3.75,3.75,0,0,1,3.75,3.75v2.25h-1.5l-.75,6H18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M9.000 3.750 A3.000 3.000 0 1 0 15.000 3.750 A3.000 3.000 0 1 0 9.000 3.750 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M17.25,13.5a5.25,5.25,0,0,0-10.5,0v2.25H9l.75,7.5h4.5l.75-7.5h2.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Cette Semaine
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            200
                                        </p>
                                    </div>
                                    <div class="col text-end text-truncate">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Mensuels
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            1050
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xxl-3 d-flex">

                        <!-- Card -->
                        <div class="card border-0 flex-fill w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                            Vente du Jour
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            50 500 FCFA
                                        </h2>
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="30" width="30" class="text-buca-theme"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>monitor-graph-line</title><polygon class="a" points="15 23.253 9 23.253 9.75 18.753 14.25 18.753 15 23.253"></polygon><line class="a" x1="6.75" y1="23.253" x2="17.25" y2="23.253"></line><rect class="a" x="0.75" y="0.753" width="22.5" height="18" rx="3" ry="3"></rect><path class="a" d="M18.75,5.253H16.717a1.342,1.342,0,0,0-.5,2.588l2.064.825a1.342,1.342,0,0,1-.5,2.587H15.75"></path><line class="a" x1="17.25" y1="5.253" x2="17.25" y2="4.503"></line><line class="a" x1="17.25" y1="12.003" x2="17.25" y2="11.253"></line><path class="a" d="M.75,11.253,4.72,7.284a.749.749,0,0,1,1.06,0L7.72,9.223a.749.749,0,0,0,1.06,0l3.97-3.97"></path><line class="a" x1="0.75" y1="15.753" x2="23.25" y2="15.753"></line></svg>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-auto">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Cette Semaine
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                           12 500 Fcfa
                                        </p>
                                    </div>
                                    <div class="col text-end text-truncate">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Mensuel
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            400 000 Fcfa
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-3 d-flex">

                        <!-- Card -->
                        <div class="card border-0 buca-color flex-fill w-100">
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="text-uppercase fw-semibold mb-2">
                                    Balance Courante
                                </h4>

                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    1 440 000 Fcfa
                                </h2>

                                <!-- Chart -->
                                <div class="chart-container h-70px">
                                    <canvas id="currentBalanceChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->

                <div class="row">
                    <div class="col">

                        <!-- Card -->
                        <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
                            <div class="card-header border-0 card-header-space-between">

                                <!-- Title -->
                                <h2 class="card-header-title h4 text-uppercase">
                                    Tickets Recents
                                </h2>

                                <!-- Dropdown -->
                                <div class="dropdown ms-4">
                                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript: void(0);" class="dropdown-item">
                                            Exporter les tickets
                                        </a>
                                        <a href="javascript: void(0);" class="dropdown-item">
                                            Envoyer
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="w-60px">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                                </div>
                                            </th>
                                            <th>
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                                    Nom du Passager
                                                </a>
                                            </th>

                                            <th>
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                                    Id Passager
                                                </a>
                                            </th>
                                            <th>
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                                    Depart
                                                </a>
                                            </th>
                                            <th class="w-150px min-w-150px">
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                    Arrivée
                                                </a>
                                            </th>
                                            <th class="w-150px min-w-150px">
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                    Code Qr
                                                </a>
                                            </th>
                                            <th class="w-150px min-w-150px">
                                                <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                    Etat de Vente
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="list">
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Martin Lunel</span>
                                            </td>
                                            <td>#245</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Franck</span>
                                            </td>
                                            <td>#246</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Bertrand</span>
                                            </td>
                                            <td>#247</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Samantha</span>
                                            </td>
                                            <td>#248</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Hervé</span>
                                            </td>
                                            <td>#249</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Linda</span>
                                            </td>
                                            <td>#250</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Clementine</span>
                                            </td>
                                            <td>#251</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Berlin</span>
                                            </td>
                                            <td>#252</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Lisa</span>
                                            </td>
                                            <td>#253</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-female.png')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Merveille</span>
                                            </td>
                                            <td>#254</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Dimitri</span>
                                            </td>
                                            <td>#255</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Kipart</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">adrien</span>
                                            </td>
                                            <td>#256</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="{{asset('assets/img/profile-man.jfif')}}" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Edie</span>
                                            </td>
                                            <td>#257</td>
                                            <td>Douala</td>
                                            <td>Yaoundé</td>
                                            <td> <img src="{{asset('assets/svg/qr.svg')}}" alt="..." class="avatar-img" width="50" height="50"></td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Buca</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div> <!-- / .table-responsive -->

                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-5 text-secondary small">
                                         <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span>  <span class="list-pagination-pages"></span>
                                    </div>

                                    <!-- Pagination -->
                                    <ul class="pagination list-pagination mb-0"></ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- / .row -->
                <div class="row">

                    <div class="col-xxl-6 d-flex">

                        <!-- Card -->

                        <div class="card border-0 flex-fill w-100">
                            <div class="card-header border-0 card-header-space-between">

                                <!-- Title -->
                                <h2 class="card-header-title h4 text-uppercase">
                                    Statut des Tickets
                                </h2>

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript: void(0);" class="dropdown-item">
                                            Action
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-around">
                                    <div class="col-lg-6 col-xl-4 mb-7 mb-lg-0">

                                        <!-- Chart -->
                                        <div class="chart-container flex-grow-1">
                                            <canvas id="orderStatusChart"></canvas>

                                            <!-- Labels -->
                                            <div class="position-absolute top-50 start-50 translate-middle text-center">
                                                <p class="fs-5 mb-0 text-muted lh-sm">Tickets</p>
                                                <h3 class="display-2 fw-bold mb-0">329</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-5">
                                        <div class="row h-100 align-items-center">
                                            <div class="col">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto col-lg">

                                                        <!-- Label -->
                                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                                            <span class="legend-circle bg-primary"></span>
                                                            Delivré
                                                        </p>
                                                    </div>
                                                    <div class="col-auto col-lg">

                                                        <!-- Comment -->
                                                        <p class="fs-4 text-muted">
                                                            29%
                                                        </p>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <div class="row justify-content-between">
                                                    <div class="col-auto col-lg">

                                                        <!-- Label -->
                                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                                            <span class="legend-circle bg-dark"></span>
                                                            En Cours
                                                        </p>
                                                    </div>
                                                    <div class="col-auto col-lg">

                                                        <!-- Comment -->
                                                        <p class="fs-4 text-muted">
                                                            45%
                                                        </p>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <div class="row justify-content-between">
                                                    <div class="col-auto col-lg">

                                                        <!-- Label -->
                                                        <p class="fs-4 d-flex align-items-center fw-semibold mb-0">
                                                            <span class="legend-circle bg-gray-400"></span>
                                                            Restants
                                                        </p>
                                                    </div>
                                                    <div class="col-auto col-lg">

                                                        <!-- Comment -->
                                                        <p class="fs-4 text-muted">
                                                            81%
                                                        </p>
                                                    </div>
                                                </div> <!-- / .row -->
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 d-flex">

                        <!-- Card -->
                        <div class="card border-0 flex-fill w-100">
                            <div class="card-header border-0">

                                <!-- Title -->
                                <h2 class="card-header-title h4 text-uppercase">
                                    Gestion de Revenue
                                </h2>
                            </div>

                            <div class="card-body">

                                <!-- Map -->
                                <div class="map h-280px" id="worldMap"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->

                <div class="row">
                    <div class="col d-flex">

                        <!-- Card -->

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container-fluid -->

            <!-- Footer-->
            <!-- Footer -->
            <footer class="mt-auto">
                <div class="container-fluid mt-4 mb-6 text-muted">
                    <div class="row justify-content-between">
                        <div class="col">
                            © K-SOFT. 2023
                        </div>


                    </div> <!-- / .row -->
                </div>
            </footer>

            <!-- Button -->


        </main> <!-- / main -->

        <!-- JAVASCRIPT-->
        <!-- Theme JS -->
        <script src="{{asset('assets/js/bundle.js')}}"></script>    </body>    </body>
</html>
