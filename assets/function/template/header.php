<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- css.gg -->
    <link href='https://css.gg/css' rel='stylesheet'>

    <!-- UNPKG -->
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>

    <!-- JSDelivr -->
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class="bx bx-menu" id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="index.php" class="nav_logo">
                    <i class='bx bxs-store nav_logo-icon'></i>
                    <span class="nav_logo-name">The Ardianto Baut</span>
                </a>
                <div class="nav_list">
                    <li class="nav_link">
                        <a href="index.php">
                            <i class='bx bx-home-alt-2 nav_icon'></i>
                            <span class="nav_name">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a class="logo-side" href="tbl_data_barang.php">
                            <i class='bx bx-table nav_icon'></i>
                            <span class="nav_name">
                                Data Barang
                            </span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a class="logo-side" href="tbl_barang_masuk.php">
                            <i class='bx bx-archive-in nav_icon'></i>
                            <span class="nav_name">
                                Input Barang
                            </span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a class="logo-side" href="tbl_barang_keluar.php">
                            <i class='bx bx-package nav_icon'></i>
                            <span class="nav_name">
                                Barang Keluar
                            </span>
                        </a>
                    </li>
                    <li class="nav_link">
                        <a class="logo-side" href="logout.php">
                            <i class='bx bx-log-out nav_icon'></i>
                            <span class="nav_name">
                                Log Out
                            </span>
                        </a>
                    </li>
                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->