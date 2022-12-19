<?php
include("clases/Conexion.php");
include("clases/Funciones.php");


$db = new Conexion();
$menu = $db->query("SELECT * FROM products");
// $menuInfo = $menu->fetch();
$db = new Conexion();
$foto = $db->query("SELECT * FROM fotoproducts");



?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 " lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 " lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 " lang="en"> <![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html lang="es">
<head>
<title>Tienda Online</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/logo.jpg">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link href="css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link href="css/styles.css" rel="stylesheet" />
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>





	<!--Lista de pedido --->
	<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mb-5" style="border-bottom: solid 1px #ebebeb;">
                Resumen de mi Pedido 
            </h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead id="theadTableSpecial">
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Producto</th>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-right">Precio</th>
							<!--<th class="text-center" scope="col">SubTotal</th> -->
                            <th class="text-right">Acción </th>
                        </tr>
                    </thead>
                    <tbody>
                        
     
                    <?php foreach($menu as $m): ?>
                        
                        <tr>
                            <td>
                            
                                <img src="<?php echo $m["foto"]; ?>" alt="Foto_Producto" style="width: 100px;"> 
                            
                            </td>
                            
                            <td>
                                <?php echo $m["nameProd"]; ?>
                            </td>
                            <td>
                                <?php echo $m["id"]; ?>
                                
         
                            </td>
                            <td class="text-right"> <strong>$</strong> <?php echo $m["precio"]; ?></td>
                            <td class="text-right">
                                <span class="btn btn-sm btn-danger deleteProd" id="<?php echo $m["id"]; ?>">
                                    <i class="fa fa-trash"></i> 
                                </span> 
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>


    

        <div class="col mb-2 mt-5">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="index.php" class="btn btn-block  red_button btn_raza">Continuar Comprando</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="Acimagen.php" class="btn btn-block red_button btn_raza">Subir imagen</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin lista de pedido -->




<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src='js/kit.fontawesome.js'></script>
<script src="js/custom.js"></script>
<script src="js/miScript.js"></script>

</body>
</html>
