<?php 
 
    echo 'Hello World';

  function foo() {
    echo 'foo';
  }

  class Teste {
      public string $nome = 'Ana';
      public string $email = 'ana@gmail.com';
     

      public function __construct() {
        echo __METHOD__;
      }

      public function bar()
      {
        echo __METHOD__;
      }
  }
  echo "<lengo>";
  foo();

  echo "<br>";
  (new Teste)->bar();
  echo "<br>";

  $teste = new Teste;

  var_dump($teste);

  $teste->bar();
?>