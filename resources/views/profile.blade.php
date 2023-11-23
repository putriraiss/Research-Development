<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <!-- Simple bar CSS -->
    <link href="{{ asset('assets/css/simplebar.css') }}" rel="stylesheet">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link href="{{ asset('assets/css/app-light.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
    < script src = "{{ asset('js/jquery.min.js') }}" >
    </script>
    </script>

    <!-- style css -->
    <style>
    */ :root {
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

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

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
        font-family: 'Poppins', sans-serif;
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

    .profile {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .profile-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 80vh;
        /* Menggunakan 60% dari tinggi layar */
        min-height: 65vh;
        /* Atur tinggi minimum ke 50% dari tinggi layar */
        max-height: 65vh;
        /* Atur tinggi maksimum ke 70% dari tinggi layar */
        background-color: rgba(196, 145, 66, 0.5);
    }

    .profile-picture {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .profile-name {
        margin: 10px 0;
        color: white;
    }

    .edit-profile-button {
        padding: 8px 16px;
        margin-bottom: 10px;
        background-color: #854836;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-profile-button:hover {
        background-color: #6b3f2e;
    }

    .profile-job,
    .profile-email {
        margin: 5px 0;
        color: black;
    }

    /* popup/module */
    .edit-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .edit-popup-content {
        background-color: #fff;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 20px;
        border-radius: 8px;
    }

    .exit-icon {
        position: left;
        top: 10px;
        right: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        margin font-size: 24px;
        color: #000;
        margin-right: auto;
        /* Ganti warna sesuai kebutuhan */
        cursor: pointer;
        /* Tambahkan properti cursor */
    }

    .save-button {
        background-color: #BF5C1C;
        /* Ubah warna latar belakang */
        color: #fff;
        /* Ubah warna teks agar kontras dengan latar belakang */
        /* Ganti properti lain sesuai kebutuhan */
    }


    /* project */
    .subjudul {
        color: #854836;
    }

    .project-details {
        background-color: #fff;
        padding: 20px;
    }

    .section-title {
        color: #BF5C1C;
        margin-bottom: 15px;
    }

    .projects-list {
        list-style: none;
        padding: 0;
    }

    .project-title {
        margin-bottom: 5px;
    }

    .project-id,
    .project-description {
        margin: 5px 0;
    }

    .projects-container {
        display: flex;
        height: auto;
        flex-wrap: nowrap;
        /* supaya tidak melipat jika lebih panjang dari layar */
        overflow-x: auto;
        /* memberikan scroll horizontal jika konten melebihi lebar layar */
    }

    .project-card {
        flex: 0 0 auto;
        /* Mengembalikan ke pengaturan default */
        max-width: 100%;
        /* Memastikan lebar maksimum sesuai layar */
        height: auto;
        /* Remove width property */
        margin-right: 20px;
        margin-top: 15px;
        margin-bottom: 20px;
        /* jarak antar card */
        background-color: rgba(133, 72, 54, 0.5);
        padding: 15px;
        border-radius: 8px;
    }

    .project-description {
        white-space: normal;
        /* Mengizinkan teks untuk melakukan wrapping */
        overflow: hidden;
        /* Tetap mengatur overflow agar tidak keluar */
        text-overflow: ellipsis;
        /* Menggunakan ellipsis jika ada overflow */
    }

    /* menghilangkan margin kanan pada card terakhir */
    .project-card:last-child {
        margin-right: 0;
    }

    /* Additional CSS */
    .project-title,
    .project-id,
    .project-description {
        text-align: justify;
        word-wrap: break-word;
        /* Memecah kata-kata panjang */
        /* Justify text alignment */
    }

    .project-title,
    .strong {
        color: white;
    }

    .project-id,
    .project-description {
        color: black;
        word-wrap: break-word;
        /* Memecah kata-kata panjang */
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

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="../assets/foto/Logo.png" alt="Logo" class="nav_logo-icon"
                        style="width: 42px; height: 30px;"> <span class="nav_logo-name">Divisi
                        RnD</span>
                </a>
                <div class="nav_list">
                    <<a href="{{ route('dashboard') }}" class="nav_link active">
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

    <!--Container Main start-->
    <!-- Profile Card -->
    <div class="profile">
        <div class="profile-card">
            <img src="../assets/foto/user.svg" alt="Foto Profile" class="profile-picture">
            <h2 class="profile-name">Choi Yeonjun</h2>
            <button class="edit-profile-button" onclick="toggleEditPopup()">Edit Profile</button>
            <p class="profile-job"><strong class="subjudul">Position: </strong>Head of RnD</p>
            <p class="profile-email"><strong class="subjudul">Email: </strong>cyeon1@gmail.com</p>
        </div>

        <!-- Edit Popup -->
        <div class="edit-popup" id="editPopup">
            <div class="edit-popup-content">
                <span class="exit-icon" onclick="toggleEditPopup()">
                    <i class="fas fa-times"></i> <!-- Font Awesome "x" icon -->
                </span>
                <h2>Edit Profile</h2>

                <label for="newProfilePic">New Profile Picture:</label>
                <input type="file" id="newProfilePic">
                <br>
                <label for="newEmail">New Email:</label>
                <input type="email" id="newEmail">
                <button class="save-button" onclick="saveChanges()">Save</button>

            </div>
        </div>

        <!-- project -->
        <div class="project-details">
            <h3 class="section-title">Projects</h3>
            <ul>
                <div class="projects-container">
                    <div class="project-card">
                        <h4 class="project-title"><u>More Efficient Drilling Technology</u></h4>
                        <p class="project-id"><strong class="subjudul">Project_ID: </strong>01</p>
                        <p class="project-description"><strong class="subjudul">Description: </strong><br>The Head of
                            R&D plays a
                            pivotal role in steering this project, providing strategic vision,
                            fostering a culture of innovation, and ensuring that research efforts align
                            with the company's long-term goals. They oversee the project's progress,
                            allocate resources effectively, and cultivate partnerships with external stakeholders,
                            such as technology providers, academia, and industry experts, to harness collective
                            expertise
                            and drive meaningful advancements in drilling technology.</p>
                    </div>
                </div>
                <div class="projects-container">
                    <div class="project-card">
                        <h4 class="project-title"><u>New Research in Carbon Storage</u></h4>
                        <p class="project-id"><strong class="subjudul">Project_ID: </strong>014</p>
                        <p class="project-description"><strong class="subjudul">Description: </strong><br>
                            Responsible for the strategic direction and development of technologies that can transform
                            the way the company handles carbon storage, with a focus on innovation,
                            sustainability and operational efficiency.
                        </p>
                    </div>
                </div>
                <!-- buat tambah project -->
            </ul>
        </div>
    </div>
    <!-- div bawah buat ending profile -->
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

    function toggleEditPopup() {
        var editPopup = document.getElementById('editPopup');
        if (editPopup.style.display === 'flex') {
            editPopup.style.display = 'none';
        } else {
            editPopup.style.display = 'flex';
        }
    }

    function saveChanges() {
        // Lakukan perubahan data atau simpan ke database di sini

        // Tampilkan pesan alert
        alert('Changes saved successfully!');
        // Perform actions to save changes (e.g., update profile picture and email)
        toggleEditPopup();
    }

    function toggleColor() {
        var button = document.querySelector('.edit-profile-button');
        if (button.style.backgroundColor === 'rgb(133, 72, 54)') {
            button.style.backgroundColor = '#6b3f2e';
        } else {
            button.style.backgroundColor = '#854836';
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

</body>

</html>