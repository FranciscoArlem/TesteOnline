<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Home</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/estilo.css">

	
		<script>
			$(document).ready( function(){

				//verifica se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click( function (){

					var campo_vazio = false;

					if( $('#campo_usuario').val() == '' ){
						$('#campo_usuario').css({'border-color' : '#A94442'});
						campo_vazio = true;
					}else {
						$('#campo_usuario').css({'border-color' : '#ccc'});
					}

					if( $('#campo_senha').val() == '' ){
						$('#campo_senha').css({'border-color' : '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color' : '#ccc'});
					}

					if(campo_vazio) return false;

				});


			});					
		</script>
	</head>

	<body>

		<!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          
          <!-- logo do site -->
            <a class="navbar-brand" href="#"><strong>   <span class="branco">EXD</span>
                                                        <span class="azul">SOLUTIONS</span></strong> </a>

	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logar e Comprar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								<?php
									if($erro == 1){
										echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
									}

								?>
							</form>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div> <!--/.nav-collapse -->
	      </div>
	    </nav> <!-- Aqui termina a barra de navegação do meu menu.-->

	      <!-- Main component for a primary marketing message or call to action -->

	      <div class="jumbotron"> <!-- Final da div jumbotron com a cor acinzentada -->
        <div class="container">
            <br />
            <div class="row">

                <div class="col-sm-12">
                    <h1><strong> EXD <span class="azul">STORE</span></strong></h1>
                        <p><br>
                        Sejam bem-vindos a nossa plataforma de negociação de mercadorias.<br>
                        cadastre-se e tenha faça proveito dessa poderosa ferramenta. <br>
                        A internet, cada dia mais democrática, tem se mostrado uma boa opção para as pessoas que procuram produtos e serviços de maneira rápida, segura e sem sair de casa.
                        Aqui você pode comprar ou vender eletrônicos, roupas, imóveis e muito mais.
                        </p>
                   
                
                </div>

            </div> <!-- Fim da row coluna-->
        </div> <!-- Fim do conteiner iniciado na linha 109-->

	      </div> <!-- Final da div jumbotron com a cor acinzentada -->


	          <div class="container">
        <!-- container -->
        <!-- Criação de colunas -->
        <div class="row">

            <div class="col-md-4">
                <h2><strong>SOBRE A EMPRESA</strong></h2>
                <p>
                    Com grande experiência em soluções de Tecnologia da Informação, a Exd Solutions é uma empresa especializada no
                    desenvolvimento e comercialização de soluções para venda e troca de produtos em geral na internet.
                </p><br>
                <img src="img/quem.png" class="img-responsive rouded"> 
            </div>

            <div class="col-md-4">
                <h2><strong>PRODUTOS</strong></h2>
                <p>
                    Aqui voce pode  fazeer a venda ou troca de  vestuários, venda de veículos, Eletrônicos, venda de celulares, e
                    venda de móveis e muito mais, desapega! 
                </p> 
                <br>
                <span><img src="img/prod0.png" class="img-responsive rouded"> </span>

                
            </div>

            <div class="col-md-4">
                <h2><strong> OUTROS SERVIÇOS</strong></h2>
                <p>
                    - Sites institucionais
                    <br />- Lojas virtuais
                    <br />- Sistemas Online
                    <br />- Sites para celulares
                </p><br>
                <!--<p><a class="btn btn-default" href="https://www.facebook.com/ExdSolutions/" target="blank"> img </a></p> -->
                <img src="img/serv.png" class="img-responsive rouded"> 
            </div>

        </div>

        <hr>
    </div> <!-- /container -->

        <div>

        <footer>
        
            <div class="container">
            <ul class="nav navbar-nav navbar-right">
            <button class="btn btn-link"><a href="https://www.facebook.com/ExdSolutions/" target="blank"><img src="img\png\facebook.png" class="img-responsive rouded"> </a></button>

            <button class="btn btn-link"><a href="https://www.facebook.com/ExdSolutions/" target="blank"><img src="img\png\twitter.png" class="img-responsive rouded"> </a></button>

            <button class="btn btn-link"><a href="https://www.facebook.com/ExdSolutions/" target="blank"><img src="img\png\youtube.png" class="img-responsive rouded"> </a></button>
            </ul>
            </div>
       
        </footer>
    </div>



		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>