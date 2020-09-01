@extends('layouts/app')
@section('style_custom')
    <link rel="stylesheet" href="{{asset('css/custom/style2.css')}}">
@endsection

@section('content')
    {{-- jumbotron --}}
        <img class='bg-jumbotron' src="{{asset('img/jumbotron-green.png')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <img class='icon-jumbotron' src="{{asset('img/human2.png')}}" alt="">
                </div>
            </div>
            <div class="row mt-4" style='margin-bottom:10px;'>
                <div class="col-md-12">
                    <div class="text-center text-light">
                        <div>
                            <span style='font-size:3vw;'>KAMU ADALAH</span><br>                        
                            <span style='font-size:6.8vw;'><strong>THE OPTIMISTIC</strong></span><br>
                            <span style='font-size:3vw;'>A.K.A MODERAT</span><br>                        
                            <div class="p-4" style='font-size:2vw;line-height: 1.2;'>
                                Kamu memiliki toleransi terhadap resiko yang cenderung rendah dimana return yang diharapkan minimal setara dengan suku bunga deposito dengan fluktuasi nilai pasar yang minimal untuk mencapai tujuan investasi kamu.
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 ">
                    <div class="text-center text-light">
                        <span style='font-size:2vw;'><strong>POTENSI KEUANGAN KAMU 10 TAHUN MENDATANG</strong><br>                                           
                    </div>
                    <canvas id="myChart" width="100%" height="60px"></canvas>
                    <div class="text-center text-light p-4" style='font-size:2vw;line-height: 1.2;'>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis animi accusamus facere exercitationem rem ex! Mollitia minus eum nemo, hic, voluptatibus itaque, corrupti quibusdam dignissimos voluptas voluptate repellendus magni placeat!
                    </div>
                </div>
            </div>

            <div class="row m-4">
                <div class="col-lg-12 text-center">
                    <div class="btn btn-primary" style='background-color:black'>SHARE &nbsp;<i class='fas fa-arrow-right'></i></div>
                </div>
            </div>

            <div class="row mt-4" style>
                <div class="col-lg-12 mt-2 mb-2">
                    <div class="text-center" style='color:yellow;'>
                        <p style='font-size:3vw;'>AYO MULAI BERINVESTASI DARI SEKARANG <br>DAN DAPATKAN BONUS  DIAWAL SEBESAR <br> <strong>IDR 1,000,000</strong> REKSADANA TUNAI</p>
                    </div>
                </div>
                 <div class="col-lg-12 mt-2 mb-2 p-5">
                    <div class="text-center text-light">
                        <div style='font-size:1.5vw;'>Cukup dengan mendaftarkan diri kamu dengan mengisi form dibawah ini, kamu akan mendapatkan bonus langsung reksadana di aplikasi Invesnow!</div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="row mt-2" style>
                    <div class="col-lg-12">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class='form-control' style='height:80px;font-size:1.5vw;' placeholder='NAMA'>
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control' style='height:80px;font-size:1.5vw;' placeholder='EMAIL'>
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control' style='height:80px;font-size:1.5vw;' placeholder='MOBILE'>
                            </div>
                        </form>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" style='background-color:black'>SUBMIT &nbsp;<i class='fas fa-arrow-right'></i></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    {{-- jumbotron - closed --}}
@endsection