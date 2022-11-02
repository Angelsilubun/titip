@extends("layouts_super.main")
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Vendor</h2>
                </div>
                <div class="search2" style="margin-top: 10px;">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <!-- data list -->
            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader">
                        <h2>Data Vendor</h2>
                        <a href="#" class="btn btn-thema">Cetak</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>No Telp</td>
                                <td>Alamat</td>
                                <td>Email</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PT. Sinamar</td>
                                <td>(307) 555 0133</td>
                                <td>Jln. Jend Sudirman no4</td>
                                <td>cahaya@mail.com</td>

                                <td class="td" style="size: 30px;">
                                    {{-- <button class="btnedit">
                                        <i class='bx bx-edit'></i>
                                    </button>

                                    <button class="btndelete">
                                        <i class='bx bx-trash'></i>
                                    </button> --}}

                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h2 class="modal-title" id="exampleModalLabel">Data Vendor</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="label">Vendor ID</label>
                        <input type="text" class="form-control" id="id" placeholder="2374627">
                        <label class="label">Nama Vendor</label>
                        <input type="text" class="form-control" id="namavendor" placeholder="PT. Sinamar">
                        <label class="label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="nama" placeholder="Ahmad Arif">
                        <label class="label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                        <label class="label">Saldo</label>
                        <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">

                        <div class="kk">
                            <h4>Scan KK & KTP</h4>
                            <img src="{{ asset('assets/img/kaka.png') }}">
                            <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="button" class="btn-sm btn-primary">Edit</button>
                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
