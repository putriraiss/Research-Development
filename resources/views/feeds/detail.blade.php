<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Detail Feeds</title>
        <!-- Simple bar CSS -->
        <link href="{{ asset('assets/css/simplebar.css') }}" rel="stylesheet">
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
            rel="stylesheet">
        <!-- Icons CSS -->
        <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">
        <!-- App CSS -->
        <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
        <link href="{{ asset('assets/css/app-light.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
            < script src = "{{ asset('js/jquery.min.js') }}" >
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

            .img {
                display: flex;
                flex-wrap: wrap;
                padding: 25px 10px;
                list-style: none;
                justify-content: center;
                width: 100% gap: 20px
            }

            .card {
                align-items: center;
                display: flex;
                flex-direction: column;
                padding: 20px;
                background: var(--white);
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
                scroll-snap-align: start;
                transition: all 0.2s;
                max-width: 90%;
                margin: 50px
            }



            .card .card-title {
                font-size: 20px;
            }

            .card .card-content {
                margin: 20px 0;
                font-size: 13pt;
                max-width: 100%;
                text-align: left;
                padding: 10px 50px 10px 50px;
            }

            .card .card-link-wrapper {
                margin-top: auto;
            }

            .image-container {
                width: 100%;
                text-align: center;
                /* Center the image horizontally */
            }

            .card img {
                max-width: 100%;
                /* Ensure the image doesn't exceed the card width */
                height: auto;
                /* Maintain aspect ratio */
                border-radius: 8px;
                /* Optional: Add border-radius to the image */
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

            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

            :root {
                --header-height: 3rem;
                --nav-width: 75px;
                --first-color: #F7F7F7;
                --first-color-light: #000000;
                --white-color: #EFE0CA;
                --body-font: 'Poppins', sans-serif;
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

            .showSideBar {
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

            .fixed-width-btn {
                width: 40px !important;
                /* Set a fixed width for the button */
                overflow: hidden;
                /* Hide overflowing content */
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

                .showSideBar {
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

            .dropdown-item:focus,
            .dropdown-item:hover {
                background-color: #F3E9D9;
                color: var(--black)
            }

            .custom-caption-left,
            .custom-caption-right {
                font-size: 8pt;
                /* Set a smaller font size */
            }

            .modal-dialog {
                width: 512px;
                height: max-content;
                border-radius: 8px;
                background-color: #F7F7F7;
                font-family: 'Poppins', sans-serif;
            }

            .modal-header {
                color: #333333;
                font-size: 30px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }

            .modal-body {
                color: #4F4F4F;
                font-family: 'Poppins', sans-serif;
                font-size: 15px;
                font-style: normal;
                font-weight: normal;
                text-align: left;
                line-height: normal;
            }

            .form-control {
                border-radius: 8px;
                border: 0.8px solid var(--Blue-1, #2F80ED);
                background-color: #FFF;
                box-shadow: 0px 4px 6px 3px rgba(45, 83, 219, 0.10);
                color: var(--Gray-4, #BDBDBD);
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .form-control::placeholder {
                color: var(--Gray-4, #BDBDBD);
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }


            .modal-body h5 {
                color: #6A3A2B;
            }

            .modal-body p {
                color: #6A3A2B;
            }

            body {
                padding-top: 50px;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .multiple-select {
                min-height: 40px;
                overflow: auto;
            }

            .multiple-select-choices,
            .multiple-select-choices li,
            .multiple-select-choices input {
                height: 100%;
                width: 100%;
                border: none;
                outline: 0 none;
            }

            .multiple-select-choices li.choice-active,
            .multiple-select-choices li.choice-active input {
                float: left;
                height: auto;
                width: auto;
            }

            .multiple-select-choices li.choice-active input {
                width: 20px;
            }

            .multiple-select-dropdown {
                display: none;
                background: #eee;
                max-height: 250px;
                overflow: auto;
                position: absolute;
                top: 100%;
            }

            .multiple-select-dropdown li {
                display: block;
                text-decoration: none;
                color: #000;
                padding: 5px 15px;
                cursor: pointer;
            }

            .multiple-select-dropdown li:hover {
                background: #BF5C1C;
                color: #fff;
            }

            .multiple-select-choices li:not(.input) {
                float: left;
                margin-right: 5px;
                padding: 0 5px;
                margin-bottom: 5px;
                font-size: 14px;
                background: #BF5C1C;
                border-radius: 3px;
                color: white;
            }

            .multiple-select-choices li a {
                font-size: 18px;
                color: #000;
            }

            .option-disabled {
                opacity: .5;
            }

            .option-disabled:hover {
                opacity: .5;
                background: none;
                color: #000;
                cursor: default;
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
                <div> <a href="#" class="nav_logo"> <img src="../assets/foto/Logo.png" alt="Logo"
                            class="nav_logo-icon" style="width: 42px; height: 30px;"> <span class="nav_logo-name">Divisi
                            RnD</span>
                    </a>
                    <div class="nav_list">
                        <a href="{{ route('dashboard') }}" class="nav_link active">
                            <img src="../assets/foto/homee.svg" alt="">
                            <span class="nav_name">Dashboard</span>
                        </a>
                        </a> <a href="{{ route('feeds.index') }}" class="nav_link">
                            <img src="../assets/foto/feeds.svg" alt="">
                            <span class="nav_name">Feeds</span> </a>
                        <a href="{{ route('projects.show', 1) }}" class="nav_link">
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
            <!---Feeds-->
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-11 rounded"
                        style="margin-top: 20px; background:#F3E9D9;
                        ">
                        <h4 style="font-family: 'Poppins', sans-serif; color: black; margin:10px"> <span
                                style="color: #BF5C1C">|</span> {{ $feed->title }}</h4>
                    </div>
                    <div class="col-sm-1 text-right" style="margin-top: 20px">
                        <div class="dropdown">
                            <button class="btn btn-m fixed-width-btn" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1">Edit</a></li>
                                <li>
                                    <form action="{{ route('feeds.destroy', $feed->id_feed) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">delete</button>
                                    </form>
                                    {{-- <a class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">Delete</a> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="image-container">
                    <img src="{{ $feed->img }}" alt="image" style="width: 100%; max-width: 1000px;">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6">
                            <figcaption class="figure-caption custom-caption-left"
                                style="text-align:left; padding-top:20px; padding-left:50px">
                                Written by: {{ $karyawan->nama_lengkap }}</figcaption>
                        </div>
                        <div class="col-sm-6 text-right">
                            {{-- <figcaption class="figure-caption custom-caption-right"
                                style="text-align:right;padding-top:20px; padding-right:50px">
                                Thursday, 26 October 2023</figcaption> --}}
                        </div>

                        <div class="card-content">
                            <p>{{ $feed->desc_feed }}</p>
                        </div>
                    </div>



                    {{-- modal 1 --}}
                    <!-- modal edit event -->
                    <div id="exampleModal1" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel1"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="headerAdd">Edit Feed</h5>
                                </div>
                                <form action="{{ route('feeds.update', $feed->id_feed) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <div class="form-group">

                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Title" value="{{ $feed->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <input type="text" class="form-control" name="content"
                                                placeholder="Enter Content" value="{{ $feed->desc_feed }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="text" class="form-control" name="image"
                                                placeholder="Enter Content" value="{{ $feed->img }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Researcher</label>
                                            <select class="form-control" name="nip">
                                                <option value="{{ $feed->karyawan_nip }}">{{ $feed->karyawan->nama_lengkap }}</option>
                                                @foreach ($allKaryawan as $karyawan)
                                                    @if ($karyawan->asal_devisi == 'R&D')
                                                        @if ($karyawan->nama_lengkap != $feed->karyawan->nama_lengkap)
                                                        <option value="{{ $karyawan->nip }}">{{ $karyawan->nama_lengkap }}</option>
                                                        @endif
                                                    @endif
                                                @endforeach

                                                {{-- <option>Choi Soobin</option>
                                                <option>Geto Suguru</option>
                                                <option>Miles Morales</option>
                                                <option>Gwen Stacy</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn">Edit</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    {{-- modal 2 --}}
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Warning!</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('feeds.destroy', $feed->id_feed) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn" data-bs-dismiss="modal"
                                            data-bs-toggle="modal">Delete</button>
                                    </form>
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- modal 3 --}}
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">New message</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="#BF5C1C" class="bi bi-check" viewBox="0 0 16 16"
                                            style="width: 100%; max-width: 100px;">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>
                                    </div>
                                    <p>Successfully deleted!</p>
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
                                        nav.classList.toggle('showSideBar')
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

                    <script>
                        var exampleModal1 = document.getElementById('exampleModal1')
                        var exampleModal2 = document.getElementById('exampleModal2')
                        var exampleModal2 = document.getElementById('exampleModal3')

                        exampleModal1.addEventListener('show.bs.modal', function(event) {
                            // Button that triggered the modal
                            var button = event.relatedTarget
                            // Extract info from data-bs-* attributes
                            var recipient = button.getAttribute('data-bs-whatever')
                            // If necessary, you could initiate an AJAX request here
                            // and then do the updating in a callback.
                            //
                            // Update the modal's content.
                            var modalTitle = exampleModalLabel1.querySelector('.modal-title')
                            var modalBodyInput = exampleModalLabel1.querySelector('.modal-body input')

                            modalTitle.textContent = 'New message to ' + recipient
                            modalBodyInput.value = recipient
                        });

                        exampleModal2.addEventListener('show.bs.modal', function(event) {
                            // Button that triggered the modal
                            var button = event.relatedTarget
                            // Extract info from data-bs-* attributes
                            var recipient = button.getAttribute('data-bs-whatever')
                            // If necessary, you could initiate an AJAX request here
                            // and then do the updating in a callback.
                            //
                            // Update the modal's content.
                            var modalTitle = exampleModalLabel2.querySelector('.modal-title')
                            var modalBodyInput = exampleModalLabel2.querySelector('.modal-body input')

                            modalTitle.textContent = 'New message to ' + recipient
                            modalBodyInput.value = recipient
                        });

                        // exampleModal3.addEventListener('show.bs.modal', function(event) {
                        //     // Button that triggered the modal
                        //     var button = event.relatedTarget
                        //     // Extract info from data-bs-* attributes
                        //     var recipient = button.getAttribute('data-bs-whatever')
                        //     // If necessary, you could initiate an AJAX request here
                        //     // and then do the updating in a callback.
                        //     //
                        //     // Update the modal's content.
                        //     var modalTitle = exampleModalLabel2.querySelector('.modal-title')
                        //     var modalBodyInput = exampleModalLabel2.querySelector('.modal-body input')
                        // });
                    </script>



                    <script>
                        $(function() {
                            $(".multiple-select").each(function() {
                                $(this).hide();

                                var optionsArray = [],
                                    selectClasses = $(this).attr("class");

                                $(this).find("option").each(function() {
                                    var optionObject = {};
                                    optionObject.text = $(this).text();
                                    optionObject.value = $(this).val();
                                    optionObject.class = $(this).attr("class");

                                    optionsArray.push(optionObject);
                                });

                                var multipleSelectHtml = "<div class='multiple-select-container " + selectClasses + "'>" +
                                    "<ul class='multiple-select-choices'><li class='input'><input type='text' placeholder='Please select'></li></ul>" +
                                    "<div class='multiple-select-dropdown'><ul>";

                                for (var i = 0; i < optionsArray.length; i++) {
                                    multipleSelectHtml += "<li class='" + optionsArray[i].class + "' data-value='" +
                                        optionsArray[i].value + "'>" + optionsArray[i].text + "</li>";
                                }

                                multipleSelectHtml += "</ul></div></div>";

                                $(multipleSelectHtml).insertAfter($(this));
                            });

                            // Show dropdown when input is focused
                            $(".multiple-select-container").on("click", function() {
                                $(this).find(".multiple-select-dropdown").show();
                            });

                            // Close dropdown when multi-select is out of focus
                            $(document).on("click", function(e) {
                                var $tgt = $(e.target);

                                if (!$tgt.is(".multiple-select-dropdown li") && !$tgt.is(
                                    ".multiple-select-container input") && !$tgt.is(".multiple-select-container") && !$tgt
                                    .is(".multiple-select-choices")) {
                                    $(".multiple-select-dropdown").hide();
                                }
                            });

                            // Add item
                            $(document).on("click", ".multiple-select-dropdown li:not(.option-disabled)", function(e) {
                                e.preventDefault();

                                var optionText = $(this).text(),
                                    optionValue = $(this).data("value"),
                                    optionClass = $(this).attr("class");

                                $(this).addClass("option-disabled");

                                // Add item to input
                                var thisInput = $(this).closest(".multiple-select-container").find(".input");
                                $("<li data-value='" + optionValue + "'>" + optionText +
                                    " <a href='#' class='remove-item'>&times;</a></li>").insertBefore(thisInput);

                                // Get current value of select field
                                var currentValues = $(this).closest(".multiple-select-container").siblings("select").val();

                                // Add values to select field
                                currentValues.push(optionValue);

                                // Assign updated value to select field
                                $(this).closest(".multiple-select-container").siblings("select").val(currentValues);

                                // Make choices active, remove input placeholder
                                $(".multiple-select-choices li").addClass("choice-active");
                                $(".multiple-select-choices li input").attr("placeholder", "").focus();

                                // Hide dropdown
                                $(this).closest(".multiple-select-dropdown").hide();

                                $(document).trigger("multipleSelectItemAdded", [optionText, optionValue, optionClass]);
                            });

                            // Remove item
                            $(document).on("click", ".multiple-select-choices li a", function() {
                                var optionText = $(this).closest("li").text(),
                                    optionValue = $(this).closest("li").data("value"),
                                    optionClass = $(this).closest("li").attr("class");

                                // Re-enable option in dropdown
                                $(".multiple-select-dropdown li[data-value='" + optionValue + "']").removeClass(
                                    "option-disabled");

                                // Get current value of the select field
                                var currentValues = $(this).closest(".multiple-select-container").siblings("select").val();

                                // If the removed item is in the select value, remove it
                                var index = currentValues.indexOf(optionValue);

                                if (index > -1) {
                                    currentValues.splice(index, 1);
                                }

                                // Re-assign the new value to the select field
                                $(this).closest(".multiple-select-container").siblings("select").val(currentValues);

                                // Return placeholder to input if no choices have been made
                                if (currentValues.length == 0) {
                                    $(this).closest(".multiple-select-choices").find(".input").removeClass("choice-active")
                                        .find("input").attr("placeholder", "Please select");
                                }

                                // Remove item from choices
                                $(this).closest("li").remove();

                                $(document).trigger("multipleSelectItemRemoved", [optionText, optionValue, optionClass]);
                            });

                            //Detect item being added
                            $(document).on("multipleSelectItemAdded", function(e, optionText, optionValue, optionClass) {
                                console.log("item has been added");
                            });

                            //Detect item being removed
                            $(document).on("multipleSelectItemRemoved", function(e, optionText, optionValue, optionClass) {
                                console.log("item has been removed");
                            });
                        });
                    </script>
    </body>

</html>
