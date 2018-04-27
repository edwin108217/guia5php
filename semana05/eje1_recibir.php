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

               <div class="contenedor" id="centrar">
                <?php 
                        $ave1 = $_POST["1"];
                        $ave2 = $_POST["2"];
                        $ave3 = $_POST["3"];
                        $ave4 = $_POST["4"];
                        $ave5 = $_POST["5"];
                        $ave6 = $_POST["6"];

                        $aves = array("1" => $ave1 ,"2" => $ave2, "3" => $ave3 , "4" => $ave4 ,"5" => $ave5 ,"6" => $ave6);

                        asort($aves);
                        echo "Nombre de aves ordenados<br>";
                        while (list($i,$valor)= each($aves)) {
                            echo $i." ".$valor."<br>";
                        }

                    ?>
               </div>
               <br><br>

            </div>
            
        </body>
    </html>