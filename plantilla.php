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

        <?php $hoy = getdate(); ?>

        <div class="row">
            <div class="col">
                <div class="card direct-chat direct-chat-primary">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Sistema predictivo (CHAT)</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="direct-chat-messages">

                            <input class="form-control" type="hidden" name="nodos" id="nodos" value="1">
                            
                            <!-- MENSAJE DEL BOT -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Galileo</span>
                                    <span class="direct-chat-timestamp float-right"><?= print $hoy['month']; print "/" ;print $hoy['mday']; print "/"; print $hoy['year'];?></span>
                                </div>
                                <!-- MENSAJE (INGRESAR) -->
                                <div class="direct-chat-text" id="mensaje">
                                    ¡Hola!, Por el momento no se nada, ¿Me enseñas algo?
                                </div>
                            </div>

                            <!-- MENSAJE DE RESPUESTA -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Tú</span>
                                    <span class="direct-chat-timestamp float-left"></span>
                                </div>
                                <!-- MENSAJE (INGRESAR) -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>

                            <!-- MENSAJE DEL BOT -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Galileo</span>
                                    <span class="direct-chat-timestamp float-right"></span>
                                </div>
                             <!-- MENSAJE (INGRESAR) -->
                                <div class="direct-chat-text">
                                    Working with AdminLTE on a great new app! Wanna join?
                                </div>
                            </div>

                            <!-- MENSAJE DE RESPUESTA -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Tú</span>
                                    <span class="direct-chat-timestamp float-left"></span>
                                </div>
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    I would love to.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" id="input_entrada" name="input_entrada" placeholder="Escribe un mensaje..." class="form-control">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-enviar">Enviar</button>
                                </span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="actions.js"></script>
</html>