@extends('layouts.app')

@section('content')

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">(<span style="font-weight: bold; font-size: 18px;">{{ $linguagemMaisUtilizadaTotal->nome or 'Sem submissões' }}</span>) Linguagem mais utilizada - <i>Total</i> </h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> {{ $submissoesTotais }}</h2>
                        <span class="text-muted">Total de Submissões</span>
                    </div>
                    <span class="text-success">{{ $porcentagemSubmissoesTotal }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $porcentagemSubmissoesTotal }}%; height: 6px;" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                <h4 class="card-title">(<span style="font-weight: bold; font-size: 18px;">{{ $linguagemMaisUtilizadaHoje->nome or 'Sem submissões' }}</span>) Linguagem mais utilizada - <i>Hoje</i></h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> {{ $submissoesCriadasHoje }}</h2>
                        <span class="text-muted">Submissões de Hoje</span>
                    </div>
                    <span class="text-info">{{ $porcentagemSubmissoesHoje }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $porcentagemSubmissoesHoje }}%; height: 6px;" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <h4 class="card-title">Estatísticas das Submissões nos Últimos 10 Dias - Por Status</h4>
                    <div id="placeholder" style="min-width:600px; min-height:300px"></div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
    <!-- Row -->

@endsection

@section('footer')
    <footer class="footer text-center">
        <b>© 2018</b> | <b>Made by:</b> @KelwinKomka / @joao-vieira / @viniciusandd
    </footer>
@endsection