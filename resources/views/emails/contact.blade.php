<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roadweb</title>
</head>
<body>
	<div style="width:100%;height:auto;background-color:#EBEBE6;font-size:14px;">
		<div style="display:inline-block;vertical-align:top;">
			<img src="http://i.imgur.com/6PI6XdZ.png" alt="logo roadweb" style="width:100px;margin:20px;" />
		</div>
		<div style="display:inline-block;vertical-align:top;margin:20px 20px 0 20px;font-size:18px;">
			<p><span style="font-weight:bold;font-size:22px;">Hello Roadweb !</span> <br /> 
				Vous avez reçu un message de <span style="color:#BF382A;font-size:20px;font-weight:bold;">{{ $firstname .' '. $lastname }}</span> :
			</p>
		</div>
		<div style="margin:0 20px 20px 20px;height:1px;background-color:#c7c7c7;"></div>
		<p style="margin-left:20px;"><span style="font-weight:bold;">Objet du Message :</span> {{ $objet }}</p>
		<p style="margin-left:20px;"><span style="font-weight:bold;">Corps du Message :</span></p>
		<p style="background-color:white;padding:20px;margin:20px;">{{ $bodyMessage }}</p>

		<p style="margin-left:20px;margin-bottom:20px;"><span style="font-weight:bold;">Url de la page concernée</span> (s'il y a lieu): {{ $url }}</p>
	</div>

</body>
</html>



