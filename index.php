
 <?php
    // Dati aziendali
    $azienda = "Edoardo Tallone, psicologo.";
    $meta_description = "Edoardo Tallone, psicologo.";
    $indirizzo = "Via Ospedale, 59 - 12044 Centallo (CN)";
    $telefono = "333 919 4203";
    $email = "info@studiokinema.it";

    // Contenuti
    $abstract = "Edoardo Tallone";
    $testo_piccolo = false;

    // Grafica
    // Meglio se l'immagine di sfondo è 1920 x 1080
    $path_immagine_di_sfondo = "background.jpg";
    $colore_di_sfondo = "#821A01";

    $path_logo = "logo.jpg";

 ?>
 
<!DOCTYPE HTML>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?= $azienda ?></title>
    <meta name="description" content="<?= $meta_description ?>" />
    <meta name="author" content="Eicon srl"/>
    
	<link rel="icon" href="favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

    <style>
        *,*:before,*:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: center;
            color: #555;
        }

        b{
            font-weight:700;
        }

        img {
            max-width: 250px;
            height: auto;
            border: 0;
            image-rendering: -webkit-optimize-contrast;
        }     
        
        <?php
            if($testo_piccolo):
        ?>

        h1{
            font-weight: 300;
            font-size: 24px;
            line-height: 28px;
            letter-spacing: -1px;
            margin: 25px 0;
        }        

        <?php
            else:
        ?>

        h1{
            font-weight: 300;
            font-size: 36px;
            line-height: 36px;
            letter-spacing: -2px;
            margin: 30px 0;
        }        
        
        <?php
            endif;
        ?>        

        a {
            color: <?= $colore_di_sfondo ?>;
            transition: .2s;
            outline:0;
            cursor:pointer;
        }        

        a:hover{color:#aaa}
        
        .coming-wrapper{
            background:<?= $colore_di_sfondo ?> url(<?= $path_immagine_di_sfondo ?>);      
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        } 
        
        .coming-box {
            background-color: #fff;
            border-radius: 3px;
            padding: 40px;
            max-width: 600px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        
        .btn{
            display: inline-flex;
            align-items: center;
            font-family: inherit;
            height: 42px;
            font-size: 17px;
            text-transform: uppercase;
            padding: 0 36px;
            text-align: center;
            text-decoration: none;
            background-color: <?= $colore_di_sfondo ?>;
            color: #fff;
            border-radius: 999px;
            transition: .2s;
        }      

        .btn:hover{
		    background: #333;
		    color: #fff;		
	    }	
    </style>
	
</head>
<body>
	
	<div class="coming-wrapper">
		<div id="login">  
			<div class="coming-box">
                <img src="<?= $path_logo ?>" alt="<?= $azienda ?>">

                <h1><?= $abstract ?></h1>

                <b>PER INFORMAZIONI:</b><br>
                <?= $indirizzo ?><br>
                Tel: <a href="tel:<?= $telefono ?>"><?= $telefono ?></a>
                <br><br>
                <a class="btn" href="mailto:<?= $email ?>">SCRIVICI</a>
                
			</div>
		</div>
	</div>
		
</body>
 	
</html>