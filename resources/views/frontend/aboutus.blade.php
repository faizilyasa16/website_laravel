<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .navbar ul li a {
            color: white;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: orange;
        }
        .container-fluid {
    max-width: 1920px;
    margin: 0 auto;
}

    </style>
</head>
<body>
    <div class="w-100 d-flex align-items-center justify-content-between position-fixed top-0" style="height: 100px; z-index: 1000; background-color: #222C65;">
        <ul class="d-flex align-items-center list-unstyled m-0">
            <li class="d-flex position-relative" style="right: 10px; bottom: 5px;">
                <img src="img/logo_elitra.png" alt="" width="150px">
            </li>
        </ul>
        <div class="me-5 navbar">
            <ul class="d-flex gap-4 m-0 list-unstyled align-items-center justify-content-center">
                <li><a href="{{ route('homefrontend') }}" class="text-decoration-none">Home</a></li>
                <li><a href="{{ route('lowonganfrontend') }}" class="text-decoration-none">Lowongan</a></li>
                <li><a href="#" class="text-decoration-none me-2">Tentang Kami</a></li>
            </ul>
        </div>        
    </div>

    {{-- bikin main content --}}
    <div class="mt-5">
        <div class="container">
            <div class="shadow p-3 mx-auto rounded-5" style="margin-top: 150px; width: 300px; height: 300px; background-color: #222C65; display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('img/logo_elitra.png') }}" alt="" class="img-fluid" style="width: 100%; height: auto; border-radius: 15px;">
            </div>
            <h1 class="text-center mt-4">Tentang Kami</h1>
            <p class="text-center fs-5">EIitra adalah layanan outsourcing berbasis software yang fokus pada rekrutmen, mempermudah pencarian pekerjaan dan perekrutan karyawan dengan solusi efisien dan terintegrasi.</p>
            <div class="row mt-5">
                <div class="col-12 text-center mt-5">
                    <h4 class="fs-2 fw-bold text-dark">Visi & Misi Kami</h4>
                    <div class="bg-warning mx-auto" style="height: 4px; width: 40%;"></div>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <!-- Visi Section -->
                    <div class="rounded-4 p-4" style="background-color: #222C65; flex: 1;">
                        <h4 class="text-center text-white fw-semibold mb-3">Visi</h4>
                        <p class="text-center text-white" style="font-size: 1rem; line-height: 1.6;">
                            PT ElitRa bertekad untuk menjadi penyedia layanan outsourcing TI terdepan di Indonesia, dikenal atas keunggulan, inovasi, dan kemampuan kami dalam mendukung transformasi digital bagi bisnis di berbagai sektor industri.
                        </p>
                    </div>
                    <!-- Misi Section -->
                    <div class="rounded-4 p-4 ms-3" style="background-color: #222C65; flex: 1;">
                        <h4 class="text-center text-white fw-semibold mb-3">Misi</h4>
                        <p class="text-center text-white" style="font-size: 1rem; line-height: 1.6;">
                            Kami menyediakan solusi teknologi inovatif yang disesuaikan dengan kebutuhan klien, mengutamakan keamanan data, serta memastikan kepatuhan terhadap standar global seperti GDPR dan ISO 27001 untuk mendukung tujuan strategis klien.
                        </p>
                    </div>
                </div>
            </div>
            
            <img src="{{ asset('img/alam.jpg') }}" alt="" class="img-fluid mt-5 rounded-5" style="width: 100%; height: 500px; object-fit: cover;" data-aos="zoom-in" data-aos-duration="2000">
            <div class="mt-4 ms-2">
                <div class="row">
                    <div class="col-6 mt-3">
                        <div class="mb-4" data-aos="fade-right" data-aos-duration="2000">
                            <h3 class="">Cerita Kami</h3>
                            <div class="bg-warning " style="height: 4px; width: 12%;"></div>
                        </div>
                        <div class="fs-5" data-aos="fade-right" data-aos-duration="1500">
                            <p class="mb-3">Di PT ElitRa, kami bekerja dengan teknologi terkini untuk menyediakan layanan terbaik. Kami ahli dalam AWS, Microsoft Azure, Docker, Kubernetes, dan berbagai alat keamanan siber terdepan guna menjaga sistem klien kami tetap aman dan efisien. Kami selalu mengikuti tren industri untuk memastikan solusi kami siap menghadapi masa depan.</p>
                            <p>Tim ahli bersertifikasi kami terdiri dari pengembang perangkat lunak, spesialis keamanan siber, insinyur jaringan, dan analis data yang memiliki pengalaman bertahun-tahun di industri ini. Dengan keahlian yang beragam, kami mampu menangani proyek dengan berbagai ukuran dan tingkat kompleksitas, memastikan klien kami mendapatkan solusi dan hasil terbaik.</p>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="fs-5" data-aos="fade-left" data-aos-duration="1500">
                            <p class="mb-3">Didirikan pada tahun 2024, PT ElitRa adalah penyedia layanan outsourcing TI terkemuka yang bertujuan untuk memberikan solusi teknologi inovatif dan berkualitas tinggi. Tim kami berdedikasi membantu bisnis untuk mengoptimalkan dan mentransformasi operasional TI mereka, sehingga mereka dapat fokus pada hal yang paling penting mengembangkan bisnis inti mereka. </p>
                            <p>Kami percaya bahwa integritas, perbaikan berkelanjutan, dan komitmen terhadap keunggulan adalah fondasi utama dari setiap layanan yang kami berikan. Di PT Solusi Digital Maju, kami selalu berusaha untuk memberikan layanan yang transparan, jujur, dan dapat dipercaya, sehingga menciptakan hubungan jangka panjang dengan klien kami. </p>
                        </div>
                        <div class="" data-aos="fade-left" data-aos-duration="2000">
                            <h3 class="text-center" style="margin-top: 25px;">Layanan Kami</h3>
                            <div class="bg-warning mx-auto" style="height: 4px; width: 30%;"></div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row mt-5">
                    <div class="col-6 mb-4">
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;" data-aos="fade-up" data-aos-duration="2000">
                            <div class="row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-globe ms-3" style="font-size: 80px;"></i>
                                </div>   
                                <div class="col-10">
                                    <h3 class="pt-2 ms-2">Web Developer</h3>
                                    <p class="ms-2">Kami mencari tim Web Developer berpengalaman yang siap membantu Anda membangun dan mengoptimalkan situs web yang responsif, fungsional, dan sesuai kebutuhan bisnis Anda. Lihat info selengkapnya!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;" data-aos="fade-up" data-aos-duration="2000">
                            <div class="row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-shield-lock ms-3" style="font-size: 80px;"></i>
                                </div>    
                                <div class="col-10">
                                    <h3 class="pt-2 ms-2">Cyber Security</h3>
                                    <p class="ms-2">Kami mencari solusi keamanan digital yang prioritas. Tim Cyber Security kami melindungi data dan sistem Anda dari ancaman siber dengan solusi keamanan yang terkini dan proaktif. Lihat info selengkapnya!"</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;" data-aos="fade-up" data-aos-duration="3000">
                            <div class="row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-pencil-square ms-3" style="font-size: 80px;"></i>
                                </div>                                
                                <div class="col-10">
                                    <h3 class="pt-2 ms-2">UI / UX Designer</h3>
                                    <p class="ms-2">Kami mencari desainer yang paham bahwa desain adalah kunci dalam menciptakan pengalaman pengguna yang menarik. UI/UX Designer kami bekerja keras untuk menghadirkan antarmuka yang intuitif dan menarik bagi audiens Anda. Lihat info selengkapnya!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;" data-aos="fade-up" data-aos-duration="3000"> 
                            <div class="row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-code-slash ms-3" style="font-size: 80px;"></i>
                                </div>  
                                <div class="col-10">
                                    <div class="row">
                                        <h3 class="pt-2 ms-2">Software Developer</h3>
                                        <p class="ms-2">Kami mencari Software Developer berbakat dengan keahlian dalam pengembangan perangkat lunak. Dengan solusi inovatif dan berorientasi hasil, kami siap mendukung operasional bisnis Anda secara efisien dan optimal. Temukan info selengkapnya dan bergabunglah dengan kami!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h1 >Berminat Bekerja sama dengan kami?</h1>
                    <p>Kami Menanti Kehadiran anda</p>
                    <button class="btn w-50 rounded-5" style="background-color: #222C65"><a href="{{ route('lowonganfrontend') }}" class="text-white text-decoration-none">Lihat lebih banyak lagi </a></button>
                </div>                             
        </div>
        <div class="container-fluid mt-5  w-100" style="background: #222C65">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <!-- Bagian kiri col-6 -->
                            <div class="col-6">
                                <h1 class="text-white ms-3">Profile Perusahaan</h1>
                                <div class="row">
                                    <div class="col-12  d-flex mt-3 justify-content-between">
                                        <div class="col-6 me-3 bg-primary rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-3 d-flex justify-content-center">
                                                    <i class="bi bi-building-fill fs-1 text-white"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="text-white text-center mt-3">Nama Perusahaan</p>
                                                    <p class="text-white fw-bold text-center">PT. Elitra</p>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-6 bg-primary rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-3 d-flex justify-content-center">
                                                    <i class="bi bi-card-text fs-1 text-white"></i>
                                                </div>
                        
                                                <div class="col-9">
                                                    <p class="text-white text-center mt-2">NIB</p>
                                                    <p class="text-white fw-bold text-center">123456789</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3 d-flex justify-content-between">
                                        <div class="col-6 me-3 bg-primary rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-3 d-flex justify-content-center">
                                                    <i class="bi bi-person-fill fs-1 text-white"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="text-white text-center mt-2">Direktur Perusahaan</p>
                                                    <p class="text-white fw-bold text-center">Fathur Rahman Rifaldi Al Gobiyun jiddan</p>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="col-6 bg-primary rounded-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-3 d-flex justify-content-center">
                                                    <i class="bi bi-briefcase-fill fs-1 text-white"></i>
                                                </div>
                        
                                                <div class="col-9">
                                                    <p class="text-white text-center mt-2">Bidang Usaha</p>
                                                    <p class="text-white fw-bold text-center">Perusahaan Penyedia Tenaga Kerja IT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Gambar di sebelah kanan -->
                            <div class="col-6" style="padding-left: 50px;">
                                <img src="{{ asset('img/alam.jpg') }}" alt="" class="" style="width: 46.9vw; height: 300px; object-fit: cover; ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-3" style="background-color: #1C2655; width: 100%;">
                    <div class="row">
                        <div class="col-3 text-center text-white mt-3">
                            <h3>Alamat Perusahaan</h3>
                            <p>Jl. Cut Mutia No. 88, Sepanjang Jaya, Kec. Rawalumbu, Kota Bekasi, Jawa Barat 17113, Indonesia</p>
                        </div>
                        <div class="col-3 text-white mt-3">
                            <div class="mx-auto" style="height: 100px; width: 90%;">
                                <div class="row bg-primary p-3 rounded">
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <i class="bi bi-telephone-fill fs-1 text-white" style="transition: transform 0.3s; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-white text-center mt-1 mb-0">Telepon</p>
                                        <p class="text-white text-center fw-bold mt-1 mb-0">+6281234567890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 text-white mt-3">
                            <div class="mx-auto" style="height: 100px; width: 90%;">
                                <div class="row bg-primary p-3 rounded">
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <i class="bi bi-whatsapp fs-1 text-white" style="transition: transform 0.3s; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-white text-center mt-1 mb-0">Whatsapp</p>
                                        <p class="text-white text-center fw-bold mt-1 mb-0">+6281234567890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 text-white mt-3" >
                            <div class="mx-auto" style="height: 100px; width: 90%;">
                                <div class="row bg-primary p-3 rounded">
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <i class="bi bi-envelope-fill fs-1 text-white" style="transition: transform 0.3s; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-white text-center mt-1 mb-0">Email</p>
                                        <p class="text-white text-center fw-bold mt-1 mb-0">LQl7y@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ulangi pola ini untuk kolom telepon lainnya -->
                    </div>
                </div>
    </div>
    <div class="w-100" style="height: 200px; background-color: #222C65;">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <img src="{{ asset('img/logo_elitra.png') }}" alt="" style="width: 200px;">
            </div>
            <div class="col-3" style="margin-top: 20px">
              <h4 class="text-white">Tentang Kami</h4>
              <p class="text-white">EIitra adalah layanan outsourcing berbasis software yang fokus pada rekrutmen, mempermudah pencarian pekerjaan dan perekrutan karyawan dengan solusi efisien dan terintegrasi.</p>
            </div>
            <div class="col-3" style="margin-top: 20px;">
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
            
            
            
            <div class="col-3" style="margin-top: 20px">
              <h4 class="text-white">Contact Us</h4>
              <ul class=" list-unstyled m-0">
                <li class="d-flex align-items-center">
                  <i class="bi bi-building me-3 text-white"></i>
                  <p class="text-white mb-0">Jl. Cut Mutia No. 88, Kota Bekasi</p>
                </li>
                <li class="d-flex align-items-center">
                  <i class="bi bi-phone me-3 text-white"></i>
                  <p class="text-white mb-0">+6281234567890</p>
                </li>
                <li class="d-flex align-items-center">
                  <i class="bi bi-envelope me-3 text-white"></i>
                  <p class="text-white mb-0">LQl7y@example.com</p>
                </li>
                
              </ul>
            </div>
        </div>
      </div>
      
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
        AOS.init();
      </script>
    
</body>
</html>