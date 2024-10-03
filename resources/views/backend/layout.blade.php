<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="css\Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Bootstrap-icon/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            background-color: #343a40;
        }
    </style>
</head>
<body data-bs-theme="dark">
    <div class="bg-secondary w-100 d-flex align-items-center justify-content-between" style="height: 100px;">
        <ul class="d-flex align-items-center list-unstyled m-0 w-100">
            <li class="me-auto ms-xxl-3 ms-md-0">
                <img src="img/kucing.png" alt="Gambar Kucing" style="width: 150px;">
            </li>
            <li class="d-flex ms-auto me-5 position-relative">
                <a href="#" class="text-white dropdown-toggle d-flex align-items-center" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fs-2 bi-person-circle me-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="confirmLogout()">Logout</a></li>
                </ul>
            </li>        
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto min-vh-100 bg-secondary">
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fa-solid fa-house me-xxl-2"></i>
                            <span class="fs-5 d-none d-lg-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white mt-3">
                            <i class="fa-solid fa-chart-line me-xxl-2"></i>
                            <span class="fs-5 d-none d-lg-inline">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white mt-3">
                            <i class="fa-solid bi-people-fill me-xxl-2"></i>
                            <span class="fs-5 d-none d-lg-inline">Recruit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white mt-3">
                            <i class="fa-solid fa-info-circle me-xxl-2"></i>
                            <span class="fs-5 d-none d-lg-inline">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white mt-3">
                            <i class="fa-solid fa-address-book me-xxl-2"></i>
                            <span class="fs-5 d-none d-lg-inline">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    <form id="keluar-app" action="{{ route('backend.logout') }}" method="post">
        @csrf
    </form>
    <script src="js/script.js"></script>
    <script src="css\Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
