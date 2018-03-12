<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="banner2">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" href="../index.php">INICIO</a>
				<a class="selector" id="select" href="nosotros.php">NOSOTROS</a>
				<a class="selector" href="servicios.php">SERVICIOS</a>
				<a class="selector" href="contacto.php">CONTACTO</a>
			</ul>
		</nav>

		<figure class="pull-right logo">
			<img src="../img/ammex.png" alt="AMMEX" class="img-responsive">
		</figure>


		<div class="tit-form1">
			<div class=" col-md-6 tit pull-left text-right">
				Aquí podrás encontrar los mejores paquetes y tips para tu viaje
			</div>
			<div class="col-md-6 form1 pull-right">
				<form action="#" method="post" class="form">
            <div class="get-in-touch">
                <h3 class="text-center">
                   Solicita una cotización</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Nombre" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="Email" placeholder="Correo" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Tel" placeholder="Teléfono" required/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                </div>
                <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="fas fa-sign-in-alt"></i> ENVIAR</a>
            </div>
            </form>
			</div>
		</div>
	</div>
</div>

<div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">¿Por qué comprar en AMMEX?</h1>
            <p class="text-center">Expertos en viajes</p>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-md-2">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-2">
            <h3 class="text-left">Atención personalizada</h3>
            <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
          </div>
          <div class="col-md-2">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-2">
            <h3 class="text-left">La mejor atención post-venta</h3>
            <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
          </div>
          <div class="col-md-2">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-2">
            <h3 class="text-left">Los mejores precios</h3>
            <p class="text-left">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p>
          </div>
        </div>
        
      </div>
    </div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>


<script src="../js/jquery.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
