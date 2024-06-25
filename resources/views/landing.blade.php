<!doctype html>
<html>

<head>
    <title>Desktop - 1</title>
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    .navbar {
        position: absolute;
        top: 0px;
        left: 0px;
        background: linear-gradient(90deg, #ffa243, #fe6601);
        width: 1440px;
        height: 169px;
    }

    .profil {
        position: absolute;
        top: 0px;
        left: 0px;
    }

    .praktikum {
        position: absolute;
        top: 1px;
        left: 137px;
    }

    .peminjaman {
        position: absolute;
        top: 0px;
        left: 509px;
    }

    .informasi {
        position: absolute;
        top: 1px;
        left: 327px;
    }

    .profil-parent {
        position: absolute;
        top: 27px;
        left: 632px;
        width: 641px;
        height: 32px;
    }

    .robotic-and-embedded {
        margin: 0;
    }

    .teknik-komputer {
        margin: 0;
        font-size: 36px;
    }

    .robotic-and-embedded-container {
        position: absolute;
        top: 13px;
        left: 112px;
        font-size: 20px;
    }

    .n {

        width: 85px;
        height: 85px;
        flex-shrink: 0;
        transform: rotate(0deg);
        overflow: hidden;
        box-shadow: 4px 4px 8.600000381469727px 0px rgba(0, 0, 0, 0.25);
    }

    .iay2dwwy-400x400-1-1 {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 85px;
        height: 85px;
        object-fit: cover;
    }

    :root {
        --custom-width: 50px;
        /* Define the custom width here */
    }

    .custom-navbar {
        background: linear-gradient(to right, #fa8b0c, #fe6a0c);
        font-family: Google Sans;
        color: #ffffff;
        justify-content: space-between;
        padding: 5rem;
        align-items: center
    }

    .custom-navbar .navbar-brand img.logo {
        width: 80px;
        left: 10px;
        top: 10px;
        box-shadow: 4px 4px 8.600000381469727px 0px rgba(0, 0, 0, 0.25);
    }

    .custom-navbar .nav-item .nav-link {
        color: #ffffff
    }

    .custom-navbar .subtitle {
        font-size: calc(35 * var(--ratio));
        font-weight: 700;

        text-decoration: none;
        text-transform: none;

        line-height: calc(36 * var(--ratio));

        color: #ffffff
    }
</style>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar Example</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Navbar Example</title>
            <!-- Bootstrap CSS -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/image0.png') }}" alt="logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">ROBOTIC AND EMBEDDED
                                    SYSTEM LABORATORY<br><span class="subtitle">TEKNIK KOMPUTER</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                                    <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                                    <li><a class="dropdown-item" href="#">Struktur</a></li>
                                    <li><a class="dropdown-item" href="#">Video</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Praktikum</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInformasi"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Informasi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownInformasi">
                                    <li><a class="dropdown-item" href="#">Berita</a></li>
                                    <li><a class="dropdown-item" href="#">Artikel</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Peminjaman</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Bootstrap Bundle with Popper -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>


        <!-- Bootstrap Bundle with Popper -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
