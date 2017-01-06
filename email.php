<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Curuba Inc | Contact</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.ico">
  <link rel="apple-touch-icon-precomposed" href="img/logo/logo@2x.png" />
  <meta name="description" content="Empresa del ambito tecnologico especializada en desarrolladoro de software, aplicaciones moviles, aplicaciones web, Marketing digital, SMO, SEO, email marketing, online ADS, infraestructuras tecnológicas, tiendas online.">
  <meta name="author" content="Curuba Inc">
  <meta name="keywords" content="software, web, aplicaciones moviles, plataformas web, desarrollo de software, programación, marketing digital, onlide ads, smo, seo, infraestruturas tecnológicas, email marketing"/>
  <meta http-equiv="refresh" content="4; url=http://curuba.co/"/>
  <style>
		body{
			margin: 0;
			padding: 0;
			font-family: 'Catamaran', sans-serif;
		}
		.container{
			width: 100%;
			height: 100vh;
			background-color: #fafafa;
		}
		.container-message{
			width: 90%;
			max-width: 650px;
			height: auto;
			text-align: center;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background-color: #fafafa;
			box-shadow: 0 0 8px 1px rgba(0,0,0,0.1);
			padding: 15px 0 22px 0;
			border-radius: 3px;
		}
		.container-message--img img{
			width: 160px;
			height: 80px;
		}
		.container-message--text h2{
			color: #76B041;
			font-size: 24px;
			margin: 0;
		}
		.container-message--text p{
			margin: 0;
			color: #88A09E;
		}
		@media (min-width: 768px) {
			.container-message{
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				display: flex;
				justify-content: center;
				padding: 20px 0 27px 0;
			}
			.container-message--img{
				width: 35%;
				border-right: 1px solid #ECEBE4;
			}
			.container-message--img img{
				width: 190px;
				height: 95px;
			}
			.container-message--text{
				width: 63%;
				padding: 0 4px;
			}
			.container-message--text h2{
				font-size: 27px;
			}
			.container-message--text p{
				margin-top: 5px;
				line-height: 20px;
			}
		}
	</style>
  <script language="JavaScript">
    javascript:window.history.forward(1); //Esto es para cuando le pulse al botón de Atrás
    // javascript:window.history.back(1); //Esto para cuando le pulse al botón de Adelante
  </script>
</head>
<body>
  <?php

    // Destinatario
    $para  = 'curuba@curuba.co';

    // título
    $título = 'Curuba Inc';

    // mensaje
    $mensaje .= '
    <html>
    <head>
      <title>Curuba Inc. | Contacto web</title>
    </head>
    <body>
      <div style="padding: 1em 0 0 0; text-align: justify;">
        <p>Hola Sres.</p>
        <h2>Curuba Inc.</h2>
        <div>
          <h3 style="color: #546E7A;">El sr(a). <span style="color: #263238;">'. strip_tags($_POST['names']) .'</span> cuyo correo electrónico es <span style="color: #263238;">'. strip_tags($_POST['email']) .'</span>  ha escrito el siguiente mensaje.</h3>
          <h3 style="font-weight: 700; color= #263238;">'. strip_tags($_POST['message']) .'</h3>
        </div>

      </div>

    </body>
    </html>';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: curuba@curuba.co' . "\r\n";
    $cabeceras .= 'From: Contacto Web - Curuba Inc curuba@curuba.co' . "\r\n";
    $cabeceras .= 'Cc:' . "\r\n";
    $cabeceras .= 'Bcc:' . "\r\n";

    // Enviarlo
    mail($para, $título, $mensaje, $cabeceras);

    // if ($_POST['submit']) {
    //   if (mail ($to, $subject, $body, $from)) { 
    //     echo '<p>Thank you for your email!</p>';
    //   } else { 
    //     echo '<div class="message-sucessfull--content">
    //              <div>
    //                 <div style="text-align: center;">
    //                     <h3 style="color: #013f42; margin-top: 0;">Gestión Proactiva | Consultores HSEQ</h3>
    //                 </div>
    //                 <h1>Gracias por escribirnos</h1>
    //                 <p>La información ha sido verificada y en poco tiempo le brindaremos respuesta a su mensaje.</p>
    //              </div>   
    //           </div>';
    //   }
    // }
  ?>

  <div class="container">
		<div class="container-message">
			<div class="container-message--img">
				<img src="img/logo/logo-curuba.png" alt="Logo Curuba Inc S.A.S.">
			</div>
			<div class="container-message--text">
				<h2>¡ En hora buena !</h2>
				<p>Hemos recibido su mensaje y pronto le brindaremos respuesta al mismo.</p>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		WebFontConfig = {
		google: { families: [ 'Ubuntu:700', 'Catamaran'] } };
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

</body>
</html>


