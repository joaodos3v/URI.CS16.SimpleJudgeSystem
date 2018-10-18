// Estes são os 3 arrays com as informações das submissões, propriamente ditas
var dadosSubmissoesCorretas = [];
var dadosSubmissoesErroDeExecucao = [];
var dadosSubmissoesIncorretas = [];


// Este método captura as informações das submissões dos últimos 10 dias no sistema - armazenadas no banco de dados - para poder popular o gráfico
function getSystemData() {
    $.ajax({
        url: window.location.href +  "/system-data",
        success: function(response){
            var data = response.response;
            
            for (var key in data.corretas) {
                var arr1 = [parseInt(new Date(key).getTime()), data.corretas[key]];
                dadosSubmissoesCorretas.push(arr1);
            }
            for (var key in data.erroExecucao) {
                var arr2 = [parseInt(new Date(key).getTime()), data.erroExecucao[key]];
                dadosSubmissoesErroDeExecucao.push(arr2);
            }
            for (var key in data.incorretas) {
                var arr3 = [parseInt(new Date(key).getTime()), data.incorretas[key]];
                dadosSubmissoesIncorretas.push(arr3);
            }

            // Opções do Gráfico: define propriedades como tooltip nos pontos marcados (e a legenda que será exibida nesse tooltip); cores das linhasue serão exibidas; mode = time (é necessário quando se exibe datas)
            var options = {
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    lines: { show: true },
                    points: { show: true }
                },
                grid: {
                    color: "#AFAFAF",
                    hoverable: true, //IMPORTANT! this is needed for tooltip to work
                    borderWidth: 0,
                    backgroundColor: '#FFF'
                },
                tooltip: true,
                tooltipOpts: {
                    content: "[%y] submissões '%s' no dia %x",
                    defaultTheme: false,
                    shifts: {
                        x: -60,
                        y: 25
                    }
                },
                colors: ["#55ce63", "#009efb", "#f18973"],
                xaxis: {
                    mode: "time"
                }
            };

            // Atribiu o título (e sua cor) aos dados, respectivamente
            var dataset = [
                { 
                    label: "Corretas", 
                    data: dadosSubmissoesCorretas 
                },
                { 
                    label: "Erro de Execução", 
                    data: dadosSubmissoesErroDeExecucao
                },
                { 
                    label: "Incorretas", 
                    data: dadosSubmissoesIncorretas
                }
            ];
            

            // Plota o gráfico na div com id="placeholder", localizada na view 'dashboard,blade.php'
            $.plot($("#placeholder"), dataset, options);

        }
    });
}

// Invoca o método que irá plotar o gráfico
getSystemData();
