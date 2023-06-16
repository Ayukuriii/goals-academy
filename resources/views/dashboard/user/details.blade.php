@extends('dashboard.user.layouts.main')

@section('container')
    {{-- {{ dd($data->tutor_notes) }} --}}
    <!-- Isi Page -->
    <section class="container mb-5" id="user-profile">
        <div class="row gap-4">
            
            @include('dashboard.user.layouts.sidebar')
            
            <div class="card col ml-3 side-program py-3">
                <h1 class="card-title">{{ $data->program->title }}</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>PEMBELIAN</td>
                            <td>{{ $datepurchased }}</td>
                        </tr>
                        <tr>
                            <td>METODE PEMBAYARAN</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KODE PEMESANAN</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>STATUS</td>
                            <td>{{ $data->payment_status->status }}</td>
                        </tr>
                        <tr>
                            <td>MENTOR</td>
                            <td>{{ $data->tutor->name }}</td>
                        </tr>
                        <tr>
                            <td>JADWAL</td>
                            <td>{!! $datecarbon . '<br>' . $data->program_session->sesi !!}</td>
                        </tr>
                        <tr>
                            <td>PELAKSANAAN</td>
                            <td>Online</td>
                        </tr>
                        <tr>
                            <td>TEMPAT</td>
                            <td><a href="#">Link Zoom</a></td>
                        </tr>
                    </tbody>
                </table>

                <div class="">
                    <h5>Catatan dari tutor</h5>
                    <p>{{ optional($data->tutor_notes->first())->body }}</p>
                </div>

            </div>

        </div>
    </section>
    <!-- Last Page -->
   @endsection