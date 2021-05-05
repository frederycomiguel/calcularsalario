<?php


class Funcionario
{
        private $nome;
        private $cargo;
        private $carreira;

        public calcularSarlario($cargo, $carreira) {
          if($cargo == "desenvolvedor"){
              if($carreira =="fullstack1"){
                  return 2000,00;
              }
              else if ($carreira == "fullstack2"){
                  return 3000,00;
              }
              else {
                  return 4000,00;
              }
          }else if($cargo == "gerente"){
              return 6000,00;
          }
          else{
              var_dump("cargo não encontrado");
              exit;
              return -1;
          }
        }

}