@extends("layouts_super.main")
@section('content')
    <section class="home-section">

        <div class="main">
            {{-- @include('admin.profile.partials') --}}
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
            </div>

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">OVERVIEW</p>
                        <h3>SuperAdmin Profile</h3>
                    </div>
                </div>
                {{-- Card User Profile --}}
                <div class="row g-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 mt-4 pe-2">
                        <div
                            class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                            <div class="col-md-15">
                                @if($user->photo)
                                    <img src="{{ asset('storage/photos/'.$user->photo) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 20%;" class="img-thumbnail rounded mx-auto d-block">
                                @endif

                            </div>
                            <div class="person-name">
                                <h2 class="text-center fs-4 my-2">{{ Auth::user()->name }}</h2>
                            </div>
                            <div class="person-email">
                                <h3 class="text-center fs-5 fw-normal mb-3">{{ Auth::user()->email }}</h3>
                            </div>
                            <div class="bt">
                                {{-- <button class="btn btn-outline-thema"> Edit </button> --}}
                                <button onclick="" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    Edit
                                </button>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="person-progress">
                                <p class="mb-1 d-inline">Workload</p>
                                <p class="float-end mb-0">74%</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 74%; background:#27CD88"
                                        aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
                        <div class="card-profile d-flex flex-column px-0 py-4">
                            <div class="id-user px-3">
                                <h6 class="mb-0 fw-bold float-left">Account ID : {{ Auth::user()->id }}</h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class=" p-3">
                                <form action="" method="POST" class="row g-3 fw-bold">
                                    @method("PATCH")
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            value="{{ old('email', Auth::user()->email )}}">
                                        @error('email')
                                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control input-text" id="username"
                                        value="{{ old('name', Auth::user()->name) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="no_telp" class="form-label">No Telepon</label>
                                        <input type="text" class="form-control input-text" id="no_telp"
                                            value="{{ old('no_telp', Auth::user()->no_telp) }}">
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control input-text" id="tgl_lahir"
                                        value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                                    </div> --}}
                                    <div class="col-12">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control input-text" id="inputAlamat"
                                        value="{{ old('alamat', Auth::user()->alamat) }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputKelurahan" class="form-label">Desa</label>
                                        <input type="text" class="form-control input-text" id="inputKelurahan" value="{{ old('kelurahan', Auth::user()->kelurahan) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputKecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control input-text" id="inputKecamatan" value="{{ old('kecamatan', Auth::user()->kecamatan) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputkota_kab" class="form-label">kota</label>
                                        <input type="text" class="form-control input-text" id="inputkota_kab"
                                        value="{{ old('kota_kab', Auth::user()->kota_kab) }}">
                                    </div>
                                    <br>
                                    {{-- <div class="col mb-2">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Form Edit User Profile --}}
                </div>
            </div>
        </div>

       <!-- Modal Edit Photo-->
       <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:40%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Photo Profile</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="{{ route('profile_vendor.update', $user->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    {{-- PERBEDAAN
                        PUT digunakan untuk melakukan update resource ke sebuah server.
                        dengan PUT method bisa mengirimkan secara keseluruhan data atau replace total
                        PATCH digunakan untuk melakukan update resource ke sebuah server.
                        melakukan update secara partial atau hanya separuh data yang di inginkan untuk diupdate
                    --}}
                    @csrf
                    {{-- <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Profile</h4>
                    <p class="card-category">User information</p>
                    </div> --}}
                    <div class="col mb-6">
                        <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                            <div class="col mb-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-6">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                            <div class="col mb-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-6">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('No Telp') }}</label>
                            <div class="col mb-6">
                                <input id="no_telp" type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    {{-- <div class="col mb-6">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                            <div class="col mb-6">
                                <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ $user->tgl_lahir }}" required autocomplete="tgl_lahir">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div> --}}

                    <div class="col mb-12">
                        <label for="alamat" class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                            <div class="col mb-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-6">
                        <label for="kelurahan" class="col-sm-2 col-form-label">{{ __('Desa') }}</label>
                            <div class="col mb-6">
                                <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{ $user->kelurahan }}" required autocomplete="kelurahan">
                                @error('kelurahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-6">
                        <label for="kecamatan" class="col-sm-2 col-form-label">{{ __('Kecamatan') }}</label>
                            <div class="col mb-6">
                                <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ $user->kecamatan }}" required autocomplete="kecamatan">
                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-6">
                        <label for="kota_kab" class="col-sm-2 col-form-label">{{ __('Kabupaten') }}</label>
                            <div class="col mb-6">
                                <input id="kota_kab" type="text" class="form-control @error('kota_kab') is-invalid @enderror" name="kota_kab" value="{{ $user->kota_kab }}" required autocomplete="kota_kab">
                                @error('kota_kab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-12">
                        <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Photo') }}</label>
                            <img src="{{ asset('storage/photos/'.$user->photo) }}" alt="" style="width: 20%;" class="img-thumbnail rounded mx-auto d-block">
                            <br>
                        <div class="col mb-6">
                            <input id="photo" type="file" class="form-control" name="photo">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection
