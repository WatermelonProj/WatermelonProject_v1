<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento', function (Blueprint $table) {
            $table->increments('idAlimento');
            $table->integer('idGAlimentar')->unsigned()->nullable();
            $table->integer('idGPiramide')->unsigned()->nullable();
            $table->string('descricaoAlimento');
            $table->integer('idTACO');
            $table->foreign('idGAlimentar')->references('idGAlimentar')->on('grupoAlimentar');
            $table->foreign('idGPiramide')->references('idGPiramide')->on('grupoPiramide');
        });

        DB::table('alimento')->insert(array(
        	'idAlimento'=> 1,
        	'idTACO'=> 1,
        	'descricaoAlimento' => 'Arroz, integral, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 2,
        	'idTACO'=> 2,
        	'descricaoAlimento' => 'Arroz, integral, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 3,
        	'idTACO'=> 3,
        	'descricaoAlimento' => 'Arroz, tipo 1, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 4,
        	'idTACO'=> 4,
        	'descricaoAlimento' => 'Arroz, tipo 1, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 5,
        	'idTACO'=> 5,
        	'descricaoAlimento' => 'Arroz, tipo 2, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 6,
        	'idTACO'=> 6,
        	'descricaoAlimento' => 'Arroz, tipo 2, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 7,
        	'idTACO'=> 7,
        	'descricaoAlimento' => 'Aveia, flocos, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 8,
        	'idTACO'=> 8,
        	'descricaoAlimento' => 'Biscoito, doce, maisena'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 9,
        	'idTACO'=> 9,
        	'descricaoAlimento' => 'Biscoito, doce, recheado com chocolate'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 10,
        	'idTACO'=> 10,
        	'descricaoAlimento' => 'Biscoito, doce, recheado com morango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 11,
        	'idTACO'=> 11,
        	'descricaoAlimento' => 'Biscoito, doce, wafer, recheado de chocolate'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 12,
        	'idTACO'=> 12,
        	'descricaoAlimento' => 'Biscoito, doce, wafer, recheado de morango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 13,
        	'idTACO'=> 13,
        	'descricaoAlimento' => 'Biscoito, salgado, cream cracker'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 14,
        	'idTACO'=> 14,
        	'descricaoAlimento' => 'Bolo, mistura para'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 15,
        	'idTACO'=> 15,
        	'descricaoAlimento' => 'Bolo, pronto, aipim'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 16,
        	'idTACO'=> 16,
        	'descricaoAlimento' => 'Bolo, pronto, chocolate'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 17,
        	'idTACO'=> 17,
        	'descricaoAlimento' => 'Bolo, pronto, coco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 18,
        	'idTACO'=> 18,
        	'descricaoAlimento' => 'Bolo, pronto, milho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 19,
        	'idTACO'=> 19,
        	'descricaoAlimento' => 'Canjica, branca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 20,
        	'idTACO'=> 20,
        	'descricaoAlimento' => 'Canjica, com leite integral'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 21,
        	'idTACO'=> 21,
        	'descricaoAlimento' => 'Cereais, milho, flocos, com sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 22,
        	'idTACO'=> 22,
        	'descricaoAlimento' => 'Cereais, milho, flocos, sem sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 23,
        	'idTACO'=> 23,
        	'descricaoAlimento' => 'Cereais, mingau, milho, infantil'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 24,
        	'idTACO'=> 24,
        	'descricaoAlimento' => 'Cereais, mistura para vitamina, trigo, cevada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 25,
        	'idTACO'=> 25,
        	'descricaoAlimento' => 'Cereal matinal, milho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 26,
        	'idTACO'=> 26,
        	'descricaoAlimento' => 'Cereal matinal, milho, aÃ§Ãºcar'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 27,
        	'idTACO'=> 27,
        	'descricaoAlimento' => 'Creme de arroz, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 28,
        	'idTACO'=> 28,
        	'descricaoAlimento' => 'Creme de milho, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 29,
        	'idTACO'=> 29,
        	'descricaoAlimento' => 'Curau, milho verde'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 30,
        	'idTACO'=> 30,
        	'descricaoAlimento' => 'Curau, milho verde, mistura para'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 31,
        	'idTACO'=> 31,
        	'descricaoAlimento' => 'Farinha, de arroz, enriquecida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 32,
        	'idTACO'=> 32,
        	'descricaoAlimento' => 'Farinha, de centeio, integral'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 33,
        	'idTACO'=> 33,
        	'descricaoAlimento' => 'Farinha, de milho, amarela'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 34,
        	'idTACO'=> 34,
        	'descricaoAlimento' => 'Farinha, de rosca'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 35,
        	'idTACO'=> 35,
        	'descricaoAlimento' => 'Farinha, de trigo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 36,
        	'idTACO'=> 36,
        	'descricaoAlimento' => 'Farinha, lÃ¡ctea, de cereais'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 37,
        	'idTACO'=> 37,
        	'descricaoAlimento' => 'Lasanha, massa fresca, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 38,
        	'idTACO'=> 38,
        	'descricaoAlimento' => 'Lasanha, massa fresca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 39,
        	'idTACO'=> 39,
        	'descricaoAlimento' => 'MacarrÃ£o, instantÃ¢neo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 40,
        	'idTACO'=> 40,
        	'descricaoAlimento' => 'MacarrÃ£o, trigo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 41,
        	'idTACO'=> 41,
        	'descricaoAlimento' => 'MacarrÃ£o, trigo, cru, com ovos'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 42,
        	'idTACO'=> 42,
        	'descricaoAlimento' => 'Milho, amido, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 43,
        	'idTACO'=> 43,
        	'descricaoAlimento' => 'Milho, fubÃ¡, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 44,
        	'idTACO'=> 44,
        	'descricaoAlimento' => 'Milho, verde, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 45,
        	'idTACO'=> 45,
        	'descricaoAlimento' => 'Milho, verde, enlatado, drenado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 46,
        	'idTACO'=> 46,
        	'descricaoAlimento' => 'Mingau tradicional, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 47,
        	'idTACO'=> 47,
        	'descricaoAlimento' => 'Pamonha, barra para cozimento, prÃ©-cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 48,
        	'idTACO'=> 48,
        	'descricaoAlimento' => 'PÃ£o, aveia, forma'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 49,
        	'idTACO'=> 49,
        	'descricaoAlimento' => 'PÃ£o, de soja'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 50,
        	'idTACO'=> 50,
        	'descricaoAlimento' => 'PÃ£o, glÃºten, forma'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 51,
        	'idTACO'=> 51,
        	'descricaoAlimento' => 'PÃ£o, milho, forma'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 52,
        	'idTACO'=> 52,
        	'descricaoAlimento' => 'PÃ£o, trigo, forma, integral'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 53,
        	'idTACO'=> 53,
        	'descricaoAlimento' => 'PÃ£o, trigo, francÃªs'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 54,
        	'idTACO'=> 54,
        	'descricaoAlimento' => 'PÃ£o, trigo, sovado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 55,
        	'idTACO'=> 55,
        	'descricaoAlimento' => 'Pastel, de carne, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 56,
        	'idTACO'=> 56,
        	'descricaoAlimento' => 'Pastel, de carne, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 57,
        	'idTACO'=> 57,
        	'descricaoAlimento' => 'Pastel, de queijo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 58,
        	'idTACO'=> 58,
        	'descricaoAlimento' => 'Pastel, de queijo, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 59,
        	'idTACO'=> 59,
        	'descricaoAlimento' => 'Pastel, massa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 60,
        	'idTACO'=> 60,
        	'descricaoAlimento' => 'Pastel, massa, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 61,
        	'idTACO'=> 61,
        	'descricaoAlimento' => 'Pipoca, com Ã³leo de soja, sem sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 62,
        	'idTACO'=> 62,
        	'descricaoAlimento' => 'Polenta, prÃ©-cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 63,
        	'idTACO'=> 63,
        	'descricaoAlimento' => 'Torrada, pÃ£o francÃªs'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 64,
        	'idTACO'=> 64,
        	'descricaoAlimento' => 'AbÃ³bora, cabotian, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 65,
        	'idTACO'=> 65,
        	'descricaoAlimento' => 'AbÃ³bora, cabotian, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 66,
        	'idTACO'=> 66,
        	'descricaoAlimento' => 'AbÃ³bora, menina brasileira, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 67,
        	'idTACO'=> 67,
        	'descricaoAlimento' => 'AbÃ³bora, moranga, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 68,
        	'idTACO'=> 68,
        	'descricaoAlimento' => 'AbÃ³bora, moranga, refogada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 69,
        	'idTACO'=> 69,
        	'descricaoAlimento' => 'AbÃ³bora, pescoÃ§o, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 70,
        	'idTACO'=> 70,
        	'descricaoAlimento' => 'Abobrinha, italiana, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 71,
        	'idTACO'=> 71,
        	'descricaoAlimento' => 'Abobrinha, italiana, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 72,
        	'idTACO'=> 72,
        	'descricaoAlimento' => 'Abobrinha, italiana, refogada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 73,
        	'idTACO'=> 73,
        	'descricaoAlimento' => 'Abobrinha, paulista, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 74,
        	'idTACO'=> 74,
        	'descricaoAlimento' => 'Acelga, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 75,
        	'idTACO'=> 75,
        	'descricaoAlimento' => 'AgriÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 76,
        	'idTACO'=> 76,
        	'descricaoAlimento' => 'Aipo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 77,
        	'idTACO'=> 77,
        	'descricaoAlimento' => 'Alface, americana, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 78,
        	'idTACO'=> 78,
        	'descricaoAlimento' => 'Alface, crespa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 79,
        	'idTACO'=> 79,
        	'descricaoAlimento' => 'Alface, lisa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 80,
        	'idTACO'=> 80,
        	'descricaoAlimento' => 'Alface, roxa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 81,
        	'idTACO'=> 81,
        	'descricaoAlimento' => 'Alfavaca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 82,
        	'idTACO'=> 82,
        	'descricaoAlimento' => 'Alho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 83,
        	'idTACO'=> 83,
        	'descricaoAlimento' => 'Alho-porÃ³, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 84,
        	'idTACO'=> 84,
        	'descricaoAlimento' => 'AlmeirÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 85,
        	'idTACO'=> 85,
        	'descricaoAlimento' => 'AlmeirÃ£o, refogado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 86,
        	'idTACO'=> 86,
        	'descricaoAlimento' => 'Batata, baroa, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 87,
        	'idTACO'=> 87,
        	'descricaoAlimento' => 'Batata, baroa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 88,
        	'idTACO'=> 88,
        	'descricaoAlimento' => 'Batata, doce, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 89,
        	'idTACO'=> 89,
        	'descricaoAlimento' => 'Batata, doce, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 90,
        	'idTACO'=> 90,
        	'descricaoAlimento' => 'Batata, frita, tipo chips, industrializada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 91,
        	'idTACO'=> 91,
        	'descricaoAlimento' => 'Batata, inglesa, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 92,
        	'idTACO'=> 92,
        	'descricaoAlimento' => 'Batata, inglesa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 93,
        	'idTACO'=> 93,
        	'descricaoAlimento' => 'Batata, inglesa, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 94,
        	'idTACO'=> 94,
        	'descricaoAlimento' => 'Batata, inglesa, sautÃ©'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 95,
        	'idTACO'=> 95,
        	'descricaoAlimento' => 'Berinjela, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 96,
        	'idTACO'=> 96,
        	'descricaoAlimento' => 'Berinjela, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 97,
        	'idTACO'=> 97,
        	'descricaoAlimento' => 'Beterraba, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 98,
        	'idTACO'=> 98,
        	'descricaoAlimento' => 'Beterraba, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 99,
        	'idTACO'=> 99,
        	'descricaoAlimento' => 'Biscoito, polvilho doce'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 100,
        	'idTACO'=> 100,
        	'descricaoAlimento' => 'BrÃ³colis, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 101,
        	'idTACO'=> 101,
        	'descricaoAlimento' => 'BrÃ³colis, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 102,
        	'idTACO'=> 102,
        	'descricaoAlimento' => 'CarÃ¡, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 103,
        	'idTACO'=> 103,
        	'descricaoAlimento' => 'CarÃ¡, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 104,
        	'idTACO'=> 104,
        	'descricaoAlimento' => 'Caruru, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 105,
        	'idTACO'=> 105,
        	'descricaoAlimento' => 'Catalonha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 106,
        	'idTACO'=> 106,
        	'descricaoAlimento' => 'Catalonha, refogada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 107,
        	'idTACO'=> 107,
        	'descricaoAlimento' => 'Cebola, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 108,
        	'idTACO'=> 108,
        	'descricaoAlimento' => 'Cebolinha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 109,
        	'idTACO'=> 109,
        	'descricaoAlimento' => 'Cenoura, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 110,
        	'idTACO'=> 110,
        	'descricaoAlimento' => 'Cenoura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 111,
        	'idTACO'=> 111,
        	'descricaoAlimento' => 'ChicÃ³ria, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 112,
        	'idTACO'=> 112,
        	'descricaoAlimento' => 'Chuchu, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 113,
        	'idTACO'=> 113,
        	'descricaoAlimento' => 'Chuchu, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 114,
        	'idTACO'=> 114,
        	'descricaoAlimento' => 'Coentro, folhas desidratadas'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 115,
        	'idTACO'=> 115,
        	'descricaoAlimento' => 'Couve, manteiga, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 116,
        	'idTACO'=> 116,
        	'descricaoAlimento' => 'Couve, manteiga, refogada '
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 117,
        	'idTACO'=> 117,
        	'descricaoAlimento' => 'Couve-flor, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 118,
        	'idTACO'=> 118,
        	'descricaoAlimento' => 'Couve-flor, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 119,
        	'idTACO'=> 119,
        	'descricaoAlimento' => 'Espinafre, Nova ZelÃ¢ndia, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 120,
        	'idTACO'=> 120,
        	'descricaoAlimento' => 'Espinafre, Nova ZelÃ¢ndia, refogado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 121,
        	'idTACO'=> 121,
        	'descricaoAlimento' => 'Farinha, de mandioca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 122,
        	'idTACO'=> 122,
        	'descricaoAlimento' => 'Farinha, de mandioca, torrada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 123,
        	'idTACO'=> 123,
        	'descricaoAlimento' => 'Farinha, de puba'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 124,
        	'idTACO'=> 124,
        	'descricaoAlimento' => 'FÃ©cula, de mandioca'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 125,
        	'idTACO'=> 125,
        	'descricaoAlimento' => 'FeijÃ£o, broto, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 126,
        	'idTACO'=> 126,
        	'descricaoAlimento' => 'Inhame, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 127,
        	'idTACO'=> 127,
        	'descricaoAlimento' => 'JilÃ³, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 128,
        	'idTACO'=> 128,
        	'descricaoAlimento' => 'Jurubeba, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 129,
        	'idTACO'=> 129,
        	'descricaoAlimento' => 'Mandioca, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 130,
        	'idTACO'=> 130,
        	'descricaoAlimento' => 'Mandioca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 131,
        	'idTACO'=> 131,
        	'descricaoAlimento' => 'Mandioca, farofa, temperada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 132,
        	'idTACO'=> 132,
        	'descricaoAlimento' => 'Mandioca, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 133,
        	'idTACO'=> 133,
        	'descricaoAlimento' => 'ManjericÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 134,
        	'idTACO'=> 134,
        	'descricaoAlimento' => 'Maxixe, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 135,
        	'idTACO'=> 135,
        	'descricaoAlimento' => 'Mostarda, folha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 136,
        	'idTACO'=> 136,
        	'descricaoAlimento' => 'Nhoque, batata, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 137,
        	'idTACO'=> 137,
        	'descricaoAlimento' => 'Nabo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 138,
        	'idTACO'=> 138,
        	'descricaoAlimento' => 'Palmito, juÃ§ara, em conserva'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 139,
        	'idTACO'=> 139,
        	'descricaoAlimento' => 'Palmito, pupunha, em conserva'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 140,
        	'idTACO'=> 140,
        	'descricaoAlimento' => 'PÃ£o, de queijo, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 141,
        	'idTACO'=> 141,
        	'descricaoAlimento' => 'PÃ£o, de queijo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 142,
        	'idTACO'=> 142,
        	'descricaoAlimento' => 'Pepino, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 143,
        	'idTACO'=> 143,
        	'descricaoAlimento' => 'PimentÃ£o, amarelo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 144,
        	'idTACO'=> 144,
        	'descricaoAlimento' => 'PimentÃ£o, verde, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 145,
        	'idTACO'=> 145,
        	'descricaoAlimento' => 'PimentÃ£o, vermelho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 146,
        	'idTACO'=> 146,
        	'descricaoAlimento' => 'Polvilho, doce'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 147,
        	'idTACO'=> 147,
        	'descricaoAlimento' => 'Quiabo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 148,
        	'idTACO'=> 148,
        	'descricaoAlimento' => 'Rabanete, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 149,
        	'idTACO'=> 149,
        	'descricaoAlimento' => 'Repolho, branco, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 150,
        	'idTACO'=> 150,
        	'descricaoAlimento' => 'Repolho, roxo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 151,
        	'idTACO'=> 151,
        	'descricaoAlimento' => 'Repolho, roxo, refogado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 152,
        	'idTACO'=> 152,
        	'descricaoAlimento' => 'RÃºcula, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 153,
        	'idTACO'=> 153,
        	'descricaoAlimento' => 'Salsa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 154,
        	'idTACO'=> 154,
        	'descricaoAlimento' => 'Seleta de legumes, enlatada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 155,
        	'idTACO'=> 155,
        	'descricaoAlimento' => 'Serralha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 156,
        	'idTACO'=> 156,
        	'descricaoAlimento' => 'Taioba, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 157,
        	'idTACO'=> 157,
        	'descricaoAlimento' => 'Tomate, com semente, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 158,
        	'idTACO'=> 158,
        	'descricaoAlimento' => 'Tomate, extrato'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 159,
        	'idTACO'=> 159,
        	'descricaoAlimento' => 'Tomate, molho industrializado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 160,
        	'idTACO'=> 160,
        	'descricaoAlimento' => 'Tomate, purÃª'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 161,
        	'idTACO'=> 161,
        	'descricaoAlimento' => 'Tomate, salada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 162,
        	'idTACO'=> 162,
        	'descricaoAlimento' => 'Vagem, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 163,
        	'idTACO'=> 163,
        	'descricaoAlimento' => 'Abacate, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 164,
        	'idTACO'=> 164,
        	'descricaoAlimento' => 'Abacaxi, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 165,
        	'idTACO'=> 165,
        	'descricaoAlimento' => 'Abacaxi, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 166,
        	'idTACO'=> 166,
        	'descricaoAlimento' => 'Abiu, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 167,
        	'idTACO'=> 167,
        	'descricaoAlimento' => 'AÃ§aÃ­, polpa, com xarope de guaranÃ¡ e glucose'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 168,
        	'idTACO'=> 168,
        	'descricaoAlimento' => 'AÃ§aÃ­, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 169,
        	'idTACO'=> 169,
        	'descricaoAlimento' => 'Acerola, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 170,
        	'idTACO'=> 170,
        	'descricaoAlimento' => 'Acerola, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 171,
        	'idTACO'=> 171,
        	'descricaoAlimento' => 'Ameixa, calda, enlatada '
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 172,
        	'idTACO'=> 172,
        	'descricaoAlimento' => 'Ameixa, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 173,
        	'idTACO'=> 173,
        	'descricaoAlimento' => 'Ameixa, em calda, enlatada, drenada '
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 174,
        	'idTACO'=> 174,
        	'descricaoAlimento' => 'AtemÃ³ia, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 175,
        	'idTACO'=> 175,
        	'descricaoAlimento' => 'Banana, da terra, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 176,
        	'idTACO'=> 176,
        	'descricaoAlimento' => 'Banana, doce em barra'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 177,
        	'idTACO'=> 177,
        	'descricaoAlimento' => 'Banana, figo, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 178,
        	'idTACO'=> 178,
        	'descricaoAlimento' => 'Banana, maÃ§Ã£, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 179,
        	'idTACO'=> 179,
        	'descricaoAlimento' => 'Banana, nanica, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 180,
        	'idTACO'=> 180,
        	'descricaoAlimento' => 'Banana, ouro, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 181,
        	'idTACO'=> 181,
        	'descricaoAlimento' => 'Banana, pacova, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 182,
        	'idTACO'=> 182,
        	'descricaoAlimento' => 'Banana, prata, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 183,
        	'idTACO'=> 183,
        	'descricaoAlimento' => 'Cacau, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 184,
        	'idTACO'=> 184,
        	'descricaoAlimento' => 'CajÃ¡-Manga, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 185,
        	'idTACO'=> 185,
        	'descricaoAlimento' => 'CajÃ¡, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 186,
        	'idTACO'=> 186,
        	'descricaoAlimento' => 'Caju, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 187,
        	'idTACO'=> 187,
        	'descricaoAlimento' => 'Caju, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 188,
        	'idTACO'=> 188,
        	'descricaoAlimento' => 'Caju, suco concentrado, envasado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 189,
        	'idTACO'=> 189,
        	'descricaoAlimento' => 'Caqui, chocolate, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 190,
        	'idTACO'=> 190,
        	'descricaoAlimento' => 'Carambola, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 191,
        	'idTACO'=> 191,
        	'descricaoAlimento' => 'Ciriguela, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 192,
        	'idTACO'=> 192,
        	'descricaoAlimento' => 'CupuaÃ§u, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 193,
        	'idTACO'=> 193,
        	'descricaoAlimento' => 'CupuaÃ§u, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 194,
        	'idTACO'=> 194,
        	'descricaoAlimento' => 'Figo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 195,
        	'idTACO'=> 195,
        	'descricaoAlimento' => 'Figo, enlatado, em calda'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 196,
        	'idTACO'=> 196,
        	'descricaoAlimento' => 'Fruta-pÃ£o, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 197,
        	'idTACO'=> 197,
        	'descricaoAlimento' => 'Goiaba, branca, com casca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 198,
        	'idTACO'=> 198,
        	'descricaoAlimento' => 'Goiaba, doce em pasta'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 199,
        	'idTACO'=> 199,
        	'descricaoAlimento' => 'Goiaba, doce, cascÃ£o'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 200,
        	'idTACO'=> 200,
        	'descricaoAlimento' => 'Goiaba, vermelha, com casca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 201,
        	'idTACO'=> 201,
        	'descricaoAlimento' => 'Graviola, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 202,
        	'idTACO'=> 202,
        	'descricaoAlimento' => 'Graviola, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 203,
        	'idTACO'=> 203,
        	'descricaoAlimento' => 'Jabuticaba, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 204,
        	'idTACO'=> 204,
        	'descricaoAlimento' => 'Jaca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 205,
        	'idTACO'=> 205,
        	'descricaoAlimento' => 'Jambo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 206,
        	'idTACO'=> 206,
        	'descricaoAlimento' => 'JamelÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 207,
        	'idTACO'=> 207,
        	'descricaoAlimento' => 'Kiwi, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 208,
        	'idTACO'=> 208,
        	'descricaoAlimento' => 'Laranja, baÃ­a, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 209,
        	'idTACO'=> 209,
        	'descricaoAlimento' => 'Laranja, baÃ­a, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 210,
        	'idTACO'=> 210,
        	'descricaoAlimento' => 'Laranja, da terra, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 211,
        	'idTACO'=> 211,
        	'descricaoAlimento' => 'Laranja, da terra, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 212,
        	'idTACO'=> 212,
        	'descricaoAlimento' => 'Laranja, lima, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 213,
        	'idTACO'=> 213,
        	'descricaoAlimento' => 'Laranja, lima, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 214,
        	'idTACO'=> 214,
        	'descricaoAlimento' => 'Laranja, pÃªra, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 215,
        	'idTACO'=> 215,
        	'descricaoAlimento' => 'Laranja, pÃªra, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 216,
        	'idTACO'=> 216,
        	'descricaoAlimento' => 'Laranja, valÃªncia, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 217,
        	'idTACO'=> 217,
        	'descricaoAlimento' => 'Laranja, valÃªncia, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 218,
        	'idTACO'=> 218,
        	'descricaoAlimento' => 'LimÃ£o, cravo, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 219,
        	'idTACO'=> 219,
        	'descricaoAlimento' => 'LimÃ£o, galego, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 220,
        	'idTACO'=> 220,
        	'descricaoAlimento' => 'LimÃ£o, tahiti, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 221,
        	'idTACO'=> 221,
        	'descricaoAlimento' => 'MaÃ§Ã£, Argentina, com casca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 222,
        	'idTACO'=> 222,
        	'descricaoAlimento' => 'MaÃ§Ã£, Fuji, com casca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 223,
        	'idTACO'=> 223,
        	'descricaoAlimento' => 'MacaÃºba, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 224,
        	'idTACO'=> 224,
        	'descricaoAlimento' => ' MamÃ£o, doce em calda, drenado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 225,
        	'idTACO'=> 225,
        	'descricaoAlimento' => 'MamÃ£o, Formosa, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 226,
        	'idTACO'=> 226,
        	'descricaoAlimento' => 'MamÃ£o, Papaia, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 227,
        	'idTACO'=> 227,
        	'descricaoAlimento' => ' MamÃ£o verde, doce em calda, drenado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 228,
        	'idTACO'=> 228,
        	'descricaoAlimento' => 'Manga, Haden, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 229,
        	'idTACO'=> 229,
        	'descricaoAlimento' => 'Manga, Palmer, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 230,
        	'idTACO'=> 230,
        	'descricaoAlimento' => 'Manga, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 231,
        	'idTACO'=> 231,
        	'descricaoAlimento' => 'Manga, Tommy Atkins, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 232,
        	'idTACO'=> 232,
        	'descricaoAlimento' => 'MaracujÃ¡, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 233,
        	'idTACO'=> 233,
        	'descricaoAlimento' => 'MaracujÃ¡, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 234,
        	'idTACO'=> 234,
        	'descricaoAlimento' => 'MaracujÃ¡, suco concentrado, envasado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 235,
        	'idTACO'=> 235,
        	'descricaoAlimento' => 'Melancia, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 236,
        	'idTACO'=> 236,
        	'descricaoAlimento' => 'MelÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 237,
        	'idTACO'=> 237,
        	'descricaoAlimento' => 'Mexerica, Murcote, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 238,
        	'idTACO'=> 238,
        	'descricaoAlimento' => 'Mexerica, Rio, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 239,
        	'idTACO'=> 239,
        	'descricaoAlimento' => 'Morango, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 240,
        	'idTACO'=> 240,
        	'descricaoAlimento' => 'NÃªspera, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 241,
        	'idTACO'=> 241,
        	'descricaoAlimento' => 'Pequi, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 242,
        	'idTACO'=> 242,
        	'descricaoAlimento' => 'PÃªra, Park, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 243,
        	'idTACO'=> 243,
        	'descricaoAlimento' => 'PÃªra, Williams, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 244,
        	'idTACO'=> 244,
        	'descricaoAlimento' => 'PÃªssego, Aurora, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 245,
        	'idTACO'=> 245,
        	'descricaoAlimento' => 'PÃªssego, enlatado, em calda'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 246,
        	'idTACO'=> 246,
        	'descricaoAlimento' => 'Pinha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 247,
        	'idTACO'=> 247,
        	'descricaoAlimento' => 'Pitanga, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 248,
        	'idTACO'=> 248,
        	'descricaoAlimento' => 'Pitanga, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 249,
        	'idTACO'=> 249,
        	'descricaoAlimento' => 'RomÃ£, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 250,
        	'idTACO'=> 250,
        	'descricaoAlimento' => 'Tamarindo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 251,
        	'idTACO'=> 251,
        	'descricaoAlimento' => 'Tangerina, PoncÃ£, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 252,
        	'idTACO'=> 252,
        	'descricaoAlimento' => 'Tangerina, PoncÃ£, suco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 253,
        	'idTACO'=> 253,
        	'descricaoAlimento' => 'TucumÃ£, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 254,
        	'idTACO'=> 254,
        	'descricaoAlimento' => 'Umbu, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 255,
        	'idTACO'=> 255,
        	'descricaoAlimento' => 'Umbu, polpa, congelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 256,
        	'idTACO'=> 256,
        	'descricaoAlimento' => 'Uva, ItÃ¡lia, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 257,
        	'idTACO'=> 257,
        	'descricaoAlimento' => 'Uva, Rubi, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 258,
        	'idTACO'=> 258,
        	'descricaoAlimento' => 'Uva, suco concentrado, envasado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 259,
        	'idTACO'=> 259,
        	'descricaoAlimento' => 'Azeite, de dendÃª'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 260,
        	'idTACO'=> 260,
        	'descricaoAlimento' => 'Azeite, de oliva, extra virgem'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 261,
        	'idTACO'=> 261,
        	'descricaoAlimento' => 'Manteiga, com sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 262,
        	'idTACO'=> 262,
        	'descricaoAlimento' => 'Manteiga, sem sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 263,
        	'idTACO'=> 263,
        	'descricaoAlimento' => 'Margarina, com Ã³leo hidrogenado, com sal (65%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 264,
        	'idTACO'=> 264,
        	'descricaoAlimento' => 'Margarina, com Ã³leo hidrogenado, sem sal (80%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 265,
        	'idTACO'=> 265,
        	'descricaoAlimento' => 'Margarina, com Ã³leo interesterificado, com sa'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 266,
        	'idTACO'=> 266,
        	'descricaoAlimento' => 'Margarina, com Ã³leo interesterificado, sem sa'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 267,
        	'idTACO'=> 267,
        	'descricaoAlimento' => 'Ã“leo, de babaÃ§u'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 268,
        	'idTACO'=> 268,
        	'descricaoAlimento' => 'Ã“leo, de canola'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 269,
        	'idTACO'=> 269,
        	'descricaoAlimento' => 'Ã“leo, de girassol'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 270,
        	'idTACO'=> 270,
        	'descricaoAlimento' => 'Ã“leo, de milho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 271,
        	'idTACO'=> 271,
        	'descricaoAlimento' => 'Ã“leo, de pequi'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 272,
        	'idTACO'=> 272,
        	'descricaoAlimento' => 'Ã“leo, de soja'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 273,
        	'idTACO'=> 273,
        	'descricaoAlimento' => 'Abadejo, filÃ©, congelado, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 274,
        	'idTACO'=> 274,
        	'descricaoAlimento' => 'Abadejo, filÃ©, congelado,cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 275,
        	'idTACO'=> 275,
        	'descricaoAlimento' => 'Abadejo, filÃ©, congelado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 276,
        	'idTACO'=> 276,
        	'descricaoAlimento' => 'Abadejo, filÃ©, congelado, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 277,
        	'idTACO'=> 277,
        	'descricaoAlimento' => 'Atum, conserva em Ã³leo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 278,
        	'idTACO'=> 278,
        	'descricaoAlimento' => 'Atum, fresco, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 279,
        	'idTACO'=> 279,
        	'descricaoAlimento' => 'Bacalhau, salgado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 280,
        	'idTACO'=> 280,
        	'descricaoAlimento' => 'Bacalhau, salgado, refogado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 281,
        	'idTACO'=> 281,
        	'descricaoAlimento' => 'CaÃ§Ã£o, posta, com farinha de trigo, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 282,
        	'idTACO'=> 282,
        	'descricaoAlimento' => 'CaÃ§Ã£o, posta, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 283,
        	'idTACO'=> 283,
        	'descricaoAlimento' => 'CaÃ§Ã£o, posta, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 284,
        	'idTACO'=> 284,
        	'descricaoAlimento' => 'CamarÃ£o, Rio Grande, grande, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 285,
        	'idTACO'=> 285,
        	'descricaoAlimento' => 'CamarÃ£o, Rio Grande, grande, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 286,
        	'idTACO'=> 286,
        	'descricaoAlimento' => 'CamarÃ£o, Sete Barbas, sem cabeÃ§a, com casca, '
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 287,
        	'idTACO'=> 287,
        	'descricaoAlimento' => 'Caranguejo, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 288,
        	'idTACO'=> 288,
        	'descricaoAlimento' => 'Corimba, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 289,
        	'idTACO'=> 289,
        	'descricaoAlimento' => 'CorimbatÃ¡, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 290,
        	'idTACO'=> 290,
        	'descricaoAlimento' => 'CorimbatÃ¡, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 291,
        	'idTACO'=> 291,
        	'descricaoAlimento' => 'Corvina de Ã¡gua doce, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 292,
        	'idTACO'=> 292,
        	'descricaoAlimento' => 'Corvina do mar, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 293,
        	'idTACO'=> 293,
        	'descricaoAlimento' => 'Corvina grande, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 294,
        	'idTACO'=> 294,
        	'descricaoAlimento' => 'Corvina grande, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 295,
        	'idTACO'=> 295,
        	'descricaoAlimento' => 'Dourada de Ã¡gua doce, fresca'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 296,
        	'idTACO'=> 296,
        	'descricaoAlimento' => 'Lambari, congelado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 297,
        	'idTACO'=> 297,
        	'descricaoAlimento' => 'Lambari, congelado, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 298,
        	'idTACO'=> 298,
        	'descricaoAlimento' => 'Lambari, fresco, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 299,
        	'idTACO'=> 299,
        	'descricaoAlimento' => 'Manjuba, com farinha de trigo, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 300,
        	'idTACO'=> 300,
        	'descricaoAlimento' => 'Manjuba, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 301,
        	'idTACO'=> 301,
        	'descricaoAlimento' => 'Merluza, filÃ©, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 302,
        	'idTACO'=> 302,
        	'descricaoAlimento' => 'Merluza, filÃ©, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 303,
        	'idTACO'=> 303,
        	'descricaoAlimento' => 'Merluza, filÃ©, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 304,
        	'idTACO'=> 304,
        	'descricaoAlimento' => 'Pescada, branca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 305,
        	'idTACO'=> 305,
        	'descricaoAlimento' => 'Pescada, branca, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 306,
        	'idTACO'=> 306,
        	'descricaoAlimento' => 'Pescada, filÃ©, com farinha de trigo, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 307,
        	'idTACO'=> 307,
        	'descricaoAlimento' => 'Pescada, filÃ©, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 308,
        	'idTACO'=> 308,
        	'descricaoAlimento' => 'Pescada, filÃ©, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 309,
        	'idTACO'=> 309,
        	'descricaoAlimento' => 'Pescada, filÃ©, molho escabeche'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 310,
        	'idTACO'=> 310,
        	'descricaoAlimento' => 'Pescadinha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 311,
        	'idTACO'=> 311,
        	'descricaoAlimento' => 'Pintado, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 312,
        	'idTACO'=> 312,
        	'descricaoAlimento' => 'Pintado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 313,
        	'idTACO'=> 313,
        	'descricaoAlimento' => 'Pintado, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 314,
        	'idTACO'=> 314,
        	'descricaoAlimento' => 'Porquinho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 315,
        	'idTACO'=> 315,
        	'descricaoAlimento' => 'SalmÃ£o, filÃ©, com pele, fresco,  grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 316,
        	'idTACO'=> 316,
        	'descricaoAlimento' => 'SalmÃ£o, sem pele, fresco, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 317,
        	'idTACO'=> 317,
        	'descricaoAlimento' => 'SalmÃ£o, sem pele, fresco, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 318,
        	'idTACO'=> 318,
        	'descricaoAlimento' => 'Sardinha, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 319,
        	'idTACO'=> 319,
        	'descricaoAlimento' => 'Sardinha, conserva em Ã³leo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 320,
        	'idTACO'=> 320,
        	'descricaoAlimento' => 'Sardinha, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 321,
        	'idTACO'=> 321,
        	'descricaoAlimento' => 'Sardinha, inteira, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 322,
        	'idTACO'=> 322,
        	'descricaoAlimento' => 'TucunarÃ©, filÃ©, congelado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 323,
        	'idTACO'=> 323,
        	'descricaoAlimento' => 'Apresuntado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 324,
        	'idTACO'=> 324,
        	'descricaoAlimento' => 'Caldo de carne, tablete'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 325,
        	'idTACO'=> 325,
        	'descricaoAlimento' => 'Caldo de galinha, tablete'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 326,
        	'idTACO'=> 326,
        	'descricaoAlimento' => 'Carne, bovina, acÃ©m, moÃ­do, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 327,
        	'idTACO'=> 327,
        	'descricaoAlimento' => 'Carne, bovina, acÃ©m, moÃ­do, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 328,
        	'idTACO'=> 328,
        	'descricaoAlimento' => 'Carne, bovina, acÃ©m, sem gordura, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 329,
        	'idTACO'=> 329,
        	'descricaoAlimento' => 'Carne, bovina, acÃ©m, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 330,
        	'idTACO'=> 330,
        	'descricaoAlimento' => 'Carne, bovina, almÃ´ndegas, cruas'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 331,
        	'idTACO'=> 331,
        	'descricaoAlimento' => 'Carne, bovina, almÃ´ndegas, fritas'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 332,
        	'idTACO'=> 332,
        	'descricaoAlimento' => 'Carne, bovina, bucho, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 333,
        	'idTACO'=> 333,
        	'descricaoAlimento' => 'Carne, bovina, bucho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 334,
        	'idTACO'=> 334,
        	'descricaoAlimento' => 'Carne, bovina, capa de contra-filÃ©, com gordu'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 335,
        	'idTACO'=> 335,
        	'descricaoAlimento' => 'Carne, bovina, capa de contra-filÃ©, com gordu'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 336,
        	'idTACO'=> 336,
        	'descricaoAlimento' => 'Carne, bovina, capa de contra-filÃ©, sem gordu'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 337,
        	'idTACO'=> 337,
        	'descricaoAlimento' => 'Carne, bovina, capa de contra-filÃ©, sem gordu'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 338,
        	'idTACO'=> 338,
        	'descricaoAlimento' => 'Carne, bovina, charque, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 339,
        	'idTACO'=> 339,
        	'descricaoAlimento' => 'Carne, bovina, charque, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 340,
        	'idTACO'=> 340,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ©, Ã  milanesa'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 341,
        	'idTACO'=> 341,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ© de costela, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 342,
        	'idTACO'=> 342,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ© de costela, grelha'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 343,
        	'idTACO'=> 343,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ©, com gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 344,
        	'idTACO'=> 344,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ©, com gordura, grel'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 345,
        	'idTACO'=> 345,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ©, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 346,
        	'idTACO'=> 346,
        	'descricaoAlimento' => 'Carne, bovina, contra-filÃ©, sem gordura, grel'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 347,
        	'idTACO'=> 347,
        	'descricaoAlimento' => 'Carne, bovina, costela, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 348,
        	'idTACO'=> 348,
        	'descricaoAlimento' => 'Carne, bovina, costela, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 349,
        	'idTACO'=> 349,
        	'descricaoAlimento' => 'Carne, bovina, coxÃ£o duro, sem gordura, cozid'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 350,
        	'idTACO'=> 350,
        	'descricaoAlimento' => 'Carne, bovina, coxÃ£o duro, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 351,
        	'idTACO'=> 351,
        	'descricaoAlimento' => 'Carne, bovina, coxÃ£o mole, sem gordura, cozid'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 352,
        	'idTACO'=> 352,
        	'descricaoAlimento' => 'Carne, bovina, coxÃ£o mole, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 353,
        	'idTACO'=> 353,
        	'descricaoAlimento' => 'Carne, bovina, cupim, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 354,
        	'idTACO'=> 354,
        	'descricaoAlimento' => 'Carne, bovina, cupim, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 355,
        	'idTACO'=> 355,
        	'descricaoAlimento' => 'Carne, bovina, fÃ­gado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 356,
        	'idTACO'=> 356,
        	'descricaoAlimento' => 'Carne, bovina, fÃ­gado, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 357,
        	'idTACO'=> 357,
        	'descricaoAlimento' => 'Carne, bovina, filÃ© mingnon, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 358,
        	'idTACO'=> 358,
        	'descricaoAlimento' => 'Carne, bovina, filÃ© mingnon, sem gordura, gre'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 359,
        	'idTACO'=> 359,
        	'descricaoAlimento' => 'Carne, bovina, flanco, sem gordura, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 360,
        	'idTACO'=> 360,
        	'descricaoAlimento' => 'Carne, bovina, flanco, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 361,
        	'idTACO'=> 361,
        	'descricaoAlimento' => 'Carne, bovina, fraldinha, com gordura, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 362,
        	'idTACO'=> 362,
        	'descricaoAlimento' => 'Carne, bovina, fraldinha, com gordura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 363,
        	'idTACO'=> 363,
        	'descricaoAlimento' => 'Carne, bovina, lagarto, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 364,
        	'idTACO'=> 364,
        	'descricaoAlimento' => 'Carne, bovina, lagarto, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 365,
        	'idTACO'=> 365,
        	'descricaoAlimento' => 'Carne, bovina, lÃ­ngua, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 366,
        	'idTACO'=> 366,
        	'descricaoAlimento' => 'Carne, bovina, lÃ­ngua, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 367,
        	'idTACO'=> 367,
        	'descricaoAlimento' => 'Carne, bovina, maminha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 368,
        	'idTACO'=> 368,
        	'descricaoAlimento' => 'Carne, bovina, maminha, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 369,
        	'idTACO'=> 369,
        	'descricaoAlimento' => 'Carne, bovina, miolo de alcatra, sem gordura,'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 370,
        	'idTACO'=> 370,
        	'descricaoAlimento' => 'Carne, bovina, miolo de alcatra, sem gordura,'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 371,
        	'idTACO'=> 371,
        	'descricaoAlimento' => 'Carne, bovina, mÃºsculo, sem gordura, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 372,
        	'idTACO'=> 372,
        	'descricaoAlimento' => 'Carne, bovina, mÃºsculo, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 373,
        	'idTACO'=> 373,
        	'descricaoAlimento' => 'Carne, bovina, paleta, com gordura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 374,
        	'idTACO'=> 374,
        	'descricaoAlimento' => 'Carne, bovina, paleta, sem gordura, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 375,
        	'idTACO'=> 375,
        	'descricaoAlimento' => 'Carne, bovina, paleta, sem gordura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 376,
        	'idTACO'=> 376,
        	'descricaoAlimento' => 'Carne, bovina, patinho, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 377,
        	'idTACO'=> 377,
        	'descricaoAlimento' => 'Carne, bovina, patinho, sem gordura, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 378,
        	'idTACO'=> 378,
        	'descricaoAlimento' => 'Carne, bovina, peito, sem gordura, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 379,
        	'idTACO'=> 379,
        	'descricaoAlimento' => 'Carne, bovina, peito, sem gordura, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 380,
        	'idTACO'=> 380,
        	'descricaoAlimento' => 'Carne, bovina, picanha, com gordura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 381,
        	'idTACO'=> 381,
        	'descricaoAlimento' => 'Carne, bovina, picanha, com gordura, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 382,
        	'idTACO'=> 382,
        	'descricaoAlimento' => 'Carne, bovina, picanha, sem gordura, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 383,
        	'idTACO'=> 383,
        	'descricaoAlimento' => 'Carne, bovina, picanha, sem gordura, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 384,
        	'idTACO'=> 384,
        	'descricaoAlimento' => 'Carne, bovina, seca, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 385,
        	'idTACO'=> 385,
        	'descricaoAlimento' => 'Carne, bovina, seca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 386,
        	'idTACO'=> 386,
        	'descricaoAlimento' => 'Coxinha de frango, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 387,
        	'idTACO'=> 387,
        	'descricaoAlimento' => 'Croquete, de carne, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 388,
        	'idTACO'=> 388,
        	'descricaoAlimento' => 'Croquete, de carne, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 389,
        	'idTACO'=> 389,
        	'descricaoAlimento' => 'Empada de frango, prÃ©-cozida, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 390,
        	'idTACO'=> 390,
        	'descricaoAlimento' => 'Empada, de frango, prÃ©-cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 391,
        	'idTACO'=> 391,
        	'descricaoAlimento' => 'Frango, asa, com pele, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 392,
        	'idTACO'=> 392,
        	'descricaoAlimento' => 'Frango, caipira, inteiro, com pele, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 393,
        	'idTACO'=> 393,
        	'descricaoAlimento' => 'Frango, caipira, inteiro, sem pele, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 394,
        	'idTACO'=> 394,
        	'descricaoAlimento' => 'Frango, coraÃ§Ã£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 395,
        	'idTACO'=> 395,
        	'descricaoAlimento' => 'Frango, coraÃ§Ã£o, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 396,
        	'idTACO'=> 396,
        	'descricaoAlimento' => 'Frango, coxa, com pele, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 397,
        	'idTACO'=> 397,
        	'descricaoAlimento' => 'Frango, coxa, com pele, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 398,
        	'idTACO'=> 398,
        	'descricaoAlimento' => 'Frango, coxa, sem pele, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 399,
        	'idTACO'=> 399,
        	'descricaoAlimento' => 'Frango, coxa, sem pele, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 400,
        	'idTACO'=> 400,
        	'descricaoAlimento' => 'Frango, fÃ­gado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 401,
        	'idTACO'=> 401,
        	'descricaoAlimento' => 'Frango, filÃ©, Ã  milanesa'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 402,
        	'idTACO'=> 402,
        	'descricaoAlimento' => 'Frango, inteiro, com pele, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 403,
        	'idTACO'=> 403,
        	'descricaoAlimento' => 'Frango, inteiro, sem pele, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 404,
        	'idTACO'=> 404,
        	'descricaoAlimento' => 'Frango, inteiro, sem pele, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 405,
        	'idTACO'=> 405,
        	'descricaoAlimento' => 'Frango, inteiro, sem pele, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 406,
        	'idTACO'=> 406,
        	'descricaoAlimento' => 'Frango, peito, com pele, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 407,
        	'idTACO'=> 407,
        	'descricaoAlimento' => 'Frango, peito, com pele, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 408,
        	'idTACO'=> 408,
        	'descricaoAlimento' => 'Frango, peito, sem pele, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 409,
        	'idTACO'=> 409,
        	'descricaoAlimento' => 'Frango, peito, sem pele, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 410,
        	'idTACO'=> 410,
        	'descricaoAlimento' => 'Frango, peito, sem pele, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 411,
        	'idTACO'=> 411,
        	'descricaoAlimento' => 'Frango, sobrecoxa, com pele, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 412,
        	'idTACO'=> 412,
        	'descricaoAlimento' => 'Frango, sobrecoxa, com pele, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 413,
        	'idTACO'=> 413,
        	'descricaoAlimento' => 'Frango, sobrecoxa, sem pele, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 414,
        	'idTACO'=> 414,
        	'descricaoAlimento' => 'Frango, sobrecoxa, sem pele, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 415,
        	'idTACO'=> 415,
        	'descricaoAlimento' => 'HambÃºrguer, bovino, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 416,
        	'idTACO'=> 416,
        	'descricaoAlimento' => 'HambÃºrguer, bovino, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 417,
        	'idTACO'=> 417,
        	'descricaoAlimento' => 'HambÃºrguer, bovino, grelhado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 418,
        	'idTACO'=> 418,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, frango, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 419,
        	'idTACO'=> 419,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, frango, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 420,
        	'idTACO'=> 420,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, frango, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 421,
        	'idTACO'=> 421,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, porco, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 422,
        	'idTACO'=> 422,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, porco, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 423,
        	'idTACO'=> 423,
        	'descricaoAlimento' => 'LingÃ¼iÃ§a, porco, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 424,
        	'idTACO'=> 424,
        	'descricaoAlimento' => 'Mortadela'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 425,
        	'idTACO'=> 425,
        	'descricaoAlimento' => 'Peru, congelado, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 426,
        	'idTACO'=> 426,
        	'descricaoAlimento' => 'Peru, congelado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 427,
        	'idTACO'=> 427,
        	'descricaoAlimento' => 'Porco, bisteca, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 428,
        	'idTACO'=> 428,
        	'descricaoAlimento' => 'Porco, bisteca, frita'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 429,
        	'idTACO'=> 429,
        	'descricaoAlimento' => 'Porco, bisteca, grelhada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 430,
        	'idTACO'=> 430,
        	'descricaoAlimento' => 'Porco, costela, assada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 431,
        	'idTACO'=> 431,
        	'descricaoAlimento' => 'Porco, costela, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 432,
        	'idTACO'=> 432,
        	'descricaoAlimento' => 'Porco, lombo, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 433,
        	'idTACO'=> 433,
        	'descricaoAlimento' => 'Porco, lombo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 434,
        	'idTACO'=> 434,
        	'descricaoAlimento' => 'Porco, orelha, salgada, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 435,
        	'idTACO'=> 435,
        	'descricaoAlimento' => 'Porco, pernil, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 436,
        	'idTACO'=> 436,
        	'descricaoAlimento' => 'Porco, pernil, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 437,
        	'idTACO'=> 437,
        	'descricaoAlimento' => 'Porco, rabo, salgado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 438,
        	'idTACO'=> 438,
        	'descricaoAlimento' => 'Presunto, com capa de gordura'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 439,
        	'idTACO'=> 439,
        	'descricaoAlimento' => 'Presunto, sem capa de gordura'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 440,
        	'idTACO'=> 440,
        	'descricaoAlimento' => 'Quibe, assado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 441,
        	'idTACO'=> 441,
        	'descricaoAlimento' => 'Quibe, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 442,
        	'idTACO'=> 442,
        	'descricaoAlimento' => 'Quibe, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 443,
        	'idTACO'=> 443,
        	'descricaoAlimento' => 'Salame'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 444,
        	'idTACO'=> 444,
        	'descricaoAlimento' => 'Toucinho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 445,
        	'idTACO'=> 445,
        	'descricaoAlimento' => 'Toucinho, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 446,
        	'idTACO'=> 446,
        	'descricaoAlimento' => 'Bebida lÃ¡ctea, pÃªssego'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 447,
        	'idTACO'=> 447,
        	'descricaoAlimento' => 'Creme de Leite'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 448,
        	'idTACO'=> 448,
        	'descricaoAlimento' => 'Iogurte, natural'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 449,
        	'idTACO'=> 449,
        	'descricaoAlimento' => 'Iogurte, natural, desnatado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 450,
        	'idTACO'=> 450,
        	'descricaoAlimento' => 'Iogurte, sabor abacaxi'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 451,
        	'idTACO'=> 451,
        	'descricaoAlimento' => 'Iogurte, sabor morango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 452,
        	'idTACO'=> 452,
        	'descricaoAlimento' => 'Iogurte, sabor pÃªssego'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 453,
        	'idTACO'=> 453,
        	'descricaoAlimento' => 'Leite, condensado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 454,
        	'idTACO'=> 454,
        	'descricaoAlimento' => 'Leite, de cabra'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 455,
        	'idTACO'=> 455,
        	'descricaoAlimento' => 'Leite, de vaca, achocolatado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 456,
        	'idTACO'=> 456,
        	'descricaoAlimento' => 'Leite, de vaca, desnatado, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 457,
        	'idTACO'=> 457,
        	'descricaoAlimento' => 'Leite, de vaca, desnatado, UHT'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 458,
        	'idTACO'=> 458,
        	'descricaoAlimento' => 'Leite, de vaca, integral'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 459,
        	'idTACO'=> 459,
        	'descricaoAlimento' => 'Leite, de vaca, integral, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 460,
        	'idTACO'=> 460,
        	'descricaoAlimento' => 'Leite, fermentado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 461,
        	'idTACO'=> 461,
        	'descricaoAlimento' => 'Queijo, minas, frescal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 462,
        	'idTACO'=> 462,
        	'descricaoAlimento' => 'Queijo, minas, meia cura'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 463,
        	'idTACO'=> 463,
        	'descricaoAlimento' => 'Queijo, mozarela'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 464,
        	'idTACO'=> 464,
        	'descricaoAlimento' => 'Queijo, parmesÃ£o'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 465,
        	'idTACO'=> 465,
        	'descricaoAlimento' => 'Queijo, pasteurizado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 466,
        	'idTACO'=> 466,
        	'descricaoAlimento' => 'Queijo, petit suisse, morango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 467,
        	'idTACO'=> 467,
        	'descricaoAlimento' => 'Queijo, prato'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 468,
        	'idTACO'=> 468,
        	'descricaoAlimento' => 'Queijo, requeijÃ£o, cremoso'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 469,
        	'idTACO'=> 469,
        	'descricaoAlimento' => 'Queijo, ricota'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 470,
        	'idTACO'=> 470,
        	'descricaoAlimento' => 'Bebida isotÃ´nica, sabores variados'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 471,
        	'idTACO'=> 471,
        	'descricaoAlimento' => 'CafÃ©, infusÃ£o 10%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 472,
        	'idTACO'=> 472,
        	'descricaoAlimento' => 'Cana, aguardente 1'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 473,
        	'idTACO'=> 473,
        	'descricaoAlimento' => 'Cana, caldo de'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 474,
        	'idTACO'=> 474,
        	'descricaoAlimento' => 'Cerveja, pilsen 2'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 475,
        	'idTACO'=> 475,
        	'descricaoAlimento' => 'ChÃ¡, erva-doce, infusÃ£o 5%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 476,
        	'idTACO'=> 476,
        	'descricaoAlimento' => 'ChÃ¡, mate, infusÃ£o 5%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 477,
        	'idTACO'=> 477,
        	'descricaoAlimento' => 'ChÃ¡, preto, infusÃ£o 5%'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 478,
        	'idTACO'=> 478,
        	'descricaoAlimento' => 'Coco, Ã¡gua de'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 479,
        	'idTACO'=> 479,
        	'descricaoAlimento' => 'Refrigerante, tipo Ã¡gua tÃ´nica'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 480,
        	'idTACO'=> 480,
        	'descricaoAlimento' => 'Refrigerante, tipo cola'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 481,
        	'idTACO'=> 481,
        	'descricaoAlimento' => 'Refrigerante, tipo guaranÃ¡'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 482,
        	'idTACO'=> 482,
        	'descricaoAlimento' => 'Refrigerante, tipo laranja'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 483,
        	'idTACO'=> 483,
        	'descricaoAlimento' => 'Refrigerante, tipo limÃ£o'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 484,
        	'idTACO'=> 484,
        	'descricaoAlimento' => 'Omelete, de queijo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 485,
        	'idTACO'=> 485,
        	'descricaoAlimento' => 'Ovo, de codorna, inteiro, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 486,
        	'idTACO'=> 486,
        	'descricaoAlimento' => 'Ovo, de galinha, clara, cozida/10minutos'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 487,
        	'idTACO'=> 487,
        	'descricaoAlimento' => 'Ovo, de galinha, gema, cozida/10minutos'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 488,
        	'idTACO'=> 488,
        	'descricaoAlimento' => 'Ovo, de galinha, inteiro, cozido/10minutos'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 489,
        	'idTACO'=> 489,
        	'descricaoAlimento' => 'Ovo, de galinha, inteiro, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 490,
        	'idTACO'=> 490,
        	'descricaoAlimento' => 'Ovo, de galinha, inteiro, frito'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 491,
        	'idTACO'=> 491,
        	'descricaoAlimento' => 'Achocolatado, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 492,
        	'idTACO'=> 492,
        	'descricaoAlimento' => 'AÃ§Ãºcar, cristal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 493,
        	'idTACO'=> 493,
        	'descricaoAlimento' => 'AÃ§Ãºcar, mascavo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 494,
        	'idTACO'=> 494,
        	'descricaoAlimento' => 'AÃ§Ãºcar, refinado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 495,
        	'idTACO'=> 495,
        	'descricaoAlimento' => 'Chocolate, ao leite'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 496,
        	'idTACO'=> 496,
        	'descricaoAlimento' => 'Chocolate, ao leite, com castanha do ParÃ¡'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 497,
        	'idTACO'=> 497,
        	'descricaoAlimento' => 'Chocolate, ao leite, dietÃ©tico'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 498,
        	'idTACO'=> 498,
        	'descricaoAlimento' => 'Chocolate, meio amargo'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 499,
        	'idTACO'=> 499,
        	'descricaoAlimento' => 'Cocada branca'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 500,
        	'idTACO'=> 500,
        	'descricaoAlimento' => 'Doce, de abÃ³bora, cremoso'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 501,
        	'idTACO'=> 501,
        	'descricaoAlimento' => 'Doce, de leite, cremoso'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 502,
        	'idTACO'=> 502,
        	'descricaoAlimento' => 'GelÃ©ia, mocotÃ³, natural'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 503,
        	'idTACO'=> 503,
        	'descricaoAlimento' => 'Glicose de milho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 504,
        	'idTACO'=> 504,
        	'descricaoAlimento' => 'Maria mole'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 505,
        	'idTACO'=> 505,
        	'descricaoAlimento' => 'Maria mole, coco queimado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 506,
        	'idTACO'=> 506,
        	'descricaoAlimento' => 'Marmelada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 507,
        	'idTACO'=> 507,
        	'descricaoAlimento' => 'Mel, de abelha'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 508,
        	'idTACO'=> 508,
        	'descricaoAlimento' => 'Melado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 509,
        	'idTACO'=> 509,
        	'descricaoAlimento' => 'Quindim'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 510,
        	'idTACO'=> 510,
        	'descricaoAlimento' => 'Rapadura'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 511,
        	'idTACO'=> 511,
        	'descricaoAlimento' => 'CafÃ©, pÃ³, torrado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 512,
        	'idTACO'=> 512,
        	'descricaoAlimento' => 'Capuccino, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 513,
        	'idTACO'=> 513,
        	'descricaoAlimento' => 'Fermento em pÃ³, quÃ­mico'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 514,
        	'idTACO'=> 514,
        	'descricaoAlimento' => 'Fermento, biolÃ³gico, levedura, tablete'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 515,
        	'idTACO'=> 515,
        	'descricaoAlimento' => 'Gelatina, sabores variados, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 516,
        	'idTACO'=> 516,
        	'descricaoAlimento' => 'Sal, dietÃ©tico'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 517,
        	'idTACO'=> 517,
        	'descricaoAlimento' => 'Sal, grosso'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 518,
        	'idTACO'=> 518,
        	'descricaoAlimento' => 'Shoyu'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 519,
        	'idTACO'=> 519,
        	'descricaoAlimento' => 'Tempero a base de sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 520,
        	'idTACO'=> 520,
        	'descricaoAlimento' => 'Azeitona, preta, conserva'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 521,
        	'idTACO'=> 521,
        	'descricaoAlimento' => 'Azeitona, verde, conserva'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 522,
        	'idTACO'=> 522,
        	'descricaoAlimento' => 'Chantilly, spray, com gordura vegetal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 523,
        	'idTACO'=> 523,
        	'descricaoAlimento' => 'Leite, de coco'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 524,
        	'idTACO'=> 524,
        	'descricaoAlimento' => 'Maionese, tradicional com ovos'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 525,
        	'idTACO'=> 525,
        	'descricaoAlimento' => 'AcarajÃ©'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 526,
        	'idTACO'=> 526,
        	'descricaoAlimento' => 'Arroz carreteiro'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 527,
        	'idTACO'=> 527,
        	'descricaoAlimento' => 'BaiÃ£o de dois, arroz e feijÃ£o-de-corda'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 528,
        	'idTACO'=> 528,
        	'descricaoAlimento' => 'Barreado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 529,
        	'idTACO'=> 529,
        	'descricaoAlimento' => 'Bife Ã  cavalo, com contra filÃ©'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 530,
        	'idTACO'=> 530,
        	'descricaoAlimento' => 'Bolinho de arroz'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 531,
        	'idTACO'=> 531,
        	'descricaoAlimento' => 'CamarÃ£o Ã  baiana'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 532,
        	'idTACO'=> 532,
        	'descricaoAlimento' => 'Charuto, de repolho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 533,
        	'idTACO'=> 533,
        	'descricaoAlimento' => 'Cuscuz, de milho, cozido com sal'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 534,
        	'idTACO'=> 534,
        	'descricaoAlimento' => 'Cuscuz, paulista'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 535,
        	'idTACO'=> 535,
        	'descricaoAlimento' => 'CuxÃ¡, molho'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 536,
        	'idTACO'=> 536,
        	'descricaoAlimento' => 'Dobradinha'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 537,
        	'idTACO'=> 537,
        	'descricaoAlimento' => 'Estrogonofe de carne'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 538,
        	'idTACO'=> 538,
        	'descricaoAlimento' => 'Estrogonofe de frango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 539,
        	'idTACO'=> 539,
        	'descricaoAlimento' => 'FeijÃ£o tropeiro mineiro'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 540,
        	'idTACO'=> 540,
        	'descricaoAlimento' => 'Feijoada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 541,
        	'idTACO'=> 541,
        	'descricaoAlimento' => 'Frango, com aÃ§afrÃ£o'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 542,
        	'idTACO'=> 542,
        	'descricaoAlimento' => 'MacarrÃ£o, molho bolognesa'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 543,
        	'idTACO'=> 543,
        	'descricaoAlimento' => 'ManiÃ§oba'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 544,
        	'idTACO'=> 544,
        	'descricaoAlimento' => 'Quibebe'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 545,
        	'idTACO'=> 545,
        	'descricaoAlimento' => 'Salada, de legumes, com maionese'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 546,
        	'idTACO'=> 546,
        	'descricaoAlimento' => 'Salada, de legumes, cozida no vapor'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 547,
        	'idTACO'=> 547,
        	'descricaoAlimento' => 'SalpicÃ£o, de frango'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 548,
        	'idTACO'=> 548,
        	'descricaoAlimento' => 'Sarapatel'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 549,
        	'idTACO'=> 549,
        	'descricaoAlimento' => 'Tabule'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 550,
        	'idTACO'=> 550,
        	'descricaoAlimento' => 'TacacÃ¡'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 551,
        	'idTACO'=> 551,
        	'descricaoAlimento' => 'Tapioca, com manteiga'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 552,
        	'idTACO'=> 552,
        	'descricaoAlimento' => 'Tucupi, com pimenta-de-cheiro'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 553,
        	'idTACO'=> 553,
        	'descricaoAlimento' => 'Vaca atolada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 554,
        	'idTACO'=> 554,
        	'descricaoAlimento' => 'VatapÃ¡'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 555,
        	'idTACO'=> 555,
        	'descricaoAlimento' => 'Virado Ã  paulista'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 556,
        	'idTACO'=> 556,
        	'descricaoAlimento' => 'Yakisoba'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 557,
        	'idTACO'=> 557,
        	'descricaoAlimento' => 'Amendoim, grÃ£o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 558,
        	'idTACO'=> 558,
        	'descricaoAlimento' => 'Amendoim, torrado, salgado'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 559,
        	'idTACO'=> 559,
        	'descricaoAlimento' => 'Ervilha, em vagem'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 560,
        	'idTACO'=> 560,
        	'descricaoAlimento' => 'Ervilha, enlatada, drenada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 561,
        	'idTACO'=> 561,
        	'descricaoAlimento' => 'FeijÃ£o, carioca, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 562,
        	'idTACO'=> 562,
        	'descricaoAlimento' => 'FeijÃ£o, carioca, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 563,
        	'idTACO'=> 563,
        	'descricaoAlimento' => 'FeijÃ£o, fradinho, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 564,
        	'idTACO'=> 564,
        	'descricaoAlimento' => 'FeijÃ£o, fradinho, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 565,
        	'idTACO'=> 565,
        	'descricaoAlimento' => 'FeijÃ£o, jalo, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 566,
        	'idTACO'=> 566,
        	'descricaoAlimento' => 'FeijÃ£o, jalo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 567,
        	'idTACO'=> 567,
        	'descricaoAlimento' => 'FeijÃ£o, preto, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 568,
        	'idTACO'=> 568,
        	'descricaoAlimento' => 'FeijÃ£o, preto, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 569,
        	'idTACO'=> 569,
        	'descricaoAlimento' => 'FeijÃ£o, rajado, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 570,
        	'idTACO'=> 570,
        	'descricaoAlimento' => 'FeijÃ£o, rajado, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 571,
        	'idTACO'=> 571,
        	'descricaoAlimento' => 'FeijÃ£o, rosinha, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 572,
        	'idTACO'=> 572,
        	'descricaoAlimento' => 'FeijÃ£o, rosinha, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 573,
        	'idTACO'=> 573,
        	'descricaoAlimento' => 'FeijÃ£o, roxo, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 574,
        	'idTACO'=> 574,
        	'descricaoAlimento' => 'FeijÃ£o, roxo, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 575,
        	'idTACO'=> 575,
        	'descricaoAlimento' => 'GrÃ£o-de-bico, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 576,
        	'idTACO'=> 576,
        	'descricaoAlimento' => 'Guandu, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 577,
        	'idTACO'=> 577,
        	'descricaoAlimento' => 'Lentilha, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 578,
        	'idTACO'=> 578,
        	'descricaoAlimento' => 'Lentilha, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 579,
        	'idTACO'=> 579,
        	'descricaoAlimento' => 'PaÃ§oca, amendoim'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 580,
        	'idTACO'=> 580,
        	'descricaoAlimento' => 'PÃ©-de-moleque, amendoim'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 581,
        	'idTACO'=> 581,
        	'descricaoAlimento' => 'Soja, farinha'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 582,
        	'idTACO'=> 582,
        	'descricaoAlimento' => 'Soja, extrato solÃºvel, natural, fluido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 583,
        	'idTACO'=> 583,
        	'descricaoAlimento' => 'Soja, extrato solÃºvel, pÃ³'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 584,
        	'idTACO'=> 584,
        	'descricaoAlimento' => 'Soja, queijo (tofu)'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 585,
        	'idTACO'=> 585,
        	'descricaoAlimento' => 'TremoÃ§o, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 586,
        	'idTACO'=> 586,
        	'descricaoAlimento' => 'TremoÃ§o, em conserva'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 587,
        	'idTACO'=> 587,
        	'descricaoAlimento' => 'AmÃªndoa, torrada, salgada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 588,
        	'idTACO'=> 588,
        	'descricaoAlimento' => 'Castanha-de-caju, torrada, salgada'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 589,
        	'idTACO'=> 589,
        	'descricaoAlimento' => 'Castanha-do-Brasil, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 590,
        	'idTACO'=> 590,
        	'descricaoAlimento' => 'Coco, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 591,
        	'idTACO'=> 591,
        	'descricaoAlimento' => 'Coco,  verde, cru'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 592,
        	'idTACO'=> 592,
        	'descricaoAlimento' => 'Farinha, de mesocarpo de babaÃ§u, crua'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 593,
        	'idTACO'=> 593,
        	'descricaoAlimento' => 'Gergelim, semente'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 594,
        	'idTACO'=> 594,
        	'descricaoAlimento' => 'LinhaÃ§a, semente'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 595,
        	'idTACO'=> 595,
        	'descricaoAlimento' => 'PinhÃ£o, cozido'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 596,
        	'idTACO'=> 596,
        	'descricaoAlimento' => 'Pupunha, cozida'
        ));
        DB::table('alimento')->insert(array(
        	'idAlimento'=> 597,
        	'idTACO'=> 597,
        	'descricaoAlimento' => 'Noz, crua'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimento');
    }
}
