@extends('finance.adminlayout')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <div class="cardBox" style="width: 6rem;">
            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">20</div>
                    <div class="cardName">Payment</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="wallet"></ion-icon>
                </div>
            </div>

            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">300</div>
                    <div class="cardName">In Work</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="person"></ion-icon>
                </div>
            </div>
            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">600</div>
                    <div class="cardName">Done</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="checkmark-circle"></ion-icon>
                </div>
            </div>

            <div class="card border-0" style="width:170px" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">2</div>
                    <div class="cardName">Failed</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="alert"></ion-icon>

                </div>
            </div>
            <div class="card border-0" style="width:170" style="height: 70px">
                <div class="card-body">
                    <div class="numbers">400</div>
                    <div class="cardName">Penarikan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="archive"></ion-icon>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="graphBox">
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
