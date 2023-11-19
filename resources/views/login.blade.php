<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
    /* Your existing styles */
    .gradient-custom-2 {
        background-color: #BF5C1C;
        border: none;
        /* Remove the border */
    }

    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    /* Style for forgot password link */
    .forgot-password a {
        color: #BF5C1C;
        /* Change text color */
    }

    /* Style for hover state */
    .gradient-custom-2:hover {
        background-color: #854836;
        /* Change the color when hovered */
    }

    /* Style for focused state */
    .form-control:focus {
        border-color: #854836 !important;
        /* Change border color when input is focused */
        box-shadow: 0 0 0 0.25rem rgba(133, 72, 54, 0.25) !important;
        /* Change box-shadow when input is focused */
    }

    /* Custom style to override btn-primary */
    .custom-btn-primary {
        background-color: #BF5C1C;
        border-color: #BF5C1C;
    }

    /* Change hover state for custom-btn-primary */
    .custom-btn-primary:hover {
        background-color: #854836;
        border-color: #854836;
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }

        .card {
            border: none;
            /* Removed card border */
        }

        .col-lg-6 {
            padding: 0;
            /* Removed default padding */
        }
    }
    </style>
</head>

<body>

    <!-- Login Section -->
    <section class="h-100 gradient-form" style="background-image: url(../assets/foto/backgroundrnd.jpeg)">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="../assets/foto/Logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Research and Development</h4>
                                    </div>

                                    <form onsubmit="return validateForm()">
                                        <p>Welcome Back!</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="Email address" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" id="form2Example22" class="form-control"
                                                placeholder="********" required />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <a href="/">
                                                <button class="btn btn-primary btn-block gradient-custom-2 mb-3"
                                                    type="submit">Login</button>
                                            </a>
                                        </div>
                                        <div class="forgot-password">
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">DIVISI RnD</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    function validateForm() {
        var email = document.getElementById("form2Example11").value;
        var password = document.getElementById("form2Example22").value;

        if (email === "" || password === "") {
            alert("Please enter both email and password");
            return false;
        }

        // Redirecting to the dashboard upon successful login
        window.location.href = "/"; // Change the URL to your dashboard URL
        return false; // Change to false to prevent default form submission
    }
    </script>
</body>

</html>