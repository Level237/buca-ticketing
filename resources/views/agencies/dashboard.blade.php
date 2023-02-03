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
                <a class="navbar-brand" href="index.html.htm">
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
                            <a class="nav-link active " href="#dashboardsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboardsCollapse">
                                <svg viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                <span class="text-buca-secondary -bottom-3">Dashboards</span>
                            </a>
                            <div class="collapse show" id="dashboardsCollapse">
                                <ul class="nav flex-column">

                                    <li class="nav-item">
                                        <a href="{{route('dashboard')}}" class="nav-link active">
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#pagesCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>common-file-double-1</title><path class="a" d="M17.25,23.25H3.75a1.5,1.5,0,0,1-1.5-1.5V5.25"></path><rect class="a" x="5.25" y="0.75" width="16.5" height="19.5" rx="1" ry="1"></rect></svg>
                                <span class="text-buca-secondary">Passagers</span>
                            </a>
                            <div class="collapse " id="pagesCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="account.html.htm" class="nav-link ">
                                            <span>Ajouter un passager</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user.html.htm" class="nav-link ">
                                            <span>Mes Passagers</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#pagesCollapse1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>common-file-double-1</title><path class="a" d="M17.25,23.25H3.75a1.5,1.5,0,0,1-1.5-1.5V5.25"></path><rect class="a" x="5.25" y="0.75" width="16.5" height="19.5" rx="1" ry="1"></rect></svg>
                                <span class="text-buca-secondary">Tickets</span>
                            </a>
                            <div class="collapse " id="pagesCollapse1">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="account.html.htm" class="nav-link ">
                                            <span>Listes de tickets</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="chat.html.htm">
                                <svg viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                <span class="text-buca-secondary">Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="calendar.html.htm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>calendar</title><rect class="a" x="0.752" y="3.75" width="22.5" height="19.5" rx="1.5" ry="1.5"></rect><line class="a" x1="0.752" y1="9.75" x2="23.252" y2="9.75"></line><line class="a" x1="6.752" y1="6" x2="6.752" y2="0.75"></line><line class="a" x1="17.252" y1="6" x2="17.252" y2="0.75"></line></svg>
                                <span class="text-buca-secondary">Voyages</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#tasksCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tasksCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" class="nav-link-icon text-buca-secondary" height="18" width="18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 10.511H10.5"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.261H8.25"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 18.011H8.25"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 23.25H2.25C1.85218 23.25 1.47064 23.092 1.18934 22.8107C0.908035 22.5294 0.75 22.1478 0.75 21.75V6C0.75 5.60218 0.908035 5.22064 1.18934 4.93934C1.47064 4.65804 1.85218 4.5 2.25 4.5H6C6 3.50544 6.39509 2.55161 7.09835 1.84835C7.80161 1.14509 8.75544 0.75 9.75 0.75C10.7446 0.75 11.6984 1.14509 12.4017 1.84835C13.1049 2.55161 13.5 3.50544 13.5 4.5H17.25C17.6478 4.5 18.0294 4.65804 18.3107 4.93934C18.592 5.22064 18.75 5.60218 18.75 6V8.25"></path><path stroke="currentColor" stroke-width="1.5" d="M9.75 4.51099C9.54289 4.51099 9.375 4.34309 9.375 4.13599C9.375 3.92888 9.54289 3.76099 9.75 3.76099"></path><path stroke="currentColor" stroke-width="1.5" d="M9.75 4.51099C9.95711 4.51099 10.125 4.34309 10.125 4.13599C10.125 3.92888 9.95711 3.76099 9.75 3.76099"></path><g><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 23.25C20.5637 23.25 23.25 20.5637 23.25 17.25C23.25 13.9363 20.5637 11.25 17.25 11.25C13.9363 11.25 11.25 13.9363 11.25 17.25C11.25 20.5637 13.9363 23.25 17.25 23.25Z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.9239 15.505L17.0189 19.379C16.9543 19.4649 16.8721 19.536 16.7776 19.5873C16.6832 19.6387 16.5789 19.6692 16.4717 19.6768C16.3645 19.6844 16.2569 19.6689 16.1562 19.6313C16.0555 19.5937 15.964 19.535 15.8879 19.459L14.3879 17.959"></path></g></svg>
                                <span class="text-buca-secondary">Bus</span>
                            </a>
                            <div class="collapse " id="tasksCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="kanban-board.html.htm" class="nav-link ">
                                            <span>Listes des Bus</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="task-details.html.htm" class="nav-link ">
                                            <span>Ajouter un bus</span>
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
                            20+<span class="visually-hidden">unread messages</span>
                        </span>
                    </a>

                    <!-- Notifications offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications" aria-labelledby="offcanvasNotificationsLabel">
                        <div class="offcanvas-header px-5">
                            <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>

                            <div class="d-flex align-items-start">
                                <div class="dropdown">
                                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow w-20px h-20px me-2 text-body" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="16" width="16"><g><circle cx="3.25" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="20.75" cy="12" r="3.25" style="fill: currentColor"></circle></g></svg>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M23.22,2.06a1.49,1.49,0,0,0-2,.59l-8.5,15.43L6.46,11.29a1.5,1.5,0,1,0-2.21,2l7.64,8.34a1.52,1.52,0,0,0,2.42-.29L23.81,4.1A1.5,1.5,0,0,0,23.22,2.06Z" style="fill: currentColor"></path><path d="M2.61,14.63a1.5,1.5,0,0,0-2.22,2l4.59,5a1.52,1.52,0,0,0,2.11.09,1.49,1.49,0,0,0,.1-2.12Z" style="fill: currentColor"></path><path d="M10.3,13a1.41,1.41,0,0,0,2-.54L16.89,4.1a1.5,1.5,0,1,0-2.62-1.45L9.68,11A1.41,1.41,0,0,0,10.3,13Z" style="fill: currentColor"></path></g></svg>
                                                Mark as all read
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M21.5,2.5H2.5a2,2,0,0,0-2,2v3a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1v-3A2,2,0,0,0,21.5,2.5Z" style="fill: currentColor"></path><path d="M21.5,10H2.5a1,1,0,0,0-1,1v8.5a2,2,0,0,0,2,2h17a2,2,0,0,0,2-2V11A1,1,0,0,0,21.5,10Zm-6.25,3.5A1.25,1.25,0,0,1,14,14.75H10a1.25,1.25,0,0,1,0-2.5h4A1.25,1.25,0,0,1,15.25,13.5Z" style="fill: currentColor"></path></g></svg>
                                                Archive all
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M21,19.5a1,1,0,0,0,0-2A1.5,1.5,0,0,1,19.5,16V11.14a8.65,8.65,0,0,0-.4-2.62l-11,11Z" style="fill: currentColor"></path><path d="M14.24,21H9.76a.25.25,0,0,0-.24.22,2.64,2.64,0,0,0,0,.28,2.5,2.5,0,0,0,5,0,2.64,2.64,0,0,0,0-.28A.25.25,0,0,0,14.24,21Z" style="fill: currentColor"></path><path d="M1,24a1,1,0,0,0,.71-.28l22-22a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0l-5,5A7.31,7.31,0,0,0,13,3.07V1a1,1,0,0,0-2,0V3.07a8,8,0,0,0-6.5,8.07V16A1.5,1.5,0,0,1,3,17.5a1,1,0,0,0,0,2h.09L.29,22.29a1,1,0,0,0,0,1.42A1,1,0,0,0,1,24Z" style="fill: currentColor"></path></g></svg>
                                                Disable notifications
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><rect x="4.25" y="4.5" width="5.75" height="7.25" rx="1.25" style="fill: currentColor"></rect><path d="M24,10a3,3,0,0,0-3-3H19V2.5a2,2,0,0,0-2-2H2a2,2,0,0,0-2,2V20a3.5,3.5,0,0,0,3.5,3.5h17A3.5,3.5,0,0,0,24,20ZM3.5,21.5A1.5,1.5,0,0,1,2,20V3a.5.5,0,0,1,.5-.5h14A.5.5,0,0,1,17,3V20a3.51,3.51,0,0,0,.11.87.5.5,0,0,1-.09.44.49.49,0,0,1-.39.19ZM22,20a1.5,1.5,0,0,1-3,0V9.5a.5.5,0,0,1,.5-.5H21a1,1,0,0,1,1,1Z" style="fill: currentColor"></path><rect x="12" y="6.05" width="3.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="12" y="10.05" width="3.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="4" y="14.05" width="11.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="4" y="18.05" width="9" height="2" rx="0.75" style="fill: currentColor"></rect></g></svg>
                                                What's new?
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Button -->
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="offcanvas-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Daniel</h5>
                                                <small class="text-muted">10 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">RE: Email pre-population from external source</p>
                                                <small class="text-secondary">Not sure if we'll need any further instruction on how to utilise the encoded ID in links from the new email broadcast tool.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-info-soft">M</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Mochahost.com</h5>
                                                <small class="text-muted">14 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Customer invoice</p>
                                                <small class="text-secondary">This is a notice that an invoice has been generated on 05/14/2022.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="{{asset('assets/img/buca.jpg')}}" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Harry</h5>
                                                <small class="text-muted">32 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Farewell card</p>
                                                <small class="text-secondary">Hi everyone, thanks to all who have already signed and contributed to Ellie's leaving card.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Gavin</h5>
                                                <small class="text-muted">55 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Weekly cath up</p>
                                                <small class="text-secondary">Let's see how your emails performed in the past week.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Pamela - HR</h5>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">New starter</p>
                                                <small class="text-secondary">I wanted to introduce Alan to you all, who starts today in the Operations Team as our new Global Payroll & Benefits Manager.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="9f5880fc99a40d5021e5a133fe72f232e3883d3a/c965d/assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">James</h5>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Looking for newsletter analyst</p>
                                                <small class="text-secondary">Good morning Brian, I hope you can help with the following. I am looking for somebody who can help us create stronger newsletters.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary-soft">S</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">service.paypal.com</h5>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">You have a Payout!</p>
                                                <small class="text-secondary">Please note that it may take a little while for this payment to appear in the Activity section of your account.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary-soft">C</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">CookieYes</h5>
                                                <small class="text-muted">5 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Welcome to CookieYes!</p>
                                                <small class="text-secondary">Welcome to CookieYes! Thank you for creating an account with us.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Andrew</h5>
                                                <small class="text-muted">6 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Congratulations! - and thank you</p>
                                                <small class="text-secondary">Thank you so much for continuing to leave no stone unturned in pursuit of new milestones of success.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Helen</h5>
                                                <small class="text-muted">9 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Bank Holidays season starts tomorrow</p>
                                                <small class="text-secondary">Our office will be closed on these days, as it will also be on Friday 6 May.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="eec1f115f0af81936bbe3a4f4a4d043cd3c0e7e4/34439/assets/images/profiles/profile-09.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Tiffany</h5>
                                                <small class="text-muted">1 day ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">External meetings and events</p>
                                                <small class="text-secondary">We have updated our external meeting and events protocol. Please have a look at the office board.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-danger-soft">II</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Ionos Info</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Recommend us to earn attractive commissions</p>
                                                <small class="text-secondary">Happy with your product or service? Sign up for the IONOS Referral Program to recommend us to your business partners, friends or family. We'll reward you with attractive commissions when they place an order.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Edward</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Website change request</p>
                                                <small class="text-secondary">Please add video overlay option to microsite header image</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary">BT</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Bootstrap Themes</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">[Bootstrap Themes] New order (123456)!</p>
                                                <small class="text-secondary">You've received the following order from alansmith</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="e83422b2242219796524c41b945eb0a4b4b75dfd/caa0b/assets/images/profiles/profile-08.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Greg</h5>
                                                <small class="text-muted">4 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Greg Smith (Jira) 2</p>
                                                <small class="text-secondary">[JIRA] (WEB-1022) Add Full Width Video Content Block to microsites</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="790b7dd581a3ac4fd0410afad0fb12c6e93c9e7a/b0657/assets/images/profiles/profile-07.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Michael</h5>
                                                <small class="text-muted">5 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Hard drive limit</p>
                                                <small class="text-secondary">Your hard drive is close to its storage cap. Once exceeded, you can't add new items or sync changes.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-info">RC</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Rave Coffee</h5>
                                                <small class="text-muted">6 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">It's Double Points - ⏰ 24 hours only</p>
                                                <small class="text-secondary">Login to your Rave account to place your order and you will automatically earn double points on every $ spent.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="4b8c918c73e2c72876e4bd4ba8c89401bae69d14/5923c/assets/images/profiles/profile-03.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">John</h5>
                                                <small class="text-muted">7 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">John Po (Jira)</p>
                                                <small class="text-secondary">Improving slide arrows and indicators on gift impact, testimonial and victories module</small>
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
                                            57
                                        </p>
                                    </div>
                                    <div class="col text-end text-truncate">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Mensuels
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            681
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
                                            Tickets
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            6 328
                                        </h2>
                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" height="30" width="30" class="text-buca-theme"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19.1249H15.921C16.2753 19.125 16.6182 18.9996 16.889 18.7709C17.1597 18.5423 17.3407 18.2253 17.4 17.8759L20.037 2.37593C20.0965 2.02678 20.2776 1.70994 20.5483 1.48153C20.819 1.25311 21.1618 1.12785 21.516 1.12793H22.5"></path><path stroke="currentColor" stroke-width="1.5" d="M7.875 22.125C7.66789 22.125 7.5 21.9571 7.5 21.75C7.5 21.5429 7.66789 21.375 7.875 21.375"></path><path stroke="currentColor" stroke-width="1.5" d="M7.875 22.125C8.08211 22.125 8.25 21.9571 8.25 21.75C8.25 21.5429 8.08211 21.375 7.875 21.375"></path><path stroke="currentColor" stroke-width="1.5" d="M15.375 22.125C15.1679 22.125 15 21.9571 15 21.75C15 21.5429 15.1679 21.375 15.375 21.375"></path><path stroke="currentColor" stroke-width="1.5" d="M15.375 22.125C15.5821 22.125 15.75 21.9571 15.75 21.75C15.75 21.5429 15.5821 21.375 15.375 21.375"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.9529 14.6251H5.88193C5.21301 14.625 4.5633 14.4014 4.03605 13.9897C3.5088 13.5781 3.13425 13.002 2.97193 12.3531L1.52193 6.55309C1.49426 6.44248 1.49218 6.32702 1.51583 6.21548C1.53949 6.10394 1.58827 5.99927 1.65846 5.90941C1.72864 5.81955 1.81839 5.74688 1.92089 5.69692C2.02338 5.64696 2.13591 5.62103 2.24993 5.62109H19.4839"></path></svg>
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
                                            57
                                        </p>
                                    </div>
                                    <div class="col text-end text-truncate">

                                        <!-- Label -->
                                        <p class="fs-6 text-muted text-uppercase mb-0">
                                            Mensuel
                                        </p>

                                        <!-- Comment -->
                                        <p class="fs-5 fw-bold mb-0">
                                            681
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
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="5c7ec5413a460dc895a7798c37ce609f43ad36b0/c94b0/assets/images/profiles/profile-29.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Kareem Q. Weeks</span>
                                            </td>
                                            <td class="email">eget@aliquetProinvelit.co.uk</td>
                                            <td class="id">#9761</td>
                                            <td class="date" data-signed="1622329200">05.30.2021</td>
                                            <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <span class="avatar-title text-bg-danger-soft">DH</span>
                                                </div>
                                                <span class="name fw-bold">Drew R. Hatfield</span>
                                            </td>
                                            <td class="email">Integer.vulputate@facilisi.edu</td>
                                            <td class="id">#4798</td>
                                            <td class="date" data-signed="1626562800">07.18.2021</td>
                                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="693e2209e9a62e54c60745dd18751d70c3dec10a/9d43e/assets/images/profiles/profile-22.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Kitra F. Strickland</span>
                                            </td>
                                            <td class="email">Donec.consectetuer@dolorNulla.net</td>
                                            <td class="id">#1246</td>
                                            <td class="date" data-signed="1651791600">05.06.2022</td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Jack Dennis</span>
                                            </td>
                                            <td class="email">Quisque.libero.lacus@torquentper.com</td>
                                            <td class="id">#1099</td>
                                            <td class="date" data-signed="1658703600">07.25.2022</td>
                                            <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="d48629dc873bf03c72cd58826b5de65bc800aaac/5bb69/assets/images/profiles/profile-10.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Tyler Hartman</span>
                                            </td>
                                            <td class="email">arcu.imperdiet@Pellentesqueultriciesdignissim.com</td>
                                            <td class="id">#9151</td>
                                            <td class="date" data-signed="1651359600">05.01.2022</td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="14bd6c6c1ba1296a1542d31d7dd9490e8bc9e472/d1f70/assets/images/profiles/profile-18.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Hally Gilmore</span>
                                            </td>
                                            <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                                            <td class="id">#9846</td>
                                            <td class="date" data-signed="1633302000">10.04.2021</td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-circle avatar-xs me-2">
                                                    <img src="b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                                </div>
                                                <span class="name fw-bold">Rosalyn Cherry</span>
                                            </td>
                                            <td class="email">at.egestas.a@eunullaat.co.uk</td>
                                            <td class="id">#9564</td>
                                            <td class="date" data-signed="1593558000">07.01.2021</td>
                                            <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- / .table-responsive -->

                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-5 text-secondary small">
                                        Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
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
                                    Order status
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
                                        <a href="javascript: void(0);" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="javascript: void(0);" class="dropdown-item">
                                            Something else here
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
                                                <p class="fs-5 mb-0 text-muted lh-sm">ordered products</p>
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
                                                            Delivered
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
                                                            In progress
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
                                                            To-do
                                                        </p>
                                                    </div>
                                                    <div class="col-auto col-lg">

                                                        <!-- Comment -->
                                                        <p class="fs-4 text-muted">
                                                            26%
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
                                    Revenue by locations
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
                        <div class="card border-0 flex-fill w-100">
                            <div class="card-header border-0 card-header-space-between">

                                <!-- Title -->
                                <h2 class="card-header-title h4 text-uppercase">
                                    Sales report
                                </h2>

                                <ul class="nav">
                                    <li class="nav-item" data-toggle="chart" data-target="#salesReportChart" data-dataset="0">
                                        <a class="nav-link active chart-legend" href="#" data-bs-toggle="tab">
                                            <span class="legend-circle-lg bg-primary"></span>
                                            Income
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#salesReportChart" data-dataset="1">
                                        <a class="nav-link chart-legend" href="#" data-bs-toggle="tab">
                                            <span class="legend-circle-lg bg-dark"></span>
                                            Expense
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body d-flex flex-column">

                                <!-- Chart -->
                                <div class="chart-container flex-grow-1 h-275px">
                                    <canvas id="salesReportChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container-fluid -->

            <!-- Footer-->
            <!-- Footer -->
            <footer class="mt-auto">
                <div class="container-fluid mt-4 mb-6 text-muted">
                    <div class="row justify-content-between">
                        <div class="col">
                            © Dashly. 2023 Webinning.
                        </div>

                        <div class="col-auto">
                            v1.3.1
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
