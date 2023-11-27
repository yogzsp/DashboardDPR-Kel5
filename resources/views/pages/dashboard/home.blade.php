@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection

@section('content')
    <div class="w-100 py-5">
        <div class="w-100 bg-back position-fixed bg-batik" style="height:100%;top:0;z-index:-1;opacity:0.5;"></div>
        <div class="w-100 bg-back position-absolute" style="background-color:#969492;min-height:75vh;top:0;z-index:-1;"></div>
        <div class="w-100 wellcome-screen container-fluid px-5 m-5">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="title-logo">
                        <h1 class="text-black" style="font-size:50px;">
                            Satu Data<br>Dewan Perwakilan Rakyat
                        </h1>
                        <h5 class="text-white w-50">
                            Selamat Datang di Portal Satu Data
                            Dewan Perwakilan Rakyat
                            Republik Indonesia
                        </h5>
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/main/assets/komputer.png') }}">
                </div>
            </div>
        </div>
        <!-- card list -->
        <div class="container-fluid w-100 justify-content-between py-5">        
            <div class="row row-cols-3">
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Data" images="{{ asset('images/main/assets/1.png') }}">
                        Dapatkan data terkait Dewan Perwakilan
                        Rakyat.
                    </x-card1>
                </div>
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Dashboard" images="{{ asset('images/main/assets/2.png') }}">
                        Dapatkan informasi mengenai indikator utama 
                        suatu informasi dari Dewan Perwakilan Rakyat
                        dalam bentuk dashboard yang telah
                        dimodifikasi.
                    </x-card1>
                </div>
                <div class="col d-flex justify-content-center">
                    <x-card1 title="Infografis" images="{{ asset('images/main/assets/3.png') }}">
                        Dapatkan representasi visualisasi sebuah data
                        dari Dewan Perwakilan Rakyat yang lebih mudah
                        untuk dipahami. 
                    </x-card1>
                </div>
            </div>
        </div>
        <!-- list data terbaru -->
        <div class="container-fluid">
            <div class="row row-cols-2 p-5 mx-5">
                <div class="col-9">
                    <h1 class="title-logo" style="font-size:40px;">Data Terbaru</h1>
                    <div class="list-group rounded-4 border border-dark">
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
                            <div class="row row-cols-2 p-2">
                                <div class="col-1 fs-1 text-end">
                                    <i class="fa-brands fa-squarespace"></i>
                                </div>
                                <div class="col">
                                    <h1 class="fs-3 fw-bold">Jumlah Peserta Magang</h1>
                                    <p class="fs-5">Dataset yang berisi data para peserta magang.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" id="datepicker" class="form-control" id="floatingInput" placeholder="MM/DD/YYYY">
                        <label for="floatingInput">Tanggal</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('custom-script')
    <script>
        // date picker
        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "mm/dd/yy", // Format tanggal
                showButtonPanel: true,   // Menampilkan tombol panel
                changeMonth: true,       // Menampilkan dropdown bulan
                changeYear: true         // Menampilkan dropdown tahun
                // Tambahan opsi lainnya sesuai kebutuhan
            });
        });
    </script>
@endsection