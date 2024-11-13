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
      textarea.form-control {
  min-height: 100px; /* Tinggi minimum */
  resize: vertical;  /* Hanya memungkinkan resize vertikal */
  width: 100%;       /* Pastikan lebar 100% */
}


      .body-slide {
          display: grid;
          place-items: center;
          overflow: hidden;
      }
      
      .slider {
          height: 300px;
          width: 100%;
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          overflow: hidden;
      }
      
      .slide-track {
          display: flex;
          width: calc(250px * 18);
          animation: scroll 30s linear infinite;
      }
      
      .slide-track:hover {
          animation-play-state: paused;
      }

      @keyframes scroll {
          0% {
              transform: translateX(0);
          }
          100% {
              transform: translateX(calc(-250px * 3));
          }
      }

      .slide {
    height: 200px;
    width: 300px; /* Increase width here */
    display: flex;
    align-items: center;
    padding: 15px;
    perspective: 100px;
}

      .slide img {
          width: 100%;
          transition: transform 0.8s;
      }

      
      .slide img:hover {
          transform: scale(1.1);
      }

      .slider::before,
      .slider::after {
          content: "";
          position: absolute;
          top: 0;
          width: 15%;
          height: 100%;
          z-index: 2;
      }

      .slider::before {
          left: 0;
      }

      .slider::after {
          right: 0;
          transform: rotateY(180deg);
      }

      @media (max-width: 768px) {
          .slide {
              width: 150px;
          }
          .slide-track {
              width: calc(150px * 18);
              animation: scroll 60s linear infinite;
          }
          @keyframes scroll {
              0% {
                  transform: translateX(0);
              }
              100% {
                  transform: translateX(calc(-150px * 3));
              }
          }
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
            <li><a href="#" class="text-decoration-none">Home</a></li>
            <li><a href="{{ route('lowonganfrontend') }}" class="text-decoration-none">Lowongan</a></li>
            <li><a href="{{ route('aboutusfrontend') }}" class="text-decoration-none me-2">Tentang Kami</a></li>
        </ul>
    </div>        
</div>

<!-- Tambahkan padding pada konten utama -->
<div class="content" style="padding-top: 100px;">
  <div class="card text-bg-dark">
    <img src="https://storage.googleapis.com/a1aa/image/dmr7qhKEDaYPHlnFQ4miS7SQVTfA1aTzBDzXbr1bO0e4sMrTA.jpg" class="card-img opacity-50" alt="..." style="width: 100%; height: 500px; object-fit: cover">
    <div class="card-img-overlay text-center d-flex align-items-center justify-content-center flex-column">
      <h1 class="card-title fs-1 text-warning">"Karier Hebat Dimulai di Sini"</h1>
      <h3 class="card-text">Mulai peluang karirmu dari sini dengan cara paling ampuh</h3>
    </div>
  </div>

  <div class="d-flex align-items-center justify-content-center mx-auto" style="margin-top: 50px; width: 100%; ">
    <div style="width: 70%;" class="ms-5">
        <h2 class="mb-4">Berkomitmen Menjadi Penyedia Tenaga Kerja IT Sementara No. 1 di Indonesia</h2>
        <p>Elitra adalah penyedia lowongan dan tenaga kerja IT di Indonesia Staffing Talenta IT di Indonesia yang fokus pada penyediaan tenaga kerja IT berpengalaman untuk proyek pengembangan perangkat lunak dan transformasi digital. Elitra menawarkan layanan outsourcing talenta IT dengan kontrak jangka pendek mulai dari 3 bulan. Jika Anda membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Bersama Elitra, dapatkan talenta IT sementara yang berkualitas serta siap membantu mewujudkan kesuksesan perusahaan Anda.</p>
    </div>
    <img src="{{ asset('img/buatabout.png') }}" alt="" style="width: 30%; margin-left: 100px" class="me-5">
  </div>  
  <div class="ms-5 mt-5">
    <h4 class="fs-2">Outsourcing Tenaga Kerja IT</h4>
    <div class="bg-warning" style="height: 4px; width: 5%;"></div>
  </div>
<div class="container-fluid mt-5"> 
  <div class="row justify-content-center align-items-center">
    <!-- Left Image Column -->
    <div class="col-12 col-md-2">
      <img src="{{ asset('img/left-image.png') }}" alt="Left Image" style="width: 100%; max-width: 300px; height: 200px; margin-bottom: -100px;">
    </div>

    <!-- Main Card Columns -->
    <div class="col-12 col-md-8">
      <div class="row">
        <div class="col-6 col-md-3 d-flex justify-content-center">
          <div class="card" style="width: 100%;">
            <img src="{{ asset('img/abugaga.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">Web Developer</h3>
              <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
              <p class="card-text mt-3 text-center">React, Next.JS, PHP, CSS, JavaScript, Laravel, Node.JS</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
          <div class="card" style="width: 100%;">
            <img src="{{ asset('img/abugaga.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">UI / UX Design</h3>
              <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
              <p class="card-text mt-3 text-center">Figma, Adobe XD, Sketch, InVision, Axure RP</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
          <div class="card" style="width: 100%;">
            <img src="{{ asset('img/abugaga.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">Software Developer</h3>
              <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
              <p class="card-text mt-3 text-center">Python, Java, C#, C++, Ruby, Swift dan Kotlin, GO (Golang)</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
          <div class="card" style="width: 100%;">
            <img src="{{ asset('img/abugaga.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">Cyber Security</h3>
              <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
              <p class="card-text mt-3 text-center">Python, C dan C++, Javascript, SQL, Ruby, Assembly</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Image Column -->
    <div class="col-12 col-md-2">
      <img src="{{ asset('img/right-image.png') }}" alt="Right Image" style="width: 100%; max-width: 300px; height: 200px; margin-top: -200px;">
    </div>
    
  </div>
</div>

  </div>
  <div class="ms-5 mt-5">
    <h4 class="fs-2">Perusahaan yang Bekerja Sama</h4>
    <div class="bg-warning" style="height: 4px; width: 5%;"></div>
  </div>
</div>

{{-- membuat slide --}}
<div class="body-slide">
  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      {{-- nge doublein --}}
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
      <div class="slide">
        <img src="{{ asset('img/alam.jpg') }}" alt="">
      </div>
    </div>
  </div>
</div>
<div class="">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
    <path fill="#1C2655" fill-opacity="1" d="M0,64L34.3,74.7C68.6,85,137,107,206,96C274.3,85,343,43,411,42.7C480,43,549,85,617,96C685.7,107,754,85,823,74.7C891.4,64,960,64,1029,53.3C1097.1,43,1166,21,1234,21.3C1302.9,21,1371,43,1406,53.3L1440,64L1440,300L0,100Z"></path>
  </svg>
</div>


<div class="" style="min-height: 600px; width: 100%;  padding-bottom: 20px; background-color: #1C2655">
  <div class="container">
    <div class="row">
      <div class="col-6 text-center d-flex flex-column align-items-center justify-content-center mb-4">
        <h2 class="text-white mt-5">Hubungi Kami</h2>
        <p class="text-white mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione aut nemo consequatur consequuntur animi expedita ut unde nam debitis, eaque accusamus, minus ipsam blanditiis excepturi odit, quasi saepe officiis velit quam. Saepe voluptatibus dolore recusandae sit reiciendis fugit autem quis, itaque tempore dignissimos rem consequuntur sunt numquam ipsa suscipit! Soluta numquam repellat nihil accusantium laudantium fugit eveniet tempore at neque consequuntur molestias amet voluptate nisi, consectetur nesciunt repudiandae atque voluptatibus.</p>
      </div>
      <div class="col-6 bg-white rounded-3  pb-2 mt-5">
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="0499350d-963f-4205-86aa-7ff3ad059e6b">
          <p class="mt-2 text-dark">Full Name</p>
          <input type="text" class="form-control" name="name" placeholder="Fathur Rahman">
  
          <!-- Tambahkan row baru untuk Email dan Telephone berdampingan -->
          <div class="row mt-3">
            <div class="col-6">
              <p class="text-dark">Email</p>
              <input type="text" class="form-control" name="email" placeholder="email@example.com">
            </div>
            <div class="col-6">
              <p class="text-dark">Telephone</p>
              <input type="text" class="form-control" name="phone" placeholder="08xxxx">
            </div>
          </div>
  
          <p class="text-dark mt-3">Company Name</p>
          <input type="text" class="form-control" name="company" placeholder="PT. Gacorr jaya jaya">
          <p class="text-dark mt-3">Message</p>
          <textarea class="form-control" name="message" placeholder="Sampaikan kebutuhan"></textarea>
          <button class="btn btn-primary rounded-pill mt-3">Kirim</button>
        </form>
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

      
      
      


      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      

    
</body>
</html>
