<!DOCTYPE html>
<html>
	<head>
	<?php include("head.php"); ?>
	<style>
			header nav ul li span.contacto{background-color: #75c263;}
	</style>
	</head>
	<body>
		<!-- Menu -->
			<?php include("header.php"); ?>
			<!-- Pagina -->
				<div id="contacto" class="secciones" >
					<div id="contacto-contenido" class="contenido">
					<?php include('logo.php'); ?>
						<table>
							<tr>
								<td class="contacto" rowspan="2">	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur, ante non iaculis suscipit, massa tortor dictum massa, mattis iaculis massa odio sit amet ipsum. Integer posuere enim ac felis feugiat auctor. Ut urna dui, mollis hendrerit fermentum non, lacinia non enim. Vestibulum lacus risus, tempor vel egestas at, laoreet id tortor. Cras augue sapien, cursus in facilisis id, bibendum a enim. Curabitur semper ligula et ligula aliquet scelerisque. Nunc quis aliquet sem. Duis a rhoncus enim. Integer lacinia, mi.</td>
								<td class="formulario">
									    <form action="mailto:contacto@actitudlab.com" method="post" enctype="text/plain">
										<table  class="formulario_table">
										<tr>
										<td>
										<label>Nombre </label>
										</td>
										<td>
										 <input class="FormStyle" type="text" name="nombre" id="name" placeholder="Tu nombre" required="true" />
										 </td>
										 </tr>
										 <tr>
										<td>
										 <label>Email </label>
										 </td>
										<td>
										<input class="FormStyle" type="email" name="email" id="email" placeholder="tucorreo@mail.com" required="true" />
										</td>
										</tr>
										<tr>
										<td>
										<label>Comentario</label>
										</td>
										<td>
										<textarea class="FormStyle" name="comentario" cols="30" wrap="virtual" rows="4"></textarea>
										</td>
										</tr>
										<tr>
										<td>
										<input class="FormStyle" type="submit" value="Enviar" />
										</td>
										<td>
										<input class="FormStyle" type="reset" value="Limpiar" />
										</td>
										</tr>
										</table>
									</form>
																
								</td> 
							</tr>
							<tr>
								<td class="social"> Tambien encuentranos en: 
								<div class="redes-so">
																<a href="https://www.facebook.com/ActitudLab" target="_blanck" ><img src="images/home/facebook.png" /></a>
																<a href="https://twitter.com/ActitudLab" target="_blanck" ><img src="images/home/twitter.png" /></a>
																<a href="http://www.linkedin.com/company/actitud-lab" target="_blanck" ><img src="images/home/linkedin.png" /></a>
																<a href="#" target="_blanck" ><img src="images/home/google.png" /></a>
																<a href="#" target="_blanck" ><img src="images/home/youtube.png" /></a>
														</div>
								</td>
															

								
							</tr>
						</table>
					</div>
				</div>
				<?php include('footer.php'); ?>
	</body>
</html>