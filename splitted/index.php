<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
		<style>
			header nav ul li span.home{background-color: #f5713b;}
		</style>
	</head>
	<body>
		<!-- Menu -->
			<?php include("header.php"); ?>
			<!-- Home -->
				<div id="home" class="secciones" >					
					<div id="home-contenido" class="contenido">
						<?php include('logo.php'); ?>

						<table>
							<tr>
								<td class="twitter">
									<a class="twitter-timeline" href="https://twitter.com/ActitudLab" data-widget-id="289809604878139392">Tweets por @ActitudLab</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


								</td>
								<td class="actualidad">
									<h1>Actualidad</h1>
									Trabajando por la educación técnico profesional.
								</td>
								<td class="videos">
									<iframe src="http://www.youtube.com/embed/9oYLmiWO-VU?wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen></iframe> 
									<br>
									<div class="caja-mas">
										<a href="videos" class="masvideos" rel="pop-up">VER MAS...</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="noticias" colspan="2">
									<h1>Noticias</h1>

									<a target="_blank" href="https://www.inacap.cl/tportalvp/sala-de-prensa/contenido/noticias/inacap-iquique-realiza-2do-seminario-de-emprendimiento-e-innovacion-un-desafio-regional">INACAP Iquique realiza 2do seminario de emprendimiento e innovación un desafío regional...</a><br>

									<a target="_blank" href="http://radiopolar.com/noticia_63642.html">Sebastián Errázuriz llama a los jovenes a emprender e innovar...</a><br>

									<a target="_blank" href="http://elpinguino.com/noticias/129115/INACAP-realiz-Ciclo-de-Charlas-de-Emprendimiento-con-masiva-concurren">INACAP realizó ciclo de charlas de emprendimiento con masiva concurrencia...</a><br>

									<a target="_blank" href="http://elpinguino.com/noticias/128962/Realizaran-charla-sobre-emprendimiento-en-INACAP">Realizaran charla sobre emprendimiento en INACAP...</a><br>
								</td>
								<td class="marcas">
									<h1>Marcas que nos apoyan</h1>
									<div class="fila-1">
										<img src="images/home/img/1.png" />
										<img src="images/home/img/2.png" />
										<img src="images/home/img/3.png" />
										<img src="images/home/img/4.png" />
									</div>
									<div class="fila-2">
										<img src="images/home/img/5.png" />
										<img src="images/home/img/6.png" />
										<img src="images/home/img/7.png" />
										<img src="images/home/img/8.png" />
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<?php include('footer.php'); ?>
	</body>
</html>