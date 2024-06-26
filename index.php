<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_style2.css"> <!-- Sisipkan file CSS eksternal jika ada -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Kotak container -->
    <div class="container">
        <div class="registration-form">
            <div class="registration-content">
                <h2 class="title-sign">Log In</h2>
                <form class="validate" method="post" action="login_procces.php"> <!-- Ganti action dengan nama file untuk proses login -->
                    <!-- Konten formulir di sini -->
                    <!-- Email -->
                    <div>
                        <label for="email">Email</label>
                        <br>
                        <input type="text" id="email" name="email" required> <!-- Tambahkan atribut name -->
                    </div>

                    

                    <!-- Password -->
                    <div>
                        <label for="password">Password</label>
                        <br>
                        <input type="password" id="password" name="password" aria-describedby="passwordHelpBlock"  required> <!-- Tambahkan atribut name -->
                    </div>

                    

                    <!-- Tombol Submit -->
                    <div class="login">
                        <button type="submit" class="login-ehe">Log In</button>
                        <!-- Tombol Sign Up -->
                        <p>Don't have account? <a href="Signup.php">Register Here</a></p>
                    </div>
                </form>
            </div>
            <!-- Gambar di samping formulir -->
            <div class="bootstrap-wrapper">
                <div id="carouselExampleControls" class="carousel slide registration-image custom-carousel" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/F7.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/WANTED.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/STAR WARS.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/NFSMW.png" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/DMC.png" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/AC 3.png" alt="Sixth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Gambar/Log In & Sign Up/CRISIS.png" alt="Seventh slide">
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
