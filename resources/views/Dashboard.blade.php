<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <!-- Simple bar CSS -->
    <link href="{{ asset('assets/css/simplebar.css') }}" rel="stylesheet">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link href="{{ asset('assets/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/uppy.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/quill.snow.css') }}" rel="stylesheet">
    <!-- Date Range Picker CSS -->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link href="{{ asset('assets/css/app-light.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
<<<<<<< HEAD
        < script src = "{{ asset('js/jquery.min.js') }}" >

=======
    < script src = "{{ asset('js/jquery.min.js') }}" >
>>>>>>> 5a23dbf6df7a67e7f55f0fa4a348ef14e1392e7d
    </script>


    </script>
    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    .container {
        max-width: 1400px;
        padding: 0 15px;
        margin: 0 auto;
    }

    h2 {
        font-size: 32px;
        margin-bottom: 1em;
    }

    .cards {
        display: flex;
        padding: 25px 0px;
        list-style: none;
        overflow-x: scroll;
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
    }

    .card {
        display: flex;
        flex-direction: column;
        flex: 0 0 100%;
        padding: 20px;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
        scroll-snap-align: start;
        transition: all 0.2s;
    }

    .card:not(:last-child) {
        margin-right: 10px;
    }

    .card:hover {
        color: var(--white);
        background: #BF5C1C;
    }

    .card .card-title {
        font-size: 20px;
    }

    .card .card-content {
        margin: 20px 0;
        max-width: 85%;
    }

    .card .card-link-wrapper {
        margin-top: auto;
    }

    .card .card-link {
        display: inline-block;
        text-decoration: none;
        color: white;
        background: var(--red);
        padding: 6px 12px;
        border-radius: 8px;
        transition: background 0.2s;
    }

    .card:hover .card-link {
        background: #BF5C1C;
    }

    .cards::-webkit-scrollbar {
        height: 12px;
    }

    .cards::-webkit-scrollbar-thumb,
    .cards::-webkit-scrollbar-track {
        border-radius: 92px;
    }

    .cards::-webkit-scrollbar-thumb {
        background: var(--darkred);
    }

    .cards::-webkit-scrollbar-track {
        background: var(--thumb);
    }

    @media (min-width: 500px) {
        .card {
            flex-basis: calc(50% - 10px);
        }

        .card:not(:last-child) {
            margin-right: 20px;
        }
    }

    @media (min-width: 700px) {
        .card {
            flex-basis: calc(calc(100% / 3) - 20px);
        }

        .card:not(:last-child) {
            margin-right: 30px;
        }
    }

    @media (min-width: 1100px) {
        .card {
            flex-basis: calc(25% - 30px);
        }

        .card:not(:last-child) {
            margin-right: 40px;
        }
    }

    :root {
        --red: #ef233c;
        --darkred: #6A3A2B;
        --platinum: #e5e5e5;
        --black: #2b2d42;
        --white: #fff;
        --thumb: #edf2f4;
    }

    /*Dashboard*/
    .Dashboard {
        background-color: #F7F7F7;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #F7F7F7;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #F7F7F7;
    }

    /* SearchBox*/
    .search-container {
        display: flex;
        align-items: center;
    }

    /*.search-box {
          padding: 8px 80px;
          margin-right: 8px;
          border: none;
          border-radius: 24px;
      }*/
    .search-box {
        padding: 8px 80px;
        /* Menggunakan 10vw untuk membuat padding responsif */
        margin-right: 8px;
        border: none;
        border-radius: 24px;
        max-width: 300px;
        /* Optional: Mengatur lebar maksimum search box */
    }

    .search-btn {
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #007bff;
        /* Warna tombol dapat disesuaikan */
        color: #fff;
    }

    .search-icon {
        font-size: 1.5rem;
        /* Sesuaikan ukuran ikon sesuai kebutuhan */
        margin-right: 8px;
        color: #007bff;
        /* Warna ikon dapat disesuaikan */
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #F7F7F7;
    }

    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    :root {
        --header-height: 3rem;
        --nav-width: 75px;
        --first-color: #F7F7F7;
        --first-color-light: #000000;
        --white-color: #EFE0CA;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 0rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: #F7F7F7;
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: #000000;
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: #000000;
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    .show {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
        color: var(--white-color)
    }

    .active::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }

    @media screen and (min-width: 768px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 0rem)
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show {
            width: calc(var(--nav-width) + 188px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }

        .header {
            display: flex;
            align-items: center;
        }

        .header_toggle {
            margin-right: 15px;
        }

        .search-container {
            margin-right: -205px;
        }

        .header_user {
            display: flex;
            align-items: center;
        }

        .header_img img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 5px;
            /* Jarak antara gambar dan nama */
        }

        .user_name {
            font-family: 'Poppins', sans-serif;
            color: black;
            font-size: 14px;
        }

    }
    </style>
</head>

<body className='' id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="search-container">
            <input type="text" placeholder="Search for anything" class="search-box">
        </div>
        <div class="header_user">
            <div class="user_info">
                <span class="user_name">Welcome back, Choi Yeonjun!</span>
            </div>
            <div class="header_img">
                <img src="../assets/foto/user.svg" alt="">
            </div>

        </div>
    </header>

    <!-- <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="search-container">
      <input type="text" placeholder="Search for anything" class="search-box">
    </div>
    <div class="header_img">
      <img src="user.svg" alt="">
    </div>
  </header> -->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="../assets/foto/Logo.png" alt="Logo" class="nav_logo-icon"
                        style="width: 42px; height: 30px;"> <span class="nav_logo-name">Divisi RnD</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link active">
                        <img src="../assets/foto/homee.svg" alt="">
                        <span class="nav_name">Dashboard</span>
<<<<<<< HEAD
                    </a><a href="{{ route('feeds') }}" class="nav_link">
=======
                    </a>
                    </a> <a href="{{ route('feeds') }}" class="nav_link">
>>>>>>> 5a23dbf6df7a67e7f55f0fa4a348ef14e1392e7d
                        <img src="../assets/foto/feeds.svg" alt="">
                        <span class="nav_name">Feeds</span> </a>
                    <a href="{{ route('project') }}" class="nav_link">
                        <img src="../assets/foto/carbon_collaborate.svg" alt="">
                        <span class="nav_name">Collaboration</span>
                    </a> <a href="{{ route('event') }}" class="nav_link">
                        <img src="../assets/foto/calander.svg" alt="">
                        <span class="nav_name">Calendar</span>
                    </a> <a href="{{ route('profile') }}" class="nav_link">
                        <img src="../assets/foto/User2.svg" alt="">
                        <span class="nav_name">Profile</span>
                    </a>

                </div>

            </div>
            <a href="/" class="nav_link">
                <img src="../assets/foto/logout.svg" alt="">
                <span class="nav_name">Logout</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="dashboard">
        <div class="container">
            <h3 style="text-align: center; font-family: 'Poppins', sans-serif; color: black;">PROGRES
                PENELITIAN</h3>
            <ul class="cards">
                <li class="card">
                    <div style="width: 100%;">
                        <h3 class="card-title" style="color:#000000">Development Research</h3>
                        <div class="card-content">
                            <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed
                                scelerisque lacus nisi, quis auctor lorem ornare vel.</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orangg.svg" alt="" style="margin-right: 10px;">
                        <i class='bx bxs-right-arrow-circle nav_icon' style="margin-left: auto;"></i>
                        <span class="nav_name"></span>
                    </div>
                </li>
                <li class="card">
                    <div>
                        <h3 class="card-title" style="color:#000000">Design</h3>
                        <div class="card-content">
                            <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed
                                scelerisque lacus nisi, quis auctor lorem ornare vel.</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang2.svg" alt="" style="margin-right: 10px;">
                        <i class='bx bxs-right-arrow-circle nav_icon' style="margin-left: auto;"></i>
                        <span class="nav_name"></span>
                    </div>
                </li>
                <li class="card">
                    <div>
                        <h3 class="card-title" style="color:#000000">Develompment Progres</h3>
                        <div class="card-content">
                            <p>Phasellus ultrices lorem vel bibendum ultricies. In hendrerit nulla a ante
                                dapibus pulvinar
                                eu eget quam.</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang3.svg" alt="" style="margin-right: 10px;">
                        <i class='bx bxs-right-arrow-circle nav_icon' style="margin-left: auto;"></i>
                        <span class="nav_name"></span>
                    </div>
                </li>
                <li class="card">
                    <div>
                        <h3 class="card-title" style="color:#000000">Desain UX & UI</h3>
                        <div class="card-content">
                            <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed
                                scelerisque lacus nisi, quis auctor lorem ornare vel.</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orangg.svg" alt="" style="margin-right: 10px;">
                        <i class='bx bxs-right-arrow-circle nav_icon' style="margin-left: auto;"></i>
                        <span class="nav_name"></span>
                    </div>
                </li>
                <li class="card">
                    <div>
                        <h3 class="card-title" style="color:#000000">Infrastructure Development</h3>
                        <div class="card-content">
                            <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed
                                scelerisque lacus nisi, quis auctor lorem ornare vel.</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang2.svg" alt="" style="margin-right: 10px;">
                        <i class='bx bxs-right-arrow-circle nav_icon' style="margin-left: auto;"></i>
                        <span class="nav_name"></span>
                    </div>
                </li>
            </ul>
        </div>

        <!---Feeds-->
        <div class="container">
            <h3 style="text-align: center; font-family: 'Poppins', sans-serif; color: black;">FEEDS
            </h3>
            <ul class="cards">
                <li class="card">
                    <div style="width: 100%;">
                        <img src="../assets/foto/berita.svg" alt="" style="width: 100%; max-width: 300px;">
                        <div class="card-content">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam
                                harum natus fuga et repellat in maiores</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orangg.svg" alt="" style="margin-right: 10px;">
                        <img src="../assets/foto/komen.svg" alt="" style="margin-left: auto;">
                    </div>
                </li>
                <li class="card">
                    <div style="width: 100%;">
                        <img src="../assets/foto/berita1.svg" alt="" style="width: 100%; max-width: 300px;">
                        <div class="card-content">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam
                                harum natus fuga et repellat in maiores</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang2.svg" alt="" style="margin-right: 10px;">
                        <img src="../assets/foto/komen.svg" alt="" style="margin-left: auto;">
                    </div>
                </li>
                <li class="card">
                    <div style="width: 100%;">
                        <img src="../assets/foto/berita2.svg" alt="" style="width: 100%; max-width: 300px;">
                        <div class="card-content">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam
                                harum natus fuga et repellat in maiores</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang3.svg" alt="" style="margin-right: 10px;">
                        <img src="../assets/foto/komen.svg" alt="" style="margin-left: auto;">
                    </div>
                </li>
                <li class="card">
                    <div style="width: 100%;">
                        <img src="../assets/foto/berita3.svg" alt="" style="width: 100%; max-width: 300px;">
                        <div class="card-content">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam
                                harum natus fuga et repellat in maiores</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orangg.svg" alt="" style="margin-right: 10px;">
                        <img src="../assets/foto/komen.svg" alt="" style="margin-left: auto;">
                    </div>
                </li>
                <li class="card">
                    <div style="width: 100%;">
                        <img src="../assets/foto/berita2.svg" alt="" style="width: 100%; max-width: 300px;">
                        <div class="card-content">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae magnam
                                harum natus fuga et repellat in maiores</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper" style="display: flex; align-items: center;">
                        <img src="../assets/foto/orang3.svg" alt="" style="margin-right: 10px;">
                        <img src="../assets/foto/komen.svg" alt="" style="margin-left: auto;">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!---Task-->

    <div class="container" style="background-color: EFE0CA;">
        <br>
        <h3 style="text-align: center; font-family: 'Poppins', sans-serif; color: black;">Upcoming Task</h3>
        <p style="text-align: center;">Hi Muhammad Farraseka Fadhil! </p>
        <p style="text-align: center;">Segera selesaikan tugas research and development dan laporkan
            progresnya kepada Team Segera!</p>

        <br>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center my-3">
                    <div class="col">

                    </div>
                    <div class="col-auto">
                    </div>
                </div>
                <div id='calendar'></div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.custom.js') }}"></script>
<<<<<<< HEAD

    <script>
        /** full calendar */
        var calendarEl = document.getElementById('calendar');
        if (calendarEl) {
            document.addEventListener('DOMContentLoaded', function () {
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['dayGrid', 'timeGrid', 'list', 'bootstrap'],
                    timeZone: 'UTC',
                    themeSystem: 'bootstrap',
                    header: {
                        left: 'today, prev, next',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },
                    buttonIcons: {
                        prev: 'fe-arrow-left',
                        next: 'fe-arrow-right',
                        prevYear: 'left-double-arrow',
                        nextYear: 'right-double-arrow'
                    },
                    weekNumbers: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: 'https://fullcalendar.io/demo-events.json'
                });
                calendar.render();
            });
        }
=======
>>>>>>> 5a23dbf6df7a67e7f55f0fa4a348ef14e1392e7d

    <script>
    /** full calendar */
    var calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        document.addEventListener('DOMContentLoaded', function() {
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'timeGrid', 'list', 'bootstrap'],
                timeZone: 'UTC',
                themeSystem: 'bootstrap',
                header: {
                    left: 'today, prev, next',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                buttonIcons: {
                    prev: 'fe-arrow-left',
                    next: 'fe-arrow-right',
                    prevYear: 'left-double-arrow',
                    nextYear: 'right-double-arrow'
                },
                weekNumbers: true,
                eventLimit: true, // allow "more" link when too many events
                events: 'https://fullcalendar.io/demo-events.json'
            });
            calendar.render();
        });
    }
    </script>

    <!--Container Main end-->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
    </script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
    </script>
    <script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
        e.preventDefault();
    });
    </script>

</body>

</html>