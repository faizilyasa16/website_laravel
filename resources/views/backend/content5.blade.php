<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRD Room</title>
    <link href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-link {
            transition: 0.3s;
        }

        .active-border {
            border: 2px solid white;
        }

        .nav-link:hover {
            background-color: #343a40;
        }

        .bg-primary-dark {
            background-color: #1C2655;
        }

        .bg-primary-dark-bit {
            background-color: #222C65;
        }
    </style>
</head>
<body data-bs-theme="dark">
    <div class="bg-secondary-subtle w-100 d-flex align-items-center justify-content-between" style="height: 100px;">
        <ul class="d-flex align-items-center list-unstyled m-0 w-100">
            <li class="d-flex position-relative" style="right: 30px">
                <img src="{{ asset('img/logo_elitra.png') }}" alt="" width="200px">
            </li>
            <li class="d-flex ms-auto me-5 position-relative">
                <a href="#" class="text-white dropdown-toggle d-flex align-items-center link-underline link-underline-opacity-0" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="text-white me-4 mt-3">{{ Auth::user()->username }}</p>
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
                <ul class="nav nav-pills flex-column mb-auto ">
                    <li class="nav-item text-center mt-3">
                        <a href="home" class="text-white text-center">
                            <span class="nav-link icon-wrapper bg-primary-dark-bit rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 50px; height: 50px;">
                                <i class="fs-4 text-white fa-solid bi-house-door-fill"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0">Home</span>
                        </a>
                    </li>
                    <!-- Additional sidebar items -->
                    <li class="nav-item text-center mt-3">
                        <a href="/content2" class="text-white text-center">
                            <span class="nav-link icon-wrapper bg-primary-dark-bit rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 50px; height: 50px;">
                                <i class="fs-4 text-white fa-solid bi-pie-chart-fill"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item text-center mt-3">
                        <a href="/content3" class="text-white text-center">
                            <span class="nav-link icon-wrapper bg-primary-dark-bit rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 50px; height: 50px;">
                                <i class="fs-4 text-white fa-solid bi-briefcase-fill"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0">Recruit</span>
                        </a>
                    </li>
                    <li class="nav-item text-center mt-3">
                        <a href="/content4" class="text-white text-center">
                            <span class="nav-link icon-wrapper bg-primary-dark-bit rounded-2 d-flex justify-content-center align-items-center mx-auto" style="width: 50px; height: 50px;">
                                <i class="fs-4 text-white fa-solid bi-building-fill"></i>
                            </span>
                            <span class="fs-6 mt-2 mb-3 d-inline-block link-underline link-underline-opacity-0">Company</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col"> <!-- Main Content now using col-12 -->
                <div class="fs-3 ms-2 mt-3 d inline-block">
                    <a href="{{ route('backend.content3.index') }}" class="text-decoration-none text-white"><i class="bi bi-arrow-left">Back</i></a>
                </div>
                        <div class="ms-5 mt-5 rounded-4 w-50 bg-primary p-4">
                                <h1>{{ $data->nama }}</h1>
                                <p>Tanggal Lahir    : {{ $data->tanggal_lahir }}</p>
                                <p>No. Telepon      : {{ $data->no_telepon }}</p>
                                <p>Alamat           : {{$data->alamat_tinggal}}</p>
                                <p>LinkdIn          : {{$data->linkedin}}</p>
                                <div class="bg-light" style="width: 100%; height: 4px;"></div>
                                <p class="mt-3">Pengalaman Sebelumnya : {{ $data->jabatan_sebelumnya }}</p>
                                <p>Lama Pengalaman (Bulan)      : {{ $data->lama_pengalaman }}</p>
                                <p>Harapan Gaji          : {{ $data->gaji_diharapkan }}</p>
                        </div>
            </div>
        </div>
    </div>

    <form id="keluar-app" action="{{ route('backend.logout') }}" method="post">
        @csrf
    </form>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll('.icon-wrapper');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active border from all links
                    navLinks.forEach(item => item.classList.remove('active-border'));
                    
                    // Add active border to the clicked link
                    this.classList.add('active-border');
                });
            });
        });
        AOS.init();
    </script>
</body>
</html>
