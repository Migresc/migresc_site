<?php include 'header.html';?>
<?php include_once("analyticstracking.php") ?>

<script type="text/javascript">
	$(document).ready(function() {

		$.ajax({
		      url: 'aniversariantes.json',
		      dataType: "json",
		      success: function (data) {
		    	    var lista = undefined;
		            lista = data.membro;
		            lista = lista.filter(function(e){
						return new Date(e.dtNascimento).getUTCMonth() == new Date().getUTCMonth();
		            });
		            lista.sort(function (e1,e2){
			            return new Date(e1.dtNascimento).getUTCDate() - new Date(e2.dtNascimento).getUTCDate();
		            });
		            $.each(lista,function(i,membro){
		    			var linha = "<tr><td>" + membro.nome + "</td><td>" + (new Date(membro.dtNascimento).getUTCDate()) + "</td></tr>";
			    		$(linha).appendTo("#tableBodyNascimento");
		    		});
		      }
			}
		);

		$.ajax({
		      url: 'aniversariantesCasamento.json',
		      dataType: "json",
		      success: function (data) {
		    	    var lista = undefined;
		            lista = data.membro;
		            lista = lista.filter(function(e){
						return new Date(e.data).getUTCMonth() == new Date().getMonth();
		            });
		            lista.sort(function (e1,e2){
			            return new Date(e1.data).getUTCDate() - new Date(e2.data).getUTCDate();
		            });
		            $.each(lista,function(i,membro){
		    			var linha = "<tr><td>" + membro.casal + "</td><td>" + (new Date(membro.data).getUTCDate()) + "</td></tr>";
			    		$(linha).appendTo("#tableBodyCasamento");
		    		});
		      }
			}
		);


	});
</script>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Aniversariantes de Nascimento</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<th>Nome</th>
				<th>Data de Nascimento</th>
			</thead>
			<tbody id="tableBodyNascimento">

			</tbody>
		</table>
	</div>
</div>
<br>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Aniversariantes de Casamento</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<th>Casal</th>
				<th>Data</th>
			</thead>
			<tbody id="tableBodyCasamento">

			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.html';?>
