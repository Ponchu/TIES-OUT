<html>
<head>
		<title>Árboles</title>
		<link rel="stylesheet" type="" href="../css/curso1.css">
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<?php include_once("../imports.php"); ?>
</head>
<body>
		<?php include_once('../header.php'); ?>
				
		<aside id="inscribete">
			<span>¿No est&aacute;s registrado en &eacute;ste curso?</span><br />
			<a class="btn btn-warning btn-lg" href="<?php echo ROOTPATH ?>/login/registro.php">Reg&iacute;strate</a><br />
		</aside>

		<div class="content">		
			<!--todo dentro de un article despues del content, despues del article agregar section, y para los enlaces usar footer-->
			<article>
				<section class = "encabezado">
					<h2>CONTENIDO DEL CURSO: ARBOLES</h2><br />				
				</section>

				<section class="contenido">
					<h3>¿Qu&eacute; son los &aacute;rboles?</h3><br />
					<p align="justify">
						Un árbol es una estructura no lineal en la que cada nodo puede apuntar a uno o varios nodos.
						También se suele dar una definición recursiva: un árbol es una estructura en compuesta por un dato y varios árboles. Estas son definiciones simples. Pero las características que implican no lo son tanto.
						Definiremos varios conceptos. En relación con otros nodos:
					</p><br />

					<div id="lista">
						<li>Nodo hijo: cualquiera de los nodos apuntados por uno de los nodos del árbol.</li>
						<li>Nodo padre: nodo que contiene un puntero al nodo actual.</li><br />
					</div>
					

					<p align="justify">
						Los árboles con los que trabajaremos tienen otra característica importante: cada nodo sólo puede ser apuntado por otro nodo, es decir, cada nodo sólo tendrá un padre. Esto hace que estos árboles estén fuertemente jerarquizados, y es lo que en realidad les da la apariencia de árboles. En cuanto a la posición dentro del árbol:
					</p><br />

					<div id="lista">
						<li>Nodo raíz: nodo que no tiene padre. Este es el nodo que usaremos para referirnos al árbol.</li>
						<li>Nodo hoja: nodo que no tiene hijos.</li>
						<li>Nodo rama: estos son los nodos que no pertenecen a ninguna de las dos categorías anteriores.</li><br />
					</div>


					<p align="justify">
						Otra característica que normalmente tendrán nuestros árboles es que todos los nodos contengan el mismo número de punteros, es decir, usaremos la misma estructura para todos los nodos del árbol. Esto hace que la estructura sea más sencilla, y por lo tanto también los programas para trabajar con ellos.
						Tampoco es necesario que todos los nodos hijos de un nodo concreto existan. Es decir, que pueden usarse todos, algunos o ninguno de los punteros de cada nodo.
						Un árbol en el que en cada nodo o bien todos o ninguno de los hijos existe, se llama árbol completo.
						Existen otros conceptos que definen las características del árbol, en relación a su tamaño:
					</p><br />

					<div id="lista">
						<li>
							Orden: es el número potencial de hijos que puede tener cada elemento de árbol. De este modo, diremos que un árbol en el que cada nodo puede apuntar a otros dos es de orden dos, si puede apuntar a tres será de orden tres, etc.
						</li>
						<li>
							Grado: el número de hijos que tiene el elemento con más hijos dentro del árbol. 
						</li>
						<li>
							Nivel: se define para cada elemento del árbol como la distancia a la raíz, medida en nodos. El nivel de la raíz es cero y el de sus hijos uno. Así sucesivamente.
						</li>
						<li>
							Altura: la altura de un árbol se define como el nivel del nodo de mayor nivel. Como cada nodo de un árbol puede considerarse a su vez como la raíz de un árbol, también podemos hablar de altura de ramas.
						</li><br />
					</div>
				</section>

				<footer id="fuente">
					<p>
						Fuente: Abril de 2002, Salvador Pozo Coronado, salvador@conclase.net <a href="http://www.c.conclase.net/edd/?cap=006">c.conclase.net</a>
					</p>
				</footer>
				
			</article>

			<?php include_once('../footerTips.php'); ?>	
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>