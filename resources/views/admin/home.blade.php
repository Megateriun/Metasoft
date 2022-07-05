@extends('layouts.admin_home_layout')

@section('title', 'Graficos')

@section('css')
<link href="{{ asset('css/admin/home.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection

@section('content')

<div class="button_graphics">
<button onclick="objetos_usuarios()">Ver grafico de objetos</button>
<button onclick="usuarios_creados()">Ver grafico de los usuarios crados</button>
<button onclick="transacciones_creadas()">Ver grafico de los transacciones cradas</button>

</div>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

@endsection

@section('script')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    
function objetos_usuarios(){

    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafico de los objetos creados por los usuarios'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: <?= $data ?>
        }]
    });
};

function usuarios_creados(){  
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Grafica de usuarios creados por día'
        },
        subtitle: {
            align: 'left',
            text: 'Esta grafica muestra el comportamiento de la creación de usuarios'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'cuentas creadas'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: <?= $users ?> 
            }
        ]
    });
}
/**/
function transacciones_creadas(){  
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Grafica de transacciones creadas por día'
        },
        subtitle: {
            align: 'left',
            text: 'Esta grafica muestra la creacion de las transacciones por día'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'cuentas creadas'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: <?= $transac ?> 
            }
        ]
    });
}

window.onload=objetos_usuarios;

</script>

@endsection