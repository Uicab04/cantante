<?php 

include 'config.php';
$foto = $_FILES['nfoto'];
echo $foto['tmp_name'];
$directorio_destino = "images";

$tmp_name = $foto['tmp_name'];
        $img_file = $foto['name'];
        $img_type = $foto['type'];
        echo 1;
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
            //¿Tenemos permisos para subir la imágen?
            echo 2;
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($con, "UPDATE products SET foto = '$destino' WHERE id = '16';");
            // recibe de tmpname y manda al destino la imga
            (move_uploaded_file($tmp_name, $destino))
                ?>


                <?php  

            }
    



    

 ?>

                