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
    <style>
         .no-border-input {
    background: transparent;
    width: 500px;
    
    padding: 10px;
    border: none;
    outline: none;
    box-shadow: none;
}
.paddl{
padding-left: 10px;
}
.nocollect{
    padding: 150px 0;
}

@media(max-width:646px) {
    .no-border-input {
    background: transparent;
    width: 300px;
    
    padding: 10px;
    border: none;
    outline: none;
    box-shadow: none;
}
@media(max-width:392px) {
    .no-border-input {
    background: transparent;
    width: 100%;
    
    padding: 10px;
    border: none;
    outline: none;
    box-shadow: none;
}
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow p-3 border-bottom border-secondary" style="background: #212121; border-bottom: 1px solid #fff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">Dashboard</a>
          
        </div>
    </nav>

            <!-- Main Content -->
            <main style="" >
                <div class="pt-3" style="background:#2b2b2b;width:100%; height:100%;">
            <div class="container" >
                <div class="d-flex justify-content-between pb-4">
                   <h4 class="text-light">Your Collectibles</h4> 

                   <button style="background:transparent; border:none"><i class="fa-solid fa-plus colos text-light"></i></button>
                </div>
        <div class="search-form pb-3">
            <form class="d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center paddl" style="background:#333;border-radius: 10px;">
                    <div class="" >
                        <span  class="  border-0" id="search-icon">
                            <i style=" background:transparent" class="fas fa-search text-secondary"></i>
                        </span>
                    </div>
                    <input  type="text" class="no-border-input text-light" placeholder="Search..." aria-label="Search" aria-describedby="search-icon">
               <div class="">
               <i style=" background:transparent" class="fa fa-xmark p-2 text-secondary"></i>
               </div>
                </div>
            </form>
        </div>
        <!-- Add your dashboard content here -->
    </div>
    </div>
</div>
<div style="background:#222222; width:100%; height:100vh;">
    <div class="nocollect" >
        <h4 class="text-light d-flex align-items-center justify-content-center ">No Collectibles</h4>
    </div>
</div>
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




