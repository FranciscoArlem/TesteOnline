<?php

session_start();

if(!isset($_SESSION['usuario'])) header("Location: index.php?erro=1");

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Store - Area do candidato </title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   		<link rel="stylesheet" href="css/estilo.css">


		
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-inverse navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>

	          <a class="navbar-brand" href="#"><strong>   <span class="branco">EXD</span> <span class="azul">SOLUTIONS</span></strong> </a>

	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<h4><?=$_SESSION['usuario']?> <span class="glyphicon glyphicon-shopping-cart"></span> </h4>

	    				<hr />

	    				<div class="col-md-6">
	    					QUANTIDADE <br /> 0
	    				</div>
	    				<div class="col-md-6">
	    					VALOR <br /> 0
	    				</div>

	    			</div>
	    		</div>
	    	</div>

	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">

	    				<form id="form_search">
		    				<div class="input-group">
		    					<input type="text" class="form-control" id="txt_search" name="txt_search" placeholder="Deseja fazer uma busca em nosso site?" maxlength="25">
		    					<span class="input-group-btn">
		    						<button class="btn btn-default" id="btn_search" type="button">Search</button>
		    					</span>
		    				</div>
		    			</form>
	    			</div>
	    		</div>

	    		<div id="tweets" class="list-group"></div>	
	    	</div>
	    		
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="#">PAGAMENTO</a></h4>
					</div>
				</div>

			</div>

			<div class="clearfix"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>