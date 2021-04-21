<form method="GET" action="https://localhost:44355/WebForm1.aspx">
    Nombre<input type="Text" name="nombre"/>
	Apellido<input type="Text" name="apellido"/>
	CI<input type="Text" name="ci"/>
	<?php
     	echo "la fecha actual es ".date("d")."del".date("m")."de".date("Y");

    ?>
	<input type="submit" name="Enviar"/>
</form>
	