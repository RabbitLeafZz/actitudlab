<!DOCTYPE html>
<html>
	<head><?php include("head.php"); ?>
	<style>
			header nav ul li span.empresa{background-color: #75c263;}
	</style>
	
	<script type="text/javascript">
	function show_and_hide(el,el2,el3)
	{
		showingEl = document.getElementById(el);
		showingEl.style.display = 'block';
		
		hidingEl = document.getElementById(el2);
		hidingEl.style.display = 'none';
		
		hidingEl = document.getElementById(el3);
		hidingEl.style.display = 'none';
	}
	
	function showinfo(el, num_liceos, num_profesores, num_alumnos)
	{
		var liceo = 'liceo-';
		var profesor = 'profesor-';
		var alumno = 'alumno-';
		
		document.getElementById('parrafo-inicial').style.display = 'none';
		document.getElementById(el).style.display = 'block';
		for(i=1; i<=num_liceos;i++){
			if(liceo+i != el)
			  document.getElementById(liceo+i).style.display = 'none';
		}
		for(i=1; i<=num_profesores;i++){
			if(profesor+i != el)
			  document.getElementById(profesor+i).style.display = 'none';
		}
		for(i=1; i<=num_alumnos;i++){
			if(alumno+i != el)
				document.getElementById(alumno+i).style.display = 'none';
		}
	}
	
	</script>

	</head>
	<body>
		<!-- Menu -->
			<?php include("header.php"); ?>
			<!-- Pagina -->
			<div id="empresa" class="secciones" >
					<div id="escuela-contenido" class="contenido">
						<?php include('logo.php'); ?>
						<table>
								<td class="perfiles">
									<a href="#" onclick="show_and_hide('list-liceos','list-profesores','list-alumnos')">
									<div class="info">
										<h1 id="toggle-liceos">Liceos</h1>
										<br>
									</div>
									</a>
								
									<a href="#" onclick="show_and_hide('list-profesores','list-liceos','list-alumnos')">
									<div class="info">
										<h1 id="toggle-profesores">Profesores</h1>
										<br>
									</div>
									</a>
									
									<a href="#" onclick="show_and_hide('list-alumnos','list-liceos','list-profesores')">
									<div class="info">
										<h1 id="toggle-alumnos">Alumnos</h1>
										<br>
									</div>
									</a>
								</td>
								<td class="perfiles-2">
								<div id="list-liceos" style="display:none;">
								<div class="info-liceos" onclick="showinfo('liceo-1',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-1.png' width='50px' height='50px'/>
										<p>Liceo 1 con un nombre bastante largo</p>
									</div>
								</div>
								<div class="info-liceos" onclick="showinfo('liceo-2',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-2.png' width='50px' height='50px'/>
										<p>Liceo 2</p>
									</div>
								</div>
								<div class="info-liceos" onclick="showinfo('liceo-3',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-3.png' width='50px' height='50px'/>
										<p>Liceo 3</p>
									</div>
								</div>
								<div class="info-liceos" onclick="showinfo('liceo-4',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-4.png' width='50px' height='50px'/>
										<p>Liceo 4</p>
									</div>
								</div>
								<div class="info-liceos" onclick="showinfo('liceo-5',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-5.png' width='50px' height='50px'/>
										<p>Liceo 5</p>
									</div>
								</div>
								<div class="info-liceos" onclick="showinfo('liceo-6',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/liceo-6.png' width='50px' height='50px'/>
										<p>Liceo 6</p>
									</div>	
								</div>
								</div>
								
								<div id="list-profesores" style="display:none;">
								<div class="info-profesores" onclick="showinfo('profesor-1',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-1.png' width='50px' height='50px'/>
										<p>Profesor 1 </p>
									</div>
								</div>
								<div class="info-profesores" onclick="showinfo('profesor-2',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-2.png' width='50px' height='50px'/>
										<p>Profesor 2 </p>
									</div>	
								</div>
								<div class="info-profesores" onclick="showinfo('profesor-3',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-3.png' width='50px' height='50px'/>
										<p>Profesor 3 </p>
									</div>	
								</div>
								<div class="info-profesores" onclick="showinfo('profesor-4',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-4.png' width='50px' height='50px'/>
										<p>Profesor 4 </p>
									</div>	
								</div>
								<div class="info-profesores" onclick="showinfo('profesor-5',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-5.png' width='50px' height='50px'/>
										<p>Profesor 5 </p>
									</div>	
								</div>
								<div class="info-profesores" onclick="showinfo('profesor-6',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/profesor-6.png' width='50px' height='50px'/>
										<p>Profesor 6 </p>
									</div>	
								</div>
								</div>
								
								<div id="list-alumnos" style="display:none;">
								<div class="info-alumnos" onclick="showinfo('alumno-1',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-1.png' width='50px' height='50px'/>
										<p>Alumno 1 </p>
									</div>	
								</div>
								<div class="info-alumnos" onclick="showinfo('alumno-2',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-2.png' width='50px' height='50px'/>
										<p>Alumno 2 </p>
									</div>	
								</div>
								<div class="info-alumnos" onclick="showinfo('alumno-3',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-3.png' width='50px' height='50px'/>
										<p>Alumno 3 </p>
									</div>		
								</div>
								<div class="info-alumnos" onclick="showinfo('alumno-4',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-4.png' width='50px' height='50px'/>
										<p>Alumno 4 </p>
									</div>		
								</div>
								<div class="info-alumnos" onclick="showinfo('alumno-5',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-5.png' width='50px' height='50px'/>
										<p>Alumno 5 </p>
									</div>	
								</div>
								<div class="info-alumnos" onclick="showinfo('alumno-6',6,6,6)">
									<div class="perfil">
										<img src='images/metodologia/alumno-6.png' width='50px' height='50px'/>
										<p>Alumno 6 </p>
									</div>	
								</div>
								</div>
								</td>
								
								<td class="perfiles-3">
										<div id="parrafo-inicial">
										El tercer parrafo esta aqui y no dice nada nada nada nada nada nada nada nada nada nada nada nada nada nada nada nada y no se como es la cancion en realidad ?
										</div>
										
										<?php include('info_metodologia.php') ?>
								</td>	
						</table>
					</div>
				</div>
	</body>
</html>