<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/adminlte.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- jQuery -->
    <script src="views/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Sweet Alert -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body style="background-color:#ccff99;">

    <div class="container-fluid">

        <div class="row mt-2 mb-2">
            <div class="col-sm-6">
                <!-- <h2 class="m-0 text-dark "><i><b>Sistema experto básico 1.0</b></i></h2> -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"><b>SISTEMA EXPERTO DIFUSO BASICO</b></h1>
                    </div>
                    <div class="card-body">
                        <h5><i><b>Síntomas</b></i></h5>
                        <p>Seleccione los síntomas</p>

                        <hr class="my-4">

                        <div class="row">

                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <div class="info-box-content">
                                        <span class="info-box-text"><i><b>Fiebre</b></i></span>
                                        <span class="info-box-number"></span>
                                    </div>
                                    <button type="button" class="btn btn-sintoma bg-gradient-info" value="1"><b>INGRESAR</b></button>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <div class="info-box-content">
                                        <span class="info-box-text"><i><b>Malestar</b></i></span>
                                        <span class="info-box-number"></span>
                                    </div>
                                    <button type="button" class="btn btn-sintoma bg-gradient-info" value="4"><b>INGRESAR</b></button>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <div class="info-box-content">
                                        <span class="info-box-text"><i><b>Dolor de garganta</b></i></span>
                                        <span class="info-box-number"></span>
                                    </div>
                                    <button type="button" class="btn btn-sintoma bg-gradient-info" value="3"><b>INGRESAR</b></button>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="info-box mb-3">
                                    <div class="info-box-content">
                                        <span class="info-box-text"><i><b>Tos</b></i></span>
                                        <span class="info-box-number"></span>
                                    </div>
                                    <button type="button" class="btn btn-sintoma bg-gradient-info" value="2"><b>INGRESAR</b></button>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button type="button" class="btn btn-lg btn-asintomas btn-success" value="0">Diagnóstico</button>
                        <button type="button" class="btn btn-lg btn-reset btn-danger" value="0">Reiniciar Diagnóstico</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Enfermedad / Consecuente
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><i><b>DIAGNÓSTICO GENERAL</b></i></h1>
                        <p class="card-text" id="texto">

                            <hr class="my-4">

                            
                            <div class="form-group">
                                <label for="my-input">Enfermedad</label>
                                <input  class="form-control" type="text" name="Enfermedad" id="enfermedad" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="my-input">Tratamiento</label>
                                <input id="tratamiento" class="form-control" type="text" readonly>
                            </div>

                        </p>
                    </div>
                </div>



            </div>
        </div>



        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            </div>
        </div>
    </div>

</body>

<script src="actions.js"></script>

</html>