<html data-theme="retro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RnD - Projects</title>
    <link href="{{ asset('assets/css/simplebar.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link href="{{ asset('assets/css/app-light.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/daisyui@1.1.2/dist/full.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">


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
            margin-right: 8px;
            border: none;
            border-radius: 24px;
            max-width: 300px;
        }

        .search-btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        .search-icon {
            font-size: 1.5rem;
            margin-right: 8px;
            color: #007bff;
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

        .btn {
            padding: 0px 10px 0px 10px;
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
            }

            .user_name {
                font-family: 'Poppins', sans-serif;
                color: black;
                font-size: 14px;
            }

            .dashboard img:hover {
                cursor: pointer;
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

            .card:hover {
                background: #BF5C1C;
                color: var(--white);
                cursor: pointer
            }

            .card-tengah:hover {
                background: #BF5C1C;
                color: var(--white);
                cursor: pointer
            }

            .card:hover .card-title {
                color: var(--white);
            }

            .card-tengah:hover .card-title {
                color: var(--white);
            }

            .title {
                font-size: 28px;
                font-family: 'Poppins', sans-serif;
                margin-bottom: 1em;
                font-weight: 500px;
            }

            .container {
                display: flex;
                justify-content: space-between;
            }

            .col-span-1 {
                width: 20%;
                margin-top: 20px;
                margin-left: 50px;

            }

            .col-span-2 {
                width: 40%;
                margin-top: 20px;
                margin-right: -100px;
            }

            .col-span-3 {
                width: 100%;
                margin-top: 1em;
                margin-right: 8px;
            }

            .col-span-4 {
                width: 350px;
                margin-top: 20px;
                margin-left: -90px;
            }

            .c-project {
                width: 80px;
                height: 40px;
            }

            .kanan {
                margin-left: -10px;
                margin-right: 20px;
            }

            .table-task {
                width: 90%;
                margin-left: 10px;
                margin-right: 10px;
                color: #2b2d42;
            }

            .table {
                display: flex;
                flex-direction: column;
                padding: 10px;
                background: var(--white);
                border-radius: 20px;
                box-shadow: 0 5px 15px rgba(20%, 20%, 20%, 20%);
                scroll-snap-align: start;
                transition: all 0.2s;
                margin-bottom: 20px;
                width: 300px;
                margin-left: 20px;
                margin-right: 20px;
                color: #4f4f4f;
                border-collapse: collapse;
            }

            .table tr {
                transition: background-color 0.2s, border-color 0.2s;
                border-radius: 20px;
                margin-right: 10px;
            }

            .table tr:hover {
                background-color: #BF5C1C;
                color: white;
                border-color: white;
            }

            .table tr:not(:hover) {
                background-color: var(--white);
                color: #4f4f4f;
            }

            .card-task:hover {
                background-color: white;
            }

            .card-task {
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
                margin-left: -40px;
            }

            .card-title {
                font-size: 15px;
                color: #2b2d42;
            }


            .table:hover {
                background: #BF5C1C;
                color: var(--white);
                cursor: pointer
            }

            .avatar {
                margin-bottom: 20px;
                margin-left: 20px;
            }

            .textarea-bordered {
                background-color: white;
                color: #4f4f4f;
                border-color: #BF5C1C;
            }

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

            .comment {
                color: #2b2d42;
            }

            .comment-box {
                color: #2b2d42;
            }

            .image-button {
  background-color: transparent;
  border: none;
  cursor: pointer;
  margin-left: auto;
  margin-top: -35px;
  right: 30px;
  width: 30px;
  height: 30px;
  padding: 0;
}

.button-image {
  width: 100%;
  height: 100%;
}

            .th-tengah {
                margin-bottom: 25px;
                color: #BF5C1C
            }
.dropdown-item:focus,
            .dropdown-item:hover {
                background-color: #F3E9D9;
                color: var(--black)
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
            <div> <a href="#" class="nav_logo"> <img src="../assets/foto/Logo.png" alt="Logo" class="nav_logo-icon" style="width: 42px; height: 30px;"> <span class="nav_logo-name">Divisi
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
                    <h3 class="title" style="text-align: left; margin-left: 8px; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                        Projects</h3>
                        <button class="image-button" data-toggle="modal" data-target="#createProjectModal" data-bs-whatever="Some Data">
                            <img src="../assets/foto/new-add.png" class="button-image">
                        </button>
                    {{-- <img src="../assets/foto/new-add.png" class="hover-pointer" style="margin-left: auto; margin-top: -35px; right: 30px;width:30px;height:30px;"> --}}
                </div>
                <ul class="cards">
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline" style="color:forestgreen; margin-top:14px;">On Track</div>
                                <h4 class="card-title" style="margin-top: 15px">Environment Impact
                                    Mitigation</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            
                            {{-- <img src="../assets/foto/menu-dot.png" alt="" style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;"> --}}
                        </div>
                    </li>
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline" style="color:orange; margin-top:15px;">On
                                    Risk</div>
                                <h4 class="card-title" style="margin-top: 15px">Safety Enhancement</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" alt="" style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                        </div>
                    </li>
                    <li class="card">
                        <div style="width: 100%; margin-left: 8px;">
                            <div class="card-content">
                                <div class="badge badge-primary badge-outline" style="color:red; margin-top:15px;">Off
                                    Track</div>
                                <h4 class="card-title" style="margin-top: 15px">Underground
                                    Infrastructure</h4>
                            </div>
                        </div>
                        <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" alt="" style="margin-left: auto; margin-top: 0; position: absolute; top: 19px; right: 30px;">
                        </div>
                    </li>
                </ul>
            </div>

            <!-- TENGAH -->
            <div class="col-span-2" style="margin-left: 10px; margin-right: 15px;">
                <p id="project-date-made" style="margin-bottom:5px;font-size:15px;">21 November 2023</p>
                <h3 class="title" style="text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                    Environment Impact Mitigation</h3>
                <p id="project-manager" style="margin-top: -20px; margin-bottom:5px; font-size:15px;color:#4f4f4f;font-weight:500;">General
                    Manager Choi Yeonjun</p>
                <div style="display: flex; align-items: center;">
                    <progress class="progress progress-warning w-56" value="70" max="100" style="margin-top: 10px; margin-bottom: 10px;"></progress>
                    <p style="margin-bottom:5px; margin-left: 20px;font-size:15px;"> 55% Completed</p>
                </div>
                <!--TASK-->
                <h4 class="semi-title" style="color:#4f4f4f; margin-top: 25px;font-size:18px;font-weight:bold;margin-bottom:35px;">Overview</h4>
                <p style="text-align: justify; text-indent:50px;font-size:15px;">The Environment Impact Mitigation project is a
                    comprehensive initiative designed to address and alleviate the environmental effects associated with
                    mining operations. It seeks to minimize, if not entirely eliminate, the negative consequences on the
                    surrounding ecosystems, communities, and natural resources. This project embodies a commitment to
                    responsible and sustainable mining practices.</p>
                <div style="display: flex; align-items: center;">
                    <h4 class="semi-title" style="color:#4f4f4f; margin-bottom:35px;margin-top: 40px;font-size:18px;font-weight:bold">Tasks</h4>
                    {{-- <img src="../assets/foto/new-add.png" id="add-task" alt="" style="margin-left: auto; margin-right:15px;margin-top: 20px; right: 30px;width:30px;height:30px;"> --}}
                    <button class="image-button" data-toggle="modal" data-target="#createProjectModal" data-bs-whatever="Some Data" style="margin-left: auto; margin-right:15px;margin-top: 20px; right: 30px;width:30px;height:30px;">
                        <img src="../assets/foto/new-add.png" class="button-image">
                      </button>
                </div>
                <div class="card-task" style="margin-left: 8px; margin-right: 15px; padding: 20px; position: relative;">
                    <div class="badge badge-primary" style="background-color: #BF5C1C; color: #FFFFFF; margin-bottom: 15px;">Research</div>
                    <h4 class="card-title" style="font-size: 18px; font-weight: bold; margin-bottom: 3px;">Presentation and Dissemination</h4>
                    <p style="text-align: justify; font-size: 15px; margin-bottom: 15px;">Creating fundamentals for project presentation.</p>
                     <div class="card-link-wrapper" style="display: flex; align-items: center;">
                            <img src="../assets/foto/menu-dot.png" style="position: absolute; top: 20px; right: 30px;">
                        </div>
                    <div class="overflow-x-auto">
                        <table class="table-task">
                            <thead>
                                <tr class="th-tengah">
                                    <th style="width: 100%;">
                                        <div class="font-bold" style="margin-left:10px">Activity</div>
                                    </th>
                                    <th style="width: 30%;">Due Date</th>
                                    <th style="width: 30%;">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <label>
                                                <input type="checkbox" class="checkbox flex rounded-full" style="margin-top: 20px;">
                                            </label>
                                            <div style="display: flex; flex-direction: column;">
                                                <div class="font-bold opacity-100" style="font-size: 15px;">Presentation module</div>
                                                <div class="text-xs">Prepare a presentation for stakeholders.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="container" style="text-align: left; align-content: left; margin-left: 0;">
                                            <div style="display: flex; width: 100%; align-content: left; text-align: left; align-items: flex-start;">
                                                <p id="cal-date" style="margin-right: 5px; margin-bottom: 5px; font-size: 15px;">21/11/23</p>
                                                <div style="display: flex; flex-direction: column;">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <time class="text-sm opacity-50" style="margin-bottom: 5px;">12:46</time>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--COMMENTS-->
                <h4 class="semi-title" style="color:#4f4f4f; margin-bottom:35px;margin-top: 40px;font-size:18px;font-weight:bold">Comments</h4>
                <div class="comment-box" style="position: relative; display: flex; align-items: center; margin-bottom:25px;">
                    <div class="avatar" style="margin-left:1em;margin-right:1em;">
                        <div class="mask rounded-full overflow-hidden w-12 h-12">
                            <img src="../assets/foto/user.svg" alt="" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <textarea class="textarea textarea-bordered" placeholder="Write a comment..." style="color:#4f4f4f; width: 335px; box-sizing: border-box;"></textarea>
                        <button class="btn" style="position: absolute; top: 50%; right: 5px; transform: translateY(-50%);font-size:15px;">Send</button>
                    </div>
                </div>
                <div class="comment flex items-center gap-3" style="margin-bottom:25px;">
                    <div class="avatar">
                        <div class="mask rounded-full overflow-hidden w-12 h-12">
                            <img src="../assets/foto/user.svg" alt="Profile Picture" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold" style="font-size: 15px; font-family: 'Poppins', sans-serif;">
                            Choi Yeonjun</div>
                        <div class="text-sm ">We are 1 week away from launch! Thank you for every team member for their hard work.</div>
                        <time class="text-sm opacity-50">12:46</time>
                    </div>
                </div>
            </div>

            <!-- KANAN -->
            <div class="col-span-4" style="margin-left: 10px; margin-right: -35px;">
                <!-- TEAM MEMBER -->
                <div class="kanan">
                    <div style="display: flex; align-items: center;">
                        <h3 class="title" style="text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                            Team Members</h3>
                        <img src="../assets/foto/user-add.png" id="add-member" alt="" style="margin-left: auto; margin-right:15px;margin-top: -25px; right: 30px;width:30px;height:30px;">
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
                                                    <img src="../assets/foto/user.svg" alt="Profile Picture" class="w-full h-full object-cover" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold" style="font-size: 15px; font-family: 'Poppins', sans-serif;">
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
                                                    <img src="../assets/foto/soobin.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold" style="font-size: 15px; font-family: 'Poppins', sans-serif;">
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
                                                    <img src="../assets/foto/akaso.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold" style="font-size: 15px; font-family: 'Poppins', sans-serif;">
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
                                                    <img src="../assets/foto/emo.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold" style="font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    Hiro Hamada</div>
                                                <div class="text-sm opacity-50">Developer, Web Designer, Research</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- TASK STATUS -->
                        <h3 class="title" style="margin-top:35px;text-align: left; font-family: 'Poppins', sans-serif; font-weight:bold;color:#4f4f4f;">
                            Task Status</h3>
                        <div class="overflow-x-auto">
                            <table class="table">
                                <tbody>
                                    <!-- row 1 -->
                                    <tr>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <label>
                                                    <input type="checkbox" class="checkbox flex rounded-full" style="margin-top:20px;">
                                                </label>
                                                <div class="font-bold" style="font-size:15px;">Infrastructure Development.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                                <progress class="progress progress-success" value="70" max="100" style="margin-left:35px;width: 150px;"></progress>
                                                <p style="margin-bottom:5px; font-size:10px; margin-left:8px;">70% Done</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- row 2 -->
                                    <tr>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <label>
                                                    <input type="checkbox" class="checkbox flex rounded-full" style="margin-top:20px;">
                                                </label>
                                                <div class="font-bold" style="font-size:15px;">Marketing Page Redesign.
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; gap: 10px; margin-top: -5px; margin-bottom: 5px;">
                                                <progress class="progress progress-error" value="30" max="100" style="margin-left:35px;width: 150px;"></progress>
                                                <p style="margin-bottom:5px; font-size:10px; margin-left:8px;">30% Done</p>
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
    </div>

    <!--Container Main end-->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
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