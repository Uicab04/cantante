

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
	<div class="col-lg-12 text-center mt-5">
		<div class="section_title">
			<h2>La salud es única para cada mascota</h2>
			<p>Hola a Todos..!</p>
		</div>
	</div>
</div>
	
<div class="row align-items-center">
<?php
while ($dataProduct = mysqli_fetch_array($queryProducts)) { ?>
<div class="col col-md-3 mt-5 text-center Products">
<div class="card">
		<img class="card-img-top" src="<?php echo $dataProduct["foto1"]; ?>" alt="Card image cap">
	<div class="card-body text-center">
			<h5 class="card-title card_title"><?php echo $dataProduct['nameProd']; ?></h5>
		<p class="card-text p_puntos">
			$<?php echo $dataProduct['precio']; ?> 
		</p>
		    <p>
				<button data-id="<?php echo $dataProduct["prodId"]; ?>" class="comprar cart-button btn block">
					<span class="add-to-cart">Agregar a Carrito</span>

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