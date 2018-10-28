@extends('layouts.app')

@section('page-header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Submissões</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Submissões</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    
                    <h4 class="card-title">Submissões Enviadas</h4>
                    <h6 class="card-subtitle">Todas as submissões já realizadas podem ser encontradas na tabela abaixo.</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Resposta</th>
                                    <th class="text-center">Linguagem Utilizada</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submissoes as $submissao)
                                    <tr>
                                        <td> {{ $submissao->id }} </td>
                                        <td class="text-center"> {{ $submissao->status }} </td>
                                        <td class="text-center"> {{ $submissao->resposta }} </td>
                                        <td class="text-center"> {{ $submissao->linguagem->nome }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection()