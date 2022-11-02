@extends('finance.finance.dashboard_finance')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="cardHeader">
                                    <!-- Search -->
                                    <div class="col-3 mb-3">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Dari Tanggal</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-3 mb-3" style="margin-left: 35px">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Sampai Tanggal</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-3 mb-3" style="margin-left: 35px">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Periode</p>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Perminggu</option>
                                            <option value="1">Perbulan</option>
                                            <option value="2">Pertahun</option>
                                        </select>
                                    </div>
                                    <div class="col-2 mt-4" style="margin-left: 255px">
                                        <button type="button" class="btn btn-success">Tampilkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        
        <div class="cardBox2" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 1.000.000</div>
                    <div class="cardName">Pemasukan hari ini</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="stats-chart-outline"></ion-icon>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 600.000</div>
                    <div class="cardName">Pengeluaran hari ini</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="stats-chart-outline"></ion-icon>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">20</div>
                    <div class="cardName">Penarikan vendor hari ini</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div> 
        </div>

         <!-- Chart -->
        <div class="graphBox align-center">
            <div class="card border-0 w-auto">
                <canvas id="myChart"></canvas>
            </div>
            <div class="card border-0 w-auto">
                <canvas id="earning"></canvas>
            </div>
        </div>
    </div>
</section>
@endsection
