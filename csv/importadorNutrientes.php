<?php


ini_set('display_errors', '1');

	class Conexao{

		private static $host;
		private static $user;
		private static $pass;
		private static $DB;
		private static $mysqli;
		private static $sql;
		public  static $instance;
		public  static $variavel;

		public function __construct(){
			// Item para ocultar os erros...
			//    MOTIVO: O xampp é bem sentimental em questões de variáveis...
			//    Ele dá erro se não for declarada uma variável ou um campo de
			//    um array mesmo se utilizado em IF para verificar se a mesma é
			//    nula...
			// Se quiser mostrar os erros, é só alterar para 1...
			ini_set('display_errors', '1');
			//Item para definir o fuso horário que estamos...
			date_default_timezone_set("America/Sao_Paulo");
		}

		public function setHost($host){
			self::$host = $host;
		}

		public function setLogin($user){
			self::$user = $user;
		}

		public function setSenha($pass){
			self::$pass = $pass;
		}

		public function setDB($DB){
			self::$DB = $DB;
		}

		public function getInstance(){
			$host = "mysql:host=".self::$host.";dbname=".self::$DB;
			if (!isset(self::$instance)) {
			    self::$instance = new PDO($host, self::$user, self::$pass,
			    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			    self::$instance->setAttribute(PDO::ATTR_ERRMODE,
			      	PDO::ERRMODE_EXCEPTION);
		    }
		    return self::$instance;
		}



	}

$connect = new Conexao();
$connect->setHost("localhost");
$connect->setLogin("root");
$connect->setSenha("Fundetec1234*");
$connect->setDB("melanciaProject");
$conexao = $connect->getInstance();

// Exemplo de scrip para exibir os nomes obtidos no arquivo CSV de exemplo

$delimitador = ',';
$cerca = '"';

$alimento = array();

// Abrir arquivo para leitura
$f = fopen('Taco_1.csv', 'r');
if ($f) {

    // Ler cabecalho do arquivo

    // Enquanto nao terminar o arquivo
    while (!feof($f)) {
        // Ler uma linha do arquivo
        $linha = fgetcsv($f, 0, $delimitador, $cerca);
        if (!$linha) {
            continue;
        }elseif(is_numeric($linha[0])){
          $i = 0;
					$k = 0;
          foreach ($linha as $val) {
            if($i==0){
              $j = $val;
            }
						if($k != 1){
	            $alimento[$j][$i] = $val;
	            $i++;
						}
						$k++;
          }
        }
    }
    fclose($f);
    // print_r($alimento[1]);

    // exit();
    $indicesNutrientes = array();
    for($i = 1; $i <= 26; $i++){
      $indicesNutrientes[$i] = array($i, $i, $i+1);
    }
    // print_r($indicesNutrientes);
    foreach ($alimento as $valor) {
      $i = 0;
      $j = 1;
      foreach($valor as $val){
        if($i>=1){
          if(isset($valor[($indicesNutrientes[$j][2])])){
            if($valor[($indicesNutrientes[$j][2])] != NULL){
              $sqlNutrienteAlimento = "INSERT INTO nutrienteAlimento (idNutriente, idAlimento, qtde) VALUES (:p1, :p2, :p3)";
              $consulta = $conexao->prepare($sqlNutrienteAlimento);
              $consulta->bindParam(":p1",$indicesNutrientes[$j][1]);
              $consulta->bindParam(":p2",$valor[0]);
              $consulta->bindParam(":p3",$valor[($indicesNutrientes[$j][2])]);
              $consulta->execute();
              echo $consulta->rowCount()." -> ".$indicesNutrientes[$j][1].", ".$valor[0].", ".$valor[($indicesNutrientes[$j][2])]."\n";
            }
          }
          $j++;
        }
        $i++;
      }
    }
}

// echo $sqlAlimento;
