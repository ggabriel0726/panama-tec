<!DOCTYPE html>
<html>
<head>
	<title> Panama-Tec "Innovacion al alcance de tus manos" "Arduino Panama"</title>
	<link rel="stylesheet" type="text/css" href="css_panama_tec.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Roboto" rel="stylesheet">
	</head>
<body > 
<div class="TODO" style="font-family: 'Roboto', sans-serif;">
<div class="nav_sup" style="background-color: rgb(43,108,163); height: 100px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);" > 
	<div class="container">	
		<div class="DIV_IZQ_SUP container" style="float:left" >
		<img src="" style = "width:50px; height:50px; margin:25px 05px 25px 00px;">
		<img src="" style = "width:50px; height:50px; margin:05px 00px 00px 00px;""> </div>
		<div class="DIV_DER_SUP" style = "float:right; margin:44.5px; color:white;" > LOGIN</div>
	</div>
	</div>
<div class ="nav_menu" style="height:50px; background-color:rgb(106,178,238); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;" >
		
		<div class="container " style="font-family: 'Roboto', sans-serif;">
			<?php 
				$x = array("HOME", "TIENDA", "TUTORIALES", "FOTOS Y VIDEO", "SOFTWARE", "REDES", "CURSOS", "PROYECTOS");
				$x_1 = 0;
				do{
					echo "<div style ='vertical-align:center; display:inline-block; margin-top:15px; font-size: 15px; margin-right:30px; color:white;'>$x[$x_1]</ul></div>";
					$x_1++;
				}while($x_1 <= 7)
			?>	
		</div></div>
<div class = "contenido" style="background-color:rgb(255,255,255);">
	<div class="container">
		<div class="imagenes">

		<?php 
				$imagenes = 0;
				do{
					echo "<div class='imagenes' ></div>";
					$imagenes++;
				}while($imagenes <= 1)
			?>
		</div>
	</div>
</div>
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2014 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
	</footer>
	</div>
	</body>
</html>