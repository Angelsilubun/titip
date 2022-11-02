@extends('Layouts_admin.main')
@section('content') 
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100"> 
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">40</div>
                    <div class="cardName">Pengguna</div>
                    <a href="" class="text-end mt-2">Lihat semua</a>
                </div>
                <div class="iconBx card-img-overlay">
                    <i class="bi bi-person-fill"></i>
                </div>

            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">40</div>
                    <div class="cardName">Total Pesanan</div>
                    <a href="" class="text-end mt-2">Lihat semua</a>
                </div>
                <div class="iconBx card-img-overlay">
                    <i class="bi bi-cart-fill"></i>
                </div>
            </div>


            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">40</div>
                    <div class="cardName">Penarikan selesai</div>
                    <a href="" class="text-end mt-2">Lihat semua</a>
                </div>
                <div class="iconBx card-img-overlay">
                    <i class="bi bi-credit-card-fill"></i>
                </div>
            </div>
        </div>
        <!-- data list -->
        <div class="details1 mt-3">
            <div class="recentOrders">
            <div class="row col-md-12 " style="font-size: 15px">
                <div class="col-md-6  px-2 py-2" >
                    <div class="card px-2 py-2">
                        <h2 style="color:#00B56A">Verifikasi Pengguna</h2>
                        <table style="width: auto">
                            <thead class="text-start">
                                <tr>
                                    <td>Username</td>
                                    <td>Jenis Pengguna</td>
                                    <td>Action</td>
                                </tr>  
                            </thead>
                            <tbody class="text-start">
                                <tr>
                                    <td>Bently</td>
                                    <td>vendor</td>
                                    <td><button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#DetailUser">
                                        Detail
                                    </button></td>
                                </tr>
                                <tr>
                                    <td>Agus</td>
                                    <td>customer</td>
                                    <td><button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#DetailUser">
                                        Detail
                                        </button></td>
                                </tr>
                                <tr>
                                    <td>Titipajee</td>
                                    <td>vendor</td>
                                    <td>
                                        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#DetailUser">
                                        Detail
                                        </button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 px-2 py-2">
                    <div class="card px-2 py-2">
                        <h2 style="color:#00B56A">Verifikasi Layanan</h2>
                        <table  style="width: auto">
                            <thead class="text-start">
                                <tr>
                                    <td>Username</td>
                                    <td>Jenis Layanan</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr>
                                    <tr>
                                        <td>Titipajee</td>
                                        <td>Barang</td>
                                        <td><button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                            data-bs-target="#DetailUser">
                                            Detail
                                            </button></td>
                                    </tr>
                                    <tr>
                                        <td>Titipajee</td>
                                        <td>Kendaraan</td>
                                        <td><button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                            data-bs-target="#DetailUser">
                                            Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Titipajee</td>
                                        <td>Pickup</td>
                                        <td>
                                        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#DetailUser">
                                        Detail
                                        </button>
                                        </td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
