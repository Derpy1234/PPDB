<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PPDB</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-info rounded-pill mt-4">
             <a class="navbar-brand " style="margin-left: 20px"><img src="{{ asset('/assets/img/Wikrama.PNG') }}" alt="" width="60px"></a> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jurusan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                      </li>
                    </ul>
                </div>    
          </nav>
    </div>
    <div class="container mt-5 ">
        <h1 class="text-white">PPDB TP 2023-2024 <br>
            SMK WIKRAMA BOGOR        
        </h1>
        <h5 class="text-white">AYO! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <strong> PENDAFTARAN PPDB</strong> dibawah ini!<br>
            <strong> ilmu yang amaliah, Amal yang ilmiah, Akhlakul karimah </strong>
        </h5>
        <button class="btn btn-warning mt-3 fw-bold" style="padding: 17px 30px">PENDAFTARAN PPDB</button>
    </div>
    <div class="container mt-5">
        <div class="rounded shadow p-5 bg-info">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-0 text-center">
                    <h3 class="font-weight-bold text-capitalize h5 ">MOTTO</h3>
                    <p class="regular text-muted">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <h3 class="font-weight-bold text-capitalize h5 ">AFIRMASI</h3>
                    <p class="regular text-muted">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                    <h3 class="font-weight-bold text-capitalize h5 ">ATITUDE</h3>
                    <p class="regular text-muted">Aku ada lingkunganku <br> bahagia</p>
                    <p></p>
                </div>
            </div>
        </div>
        </div>
</body>
</html>