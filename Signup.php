<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="signup_style.css">
</head>
<body>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Kotak container -->
    <div class="container">
        <div class="registration-form">
            <div class="registration-content">
                <br>
                <h2 class="title-sign">Sign Up</h2>
                <form class="validate" method="post" action="signup_procces.php">
                    <!-- Konten formulir di sini -->

                    <!-- Username -->
                    <div>
                        <label class="label" for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    

                    <!-- Password -->
                    <div>
                        <label class="label" for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    

                    <!-- Email -->
                    <div>
                        <label class="label" for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>

                    

                    <!-- Peran -->
                    <div>
                        <label class="label" for="peran">Peran</label>
                        <select class="form-select" id="peran" name="peran" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    

                    <!-- Tombol Submit -->
                    <div class="login">
                        <button type="submit" class="login-ehe">Create Account</button>
                        <!-- Sudah Punya Akun -->
                        <p>Already have an Account? <a href="index.php">Log In</a></p>
                    </div>
                </form>
            </div>

            <!-- Gambar di samping formulir -->
            <div class="bootstrap-wrapper">
                <div id="carouselExampleControls" class="carousel slide registration-image custom-carousel" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/DMC 5.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/DOTA.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/EVANGELION.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/FF16.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/MANDO.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/NFS.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/RDR 2.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
