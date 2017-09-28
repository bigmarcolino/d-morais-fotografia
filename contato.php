<?php session_start();?>

<!DOCTYPE html>

<html lang="pt-BR" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#fcac45"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>D Morais Fotografia | Contato</title>
		<meta name="description" content="As melhores fotos do seu evento." />
		<meta name="keywords" content="d morais fotografia, fotografia rio de janeiro, sao joao de meriti, fotos, casamentos, 15 anos, aniversario, animais, daiane morais, d morais" />
		<meta name="author" content="Marcus Vinícius Ibraim" />
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/remodal.css">
  		<link rel="stylesheet" type="text/css" href="css/remodal-default-theme.css">
		<script src="js/modernizr.custom.js"></script>
	</head>

	<body>
		<header>
			<!-- <div class="cd-logo"><a href="index.html"><img src="img/cd-logo.svg" alt="Logo"></a></div> -->
			<nav class="cd-main-nav-wrapper">
				<ul class="cd-main-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="biografia.html">Biografia</a></li>
					<li><a href="portfolio.html">Portfólio</a></li>
					<li><a href="contato.php" class="active">Contato</a></li>
				</ul> 
			</nav> 
			<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
		</header>

		<div class="cd-main-content">
			<section id="section4" class="bootstrap">
			    <form class="container v-center" method="POST" action="controller/enviar-email.php" accept-charset="utf-8">
			        <div class="row">
			            <div class="col-md-12">
			                <h2 class="text-center contato">Prazer em lhe conhecer!</h2>
			                <hr>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-sm-9">
			                <div class="row form-group">
			                    <div class="col-sm-5">
			                        <input type="text" class="form-control" id="firstName" name="nome" placeholder="Nome" required="">
			                    </div>

			                    <div class="col-sm-5">
			                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col-sm-10">
			                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required="">
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col-sm-10">
			                        <textarea type="homepage" class="form-control" placeholder="Mensagem" name="mensagem" rows="6" required=""></textarea>
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col-sm-10">
			                        <button class="btn btn-default btn-lg pull-right">Enviar</button>
			                    </div>
			                </div>
			                <div class="row form-group">
			                	<div class="col-sm-10 aviso-contato">
			                		*É obrigatório o preenchimento de todos os campos. Antes de enviar, verifique se seu email foi digitado corretamente, para que possamos responder sua mensagem.
			                	</div>
			                </div>
			            </div>
			            <div class="col-sm-3 pull-right">
			                <address>
			              		<strong>D Morais | Fotografia</strong><br>
			              		São João de Meriti, RJ<br>
			              		+55 (21) 96801-9695
			              		<span class="emailcontato">dmorais.fotografia@gmail.com</span>
			            	</address>
			            	<address>
			              		<a href="https://www.facebook.com/daianemoraisfotografia" target="_blank"><img src="img/fb.png" alt="facebook d morais fotografia"></a>
			              		<a href="https://instagram.com/dmoraisfotografia" target="_blank"><img class="logo-insta" src="img/insta.png" alt="instagram d morais fotografia"></a>
			            	</address>
			            	<address>
			              		Contate-nos e solicite seu orçamento
			            	</address>
			            </div>
			        </div>
			    </form>
			</section>

			<div class="remodal" data-remodal-id="modal1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
				<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
		  		<div>
		  			<img src="img/ok.png" alt="ok">
		    		<p id="modal1Desc" style="margin-top:13px;text-transform:none;font-size: 1.4em">
		    			Mensagem enviada com sucesso
		    		</p>
		  		</div>
			</div>

			<div class="remodal" data-remodal-id="modal2" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
				<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
		  		<div>
		  			<img src="img/erro.png" alt="erro">
		    		<p id="modal1Desc" style="margin-top:13px; text-transform:none;font-size: 1.4em;">
		    			Não foi possível enviar a mensagem. Talvez algum campo não tenha sido preenchido corretamente ou há algum problema no sistema. Contate-nos através do email ou da página do Facebook
		    		</p>
		  		</div>
			</div>

			<a href="#modal1" id="modalOk" style="display:none">Modal 1</a><br>
			<a href="#modal2" id="modalErro" style="display:none">Modal 2</a><br>

			<div class="desenvolvedor">Desenvolvido por <a href="https://www.facebook.com/marcusibraim">Marcus Vinícius Ibraim</a></div>
		</div>

		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script>$("header").css("background", "#33414a");</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/remodal.js"></script>
		<script src="js/jquery.simulate.js"></script>

		<?php
			if(isset($_SESSION['status']) && $_SESSION['status'] == "sucesso"){ ?>
				<script>
					status = "<?php echo $_SESSION['status']; ?>";

					if(status == "sucesso"){
						$( "#modalOk" ).simulate( "click" );
					}
				</script> <?php
	  		}
	  		else if(isset($_SESSION['status']) && $_SESSION['status'] == "falha"){ ?>
				<script>
					status = "<?php echo $_SESSION['status']; ?>";

					if(status == "falha"){
						$( "#modalErro" ).simulate( "click" );
					}
				</script> <?php
	  		}

	  		session_destroy();
		?>
	</body>
</html>