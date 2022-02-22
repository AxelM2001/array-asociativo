<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>

    <h1>Contactos</h1>

    <fieldset>
        <legend>Cantidad de datos de entradas</legend>    
        <form method="POST" action="index.php">
            <input type="text" name="cantInputs">
            <input type="submit" name="" value="Generar">
        </form>
    </fieldset>

    <form action="procesar.php" method="POST">
        <?php if(isset($_POST['cantInputs'])){?>
        <?php for ($i=1; $i <= $_POST['cantInputs']; $i++) { ?>
        <input type="text" name="contacto[]" placeholder="contacto"><br>
        <?php } ?> 
        <?php } ?>
 
    <input type="submit" value="PROCESAR">
</form>
</body>
</html>
