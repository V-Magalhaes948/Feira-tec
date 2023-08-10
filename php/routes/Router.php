<?php
    
    class Router 
    {
        public function converterUrlCamadas($url)
        {
            $partesRotas = explode("/", $url);

            $arrayCamadas = [
                "protocol" => str_replace(":", "", $partesRotas[0]),
                "verb" => $_SERVER['REQUEST_METHOD'],
                "host" => $partesRotas[2],
                "path" => $partesRotas[3],
                "controller" => $partesRotas[4]."Controller",
                "action" => $this->getAction($partesRotas),
                "params" => $this->getParams($partesRotas)
            ];

            return $arrayCamadas;
        }

        private function getAction($partesRotas)
        {
            if (isset($partesRotas[5]) == false) {
                return "index";
            }
            
            return $partesRotas[5];
        }

        private function getParams($partesRotas)
        {
            if (isset($partesRotas[6]) == false) {
                return [];
            }

            return array_slice($partesRotas, 6);
        }
    }