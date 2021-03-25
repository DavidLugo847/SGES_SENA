
<?php require('includes/config.php'); 
$title = 'Members Page';
require('layout/headerinstru.php'); 
?>


<div class="capabilities" id="capabilities">

		<div class="containerOption">
			<h4 class="title-w3"> Opciones de instructor</h4>
			<div class="adminOption">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us leftw3ls">
						<a href="memberpage.php?accion=egresados"><div class="col-xs-8 agile-why-text siml-w3ls">
						<div class="borderText">	
							<h4> Egresados</h4> 
							<p> Agrega, edita o elimina egresados.</p>
						</div> </div></a>
						<div class="col-xs-4 agile-why-text siml-w3ls">
							<div class="wthree_features_grid left hvr-rectangle-out">
							
							<a href="memberpage.php?accion=egresados"><i class="fa icon-user-check" aria-hidden="true"></i>  </a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					

					
					<div class="clearfix"> </div>
				</div>
				
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us rightw3ls">
					<div class="col-xs-4 agile-why-text simr-w3ls">
							<div class="wthree_features_grid right hvr-rectangle-out">
							
							<a href="memberpage.php?accion=gestegresado"><i class="fa icon-files-empty" aria-hidden="true"></i></a>
							</div> 
						</div>
                                                <a href="memberpage.php?accion=gesthojas">
						<div class="col-xs-8 agile-why-text two simr-w3ls">
							<div class="borderText">
						 <h4>Hojas de vida</h4> 
							<p> Verifica, edita o elimina hojas de via.</p>
						</div> </div></a>
						
						<div class="clearfix"> </div>
					</div>
					
						
						<div class="clearfix"> </div>
					</div>
                                    </a>
					
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //capabilities -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<script src="js/responsiveslides.min.js"></script>  

<?php 

require('layout/footer.php'); 
?>
