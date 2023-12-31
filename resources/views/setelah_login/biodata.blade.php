
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_setelah_login/style_harga.css">
    <title>Profil</title>
    <style>
    body{
    background-image: url("../gambar/image7.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    }
    .message{
            font-family: 'Times New Roman';
            margin: 5px 0;
            width: 80%;
            height: 80%;
            border-radius: 5px;
            padding:10px;
            background-color: red;
            border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
            color: var(--white);
            font-size: 30px;
            text-align: center;
            color: rgb(245, 239, 231);
    
        }
</style>

</head>
<body>
    <!--bagian awal navigasi bar--> 
    <!--bagian awal navigasi bar--> 
    <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color:  #3c3d3ee8">
        <div class="container-fluid">
          <a class="navbar-brand active" href="#"><i class="bi bi-person-circle"></i></a>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  OTHER
                </a>
                <ul class="dropdown-menu  " aria-labelledby="navbarDropdown" style="background-color:  #3c3d3ee8; ">
                  <li><a class="dropdown-item text-light " href="../setelah_login/contact">CONTACT</a></li> 
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
      <!--layout 1 awal-->

      <div class="contaianer " style="height: 120vh; width:40%; background: #233452;  ">
     
      <div class="row align-items-center text-light" style="padding-top: 20px;">
      <div class="col-12 text-center" style="font-family: TIMES NEW ROMAN;">
      
      @if ($user->image)
       <img src="{{ asset('storage/'.$user->image) }} " alt="" style="border-radius: 50%; border: solid 4px;" width="130" height="130">
       @else
       <img src="../gambar/gambar5.png " alt="" style="border-radius: 50%; border: solid 4px;" width="130" height="130">
      @endif

       <h3 class="mt-2">//PROFILE//</h3>
       
       <h5 >Hai "{{ $user->name }}"</h5><br>
       @if(session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
       @endif
       <center><p style="border-bottom: 4px solid white; width: 80%;"></p></center>
       <center>
       <div style="width: 80%;">
       <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="row g-3">
        <div class="col">
        <span>Username:</span>
          <input type="text" class="form-control" placeholder="Username"  name="update_nama" value="{{ $user->name }}"><center></center>
        </div>
        <div class="col">
        <input type="hidden" name="old_password" value="<?//= $data['password'] ?>">
        <span>Old Password:</span>
          <input type="password" class="form-control"   name="update_password" placeholder="Enter Previous Password">
        </div>
      </div><br>

      <div class="row g-3">
        <div class="col">
        <span>Email:</span>
          <input type="text" class="form-control" placeholder="Enter Email"  name="update_email" value="{{ $user->email }}">
        </div>
        <div class="col">
        <span>New Password:</span>
          <input type="password" class="form-control"   name="new_password" placeholder="Enter New Password">
        </div>
      </div><br>

      <div class="row g-3">
        <div class="col">
        <span>Update Picture:</span>
          <input type="file" class="form-control" placeholder="Update Picture"  name="update_image" accept="image/jpg, image/jpeg, image/png">
        </div>
        <div class="col">
        <span>Confirm Password:</span>
          <input type="password" class="form-control"   name="confirm_password" placeholder="Confirm Previous Password">
        </div>
      </div><br>

          <div>
          <button id="hover" type="submit" name="update_profile" value="update profile" class="btn btn-danger" data-bs-dismiss="modal" id="hover">Update</button>
          </div>
      </form>
      </div>
      </center>
    </div>
    </div>
      </div>
    
      
    
    <!--layout 1 akhir--> 

   
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>