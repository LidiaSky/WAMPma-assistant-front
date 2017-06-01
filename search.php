<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Поиск статей</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/customized.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class=" navbar navbar-default navbar-fixed-top" role = "navigation">
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target=".navbar-collapse">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "index.html">Мультиагентный ассистент студента</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class = "nav navbar-nav navbar-right">
                <li><a href= "#">Поиск</a></li>
                <li><a href= "#">Войти </a></li>

                <li><a href= "search.html">Регистрация</a></li>
            </ul>
        </div>
    </div>

</div>

<div class = "container landing_container_bg">
    <div class = "jumbotron text-center opacity1 ">
      <label for = "searchword" class = "col-sm-2 control-label">Искать</label>
        <div class = "col-sm-10">
			<form method ="post" action="">
            <input type = "text" class = "form-control" id = "searchword" placeholder = "Computer Science" name = "word">
			<input type = "submit" value = "Поиск" class = "btn btn-primary" action = "sresults.php"/>
			</form>
        </div>



    </div>

</div>
<div class = "navbar navbar-inverse navbar-fixed-bottom" role="navigetion">
    <div class = "container">
        <div class = "navbar-text pull-left">
            <p> 2017 Кафедра вычислительных технологий КубГУ</p>
        </div>
        <div class = "navbar-text pull-right">
            <a href="#"><i class = "fa fa-facebook-square"></i></a>
            <a href="#"><i class = "fa fa-arrow-right" aria-hidden="true"></i></a>

        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$Phrase = $_POST["word"];
		$context = stream_context_create(array('http' => array(
		    'method' => "POST",  
		    'header' => "Content-Type: text/xml",
		    'content' => CreateXMLRPC("RobotLauncher.Search", $Phrase)
		)));
		try{
			$file = file_get_contents("http://127.0.0.1:4444/xmlrpc", false, $context);
		}
		catch(Exception $e){
			throw new Exception ('Ошибка сервера');
		}
		
		//print($file);
		$respXml = new SimpleXMLElement($file);
		$xml = new SimpleXMLElement($respXml->xpath("//value")[0]);
		echo '<table>';

		foreach ($xml->result as $res)
		{
			printf("<tr><td>%s</td><td><a href=\"%s\">Перейти</a></td></tr>\n",$res->t, $res->link);
		}	
		echo '</table>';
	}
	
	// Р Р°Р· РЅР°Рј Р·Р°РїСЂРµС‰РµРЅРѕ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ РіРѕС‚РѕРІС‹Р№ XML-RPC - СЃРґРµР»Р°РµРј СЃРІРѕР№!
	function CreateXMLRPC($ClassName, $SearchWord)
	{
		$request = new SimpleXMLElement("<methodCall/>");
		$request->addChild("methodName",$ClassName);
		$params = $request->addChild("params");
		$param = $params->addChild("param");
		$value = $param->addChild("value");
		$value->addChild("string",$SearchWord);
		return $request->asXML();
	}
	
?>
</body>
