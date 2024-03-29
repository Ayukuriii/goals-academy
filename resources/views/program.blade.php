@extends('layouts.main')

@section('container')
<!-- Isi Page -->
<section id="program" class="bg-2 mt-5 py-5 px-3 px-xl-0">
    <div class="container-xl justify-content-center align-items-center">
        <h1 class="text-center text-purple fw-bold fs-3 mb-3 pt-3 pb-4">Program Goals Academy</h1>
        <div id="program-list">
            <div class="row flex-row card align-items-center rounded-4 p-3">
                <div class="col-6 col-md-5 col-xl-4 p-0 mb-3">
                    <img class="w-100 rounded-4" src="{{ asset('image/assets/images/banner/program_2.png') }}" alt="Poster  Dibimbing Sekali">
                </div>
                <div class="col-6 d-md-none">
                    <h2 class="text-purple h4 fw-bold">Dibimbing Sekali</h2>
                </div>
                <div class="col-12 col-md-7 col-xl-8 p-3">
                    <h2 class="text-purple h4 fw-bold d-none d-md-inline-block">Dibimbing Sekali</h2>
                    <p style="text-align: justify">Bimbingan skripsi individu untuk mahasiswa tingkat akhir yang dilaksanakan secara offline maupun online.  Fasilitas yang didapatkan yaitu Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddoeiu smod tempor incididunt ut labore et dolore magna aliqua.Ut enim adm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliq uip ex ea commodo consequat. Duis aute irure dolor in reprehenderitin vol.</p>
                </div>
                <div class="col-6 d-flex p-0 align-items-center">
                    <p class="text-danger h5">Mulai dari <b>Rp 199.000/sesi</b></p>
                </div>
                <div class="col-6 text-end p-0">
                    <a href="/purchase" class="d-inline-block text-center btn-orange-static fw-bold p-3">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Last Page -->
@endsection
