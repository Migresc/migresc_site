<!-- Trigger the modal with a button -->
<button type="button" id="btnPegi" style='display:none' class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Projeto PEGI</h4>
      </div>
      <div class="modal-body">
        <p>Você sabe o que é o projeto PEGI?</p>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k6zCLs1_LnI" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id='btnFechar' class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
<script>
  document.getElementById("btnFechar").onclick = function () {
        location.href = document.location.href + "/index.php?noVideo=true";
    };
  url = document.location.href;
  if(url.search('noVideo') == -1 ){
      document.getElementById('btnPegi').click();
  }
</script>
