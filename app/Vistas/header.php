<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="shortcut icon" href="recursos/img/logoTieOut.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="recursos/css/index.css">
<script type="text/javascript" src="recursos/js/jQuery/jquery-1.5.2.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="recursos/js/bootstrap/css/bootstrap.min.css">
<script src="recursos/js/bootstrap/js/bootstrap.min.js"></script>
<script>$('.carousel').carousel({interval: 3000 }) </script>
<link rel="stylesheet" type="text/css" href="recursos/css/encabezados.css">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="btn navbar-toggle collapsed" id="inicia" href="sesion.php" >
		    	<span class="glyphicon glyphicon-log-in"></span>
			</a>
			<a class="btn navbar-toggle collapsed" id="salirS" href="index.php" >
	      		<span class="glyphicon glyphicon-log-out"></span>
	      	</a>
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
		            data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Desplegar navegación</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="index.php">
		    	<img alt="Brand" src="recursos/img/logoTieOut.png">
		    </a>
		    <a id="tiesOut" class="navbar-brand" href="index.php">TIES-OUT</a>
	  	</div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li><a class="head" href="index.php?controlador=general&act=btrabajo">BUSCAR EMPLEO</a></li>
	      <li class="dropdown">
	        <a class="head" href="#" class="dropdown-toggle" data-toggle="dropdown">
	          CURSOS <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="index.php?controlador=cursos&act=muestra&idcurso=1">Árboles</a></li>
	          <li><a href="index.php?controlador=cursos&act=muestra&idcurso=2">Métodos de ordenamiento</a></li>
	          <li><a href="#">Algoritmos de búsqueda</a></li>
	          <li class="divider"></li>
	          <li><a href="#"></a></li>
	        </ul>
	      </li>
	      <li><a class="head" href="index.php?controlador=general&act=contacto">CONTACTO</a></li>
	      <li><a class="head" href="index.php?controlador=general&act=nosotros">NOSOTROS</a></li>
	      <li id="miscursos"><a class="head" href="misCursos.php">MIS CURSOS</a></li>
	    </ul>
	   
	 	 <ul class="nav navbar-nav navbar-right login">
	      	<li id="registro"><a href="registro.php">Registrate</a></li>
	      	<li id="entrar">
	      		<a class="btn" id="sesion" href="sesion.php" >Iniciar sesión</a>
	      		<a class="btn" id="inicia" href="sesion.php" >
	      			<span class="glyphicon glyphicon-log-in"></span>
	      		</a>
	      	</li>
	      
	      	<li id="infoUser">
	           <a class="dropdown-toggle" data-toggle="dropdown" role="button">
                <div class="img-circle profile-img"></div>
                User Name
              </a>
         	</li>
	      	<li id="confPerfil">
            	<a href="configurarPerfil.php">
	               	<span class="glyphicon glyphicon-cog"></span>
	      		</a>
	      	</li>
	      	<li id="salir">
	      		<a id="tsesion" href="home.php" >Salir</a>
	      		<a id="salirS" href="home.php" >
	      			<span class="glyphicon glyphicon-log-out"></span>
	      		</a>
	      	</li>
	    </ul>
	    
	    <form class="navbar-form navbar-right" role="search">
	      	<div class="input-group">
	        	<input type="text" class="form-control" placeholder="e.j. Árboles binarios">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default glyphicon glyphicon-search">
					</button>
				</span>
	      	</div>
	    </form>
	  </div>
	  </div>
	</nav>

     	
     	