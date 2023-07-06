@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Beri catatan pada Ekadian Haris</h3>
                </div>
                <div class="p-2 pb-0 mt-2">
                    <table class="table table-borderless w-50">
                        <tbody>
                            <tr>
                                <td>PEMBELIAN</td>
                                <td class="fw-bold small">{!! \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y </br> HH:mm') !!}</td>
                            </tr>
                            <tr>
                                <td>TUTOR</td>
                                <td class="fw-bold small">Kak {{ $data->tutor->user->name }}</td>
                            </tr>
                            <tr>
                                <td>JADWAL</td>
                                <td class="fw-bold small">
                                    {{ \Carbon\Carbon::parse($data->date)->isoFormat('dddd, D MMMM Y') }}<br>{{ $data->program_session->sesi }}
                                </td>
                            </tr>
                            <tr>
                                <td>PELAKSANAAN</td>
                                <td class="fw-bold small">{{ $data->location }}</td>
                            </tr>
                            <tr>
                                <td>TEMPAT</td>
                                <td class="fw-bold small"><a
                                        href="{{ strpos($data->links, 'http') === 0 ? $data->links : 'https://' . $data->links }}">Link
                                        Zoom</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="m-0 w-100">
                <form action="/tutor/edit/{{ $data->id }}" method="POST" class="form">
                    @csrf
                    @method('put')
                    <div class="form-group p-3 pb-0 mt-2">
                        <label class="form-label h4 fw-bold mb-4" for="catatan">Catatan dari Tutor</label>
                        <textarea class="form-control" name="body" id="body" rows="5" placeholder="Comments">{{ optional($data->tutor_notes->first())->body }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group p-3 pb-0 mt-2">
                            <label class="form-label h4 fw-bold mb-4" for="dokumen">Lampiran Dokumen</label>
                            <input class="form-control" type="file" name="dokumen" id="dokumen" placeholder=" ">
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-5">
                            <button class="btn-orange-static mt-4 px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection