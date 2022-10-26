<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once("../resource/mainhead.php");
    ?>

    <title>Mantenimiento de Cliente</title>
</head>

<body>
    <?php
    require_once("../resource/mainleftpanel.php");
    ?>
    <?php
    require_once("../resource/mainheadpanel.php");

    ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.html">Mantenimiento</a>
                <span class="breadcrumb-item active">Cliente</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Cliente</h4>
            <p class="mg-b-0">Desde esta ventana prodrá dar mantenimiento a clientes.</p>
        </div>

        <div class="br-pagebody">
            <!-- start you own content here -->
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento de Cliente</h6>
                <button id="btnnuevo" class="btn btn-outline-success  mg-b-10">Nuevo Registro <i
                        class="fa fa-plus"></i></button>

                <div class="table-wrapper">
                    <table id="cliente_data" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">Nombre</th>
                                <th class="wd-15p">Email</th>
                                <th class="wd-15p">Celular</th>
                                <th class="wd-15p"></th>
                                <th class="wd-20p"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- REQUERIMOS AL MODAL MANTENIMIENTO -->
    <?php require_once("modalmantenimiento.php"); ?>

    <?php require_once("../resource/mainjs.php"); ?>


    <script src="mntcliente.js"></script>
</body>

</html>

</html>