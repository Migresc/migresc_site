<?php include 'header.html';?>
<script type="text/javascript">
	$(document).ready(function() {
		
		$.ajax({
		      url: 'aniversariantes.json',
		      dataType: "json",
		      success: function (data) {
		    	    var lista = undefined;
		            lista = data.membro;
		            lista = lista.filter(function(e){
						return new Date(e.dtNascimento).getMonth() == new Date().getMonth(); 
		            });
		            lista.sort(function (e1,e2){
			            return new Date(e1.dtNascimento).getDate() - new Date(e2.dtNascimento).getDate();
		            });
		            $.each(lista,function(i,membro){		    			
		    			var linha = "<tr><td>" + membro.nome + "</td><td>" + (new Date(membro.dtNascimento).getDate() + 1) + "</td></tr>";
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
						return new Date(e.data).getMonth() == new Date().getMonth(); 
		            });
		            lista.sort(function (e1,e2){
			            return new Date(e1.data).getDate() - new Date(e2.data).getDate();
		            });
		            $.each(lista,function(i,membro){		    			
		    			var linha = "<tr><td>" + membro.casal + "</td><td>" + new Date(membro.data).getDate() + "</td></tr>";
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
</body>
</html>
