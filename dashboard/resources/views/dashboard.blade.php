@extends('layouts.app')

@section('content')
    <div class="menueds ">

        <!-- Sidebar -->
        @include('includes.sidebar')
       

        <div class="flex-column container pt-3">
            <div class="mb-3 shadow border border-dark rounded-5 pt-3 pb-3 rounded-3" style="color: #fff; background:#333333;">
                <div class="card-body ">
                    <h5 id="card-title"  class="fz fw-bold">$0.00</h5>
                    <div class="d-flex" style="gap: 10px;">
                    <p class="cologrey">+$0.00</p>
                    <p class="cologrey"> +0.00%</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                <div class="custom-hover card mb-3 shadow border border-0 rounded-4">
    <a href="#" class="btn rounded-4 p-3 text-secondary">
        <i class="fa-solid fa-plus colos"></i> Receive
    </a>
</div>
                </div>
                <div class="col-md-3">
                    <div  class="custom-hover card mb-3 shadow border border-0 rounded-4">
                        <a href="#" class="btn  rounded-4 p-3 text-secondary">
                        <i class="fas fa-paper-plane colos"></i>    
                        Send
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div  class=" custom-hover card mb-3 shadow border border-0 rounded-4">
                        <a href="#" class="btn rounded-4 p-3 text-secondary">
                        <i class="fa-solid fa-right-left colos"></i>
                             Buy
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div  class="custom-hover card mb-3 shadow border border-0 rounded-4" >
                        <a href="#" class="btn rounded-4 p-3 text-secondary">
                        <i class="fa-solid fa-dollar-sign colos"></i>
                           Buy
                        </a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column gap-3 flex-md-row align-items-center">
 
                <div class="col-md-6 border border-0">
                <div class="card shadow border border-0 rounded-4 p-2"  style="background: #222222; color: #fff;" >
                <div id="tradingview-widget-container" class="tradingview-widget-container">
                                <div class="tradingview rounded-3" id="tradingview-widget" style=" height: 220px;"></div>
                            </div>    
                
             </div>
                </div>
                <div class="card wids border border-0 rounded-4" style="background: #222222; color: #fff;">
                    <div class="card-body border border-0 d-flex align-items-center rounded-4">
                        <div class="flex-grow-1 border border-0">
                            <h5 class="card-title fs-4 fw-semibold">KYC Verification</h5>
                            <p class="card-text fs-12 kyc_h4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn kyc-btn mt-2">Get Started</a>
                        </div>
                        <div>
                            <img src="{{ asset('assets/kyc.png') }}" class="card-img-top" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Section -->
          <div class="row mt-4">
    <div class="col-md-12">
        <div >
            <div >
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card coins border border-0 rounded-4">
                                <a href="#" class="btn  rounded-4 p-3 text-light">
                                <i class="fa-sharp fa-regular fa-magnifying-glass-dollar"></i>
                                Search from Explore to find new tokens faster
                                </a>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card border coins border-0 rounded-4">
                                <a href="#" class="btn coins  rounded-4 p-3 text-light">
                                    <i class="uil uil-link-alt pr-2"></i> Bridge tokens across chains with cross-chain Swapper
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                 
                 
            </div>
          
        </div>
    </div>
</div>


            <!-- TradingView Widget Section -->
           
            <!-- End of TradingView Widget Section -->

        </div>
        @include('includes.rightsidebar')
    </div>

    <!-- TradingView Widget Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("tradingview-widget");

            const script = document.createElement('script');
            script.src = 'https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js';
            script.async = true;
            script.innerHTML = JSON.stringify({
                "autosize": true,
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "backgroundColor": "#191919",
                "style": "1",
                "locale": "en",
                "hide_top_toolbar": true,
                "hide_legend": true,
                "allow_symbol_change": false,
                "save_image": false,
                "calendar": false,
                "hide_volume": true
            });

            container.appendChild(script);
        });
    </script>
@endsection
