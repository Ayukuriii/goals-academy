@extends('dashboard.layouts.main')

@section('container')
    <!-- Isi Page -->
    <section class="d-flex flex-column flex-xl-row container-fluid container-xl gap-3 gap-xl-4" id="user-profile">
        @include('dashboard.user.partials.sidebar')

        <div class="card col ml-3 p-3 p-md-4 side-program">
            <div>
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Edit Profil</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
                <form action="/user/update/profile/{{ auth()->user()->id }}" method="POST" class="from row mt-3 px-2">
                    @method('put')
                    @csrf
                    <div class="d-flex align-items-center form-group mb-2">
                        <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" width="80px" />
                        <div class="ms-3">
                            <label for="photo" class="btn-outline-orange px-3 py-2 fw-bold"
                                style="cursor: pointer;">Unggah Foto</label><br>
                            <small style="font-size: 0.7rem">*Maksimum 2MB</small>
                        </div>
                        <input type="file" class="form-control d-none" name="photo" id="photo">
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="name">NAMA</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder=" " value="{{ $posts->name }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="name">USERNAME</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder=" " value="{{ $posts->username }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="university">UNIVERSITAS</label>
                        <input type="text" name="university"
                            class="form-control @error('university') is-invalid @enderror" id="university" placeholder=" "
                            value="{{ $posts->university }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="major">JURUSAN</label>
                        <input type="text" name="major" class="form-control @error('major') is-invalid @enderror"
                            id="major" placeholder=" " value="{{ $posts->major }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="phone_number">NOMOR HP.</label>
                        <input type="text" name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                            placeholder=" " value="{{ $posts->phone_number }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-button col-12 col-xl-6 mb-xl-3 d-flex justify-content-end pt-xl-5">
                        <button class="btn-orange-static px-4 d-inline text-end" id="button"
                            type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <hr class="w-100">
            <div id="form2">
                <h3 class="d-inline text-purple fw-bold">Ubah Email</h3>
                <form action="/user/update/email/{{ auth()->user()->id }}" method="POST"
                    class="from row mt-3 px-2 d-none d-xl-block">
                    @method('put')
                    @csrf
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="email">EMAIL</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder=" " value="{{ $posts->email }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="password">PASSWORD</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder=" " required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-button col-12 mb-3 d-flex justify-content-end">
                        <button class="btn-orange-static px-4 d-inline text-end" id="button"
                            type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <hr class="w-100">
            <div id="form3">
                <h3 class="d-inline text-purple fw-bold">Ubah Password</h3>
                <form action="/user/update/password/{{ auth()->user()->id }}" method="POST"
                    class="from row mt-3 px-2 d-none d-xl-block">
                    @method('put')
                    @csrf
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="new_password">PASSWORD BARU</label>
                        <input type="password" name="new_password"
                            class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                            placeholder=" " required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="old_password">PASSWORD LAMA</label>
                        <input type="password" name="old_password"
                            class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                            placeholder=" " required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-xl-6 mb-xl-2">
                        <label class="form-label small" for="confirmation_password">ULANGI PASSWORD BARU</label>
                        <input type="password" name="confirmation_password"
                            class="form-control @error('confirmation_password') is-invalid @enderror"
                            id="confirmation_password" placeholder=" " required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-button col-12 col-xl-6 mb-xl-3 d-flex justify-content-end pt-3">
                        <button class="btn-orange-static px-4 d-inline text-end" id="button"
                            type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    <script>
        const collapseButton1 = document.querySelector('.card-header i')
        const collapseObject1 = document.querySelector('#profile')
        collapseButton1.addEventListener('click', () => {
            collapseObject1.classList.toggle('d-none')
        })

        const collapseButton2 = document.querySelector('#form2 h3')
        const collapsedObject2 = document.querySelector('#form2 form')

        collapseButton2.addEventListener('click', () => {
            collapsedObject2.classList.toggle('d-none')
        })

        const collapseButton3 = document.querySelector('#form3 h3')
        const collapsedObject3 = document.querySelector('#form3 form')

        collapseButton3.addEventListener('click', () => {
            collapsedObject3.classList.toggle('d-none')
        })

        formInput.forEach((element) => {
            element.addEventListener("change", (e) => {
                validate(e.target);
            });
        });
    </script>
@endsection
