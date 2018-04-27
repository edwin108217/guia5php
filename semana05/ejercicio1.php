<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>

            <link rel="stylesheet" href="estilos/estilos.css">
            <link rel="stylesheet" href="estilos/centrar.css">
        </head>
        <body>
            <div class="contenedor" id="centrar">
                <h1>ordenar nombre de aves</h1>

                <form method="POST" action="eje1_recibir.php">
					<h2></h2>
					<br>
					<h4>ingrese el nombre de las aves:</h4>

					<table>
						<tr><td>1:</td><td><input type="text" id="1" name="1" ></td></tr>
						<tr><td>2:</td><td><input type="text" id="2" name="2" ></td></tr>
						<tr><td>3:</td><td><input type="text" id="3" name="3" ></td></tr>
						<tr><td>4:</td><td><input type="text" id="4" name="4" ></td></tr>
						<tr><td>5:</td><td><input type="text" id="5" name="5" ></td></tr>
						<tr><td>6:</td><td><input type="text" id="6" name="6" ></td></tr>
					</table>
						<input type="submit" name="enviar" value="ordenar">
				
                </form>
                <br>

            </div>
            
        </body>
    </html>