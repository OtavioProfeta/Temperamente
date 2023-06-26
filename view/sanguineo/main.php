<?php include_once("../includes_secoes/topo.php"); ?>
<?php include_once ("../../controller/verurl.php"); ?>

	<section>
		<article>
			<?php
				$red = new verURL();
				$red->trocarUrl(@$_GET['secao']);
			?>
		</article>
	</section>  	

<?php include_once("../includes_secoes/rodape.php"); ?>
	  
