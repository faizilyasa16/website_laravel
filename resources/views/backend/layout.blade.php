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
        .bg-primary-dark {
            background-color: #1C2655;
        }
        .bg-primary-dark-bit{
            background-color: #222C65;
        }
    </style>
</head>
<body data-bs-theme="dark">
    <div class="bg-secondary-subtle w-100 d-flex align-items-center justify-content-between" style="height: 100px;">
        <ul class="d-flex align-items-center list-unstyled m-0 w-100">
            <li class="me-auto ms-xxl-3 ms-md-0">
                <div class="position-fixed bg-success" style="width: 5px; height: 50px; top: 25px; left: 10px;"></div>
                <h2 class="ms-xxl-1 ms-md-3">Hi, {{ Auth::user()->username }}</h2>
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
            <div class="col-auto bg-primary-dark" style="min-height: 89vh; width: 100px; overflow: hidden;">
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item text-center">
                        <a href="#" class="text-white active text-center">
                            <span class="nav-link  icon-wrapper bg-primary-dark-bit border border-white rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 40px; height: 40px;">
                                <i class=" text-white fa-solid bi-house-door-fill"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3  d-inline-block link-underline link-underline-opacity-0">Home</span>
                        </a>
                    </li>
                
                    <li class="nav-item text-center">
                        <a href="#" class="text-white text-center">
                            <span class="nav-link  icon-wrapper bg-primary-dark-bit  rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 40px; height: 40px;">
                                <i class=" text-white fa-solid fa-info"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0">About</span>
                        </a>
                    </li>
                
                    <li class="nav-item text-center">
                        <a href="#" class="text-white text-center">
                            <span class="nav-link bg-primary-dark-bit  icon-wrapper rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 40px; height: 40px;">
                                <i class=" text-white fa-solid fa-building"></i>
                            </span>
                            <span class="mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0" style="font-size: 0.7rem;">Company</span>
                        </a>
                    </li>
                
                    <li class="nav-item text-center">
                        <a href="#" class="text-white text-center">
                            <span class="nav-link bg-primary-dark-bit icon-wrapper rounded-2 d-block d-flex justify-content-center align-items-center mx-auto" style="width: 40px; height: 40px;">
                                <i class="text-white fa-solid fa-user"></i>
                            </span>
                            <span class="mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0" style="font-size: 0.8rem;">Recruit</span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
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
