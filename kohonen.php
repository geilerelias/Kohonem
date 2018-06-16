<html>
    <head>
        <title>Kohonem</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    </head>
    <body>
        <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay" style="overflow-y: scroll;"  >
            <header class="bmd-layout-header" id="header">
                <div class="row flex-nowrap justify-content-between align-items-center" style="background-color:#70b620 ">

                    <div class="col-8 ">
                        <h5 class="p-3  text-white text-capitalize  text-truncate  font-weight-bold" style="">
                            Mapas Auto Organizados de Kohonem
                        </h5>
                    </div>
                    <div class="col-4 pt-1">
                        <img src="img/logo.png" class="img-fluid float-right"  alt="Responsive image" >
                    </div>
                </div>
                <!---------NAVBAR----------------------------->
                <div class="navbar navbar-light bg-faded shadow row" id="navbar" data-spy="affix" data-offset-top="197" style="background-color: #299926;">
                    <div class="col-2">
                        <button class="navbar-toggler  text-white btn bmd-btn-icon btn-raised" type="button" data-toggle="drawer" data-target="#dw-s2" aria-expanded="false">
                            <span class="sr-only">Toggle drawer</span>
                            <i class="material-icons">menu</i>
                        </button>
                    </div>


                    <div class="d-none d-sm-block float-right pr-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link text-white active" data-toggle="tab" href="#entrenamiento">

                                    Entrenamiento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" data-toggle="tab" href="#simulacion">

                                    Simulacion
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </header>
            <!---------- DRAWER-------->
            <div id="dw-s2" class="bmd-layout-drawer bg-faded " aria-expanded="false" aria-hidden="true">
                <header class="img-menu img-fluid" style="background-color: #cccccc;background-image: linear-gradient(#70b620, #299926);" >

                    <a class="navbar-brand title-1 text-white text-capitalize "> <small>Kohonem</small> </a>
                </header>
                <ul class="nav flex-column flex-nowrap pt-3">
                    <li class="nav-item">
                        <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-maquinaria">
                            <div class="row">
                                <div class="col-1">
                                    <i class="material-icons">
                                        home
                                    </i>

                                </div>
                                <div class="col-3 pt-1">
                                    inicio
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center collapse" href="#" data-toggle="collapse" data-target="#menu-maquinaria">
                            <div class="row">
                                <div class="col-1">
                                    <i class="material-icons">
                                        pageview
                                    </i>

                                </div>
                                <div class="col-3 pt-1">
                                    Simulacion
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class=" flex-unordered flex-nowrap nav-link btn font-weight-bold text-capitalize align-content-center" href="../index.html">
                            <div class="row">
                                <div class="col-1">
                                    <i  class="material-icons ">clear
                                    </i>
                                </div>
                                <div class="col-3 pt-1">
                                    Salir
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!------------------- FIN CABECERA----------------------------------->
            <!------CONTENIDO--------------->
            <div class="container  tab-content">

                <div class="justify-content-center tab-pane active" id="entrenamiento" >

                    <?php
                    $arrayVencedora = array();
                    $arrayIte = array();
                    $w = array();
                    $x = array();

                    $x[0][0] = 0.8;
                    $x[0][1] = 0.7;
                    $x[0][2] = 0.5;
                    $x[0][3] = 0.4;

                    $x[1][0] = 0.9;
                    $x[1][1] = 0.5;
                    $x[1][2] = 0.5;
                    $x[1][3] = 0.9;

                    $x[2][0] = 0.4;
                    $x[2][1] = 0.7;
                    $x[2][2] = 0.2;
                    $x[2][3] = 0.4;

                    //declaracion de variables
                    $m = count($x[0]);
                    $n = 9;
                    $cv = 0.5;

                    $tolerancia = 0.0001;
                    $num_iteraciones = 100;
                    $num_patrones = count($x);
                    $tipo_competencia = "dura";
                    $rata = 0.1;
                    ?>


                    <form class="form-inline">
                        <div class="form-group pr-2">
                            <label for="exampleInputName2" class="bmd-label-floating " >Entradas</label>

                            <input type="text"  class="form-control-plaintext " id="staticEmail"  aria-describedby="basic-addon1" value="<?php echo $m ?> ">
                        </div>

                        <div class="form-group pr-2">
                            <label for="exampleInputEmail2" class="bmd-label-floating ">Numero de patrones </label>
                            <input type="text"  class="form-control-plaintext" id="staticEmail"  aria-describedby="basic-addon1" value="<?php echo $num_patrones ?>">
                        </div>
                        <div class="form-group pr-2">
                            <label for="exampleInputName2" class="bmd-label-floating " >Numero de neuronas</label>
                            <input type="text" class="form-control-plaintext" id="staticEmail"  aria-describedby="basic-addon1" value="<?php echo $n ?>">
                        </div>
                        <div class="form-group pr-2">
                            <label for="exampleInputName2" class="bmd-label-floating " >Coeficiente de vecindad</label>
                            <input type="text"  class="form-control-plaintext" id="staticEmail"  aria-describedby="basic-addon1" value="<?php echo $cv ?>">
                        </div>
                        <div class="form-group pr-2">
                            <label for="exampleInputName2" class="bmd-label-floating " >Tolerancia</label>
                            <input type="text"  class="form-control-plaintext" id="staticEmail"  aria-describedby="basic-addon1" value="<?php echo $tolerancia ?>">
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-primary">MATRIZ DE ENTRADAS</h6>
                            <table class="table table-striped table-bordered">
                                <thead  style="background-color:#70b620;">
                                    <tr> 
                                        <?php
                                        for ($i = 0; $i < count($x[0]); $i++) {
                                            echo'<th class="text-white text-center">X' . ($i + 1) . '</th>';
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($x as $value) {
                                        echo'<tr>';
                                        for ($index = 0; $index < count($value); $index++) {
                                            echo '<td class="text-center">' . $value[$index] . '</td>';
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        // inicializamos pesos sinapticos
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $m; $j++) {
                                $w[$j][$i] = (rand(-1000, 1000)) / 1000;
                            }
                        }
                        ?>
                        <div class="col-6">
                            <h6 class="text-primary">MATRIZ DE PESOS</h6>
                            <table class="table table-striped table-bordered">
                                <thead  style="background-color:#70b620;">
                                    <tr>
                                        <th class="text-white text-center">W</th> 
                                        <?php
                                        for ($i = 0; $i < count($w); $i++) {
                                            echo'<th class="text-white text-center">' . ($i + 1) . '</th>';
                                        }
                                        ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        for ($i = 0; $i < $n; $i++) {
                                            echo'<td class="text-white text-center" style="background-color:#70b620;">' . ($i + 1) . '</td>';
                                            for ($j = 0; $j < $m; $j++) {
                                                echo "<td>" . $w[$j][$i] . '</td>';
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group">

                                <?php
                                //distancia eucladiana
                                $d;
                                //distancia vencedora
                                $dv;

                                //iteraciones
                                for ($ite = 0; $ite < $num_iteraciones; $ite++) {
                                    //patrones
                                    $sum_dv = 0;
                                    for ($p = 0; $p < $num_patrones; $p++) {
                                        $suma = 0;

                                        //calculo de la distancia eucladiana
                                        for ($i = 0; $i < $n; $i++) {
                                            for ($j = 0; $j < $m; $j++) {
                                                $suma = $suma + ($x[$p][$j] - $w[$j][$i]) ^ 2;
                                            }
                                            $d[$i] = sqrt($suma);
                                        }
                                        $pos_dv = 0;
                                        $dv[$p] = $d[0];

                                        // hallar la vencedora
                                        for ($i = 0; $i < $n; $i++) {
                                            if ($dv[$p] > $d[$i]) {
                                                $pos_dv = $i;
                                                $dv[$p] = $d[$i];
                                            }
                                        }

                                        //acumula distancias vencedoras en cada patron
                                        $sum_dv = $sum_dv + $dv[$p];

                                        switch ($tipo_competencia) {
                                            case "dura":
                                                //actualizacion de pesos COMPETENCIA DURA
                                                for ($j = 0; $j < $m; $j++) {
                                                    $w[$j][$pos_dv] = $w[$j][$pos_dv] + $rata * $dv[$p];
                                                }
                                                break;
                                            case "blanda":
                                                $dg = $dv[$p] + $cv;
                                                //actualizacion de pesos COMPETENCIA BLANDA
                                                for ($i = 0; $i < $n; $i++) {

                                                    if ($d[$i] < $dg) {
                                                        for ($j = 0; $j < $m; $j++) {
                                                            $w[$j][$i] = $w[$j][$i] + $rata * $dv[$p];
                                                        }
                                                    }
                                                }
                                                break;
                                        }
                                    }

                                    $d_vencedora = $sum_dv / $num_patrones;
                                    $arrayVencedora[] = $d_vencedora;
                                    $arrayIte[] = $ite;
                                    ?>

                                    <?php if ($d_vencedora <= $tolerancia) { ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Promedio Iteracion <?php echo $ite ?>
                                            <span class="badge badge-info badge-pill"> <?php echo$d_vencedora ?></span>
                                        </li>
                                        <?php
                                        break;
                                    } else {
                                        ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Promedio Iteracion <?php echo $ite ?>
                                            <span class="badge badge-warning badge-pill"><?php echo $d_vencedora ?></span>
                                        </li>
                                    <?php } ?>

                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6 class="text-primary">MATRIZ ACTUALIZADA DE PESOS</h6>
                            <table class="table table-striped table-bordered">
                                <thead  style="background-color:#70b620;">
                                    <tr>
                                        <th class="text-white text-center">W</th> 
                                        <?php
                                        for ($i = 0; $i < count($w); $i++) {
                                            echo'<th class="text-white text-center">' . ($i + 1) . '</th>';
                                        }
                                        ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        for ($i = 0; $i < $n; $i++) {
                                            echo'<td class="text-white text-center" style="background-color:#70b620;">' . ($i + 1) . '</td>';
                                            for ($j = 0; $j < $m; $j++) {
                                                echo "<td>" . $w[$j][$i] . '</td>';
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div id="containerGrafica" class="row p-5">

                    </div>
                </div>

                <div class="justify-content-center container tab-pane fade " id="simulacion" >
                    <div class="row">
                        <div class="col-6 pt-5">
                            <h6 class="text-primary">MATRIZ DE ENTRADAS</h6>
                            <table class="table table-striped table-bordered">
                                <thead  style="background-color:#70b620;">
                                    <tr> 
                                        <td class="text-center">#</td>
                                        <?php
                                        for ($i = 0; $i < count($x[0]); $i++) {
                                            echo'<th class="text-white text-center">X' . ($i + 1) . '</th>';
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($x as $value) {
                                        echo'<tr>'
                                        . '<td class="text-center">'
                                        . '<div class="switch">
                                                <label>
                                                  <input type="checkbox" >
                                                </label>
                                              </div>
                                              </td>';
                                        for ($index = 0; $index < count($value); $index++) {
                                            echo '<td class="text-center">' . $value[$index] . '</td>';
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid py-5 " style="background-color:#70b620; ">
                    <div class="row  ">
                        <div class="col-4 text-white text-center">
                            <h6>Contacto</h6>
                            <p>Tel. 5798900</p>
                        </div>
                        <div class="col-4 text-white text-center">
                            <h6>Direccion</h6>
                            <p>Calle 32 # 45-67 Valledupar</p>
                        </div>
                        <div class="col-4 text-white text-center">
                            <h6>Más Información</h6>
                            <a href="https://grupocolba.com.co/transcolba/"  class="text-white">Universidad Popular del Cesar</a>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center " style="background-color: #299926 ">
                    <div class="text-center py-1 text-white">
                        ©
                        <script>document.write(new Date().getFullYear())</script>
                        Copyright
                    </div>
                </div>
            </footer>
            <!--------------------FOOTER-------------->
        </div>
        <script src="code/highcharts.js"></script>
        <script src="code/modules/series-label.js"></script>
        <script src="code/modules/exporting.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>
                            $(document).ready(function () {
                            var listaErms=new Array();
                            var goal=new Array();
                            $('body').bootstrapMaterialDesign();
                            <?php for ($index = 0; $index < count($arrayVencedora); $index++) { ?>
                                listaErms.push(<?php echo $arrayVencedora[$index] ?>);
                            <?php } ?>

                            grafica(listaErms);
                            });
                            function grafica(listaErms) {

                            /*
                             if (cont>10) {
                             clearInterval(miGrafica);
                             }
                             */
                            //console.log(cont);

                            Highcharts.chart('containerGrafica', {
                            title: {
                            text: 'Grafica Erms vs Intercion'
                            },
                                    subtitle: {
                                    text: 'Errores de cada interacion'
                                    },
                                    yAxis: {
                                    title: {
                                    text: 'Erms'
                                    }
                                    },
                                    xAxis: {
                                    title: {
                                    text: 'Interaciones'
                                    }
                                    },
                                    legend: {
                                    layout: 'vertical',
                                            align: 'right',
                                            verticalAlign: 'middle'
                                    },
                                    plotOptions: {
                                    series: {
                                    animation: true,
                                            label: {
                                            connectorAllowed: false
                                            }
                                    },
                                            line: {
                                            dataLabels: {
                                            enabled: false
                                            }
                                            }
                                    },
                                    series: [{
                                    name: 'Erms',
                                            data: listaErms,
                                            color: '#8BC34A'
                                    }],
                                    responsive: {
                                    rules: [{
                                    condition: {
                                    maxWidth: 500
                                    },
                                            chartOptions: {
                                            legend: {
                                            layout: 'horizontal',
                                                    align: 'center',
                                                    verticalAlign: 'bottom'
                                            }
                                            }
                                    }]
                                    }

                            });
                            }
        </script>
    </body>
</html>

