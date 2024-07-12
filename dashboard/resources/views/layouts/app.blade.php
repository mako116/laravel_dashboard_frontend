<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phantomw.live</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="shortcut icon" type="image/png" href="https://phantomw.live/asset/theme1/images/icon/icon.png">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.11/css/unicons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-3 border-bottom border-secondary" style="background: #212121; border-bottom: 1px solid #fff;">
     
    
    <div class="container-fluid">
            <!-- <a class="navbar-brand" href="/">Dashboard</a> -->
            <div class="collapse navbar-collapse d-flex justify-content-between align-items-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-qrcode text-light fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="dropdown-item gap-5 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="kyc_h4 text-light">Solana</h5>
                                        <p class="fzs text-light">Buxd....K13H</p>
                                    </div>
                                    <div>
                                        <i class="fa fa-copy text-light"></i>
                                    </div>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-item gap-5 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="kyc_h4 text-light">Solana</h5>
                                        <p class="fzs text-light">Buxd....K13H</p>
                                    </div>
                                    <div>
                                        <i class="fa fa-copy text-light"></i>
                                    </div>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-item gap-5 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="kyc_h4 text-light">Solana</h5>
                                        <p class="fzs text-light">Buxd....K13H</p>
                                    </div>
                                    <div>
                                        <i class="fa fa-copy text-light"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="container-fluid " style="height:100vh; background:#191919"> -->
        <!-- <div class="row"> -->
            <!-- left Sidebar -->
           

            <!-- Main Content -->
            <main style="" >
                @yield('content')
            </main>

            <!-- Right Sidebar -->
             
           

        <!-- </div> -->
    <!-- </div> -->

    <!-- Bootstrap JavaScript bundle via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Additional JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
