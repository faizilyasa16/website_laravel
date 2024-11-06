<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
    <style>
        .navbar ul li a {
            color: white;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: orange;
        }

        /* Add margin to main content */
        .main-content {
            margin-top: 150px;
        }
    </style>
</head>
<body data-bs-theme="light">
    <div class="w-100 d-flex align-items-center justify-content-between position-fixed top-0" style="height: 100px; z-index: 1000; background-color: #222C65;">
        <ul class="d-flex align-items-center list-unstyled m-0">
            <li class="d-flex position-relative" style="right: 10px; bottom: 5px;">
                <img src="img/logo_elitra.png" alt="" width="150px">
            </li>
        </ul>
        <div class="me-5 navbar">
            <ul class="d-flex gap-4 m-0 list-unstyled align-items-center justify-content-center">
                <li><a href="{{ route('homefrontend') }}" class="text-decoration-none">Home</a></li>
                <li><a href="#" class="text-decoration-none">Lowongan</a></li>
                <li><a href="{{ route('aboutusfrontend') }}" class="text-decoration-none me-2">Tentang Kami</a></li>
            </ul>
        </div>        
    </div>

    <!-- Main content with margin -->
    <div class="main-content text-center">
        <h1 class="fs-1 text-dark">Yuk!! Menjadi Bagian Elitra</h1>
        <div class="bg-warning d-block mx-auto" style="height: 4px; width: 30%;"></div>
        <p class="fs-5 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quia.</p>
    </div> 

        <!-- Container with col-6 layout -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="border rounded-top-4">
                        <img src="{{ asset('img/lowongan.jpg') }}" class="img-fluid rounded-top-4" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        <h3 class="pt-2 ms-2">Web Developer</h3>
                        <p class="ms-2">Kami mencari tim Web Developer berpengalaman yang siap membantu Anda membangun dan mengoptimalkan situs web yang responsif, fungsional, dan sesuai kebutuhan bisnis Anda. Lihat info selengkapnya!</p>
                        <div class="d-flex me-3 pb-3">
                            <button class="btn btn-primary ms-auto "><a href="{{ route('lowonganfrontend1') }}" class="text-decoration-none text-white">Info Selengkapnya</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="border rounded-top-4">
                        <img src="{{ asset('img/lowongan2.jpg') }}" class="img-fluid rounded-top-4" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        <h3 class="pt-2 ms-2">Cyber Security</h3>
                        <p class="ms-2">Kami mencari solusi keamanan digital yang prioritas. Tim Cyber Security kami melindungi data dan sistem Anda dari ancaman siber dengan solusi keamanan yang terkini dan proaktif. Lihat info selengkapnya!"</p>
                        <div class="d-flex me-3 pb-3">
                            <button class="btn btn-primary ms-auto "><a href="{{ route('lowonganfrontend2') }}" class="text-decoration-none text-white">Info Selengkapnya</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="border rounded-top-4">
                        <img src="{{ asset('img/lowongan3.jpg') }}" class="img-fluid rounded-top-4" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        <h3 class="pt-2 ms-2">UI / UX Designer</h3>
                        <p class="ms-2">Kami mencari desainer yang paham bahwa desain adalah kunci dalam menciptakan pengalaman pengguna yang menarik. UI/UX Designer kami bekerja keras untuk menghadirkan antarmuka yang intuitif dan menarik bagi audiens Anda. Lihat info selengkapnya!</p>
                        <div class="d-flex me-3 pb-3">
                            <button class="btn btn-primary ms-auto"><a href="{{ route('lowonganfrontend3') }}" class="text-decoration-none text-white">Info Selengkapnya</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="border rounded-top-4">
                        <img src="{{ asset('img/lowongan4.jpg') }}" class="img-fluid rounded-top-4" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        <h3 class="pt-2 ms-2">Software Developer</h3>
                        <p class="ms-2">Kami mencari Software Developer berbakat dengan keahlian tinggi dalam pengembangan perangkat lunak. Dengan solusi inovatif dan berorientasi hasil, kami siap mendukung operasional bisnis Anda secara efisien dan optimal. Temukan info selengkapnya dan bergabunglah dengan kami!</p>
                        <div class="d-flex me-3 pb-3">
                            <button class="btn btn-primary ms-auto "><a href="{{ route('lowonganfrontend4') }}" class="text-decoration-none text-white">Info Selengkapnya</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100" style="height: 200px; background-color: #222C65;">
            <div class="container">
              <div class="row">
                <div class="col-3">
                  <img src="{{ asset('img/logo_elitra.png') }}" alt="" style="width: 200px;">
                </div>
                <div class="col-3" style="margin-top: 60px">
                  <h4 class="text-white">Tentang Kami</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, voluptatibus.</p>
                </div>
                <div class="col-3" style="margin-top: 60px;">
                    <h4 class="text-white">Follow Us</h4>
                    <ul class="list-unstyled d-flex m-0 p-0">
                      <li class="me-3">
                        <a href="#" class="text-white" style="display: inline-flex; align-items: center; justify-content: center; background-color: #0d6efd; color: white; border-radius: 50%; width: 40px; height: 40px;">
                          <i class="bi bi-facebook"></i>
                        </a>
                      </li>
                      <li class="me-3">
                        <a href="#" class="text-white" style="display: inline-flex; align-items: center; justify-content: center; background-color: #0d6efd; color: white; border-radius: 50%; width: 40px; height: 40px;">
                          <i class="bi bi-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="text-white" style="display: inline-flex; align-items: center; justify-content: center; background-color: #0d6efd; color: white; border-radius: 50%; width: 40px; height: 40px;">
                          <i class="bi bi-twitter"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  
                <div class="col-3" style="margin-top: 60px">
                  <h4 class="text-white">Contact Us</h4>
                  <ul class=" list-unstyled m-0">
                    <li class="d-flex align-items-center">
                      <i class="bi bi-building me-2 text-white"></i>
                      <p class="text-white mb-0">Jl. Jend. Sudirman No. 1, Jakarta</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-phone me-2 text-white"></i>
                      <p class="text-white mb-0">+6281234567890</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-envelope me-2 text-white"></i>
                      <p class="text-white mb-0">LQl7y@example.com</p>
                    </li>
                    
                  </ul>
                </div>
            </div>
          </div>
        



    <script src="{{ asset('js/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
