<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jurnal Harian PKL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                       <div class="text-center">
                            <img class="mb-2" src="{{ asset('img/juhar-pkl.png') }}" alt="LOGO" height="100">
                            <h4>JUHAR PKL</h4>
                            <p>Sistem jurnal harian PKL berbasis website, silakan masuk untuk informasi lebih lanjut.</p>
                       </div>
                       <a href="">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                     <img src="{{ asset('img/guru.png') }}" alt="LOGO" height="80">
                                     <div class="ms-2">
                                         <h4 class="mb-0">Login Guru atau pembimbing</h4>
                                        <small>Masuk sebagai guru atau pembimbing</small>
                                     </div>
                                </div>
                            </div>
                        </div>
                       </a>
                       <br>
                       <a href="">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                     <img src="{{ asset('img/siswa.png') }}" alt="LOGO" height="80">
                                     <div class="ms-2">
                                         <h4 class="mb-0">Login siswa</h4>
                                        <small>Masuk sebagai siswa</small>
                                     </div>
                                </div>
                            </div>
                        </div>   
                       </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>