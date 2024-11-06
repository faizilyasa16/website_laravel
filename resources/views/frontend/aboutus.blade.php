<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
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
            <p class="text-center fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem dicta omnis doloremque sint animi! Et ea neque delectus dolorum reprehenderit?</p>
            <div class="row mt-5">
                <div class="col-12 text-center mt-5">
                    <h4 class="fs-2">Visi & Misi Kami</h4>
                    <div class="bg-warning mx-auto" style="height: 4px; width: 32%;"></div>
                  </div>
                  <div class="d-flex justify-content-between mt-5">
                    <div class="bg-warning rounded-4">
                        <h4 class="text-center mt-4">Visi</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis perspiciatis excepturi voluptatibus tenetur. Ad, beatae. Corrupti, facilis accusamus quod, aut deserunt, velit eveniet provident atque ipsam sit quas corporis dolor.</p>
                    </div>
                    <div class="bg-primary rounded-4 ms-3" >
                        <h4 class="text-center mt-4">Misi</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nam harum laboriosam quibusdam natus, quod quos eum voluptatem aut velit minima possimus et veniam quas, nisi maiores accusamus quidem explicabo?</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/alam.jpg') }}" alt="" class="img-fluid mt-5 rounded-5" style="width: 100%; height: 500px; object-fit: cover;">
            <div class="mt-4 ms-2">
                <h3 class="">Cerita Kami</h3>
                <div class="bg-warning " style="height: 4px; width: 5%;"></div>
                <div class="row">
                    <div class="col-6 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores rerum blanditiis perspiciatis numquam maxime quam voluptates id fuga pariatur, eaque officiis repudiandae reprehenderit autem cupiditate dignissimos hic, est quia ratione. Eaque ea cum reiciendis temporibus deleniti tempore quas quis ipsam perspiciatis a ut quo corporis laborum magnam quam, aspernatur dignissimos repellat vero? Quisquam incidunt debitis adipisci laudantium cum sunt? At, laborum, beatae magni vero, vel modi expedita adipisci rerum asperiores fugit voluptatibus nihil dolorem ab? Eveniet quidem beatae quas ducimus ad earum fugiat? Officia consequatur non, voluptatem accusantium dolor earum maiores repellat mollitia, quo quaerat ipsa ratione aperiam, tempore porro dolore facere vel iste! Cum eos repellat ipsum exercitationem dolore impedit, eligendi accusamus non, eum illum recusandae nobis aliquid possimus. Modi ipsam quia, quo sed deserunt voluptas quaerat quisquam, placeat error minima cumque architecto! Animi molestiae necessitatibus provident magnam ipsam ut doloremque ab mollitia ratione magni. Aperiam pariatur nemo quas aspernatur quaerat neque ratione, maiores tempore perspiciatis ipsum aliquam alias corporis molestias quidem. Voluptatem, illo doloribus sunt, laudantium incidunt soluta, sit distinctio qui et sapiente expedita cumque nihil asperiores. Perspiciatis eius libero doloribus neque adipisci nam atque id aliquid molestiae illo, laudantium omnis natus veniam corrupti recusandae ratione sunt labore!</p>
                    </div>
                    <div class="col-6 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto corrupti alias asperiores, voluptate maiores mollitia vitae laborum, commodi ipsum rem consequatur, accusantium sunt. Rerum minima architecto explicabo temporibus optio aliquid ratione quae ea, fugiat alias, quaerat dignissimos. Dolores laborum asperiores sint sit voluptas cumque ex deserunt perferendis porro quis pariatur, obcaecati vitae dolor, quibusdam fugit accusantium facilis quo! Illum officiis ut culpa ullam minima dolore ex! Obcaecati minima ex labore earum unde. Repellendus ea beatae id voluptas error nihil expedita eum, quasi nemo architecto atque. Earum labore quibusdam facere fugiat debitis cupiditate vel id corporis obcaecati quisquam, repellat voluptatum consequuntur laboriosam, explicabo quae quaerat non excepturi minus dolor. Eum non vel enim consequatur officia sequi exercitationem, asperiores explicabo impedit ex facere vitae optio, veniam amet, minus voluptate atque cupiditate? Blanditiis deserunt aspernatur ut quis quae tempore, ratione nostrum aut itaque aliquam sunt mollitia sint nesciunt. Iure quae sit earum explicabo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dolore beatae culpa aspernatur non quis dolor totam quasi, in ipsam!</p>
                        <h3 class="text-center" style="margin-top: 40px;">Layanan Kami</h3>
                        <div class="bg-warning mx-auto" style="height: 4px; width: 30%;"></div>
                    </div>
                </div>
            </div>
                <div class="row mt-5">
                    <div class="col-6 mb-4">
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;">
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
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;">
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
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;">
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
                        <div class="border rounded-top-4 text-white" style="background-color: #222C65;">
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
                                        <p class="text-white text-center fw-bold mt-1 mb-0">lorem@gmail.com</p>
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
              <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste autem laborum facilis modi quia! Recusandae, ipsam ea obcaecati repellendus doloremque aut deleniti ut quisquam quia.</p>
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
                  <p class="text-white mb-0">Jl. Jend. Sudirman No. 1, Jakarta</p>
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
      
    
    
</body>
</html>