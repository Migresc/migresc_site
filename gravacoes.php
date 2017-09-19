<?php include 'header.html';?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Gravações</h3>
	</div>
	<div class="panel-body">
		<div class="list-group">
			<div class="row">
				<?php
				 	$jsonFile = fopen("./gravacoes.json", "r") or die("Erro ao ler arquivo de gravacoes");
					$json = fread($jsonFile, filesize("./gravacoes.json"));
					$jsonIt = new RecursiveArrayIterator(
							new RecursiveArrayIterator(json_decode($json, TRUE)),
							RecursiveIteratorIterator::SELF_FIRST);
					foreach($jsonIt as $key => $value){
				?>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <div class="caption">
			        <h3><?php echo($value['titulo']); ?></h3>
			        <p>Pregador: <?php echo($value['pregador']); ?></p>
							<p>Data: <?php echo($value['data']); ?></p>
			        <p><a href="<?php echo($value['url']); ?>" target="_blank" class="btn btn-primary" role="button">Assistir</a></p>
			      </div>
			    </div>
			  </div>
				<?php
					}
					fclose($jsonFile);
				 ?>
		</div>
		</div>
	</div>
</div>
<?php include 'footer.html';?>
