<?php
/**
 * User: Bcalderon
 * Date: 08/02/19
 * Time: 11:16
 */

$table_name = "producto";
try {


    $registries = Controller::$connection->query("SELECT * FROM $table_name");

    if($registries) {

    $registries = $registries->fetchAll(PDO::FETCH_NUM);

    }
}

catch(mysqli_sql_exception $e) {

    echo $e->getMessage();

}

?>

<div class="panel panel-default" xmlns="http://www.w3.org/1999/html">

    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span>

            <strong>Ventas</strong>

        </h3>
    </div>

    <div class="panel-collapse collapse in">

        <div class="panel-body">

                    <div id="CLIENTE" class="panel panel-default">
                        
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                                <a data-toggle="collapse" data-target="#CLIENTE-panel">
                                    <strong>Reporte Diario de Ventas, Devoluciones y Ganancias</strong>
                                </a>
                                
                            </h3>
                        </div>

                    <div id="CLIENTE-panel" class="panel-collapse collapse in">

                        <div class="panel-body">

                            <div class="col-md-8">

                                <div class="well">

                                    <div class="inputs_wrapper" style="max-height: inherit;">

                                        <div class="row">

                                            <div class="col-md-12">

                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </span>
                                                    <input id="fecha_Diario" class="datepicker form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <br>
                                    
                                    <button id="print" template="reporte_diario" type="button" class="print btn btn-default btn-md btn-block">
                                        <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                    </button>
                                        <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div id="CLIENTE" class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                            <a data-toggle="collapse" data-target="#CLIENTE-panel">
                                <strong>Articulos más Vendidos del mes</strong>
                            </a>
                            
                        </h3>
                    </div>

                <div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-8">

                            <div class="well">

                                <div class="inputs_wrapper" style="max-height: inherit;">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </span>
                                                <input id="fecha_mes" class="date_mensual form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <br>
                                
                                <button id="print" template="RPTProductosV" type="button" class="print btn btn-default btn-md btn-block">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                </button>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="CLIENTE" class="panel panel-default">
            
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                            <a data-toggle="collapse" data-target="#CLIENTE-panel">
                                <strong>Ventas Diarias por Fecha</strong>
                            </a>
                            
                        </h3>
                    </div>

                <div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-8">

                            <div class="well">

                                <div class="inputs_wrapper" style="max-height: inherit;">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </span>
                                                <input id="Vfecha_Diario" class="datepicker form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <br>
                                
                                <button id="print" template="ventas_diarias" type="button" class="print btn btn-default btn-md btn-block">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                </button>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
             </div>


            <div id="CLIENTE" class="panel panel-default">
            
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                            <a data-toggle="collapse" data-target="#CLIENTE-panel">
                                <strong>Ventas al Crédito</strong>
                            </a>
                            
                        </h3>
                    </div>

                <div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-8">

                            <div class="well">

                                <div class="inputs_wrapper" style="max-height: inherit;">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </span>
                                                <input id="fecha_Creditos" class="datepicker form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <br>
                                
                                <button id="print" template="RPTVentaCredito" type="button" class="print btn btn-default btn-md btn-block">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                </button>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <div id="CLIENTE" class="panel panel-default">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                        <a data-toggle="collapse" data-target="#CLIENTE-panel">
                            <strong>Ventas al Contado</strong>
                        </a>
                        
                    </h3>
                </div>

                <div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-8">

                            <div class="well">

                                <div class="inputs_wrapper" style="max-height: inherit;">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </span>
                                                <input id="fecha_Contado" class="datepicker form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <br>
                                
                                <button id="print" template="RPTVentaContado" type="button" class="print btn btn-default btn-md btn-block">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                </button>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="CLIENTE" class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                            <a data-toggle="collapse" data-target="#CLIENTE-panel">
                                <strong>Ventas por Producto Mensual</strong>
                            </a>
                            
                        </h3>
                    </div>

                <div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-8">

                            <div class="well">

                                <div class="inputs_wrapper" style="max-height: inherit;">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </span>
                                                <input id="VPfecha_mes" class="date_mensual form-control" placeholder="FECHA" aria-describedby="basic-addon" type="text">
                                            </div>
                                            <br>
                                            <br>
                                             <select id="producto" class="form-control" aria-describedby="basic-addon">

                                                 <script>

                                                    $('#total').attr('disabled', 'disabled'); //Disable

                                                        $(document).ready(function() {

                                                            $("select#producto").select2({ data:[
                                                                
                                                            <?php foreach($registries as $key => $value): ?>
                                                                    
                                                                    {
                                                                        id: '<?php echo $value[0]; ?>',
                                                                        text: '<?php if(isset($value[1])) {echo $value[0];} ?><?php if(isset($value[3])) {echo " - ".$value[2];} ?>'
                                                                    },

                                                            <?php endforeach; ?>

                                                            ],

                                                                minimumInputLength: 0

                                                            });

                                                        })

                                                    </script>

                                                 <option value="nothing">Selecciona un Producto</option>*
                                             </select>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <br>
                                
                                <button id="print" template="RPTVentasProducto" type="button" class="print btn btn-default btn-md btn-block">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Reporte
                                </button>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             


        </div>
    </div>
</div>


