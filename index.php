<?php
//error_reporting(0);
session_start();
include('config.php');
header("Content-Type: text/html;charset=utf-8");

?>





<?php
include("clases/Conexion.php");
include("files/iniciarSesion.php");
include("clases/Usuario.php");
include("clases/Funciones.php");

$funciones = new Funciones();

if(isset($_COOKIE["cDash"])){

    $hash = $_COOKIE["cDash"];

    $idUsuario = $funciones->obtenerIdUsuario($hash);

    if($idUsuario !=0 ){
        $usuario = new Usuario($idUsuario);
    }
    else{
        Header ("Location: login.html");
        exit;
    }
}
if(isset($_SESSION['usuario_id'])){
    $idUsuario = $_SESSION['usuario_id'];
    $usuario = new Usuario($idUsuario);
}

//2222
$db = new Conexion();
$menu = $db->query("SELECT * FROM products");
// $menuInfo = $menu->fetch();

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
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
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

<?php include('loarder.html'); ?>

<div class="super_container mb-5">
	
<?php include('header.php'); ?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    
                    <div class="col-lg-8 align-self-end">
                        

                    
		<!-- Admin opciones -->
	<!-- qqDivider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<?php if($usuario->tipo == 1): ?>
<li class="nav-item active">
<a class="nav-link" href="javascript:verUsuario()">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Usuarios registrados</span></a>
</li>

<li><a href="ActualizarProd2.php">Actualizar productos</a></li>
<li><a href="actualizarimagenprod.php">Actualizar Imagen</a></li>
<div class="sidebar-heading">
Permisos Administrador
</div>

<?php  endif; ?>
<!--para mostrar la lista de usuarios -->
<hr class="sidebar-divider">
<div class="row">
<div id="informacion"></div>
</div>

                        
                        <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                        <hr class="divider" />
                        
                        
                    </div>
                    <?php include('complemento/menu.php'); ?>

                    

                </div>
                
                
            </div>
        </header>


<div class="container mt-5 pt-5" id="menu">

<h3 class="text-black-75 mb-5">Pan caliente recien salido del horno, comenzamos a repartir a las 6!</h3>

<?php
	$sqlProducts = ("
	SELECT 
		prod . * ,
		prod.id AS prodId,
		fot . * ,
		fot.id AS fotId 
	FROM 
		products AS prod,
		fotoproducts AS fot
	WHERE 
		prod.id = fot.products_id
		GROUP BY prod.id
	");
$queryProducts = mysqli_query($con, $sqlProducts);
?>





	
<div class="row align-items-center">

<?php
while ($dataProduct = mysqli_fetch_array($queryProducts)) { ?>

<div class="col col-md-3 mt-5 text-center Products">
    
<div class="card">
		<img class="card-img-top" src="<?php echo $dataProduct["foto"]; ?>" alt="Card image cap">
	<div class="card-body text-center">
			<h5 class="card-title card_title"><?php echo $dataProduct['nameProd']; ?></h5>
		<p class="card-text p_puntos">
			$<?php echo $dataProduct['precio']; ?> 
		</p>

		    <p>
                
				<button data-id="<?php echo $dataProduct["prodId"]; ?>" class="comprar cart-button btn-secondary btn-outline-secondary btn btn-outline-secondary block">
                    
					<span class="add-to-cart" class="btn btn-outline-secondary" type="submit" ><i class="fas fa-shopping-cart"></i>Agregar a Carrito</span>
                   
					<span class="added" style='color: #fff; font-weight:500'>Agregado <i class="fas fa-check" style="color:green;"></i> </span>
					<i class="fas fa-cart-plus"></i>
					<i class="fas fa-clipboard-check"></i>
				</button>
			</p>
	</div>
</div>
</div>

  <?php } ?>
</div>

</div>



</div>


<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src='js/kit.fontawesome.js'></script>
<script src="js/custom.js"></script>
<script src="js/miScript.js"></script>
<script src="js/scripts.js"></script>

</body>

<!--  -->


<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/validacion.js"></script>
    <script src="alertifyjs/alertify.min.js"></script>





</html>