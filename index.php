<?php  
   include_once "func.php";
   include_once "Banco.php";
   include_once "php/routes/Router.php";
   include_once "php/controllers/ProfessoresController.php";

   $url = "http://localhost/Feira-tec/professores";
   #$url = "http://localhost/Feira-tec/professores/create";
   #$url = "http://localhost/Feira-tec/professores/edit/123";
   #$url = "http://localhost/Feira-tec/professores/edit/param0/param1/param2/param3/param4/param5";

   $banco = new Banco();
   

   //Config de Router
   $router = new Router();
   $camadas = $router->converterUrlCamadas($url);
   echo "URL:". $url . "<br>";
   
   //Get Names keys
   $controllerName = $camadas["controller"];
   $actionName = $camadas["action"];

   //Executa Action
   $controller = new $controllerName($banco);
   $arrayJson = $controller->$actionName();
   
   echo "JSON:" . json_encode($arrayJson);
   dd($arrayJson);

   $arrayEsperado = [
      "protocol" => "http",
      "host" => "localhost",
      "path" => "Feira-tec",
      "controller" => "professores",
      "action" => "index",
      "params" => [
         "param0",
         "param1",
         "param2",
      ]
   ];

   dd($camadas);