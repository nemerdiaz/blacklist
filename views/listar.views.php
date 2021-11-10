<?php require 'header.php'; ?>

<link href="../css/estilos_footer.css" rel="stylesheet">

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->


<div class="container"><br>
        <input type="text" id="myInput" onkeyup="myFilter()" placeholder="Filtrar..." class="form-control-sm">
<br></br>
        <table id="myTable" class="table table-resposive-lg table-striped table-bordered table-sm" style="width:100%">
        <thead>
            <tr>
                <th>IDC</th>
                <th>Numero</th>
                <th>Descripcion</th>
                <th>Fecha Ingreso</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
        <?php $resultado = mysqli_query($conexionDB, $sql );
        while ($row=mysqli_fetch_assoc($resultado)){?>
            <tr>

                <td> <?php echo $row["blackidc"]; ?> - <?php echo $row["nombre"]; ?> </td>
                <td> <?php if (is_null($row["NUMERO"])){
                echo "NO DATA";
                }else{
                    echo $row["NUMERO"];
                 } ?> </td>
                <td> <?php echo $row["DESCRIPCION"]; ?> </td>
                <td> <?php echo $row["FECHA"]; ?> </td>
                <td> <?php echo $row["user"]; ?> </td>
            </tr>          
            
        <?php } mysqli_free_result($resultado); ?>
        </tbody>
    </table>
</div>


<script src="../js/datatable.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



<?php require 'footer.php'; ?>