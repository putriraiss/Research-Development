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

            .dropdown-item:focus,
.dropdown-item:hover {
    background-color: #F3E9D9;
    color: var(--black)

    
}

.custom-caption-left,
.custom-caption-right {
    font-size: 8pt; /* Set a smaller font size */
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
                        </a> <a href="#" class="nav_link">
                            <img src="../assets/foto/progres.svg" alt="">
                            <span class="nav_name">Progres</span>
                        </a> <a href="{{ route('feeds') }}" class="nav_link">
                            <img src="../assets/foto/feeds.svg" alt="">
                            <span class="nav_name">Feeds</span> </a>
                        <a href="#" class="nav_link">
                            <img src="../assets/foto/carbon_collaborate.svg" alt="">
                            <span class="nav_name">Collaboration</span>
                        </a> <a href="#" class="nav_link">
                            <img src="../assets/foto/calander.svg" alt="">
                            <span class="nav_name">Calendar</span>
                        </a> <a href="#" class="nav_link">
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
        </div>



        <!--Container Main start-->
        <div class="dashboard">
            <!---Feeds-->
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-11 rounded" style="margin-top: 20px; background:#F3E9D9;
                        ">
                            <h4 style="font-family: 'Poppins', sans-serif; color: black; margin:10px"> <span style="color: #BF5C1C">|</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates possimus laborum molestias? Nemo voluptas fuga iure similique maiores magni culpa architecto tempora doloremque, aliquam harum?</h4>
                        </div>
                        <div class="col-sm-1 text-right" style="margin-top: 20px">
                            <div class="dropdown">
                                <button class="btn btn-m fixed-width-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="image-container">
                        <img src="../assets/foto/berita.svg" alt="" style="width: 100%; max-width: 1000px;">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-sm-6">
                                <figcaption class="figure-caption custom-caption-left" style="text-align:left; padding:20px"> Written by: Shoko Ieri, Geto Suguru</figcaption>
                            </div>
                            <div class="col-sm-6 text-right">
                                <figcaption class="figure-caption custom-caption-right" style="text-align:right; padding:20px">Thursday, 26 October 2023</figcaption>
                    </div>
                </div>
                
            </div>
            <div class="card-content">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui similique ullam animi quisquam
                    illum distinctio iure et sed inventore quae, pariatur vitae, reiciendis fugiat aliquam ipsa
                    debitis fugit assumenda quidem nostrum commodi quasi. Officiis et laborum neque. Nulla
                    consequuntur quisquam commodi praesentium delectus voluptatum? Assumenda ut nostrum aliquid
                    dignissimos adipisci, temporibus iusto. Tempore eveniet odio culpa a animi magni vero
                    reiciendis unde. Fugiat eveniet, nobis assumenda a earum quo ducimus delectus dolore
                    provident facere incidunt ab iure sequi animi tenetur omnis ut beatae eos nihil sed. Vero,
                    fuga quia! Reiciendis necessitatibus labore optio alias voluptatum, ipsa adipisci dolor qui
                    asperiores.
                </p>
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
            </script>

    </body>

</html>
