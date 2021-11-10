<?php require 'header.php'; ?>
<link href="../css/estilos_footer.css" rel="stylesheet">


<div class="container" >
    <section class="container" >
        <h2>Registrar usuario</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">

                <div class="col">
                    <select name="idc_usuario" id="idc_usuario" class="">
                        <option value="0">---- SELECCIONAR ----</option>
                    <?php foreach ($clientes_obtenidos as $cliente_obtenido):?>                        
                        <option name="idc_usuario" value="<?php echo $cliente_obtenido['IDC']; ?>"><?php echo $cliente_obtenido['CLIENTE']; ?></option>
                    <?php endforeach; ?>
                    </select> 
                    
                </div><br>
                <div class="col">
                    <input type="text" name="usuario_correo" class="" placeholder="Correo">
                </div><br>
                <div class="col">
                    <input type="password" name="password" class="" placeholder="Contraseña">
                </div><br>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
                <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores; ?>
                        </u>
                    </div>
                <?php endif; ?>

        </form>
    </section>         
</div>

<?php require 'footer.php';