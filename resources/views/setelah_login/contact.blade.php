


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_setelah_login/style_contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iKBo+qL8r+8R6RTZ/DZUJntj6TlK9l5rZ5uNETqVJj82L/J9C/JepJHH" crossorigin="anonymous">

    <style>
      .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
      }
    
      .rating .fa-star {
        font-size: 24px;
        cursor: pointer;
        display: inline-block;
        padding: 5px;
      }
    
      .checked {
        color: orangered;
      }
    </style>
    
    <title>Contact Page</title>

   
</head>
<body>
   <!--bagian awal navigasi bar--> 
   <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color:  #3c3d3ee8">
    <div class="container-fluid">
      <a class="navbar-brand" href="../setelah_login/biodata"><i class="bi bi-person-circle"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../setelah_login/harga">PAKET</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              OTHER
            </a>
            <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color: #3c3d3ee8 ; ">
              <li><a class="dropdown-item active text-light" href="../setelah_login/contact">CONTACT</a></li>
              <li><a class="dropdown-item text-light" href="../setelah_login/gallery">GALLERY</a></li>
              <li><a class="dropdown-item text-light" href="../setelah_login/tips">TIPS&TRIK</a></li>
              <li><a class="dropdown-item text-light" href="../setelah_login/kupon">KUPON</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item text-light"><i class="bi bi-box-arrow-in-left ">&nbsp;&nbsp;LOGOUT</i></button>
                </form>
              </li>
            </ul>
            
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<!--bagian akhir navigasi bar-->
      <!--layout 1 awal-->
   <div class="container-fluid  text-light" style="height: 40vh; background-color: #292b2d;">
    <div class="row align-items-center">
      <div class="col-12 mt-5 text-center">
       <h2 style="font-family: times new roman;">//CONTACT//</i></h2>
       <h1><i class="bi bi-telephone" style="text-align: center;"></i></h1>
       <p style="text-align: center; ">(WhatsApp: 081557648527 Email: Fotografer@gmail.com Telegram: @fotografer_78)</p>
      </div>
   </div>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#292b2d" fill-opacity="1" d="M0,160L30,149.3C60,139,120,117,180,117.3C240,117,300,139,360,160C420,181,480,203,540,192C600,181,660,139,720,154.7C780,171,840,245,900,250.7C960,256,1020,192,1080,154.7C1140,117,1200,107,1260,133.3C1320,160,1380,224,1410,256L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
   
   <div class="container" style="height: 100vh; ">
    <h2 style="text-align: center; font-family: times new roman;" class="mb-5">Sosial Media</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner shadow-lg" style="border-radius: 40px;" id="hover">
        <div class="carousel-item active" >
          <img src="../gambar/gambar12.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@fotografer_78</h5>
            <p>Kami Siap Mengabadikan Momen Spesial Dalam Hidup Anda</p>
          </div>
        </div>
        <div class="carousel-item shadow-lg" style="border-radius: 40px;">
          <img src="../gambar/gambar13.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@fotografer_78</h5>
            <p> kami Siap Mengabadikan Hari Bersejarah Dalam Hidup Anda</p>
          </div>
        </div>
        <div class="carousel-item shadow-lg"style="border-radius: 40px;">
          <img src="../gambar/gambar14.png" class="d-block w-100" alt="..." style="height: 500px;">
          <div class="carousel-caption ">
            <h5>@fotografer_78</h5>
            <p>Kami Siap Mengabadikan Setiap Petualangan Yang Kamu Lalui</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
   </div>

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,154.7C274.3,139,343,149,411,165.3C480,181,549,203,617,218.7C685.7,235,754,245,823,224C891.4,203,960,149,1029,138.7C1097.1,128,1166,160,1234,181.3C1302.9,203,1371,213,1406,218.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

    <!--layout 1 akhir--> 

    <!--masukan-->
    <div class="container-fluid " style="height: 100vh; background-color: #ffc107;">
      <div class="row justify-content-center">
        <div class="col-6  mb-3">
          <h3 style="text-align: center; font-family: times new roman;">Ulasan</h3>
          <br>
          <form method="POST" action="{{ route('contact') }}">
            @if(session('success'))
          <div class="alert alert-success">
             {{ session('success') }}
          </div>
            @endif
            @csrf
            <div class="mb-3 ">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input  name="nama" type="text" class="form-control shadow-lg" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
              <input name="email" type="email" class="form-control shadow-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Ulasan</label>
              <textarea name="komentar" class="form-control shadow-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!--Ratting-->
            <div class="mb-3 rating" style="justify-content: left; display:flex">
              <label for="rating" class="form-label"><p>Berikan rating</p></label>
              <input type="hidden" name="rating" id="rating" value="0">
              <span class="fa fa-star" data-rating="1"></span>
              <span class="fa fa-star" data-rating="2"></span>
              <span class="fa fa-star" data-rating="3"></span>
              <span class="fa fa-star" data-rating="4"></span>
              <span class="fa fa-star" data-rating="5"></span>
          </div>
            
           
            <button value="Tambah" name="tombol" type="submit" class="btn btn-primary shadow-lg">Submit</button>
          </form>
        </div>
     </div>
    </div>
    <!--mmasukan akhir-->
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            const stars = document.querySelectorAll(".rating .fa-star");
            const ratingInput = document.getElementById("rating");
    
            stars.forEach((star) => {
                star.addEventListener("click", function () {
                    const ratingValue = parseInt(star.getAttribute("data-rating"));
                    ratingInput.value = ratingValue;
    
                    // Reset bintang
                    stars.forEach((s, index) => {
                        if (index < ratingValue) {
                            s.classList.add("checked");
                        } else {
                            s.classList.remove("checked");
                        }
                    });
                });
            });
        });
    </script>
    
</body>
</html>





