<?php require 'header.php'; ?>
<link href="../css/estilos_footer.css" rel="stylesheet">



<div class="container">     <br>	
    <h2>Carga de Archivo</h2>			

        <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div class="form-group">
                        <label class="col-lg-2 control-label">Formato de Archivo</label>
                        <div class="col-lg-10">
                            <ul class="nav nav-tabs">
                                <li class="" style="display: block !important"><a data-toggle="tab" hidden href="#tab-1"><i class="fa fa-file-excel-o"></i> Excel</a></li>
                                <li class="active" style="display: block !important"><a data-toggle="tab" href="#tab-2"><i class="fa fa-file-text-o"></i> CSV</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane">
                                    <table class="table table-bordered table-excel m-b-xs">
                                        <tr><th>&nbsp;</th><th>A</th><th>B</th></tr>
                                        <tr><th>1</th><td>987654321</td><td>Estimado Cliente, su pago fue recibido exitosamente</td></tr>
                                        <tr><th>2</th><td>982538726</td><td>Su credito de consumo N.345 se encuentra impago</td></tr>
                                    </table>
                                </div>
                                <div id="tab-2" class="tab-pane active">
                                    <pre style="padding: 13px" class="m-b-xs">n&uacute;mero;Descripcion <br>987654321;Falabella<br>982538726;Numero de cobranza	</pre>
                                </div>									
                            </div>
                        </div>
            </div>
                CSV File: <input type="file" name="file" id="file" >
                <input type="checkbox" name="cbox1" value="cbox1"> Truncar tablita <br><br><br>
                <input type="submit" value="Enviar" name="enviar">
                
            </form>
                                
</div >

<?php require 'footer.php'; ?>