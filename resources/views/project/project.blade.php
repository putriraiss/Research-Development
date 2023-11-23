<html data-theme="retro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RnD - Projects</title>
    <link href="{{ asset('assets/css/simplebar.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link href="{{ asset('assets/css/app-light.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        :root {
            --red: #ef233c;
            --darkred: #6A3A2B;
            --platinum: #e5e5e5;
            --black: #2b2d42;
            --white: #fff;
            --thumb: #edf2f4;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #F7F7F7;
        }

        /* Handle  */
        ::-webkit-scrollbar-thumb {
            background: #F7F7F7;
        }
    ::-webkit-scrollbar {
        width: 8px;
    }

    :root {
        --red: #ef233c;
        --darkred: #6A3A2B;
        --platinum: #e5e5e5;
        --black: #2b2d42;
        --white: #fff;
        --thumb: #edf2f4;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #F7F7F7;
    }

    /* Handle  */
    ::-webkit-scrollbar-thumb {
        background: #F7F7F7;
    }

        */

        /* SearchBox*/
        .search-container {
            display: flex;
            align-items: center;
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

        /* Handle on hover
            ::-webkit-scrollbar-thumb:hover {
                background: #F7F7F7;
            } */

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

        .btn {
            content: inherit;
            background-color: #BF5C1C;
            color: white;
        }

        .btn:hover {

            color: #BF5C1C;
            background-color: var(--white);

        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 0rem);
                font-family: 'Poppins', sans-serif;
                overflow-x: hidden;
                margin: 0;
                padding: 0;
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


                /*Projects*/
            }

            .card {
                display: flex;
                flex-direction: column;
                padding: 10px;
                background: var(--white);
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
                scroll-snap-align: start;
                transition: all 0.2s;
                margin-bottom: 20px;
                min-height: auto;
                /* Adjust the minimum height according to your preference */
            }

            .card-tengah {
                display: flex;
                flex-direction: column;
                padding: 10px;
                background: var(--white);
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
                scroll-snap-align: start;
                transition: all 0.2s;
                margin-bottom: 35px;
                width: 500px;
                align-items: left;
                margin-right: 20px;
            }

            .title {
                font-size: 28px;
                font-family: 'Poppins', sans-serif;
                color: #4f4f4f;
                margin-bottom: 1em;
                font-weight: 500px;
            }

            .container {
                display: flex;
                justify-content: space-between;
            }

            .col-span-1 {
                width: 23%;
                margin-top: 100px;
            }

            .col-span-2 {
                width: 49%;
                margin-top: 70px;
            }

            .col-span-3 {
                width: 100%;
                margin-top: 1em;
                margin-right: 8px;
                margin-left: 8px;
            }

            .c-project {
                width: 40px;
                height: 40px;
            }

            .table {
                display: flex;
                flex-direction: column;
                padding: 10px;
                background: var(--white);
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(20%, 20%, 20%, 20%);
                scroll-snap-align: start;
                transition: all 0.2s;
                margin-bottom: 20px;
            }

            .avatar {
                margin-bottom: 20px;
                margin-left: 20px;
            }

            /* Tambahkan CSS untuk kalender dan teman-temannya */
            .calendar-friends-container {
                display: flex;
                align-items: center;
                margin-left: 8px;
            }

            .calendar-friends-container img {
                margin-left: 5px;
            }

            .calendar-friends-container p {
                margin-bottom: 5px;
                font-size: 15px;
                margin-left: 5px;
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
                <span class="user_name" style="margin-right: 20px;">Welcome back, Choi Yeonjun!</span>
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
                        style="width: 42px; height: 30px;"> <span class="nav_logo-name">Divisi
                        RnD</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link active">
                        <img src="../assets/foto/homee.svg" alt="">
                        <span class="nav_name">Dashboard</span>
                    </a><a href="{{ route('feeds') }}" class="nav_link">
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
            <a href="#" class="nav_link">
                <img src="../assets/foto/logout.svg" alt="">
                <span class="nav_name">Logout</span>
            </a>
        </nav>
                <a href="{{ route('dashboard') }}" class="nav_link active">
                    <img src="../assets/foto/homee.svg" alt="">
                    <span class="nav_name">Dashboard</span>
                </a>
                </a> <a href="{{ route('feeds') }}" class="nav_link">
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

    <!-- Container Main start -->
    <div class="dashboard">
        <div class="container">
            <div class="col-span-1">
                <div style="display: flex; align-items: center;">
                    <h3 class="title"
                        style="text-align: left; margin-left: 8px; font-family: 'Poppins', sans-serif; color: black; font-weight:bold;color:#4f4f4f;">
                        Projects</h3>
                    <img src="../assets/foto/new-add.png" alt=""
                        style="margin-left: auto; margin-top: -35px; right: 30px;width:30px;height:30px;">
                </div>
                <ul class="cards">
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline"
                                    style="color:forestgreen; margin-top:14px;">On Track</div>
                                <h4 class="card-title" style="color:#4f4f4f; margin-top: 15px">Environment Impact
                                    Mitigation</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" alt=""
                                style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                        </div>
                    </li>
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline" style="color:orange; margin-top:15px;">On
                                    Risk</div>
                                <h4 class="card-title" style="color:#4f4f4f; margin-top: 15px">Safety Enhancement</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" alt=""
                                style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                        </div>
                    </li>
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline" style="color:red; margin-top:15px;">Off
                                    Track</div>
                                <h4 class="card-title" style="color:#4f4f4f; margin-top: 15px">Underground
                                    Infrastructure</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" alt=""
                                style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                        </div>
                    </li>
                </ul>
            </div>

            <!-- TENGAH -->
            <div class="col-span-2" style="margin-left: 30px; margin-right: 15px;">
                <p id="project-date-made" style="margin-bottom:5px;font-size:15px;">21 November 2023</p>
                <h3 class="title"
                    style="text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                    Environment Impact Mitigation</h3>
                <p id="project-manager"
                    style="margin-top: -20px; margin-bottom:5px; font-size:15px;color:#4f4f4f;font-weight:500;">General
                    Manager Choi Yeonjun</p>
                <div style="display: flex; align-items: center;">
                    <progress class="progress progress-warning w-56" value="70" max="100"
                        style="margin-top: 10px; margin-bottom: 10px;"></progress>
                    <p style="margin-bottom:5px; margin-left: 20px;font-size:15px;"> 55% Completed</p>
                </div>

                <h4 class="card-title" style="color:#4f4f4f; margin-top: 25px">Overview</h4>
                <p style="text-align: justify; text-indent:50px;">The Environment Impact Mitigation project is a
                    comprehensive initiative designed to address and alleviate the environmental effects associated with
                    mining operations. It seeks to minimize, if not entirely eliminate, the negative consequences on the
                    surrounding ecosystems, communities, and natural resources. This project embodies a commitment to
                    responsible and sustainable mining practices.</p>
                <div style="display: flex; align-items: center;">
                    <h4 class="card-title" style="color:#4f4f4f; margin-top: 25px">Tasks</h4>
                    <img src="../assets/foto/new-add.png" alt=""
                        style="margin-left: auto; margin-right:15px;margin-top: 20px; right: 30px;width:30px;height:30px;">
                </div>
                <div class="col-span-3">
                    <div class="dashboard">
                        <div class="container">
                            <div class="card card-tengah" style="position: relative;">
                                <div style="width: 100%;">
                                    <div class="card-content">
                                        <div class="badge badge-primary"
                                            style="background-color: #BF5C1C;color: #FFFFFF;margin-top:15px;margin-left:10px;margin-bottom:15px">
                                            Research</div>
                                        <h4 class="card-title" style="color:#4f4f4f;margin-left:10px;font-size:20px;">
                                            Infrastructure Development.</h4>
                                        <div class="container"
                                            style="display:flex;text-align:right;align-content:right;margin-left:0;">
                                            <div
                                                style="display:flex; width:100%;align-content:left;text-align:left;align-items:left;">
                                                <img src="../assets/foto/calendar-icon.png" alt=""
                                                    style="margin-left: auto; width:20px; height:20px;">
                                                <p id="cal-date"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    Nov 21</p>
                                                <img src="../assets/foto/chat-notif.png" alt=""
                                                    style="text-align:left;margin-left: 5px;width:20px; height:20px;">
                                                <p id="chat-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    2</p>
                                                <img src="../assets/foto/pin.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="pin-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    2</p>
                                                <img src="../assets/foto/list.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="list-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:32px;">
                                                    6/6</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-link-wrapper" style="display: flex; align-items: center;">
                                    <img src="../assets/foto/menu-dot.png" alt=""
                                        style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                                </div>
                            </div>
                            <div class="card card-tengah" style="position: relative;">
                                <div style="width: 100%;">
                                    <div class="card-content">
                                        <div class="badge badge-primary"
                                            style="background-color: #BF5C1C;color: #FFFFFF;margin-top:15px;margin-left:10px;margin-bottom:15px">
                                            Developer</div>
                                        <h4 class="card-title" style="color:#4f4f4f;margin-left:10px;font-size:20px;">
                                            Marketing page redesigning.</h4>
                                        <div class="container"
                                            style="display:flex;text-align:right;align-content:right;margin-left:0;">
                                            <div
                                                style="display:flex; width:100%;align-content:left;text-align:left;align-items:left;">
                                                <img src="../assets/foto/calendar-icon.png" alt=""
                                                    style="margin-left: auto; width:20px; height:20px;">
                                                <p id="cal-date"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    Sep 12</p>
                                                <img src="../assets/foto/empty-chat.png" alt=""
                                                    style="text-align:left;margin-left: 5px;width:20px; height:20px;">
                                                <p id="chat-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    0</p>
                                                <img src="../assets/foto/pin.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="pin-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    0</p>
                                                <img src="../assets/foto/list.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="list-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:31px;">
                                                    1/5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-link-wrapper" style="display: flex; align-items: center;">
                                    <img src="../assets/foto/menu-dot.png" alt=""
                                        style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KANAN -->
            <div class="col-span-1" style="margin-left: 10px; margin-right: -35px;">
                <!-- TEAM MEMBER -->
                <div style="display: flex; align-items: center;">
                    <h3 class="title"
                        style="text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                        Team Members</h3>
                    <img src="../assets/foto/user-add.png" alt=""
                        style="margin-left: auto; margin-right:15px;margin-top: -25px; right: 30px;width:30px;height:30px;">
                </div>
                <div class="overflow-x-auto">
                    <table class="table" id="team-member">
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/user.svg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Choi Yeonjun</div>
                                            <div class="text-sm opacity-50">Project Owner, General Manager</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/soobin.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Choi Soobin</div>
                                            <div class="text-sm opacity-50">Developer, Web Designer, Research</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/akaso.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Akaso Eiji</div>
                                            <div class="text-sm opacity-50">UI/UX, Web Designer</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/emo.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Hiro Hamada</div>
                                            <div class="text-sm opacity-50">Developer, Web Designer, Research</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TASK STATUS -->
                    <h3 class="title"
                        style="margin-top:35px;text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                        Task Status</h3>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <label>
                                                <input type="checkbox" class="checkbox flex rounded-full"
                                                    style="margin-top:20px;">
                                            </label>
                                            <div class="font-bold" style="font-size:18px;">Infrastructure Development.
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                            <!-- Menambahkan margin-top agar progress terletak di bawah tulisan -->
                                            <progress class="progress progress-success" value="70" max="100"
                                                style="margin-left:35px;width: 150px;"></progress>
                                            <p style="margin-bottom:5px; font-size:15px; margin-left:8px;">70% Done</p>
                                        </div>
                                    </td>
                                </tr>
                                <!-- row 2 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <label>
                                                <input type="checkbox" class="checkbox flex rounded-full"
                                                    style="margin-top:20px;">
                                            </label>
                                            <div class="font-bold" style="font-size:18px;">Marketing Page Redesign.
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                            <!-- Menambahkan margin-top agar progress terletak di bawah tulisan -->
                                            <progress class="progress progress-error" value="30" max="100"
                                                style="margin-left:35px;width: 150px;"></progress>
                                            <p style="margin-bottom:5px; font-size:15px; margin-left:8px;">30% Done</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Container Main end-->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
    </script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function (event) {
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
        myLink.addEventListener('click', function (e) {
            e.preventDefault();
        });


                <h4 class="card-title" style="color:#4f4f4f; margin-top: 25px">Overview</h4>
                <p style="text-align: justify; text-indent:50px;">The Environment Impact Mitigation project is a
                    comprehensive initiative designed to address and alleviate the environmental effects associated with
                    mining operations. It seeks to minimize, if not entirely eliminate, the negative consequences on the
                    surrounding ecosystems, communities, and natural resources. This project embodies a commitment to
                    responsible and sustainable mining practices.</p>
                <div style="display: flex; align-items: center;">
                    <h4 class="card-title" style="color:#4f4f4f; margin-top: 25px">Tasks</h4>
                    <img src="../assets/foto/new-add.png" alt=""
                        style="margin-left: auto; margin-right:15px;margin-top: 20px; right: 30px;width:30px;height:30px;">
                </div>
                <div class="col-span-3">
                    <div class="dashboard">
                        <div class="container">
                            <div class="card card-tengah" style="position: relative;">
                                <div style="width: 100%;">
                                    <div class="card-content">
                                        <div class="badge badge-primary"
                                            style="background-color: #BF5C1C;color: #FFFFFF;margin-top:15px;margin-left:10px;margin-bottom:15px">
                                            Research</div>
                                        <h4 class="card-title" style="color:#4f4f4f;margin-left:10px;font-size:20px;">
                                            Infrastructure Development.</h4>
                                        <div class="container"
                                            style="display:flex;text-align:right;align-content:right;margin-left:0;">
                                            <div
                                                style="display:flex; width:100%;align-content:left;text-align:left;align-items:left;">
                                                <img src="../assets/foto/calendar-icon.png" alt=""
                                                    style="margin-left: auto; width:20px; height:20px;">
                                                <p id="cal-date"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    Nov 21</p>
                                                <img src="../assets/foto/chat-notif.png" alt=""
                                                    style="text-align:left;margin-left: 5px;width:20px; height:20px;">
                                                <p id="chat-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    2</p>
                                                <img src="../assets/foto/pin.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="pin-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    2</p>
                                                <img src="../assets/foto/list.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="list-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:32px;">
                                                    6/6</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-link-wrapper" style="display: flex; align-items: center;">
                                    <img src="../assets/foto/menu-dot.png" alt=""
                                        style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                                </div>
                            </div>
                            <div class="card card-tengah" style="position: relative;">
                                <div style="width: 100%;">
                                    <div class="card-content">
                                        <div class="badge badge-primary"
                                            style="background-color: #BF5C1C;color: #FFFFFF;margin-top:15px;margin-left:10px;margin-bottom:15px">
                                            Developer</div>
                                        <h4 class="card-title" style="color:#4f4f4f;margin-left:10px;font-size:20px;">
                                            Marketing page redesigning.</h4>
                                        <div class="container"
                                            style="display:flex;text-align:right;align-content:right;margin-left:0;">
                                            <div
                                                style="display:flex; width:100%;align-content:left;text-align:left;align-items:left;">
                                                <img src="../assets/foto/calendar-icon.png" alt=""
                                                    style="margin-left: auto; width:20px; height:20px;">
                                                <p id="cal-date"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    Sep 12</p>
                                                <img src="../assets/foto/empty-chat.png" alt=""
                                                    style="text-align:left;margin-left: 5px;width:20px; height:20px;">
                                                <p id="chat-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    0</p>
                                                <img src="../assets/foto/pin.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="pin-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:15px;">
                                                    0</p>
                                                <img src="../assets/foto/list.png" alt=""
                                                    style="margin-left: 5px;width:20px; height:20px;">
                                                <p id="list-pro"
                                                    style="margin-bottom: 5px; font-size: 15px; margin-left: 5px;margin-right:31px;">
                                                    1/5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-link-wrapper" style="display: flex; align-items: center;">
                                    <img src="../assets/foto/menu-dot.png" alt=""
                                        style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KANAN -->
            <div class="col-span-1" style="margin-left: 10px; margin-right: -35px;">
                <!-- TEAM MEMBER -->
                <div style="display: flex; align-items: center;">
                    <h3 class="title"
                        style="text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                        Team Members</h3>
                    <img src="../assets/foto/user-add.png" alt=""
                        style="margin-left: auto; margin-right:15px;margin-top: -25px; right: 30px;width:30px;height:30px;">
                </div>
                <div class="overflow-x-auto">
                    <table class="table" id="team-member">
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/user.svg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Choi Yeonjun</div>
                                            <div class="text-sm opacity-50">Project Owner, General Manager</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/soobin.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Choi Soobin</div>
                                            <div class="text-sm opacity-50">Developer, Web Designer, Research</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/akaso.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Akaso Eiji</div>
                                            <div class="text-sm opacity-50">UI/UX, Web Designer</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask rounded-full overflow-hidden w-12 h-12">
                                                <img src="../assets/foto/emo.jpg" alt="Profile Picture"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"
                                                style="font-size: 20px; font-family: 'Poppins', sans-serif; color: #4f4f4f;">
                                                Hiro Hamada</div>
                                            <div class="text-sm opacity-50">Developer, Web Designer, Research</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TASK STATUS -->
                    <h3 class="title"
                        style="margin-top:35px;text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                        Task Status</h3>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <label>
                                                <input type="checkbox" class="checkbox flex rounded-full"
                                                    style="margin-top:20px;">
                                            </label>
                                            <div class="font-bold" style="font-size:18px;">Infrastructure Development.
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                            <!-- Menambahkan margin-top agar progress terletak di bawah tulisan -->
                                            <progress class="progress progress-success" value="70" max="100"
                                                style="margin-left:35px;width: 150px;"></progress>
                                            <p style="margin-bottom:5px; font-size:15px; margin-left:8px;">70% Done</p>
                                        </div>
                                    </td>
                                </tr>
                                <!-- row 2 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <label>
                                                <input type="checkbox" class="checkbox flex rounded-full"
                                                    style="margin-top:20px;">
                                            </label>
                                            <div class="font-bold" style="font-size:18px;">Marketing Page Redesign.
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                            <!-- Menambahkan margin-top agar progress terletak di bawah tulisan -->
                                            <progress class="progress progress-error" value="30" max="100"
                                                style="margin-left:35px;width: 150px;"></progress>
                                            <p style="margin-bottom:5px; font-size:15px; margin-left:8px;">30% Done</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

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
