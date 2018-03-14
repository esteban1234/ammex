<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

	<div class="banner3">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" href="../index.php">INICIO</a>
				<a class="selector" href="nosotros.php">NOSOTROS</a>
				<a class="selector" id="select2" href="servicios.php">SERVICIOS</a>
				<a class="selector" href="contacto.php">CONTACTO</a>
			</ul>
		</nav>

		<figure class="pull-right logo">
			<img src="../img/ammex.png" alt="AMMEX" class="img-responsive">
		</figure>


		<div class="tit-form1">
			<div class=" col-md-6 tit pull-left text-right">
				Viajes: busque, <br> compare y <br> ahorre
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
 
 <div class="container" style="padding: 5% 0%;">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">DESTINOS</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Todos</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">México</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Norte America</button>
            <button class="btn btn-default filter-button" data-filter="spray">Europa</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Latino America</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../img/aguazaul01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="../img/norteamerica0101.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../img/monterrey01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../img/latino0101.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../img/europa0101.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../img/latino0202.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../img/europa0202.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../img/latino0303.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../img/latino0404.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../img/toluca01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../img/europa0303.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="../img/norteamerica0202.jpg" class="img-responsive">
            </div>
        </div>
    </div>
</section>

	
	

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/galeria.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>

