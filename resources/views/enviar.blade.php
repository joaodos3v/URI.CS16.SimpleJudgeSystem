@extends('layouts.app')

@section('page-header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Enviar</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Enviar</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center" role="tablist">
            <ul class="nav nav-tabs justify-content-end">
                <a class="nav-item nav-link active" href="#nav-problema-1" data-toggle="tab">Problema 1</a>
                <a class="nav-item nav-link"        href="#nav-problema-2" data-toggle="tab">Problema 2</a>
                <a class="nav-item nav-link"        href="#nav-problema-3" data-toggle="tab">Problema 3</a>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">

        <!--SweetAlert 2 -->
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        
        <div class="col-12">
            <div class="card">
                <div class="card-block tab-content">

                    <!-- Problema 1 -->
                    <div class="tab-pane fade show active" role="tabpanel" id="nav-problema-1">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="mt-2">Descrição</h2>
                                <p>Leia 2 valores inteiros e armazene-os nas variáveis <b>A</b> e <b>B</b>. Efetue a soma de <b>A</b> e <b>B</b> atribuindo o seu resultado na variável <b>X</b>. Imprima <b>X</b> conforme exemplo apresentado ao lado. Não apresente mensagem alguma além daquilo que está sendo especificado.</p>
                                <p> <h5>Entrada</h5> A entrada contém 2 valores inteiros. </p>
                                <p> <h5>Saída</h5> Imprima a mensagem "X = " (letra X maiúscula) seguido pelo valor da variável <b>X</b>. Cuide para que tenha um espaço antes e depois do sinal de igualdade, conforme os exemplos ao lado. </p>
                                <small> <b>Créditos:</b> <a href="https://www.urionlinejudge.com.br/judge/pt/problems/view/1001" target="_blank">Uri Online Judge</a> </small>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="mt-2">Exemplos</h2>
                                <div class="table-responsive table-striped">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Entrada</th>
                                                <th>Saída</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 10 <br> 9 </td>
                                                <td>X = 19</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> -10 <br> 4 </td>
                                                <td>X = -6</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> 15 <br> -7 </td>
                                                <td>X = 8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                      
                            </div>
                        </div>
                    </div>

                    <!-- Problema 2 -->
                    <div class="tab-pane fade" role="tabpanel" id="nav-problema-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="mt-2">Descrição</h2>
                                <p>Leia dois valores inteiros, no caso para variáveis A e B. A seguir, calcule a soma entre elas e atribua à variável <b>SOMA</b>. A seguir escrever o valor desta variável.</p>
                                <p> <h5>Entrada</h5> O arquivo de entrada contém 2 valores inteiros. </p>
                                <p> <h5>Saída</h5> Imprima a variável <b>SOMA</b> com todas as letras maiúsculas, com um espaço em branco antes e depois da igualdade seguido pelo valor correspondente à soma de A e B.  </p>
                                <small> <b>Créditos:</b> <a href="https://www.urionlinejudge.com.br/judge/pt/problems/view/1003" target="_blank">Uri Online Judge</a> </small>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="mt-2">Exemplos</h2>
                                <div class="table-responsive table-striped">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Entrada</th>
                                                <th>Saída</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 30 <br> 10 </td>
                                                <td>SOMA = 40</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> -30 <br> 10 </td>
                                                <td>SOMA = -20</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> 0 <br> 0 </td>
                                                <td>SOMA = 0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                      
                            </div>
                        </div>
                    </div>

                    <!-- Problema 3 -->
                    <div class="tab-pane fade" role="tabpanel" id="nav-problema-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="mt-2">Descrição</h2>
                                <p>Leia dois valores inteiros. A seguir, calcule o produto entre estes dois valores e atribua esta operação à variável <b>PROD</b>. A seguir mostre a variável <b>PROD</b> com mensagem correspondente.   </p>
                                <p> <h5>Entrada</h5> O arquivo de entrada contém 2 valores inteiros. </p>
                                <p> <h5>Saída</h5> mprima a variável <b>PROD</b> conforme exemplo ao lado, com um espaço em branco antes e depois da igualdade.   </p>
                                <small> <b>Créditos:</b> <a href="https://www.urionlinejudge.com.br/judge/pt/problems/view/1004" target="_blank">Uri Online Judge</a> </small>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="mt-2">Exemplos</h2>
                                <div class="table-responsive table-striped">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Entrada</th>
                                                <th>Saída</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 3 <br> 9 </td>
                                                <td>PROD = 27</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> -30 <br> 10 </td>
                                                <td>PROD = -300</td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td> 0 <br> 9 </td>
                                                <td>PROD = 0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            
            <!-- Form para escolher a linguagem de envio -->
            <div class="mt-2 mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-12">Solução para:</label>
                        <div class="col-md-12">
                            <input type="text" id="input-solution-to" placeholder="Problema 1" text="Problema 1" class="form-control form-control-line" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-12">Linguagem:</label>
                        <div class="col-md-12">
                            <select class="form-control form-control-line" name="linguagem" id="linguagem">
                                @foreach($linguagens as $linguagem)
                                    <option value="{{ $linguagem->id }}"> {{ $linguagem->nome }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Editor do código -->
            <div id="editor">
            </div>

            <!-- Botão para enviar o código -->
            <div class="mt-3">
                <div class="col-6 pull-right">
                    <div class="col-5 pull-right">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-lg btn-success" id="btn-submit-code">Enviar Código</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- ============================================================== -->
<!-- Scripts para esta página -->
<!-- ============================================================== -->

<!-- jQuery -->
<script src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>

<!-- ACE Editor -->
<script src="{{ asset('js/plugins/ace-editor/src-min/ace.js') }}" type="text/javascript" charset="utf-8"></script>

<script src="{{ asset('js/plugins/ace-editor/src-min/mode-c_cpp.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('js/plugins/ace-editor/src-min/mode-python.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('js/plugins/ace-editor/src-min/mode-java.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<!-- Toda vez que a tab de problema for "alterada", altera-se também o valor do input de 'solução para' -->
<script type="text/javascript">
    $(document).on('click', 'a[data-toggle="tab"]', function(e){
        $("#input-solution-to").val(e.target.text);
        $("#input-solution-to")[0].placeholder = e.target.text;
    });
</script>

<!-- ACE Editor - Init, configs and custom -->
<script>
    var editor = ace.edit("editor");
    
    // < Themes >
    // editor.setTheme("ace/theme/monokai");
    editor.setTheme("ace/theme/xcode");

    // < FontSize >
    document.getElementById('editor').style.fontSize='14px';

    // < Modes >
    refreshEditor( $("#linguagem").val() );

    $(document).on('change', '#linguagem', function(e){
        refreshEditor( $("#linguagem").val() );
    });
</script>

<!-- Click para submeter o código escrito -->
<script>
$("#btn-submit-code").click(function(){
    var problema_id = $("#input-solution-to")[0].placeholder.split('Problema ')[1];
    swal({
        title: 'Submeter código?',
        text: "Certifique-se de ter revisado e não ter deixado freopen no arquivo! =)",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, submeter!',
        cancelButtonText: 'Cancelar',
        allowOutsideClick: false
    }).then((result) => {
        if (result.value) {
            var codigo = editor.getValue();
            var obj = {'codigo': codigo, 'linguagem_id': $("#linguagem").val(), 'problema_id': problema_id, "_token": "{{ csrf_token() }}"};
            $.ajax({
                url: window.location.href + "/codigo",
                type: 'POST',
                data: obj,
                dataType: 'JSON',
                success: function(response){
                    swal({
                        title: 'Submetido!',
                        text: 'Verifique a solução que acabou de ser enviada no menu submissões.',
                        type: 'success',
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = "{{ URL::route('submissoes') }}";
                        }
                    });
                }
            });
        }
    })
});
</script>

@endsection()