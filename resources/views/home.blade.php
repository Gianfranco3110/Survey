@extends('layouts.app')
@section ('admin')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="tabs">
                <li class="sidebar-brand">
                    <a href="#">
                        BIENVENIDO
                    </a>
                </li>
                <li>
                    <a href="#tabs1" id="enlace1">DASHBOARD</a>
                </li>
                <li>
                    <a href="#tabs-2" id="enlace2">REGISTRO</a>
                </li>
                <li>
                    <a href="#tabs-3" id="enlace3"> REPORTES</a>
                </li>
                <li>
                    <a href="#tabs-4" id="enlace4">USUARIOS</a>
                </li>
                <li>
                    <a href="#">ADICIONAL</a>
                </li>
                <li>
                    <a href="#">CONTACTO</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" id="survey">
                            <div id="tabs-1">
                                <tarjeta-component></tarjeta-component>
                            </div>
                                    <div id="tabs-2">
                                        <example-component></example-component><!--Añadimos nuestro componente vuejs-->    					        </div>
                                    </div>
                                <div id="tabs-3">
                                    <canvas id="myChart" width="400" height="400"></canvas>
                                </div>
                        <div>
                    </div>
                </div>
            </div>
        <!-- /#page-content-wrapper -->
         <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Ocultar/mostrar</a>
</div>
    <!-- /#wrapper -->
     
     
     <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<!-- Js que muestra/oculta los elementos del sidebar -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabs-1').show();
		$('#tabs-2').hide();
		$('#tabs-3').hide();
        $('#tabs-4').hide()

		$('#enlace1').click(function(){
			$('#tabs-1').show();
			$('#tabs-2').hide();
			$('#tabs-3').hide();
            $('#tabs-4').hide()

		});

		$('#enlace2').click(function(){
			$('#tabs-2').show();
			$('#tabs-1').hide();
			$('#tabs-3').hide();
            $('#tabs-4').hide()

		});

		$('#enlace3').click(function(){
			$('#tabs-3').show();
			$('#tabs-2').hide();
			$('#tabs-1').hide();
            $('#tabs-4').hide()

		});

        $('#enlace4').click(function(){
			$('#tabs-3').show();
			$('#tabs-2').hide();
			$('#tabs-1').hide();
            $('#tabs-4').hide()

		});
	});
</script>

<!-- JS que muestra las graficas -->

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Bajo', 'Alto'],
        datasets: [{
            label: 'Nivel socio económico de la población',
            data: [25, 75],
            backgroundColor: [
                '#4D5161',
                '#7088E6',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<!-- stilo del sidebar -->
<style>
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    position:flex;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: absolute;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #102229;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    padding: 15px;
    min-height: 100vh;

}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
    padding-top: 55px;

}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #50D5C9;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #fff;
    
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
</style>

@endsection

