<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="banner">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" id="select" href="index.php">INICIO</a>
				<a class="selector" href="vistas/nosotros.php">NOSOTROS</a>
				<a class="selector" href="vistas/servicios.php">SERVICIOS</a>
				<a class="selector" href="vistas/contacto.php">CONTACTO</a>
			</ul>
		</nav>

		<figure class="pull-right logo">
			<img src="img/ammex.png" alt="AMMEX" class="img-responsive">
		</figure>


		<div class="tit-form1">
			<div class=" col-md-6 tit pull-left text-right">
				Encuentra los mejores paquetes turísticos
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
      	<h1 class="text-center" style="color: #ED6A16;">Paquetes turísticos</h1> <br><br>
        <div class="row">
          <div class="col-md-3 cuadro">
            <figure class="imagen">
            	<div class="fondoi">
            		<p class="text-right">
            			<i class="fas fa-briefcase fa-3x"></i>
            		</p>
            		<p class="text-fondoi">
            			Paquete a <br> <b>CANCUN</b>
            		</p>
            	</div>
            </figure>
            <h2 class="" style="color: #ED6A16;">Desde $ 884.50</h2>
            <p>Precio total por persona</p>
          </div>
          <div class="col-md-3 cuadro">
            <figure class="imagen1">
            	<div class="fondoi">
            		<p class="text-right">
            			<i class="fas fa-briefcase fa-3x"></i>
            		</p>
            		<p class="text-fondoi">
            			Paquete a <br> <b>MAZATLAN</b>
            		</p>
            	</div>
            </figure>
            <h2 class="" style="color: #ED6A16;">Desde $ 1284.50</h2>
            <p>Precio total por persona</p>
          </div>
          <div class="col-md-3 cuadro">
            <figure class="imagen2">
            	<div class="fondoi">
            		<p class="text-right">
            			<i class="fas fa-briefcase fa-3x"></i>
            		</p>
            		<p class="text-fondoi">
            			Paquete a <br> <b>ACAPULCO</b>
            		</p>
            	</div>
            </figure>
            <h2 class="" style="color: #ED6A16;">Desde $ 994.50</h2>
            <p>Precio total por persona</p>
          </div>
          <div class="col-md-3 cuadro">
            <figure class="imagen3">
            	<div class="fondoi">
            		<p class="text-right">
            			<i class="fas fa-briefcase fa-3x"></i>
            		</p>
            		<p class="text-fondoi">
            			Paquete a <br> <b>MEXICO</b>
            		</p>
            	</div>
            </figure>
            <h2 class="" style="color: #ED6A16;">Desde $ 1104.50</h2>
            <p>Precio total por persona</p>
          </div>
        </div>
      </div>
    </div>


<div class="container" style="margin-bottom: 2%;">
	<div class="row text-center">
            <a href="vistas/contacto.php" class="btn btn-warning btn-outline btn-lg">CONTACTANOS</a>
	</div>
</div>



<a class="go-top" href="#">Ir Arriba</a>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>