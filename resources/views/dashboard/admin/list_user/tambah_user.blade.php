@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Tambah User</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()" style="cursor: pointer">Back</a>
                </div>
                <div class="form w-75 mt-3">
                    <form class="row" action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control is-invalid" id="name" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username" class="form-control is-invalid" id="username" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university" class="form-control is-invalid" id="university" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control is-invalid" id="major" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control is-invalid" id="email" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number" class="form-control is-invalid" id="phone_number" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="user_level">USER LEVEL</label>
                            <select class="form-select border-orange" name="user_level" id="user_level"
                                aria-label="Default select example">
                                <option value="user" selected>User</option>
                                <option value="moderator">Moderator</option>
                                <option value="tutor">Tutor</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <input type="password" name="password" class="form-control is-invalid" id="password" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Invalid message
                            </div>
                        </div>
                        <div class="form-button col-12 mb-2 d-flex justify-content-end">
                            <button class="btn-orange-static px-4 d-inline text-end small" id="button"
                                type="submit" disabled>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
