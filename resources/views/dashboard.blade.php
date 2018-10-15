@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Daily Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-success">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Weekly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-info">30%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Revenue Statistics</h4>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
    <!-- Row -->

@endsection

@section('footer')
    <footer class="footer text-center">
        <b>© 2018</b> | <b>Made by:</b> @KelwinKomka - @joao-vieira - @VinãoSemGithub
    </footer>
@endsection