<?php

    class ProfessoresController
    {
        private $banco;

        public function __construct($banco)
        {
            $this->banco = $banco;
        }

        public function index()
        {
            $resultado = $this->banco->selectAll("professor");

            return $resultado;
        }

        public function store()
        {
          
        }
         
        public function update()
        {
          
        }

    }