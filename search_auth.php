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
                <li class = "active"><a href= "search.php" ><i class="fa fa-search" aria-hidden="true"> Поиск </i></a></li>
                <li ><a href= "search.php"><i class="fa fa-star" aria-hidden="true">Избранное</i></a></li>
                <li><a href= "search.html"><i class="fa fa-user-circle" aria-hidden="true">Лидия Захарова</i></a></li>




            </ul>
        </div>
    </div>

</div>

<div class = "container search_container_bg">
    <div class = "jumbotron text-center topsearch">
        <label for = "searchword" class = "col-sm-2 control-label">Искать</label>
        <div class = "col-sm-10">
            <form method ="post" action="">
                <div class = "col-sm-10"><input type = "text" class = "form-control" id = "searchword" placeholder = "Ad Hoc Networks" name = "word"></div>
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
            <a href="http://www.cs.kubsu.ru/ru/about.html"><i class = "fa fa-external-link"></i></a>


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


    printf( "<div class = \"container search_res_bg\" style = \"padding-top:34px;,padding-bottom: 90px;\"><div class = \"col-sm-12\" style = \"padding-bottom:90px;\"><h5><strong>Вы искали:</strong> %s</h5>",$Phrase);


    foreach ($xml->result as $res)
    {
        printf("<div class =\"col-sm-8\"  style = \"margin-left:4px;;border: 1px solid #ccc; padding-bottom:5px;border-radius: 4px; color: black;box-shadow: 2px 4px 16px #888888;\"> <h4><strong><a href=%s >%s</a></strong></h4></h4><h4>Релевантность :%s</h4>
<a href=\"%s\" class=\"btn btn-white btn-default active\">
        <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i></a>
        <a href=\"#\" class=\"btn btn-white btn-default active\">
        <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i></a>
        <a href=\"#\" class=\"btn btn-white btn-default active\">
        <i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
        \n</div>",$res->link,$res->t,substr($res->score,0,5), $res->link);
    }
    echo '</div></div>';

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
