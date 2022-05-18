<?php
    include "conexao.php";
	$titlePage = 'Modal';
    include "cabecalho.php";
?>
	<div class="container">
		<div class="row">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#laranja">
			  Launch demo modal
			</button>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="laranja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<p>TExto</p>
			<img src="" alt="" />
			<h1>titulo</h1>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
<?php
    include "footer.php";
?>