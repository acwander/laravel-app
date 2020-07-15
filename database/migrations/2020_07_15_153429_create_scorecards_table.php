<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScorecardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('course');
            $table->string('date');
            $table->integer('distance1');
            $table->integer('distance2');
            $table->integer('distance3');
            $table->integer('distance4');
            $table->integer('distance5');
            $table->integer('distance6');
            $table->integer('distance7');
            $table->integer('distance8');
            $table->integer('distance9');
            $table->integer('distance10');
            $table->integer('distance11');
            $table->integer('distance12');
            $table->integer('distance13');
            $table->integer('distance14');
            $table->integer('distance15');
            $table->integer('distance16');
            $table->integer('distance17');
            $table->integer('distance18');
            $table->integer('par1');
            $table->integer('par2');
            $table->integer('par3');
            $table->integer('par4');
            $table->integer('par5');
            $table->integer('par6');
            $table->integer('par7');
            $table->integer('par8');
            $table->integer('par9');
            $table->integer('par10');
            $table->integer('par11');
            $table->integer('par12');
            $table->integer('par13');
            $table->integer('par14');
            $table->integer('par15');
            $table->integer('par16');
            $table->integer('par17');
            $table->integer('par18');
            $table->string('player1');
            $table->string('player2')->nullable();
            $table->string('player3')->nullable();
            $table->string('player4')->nullable();
            $table->integer('player1hole1');
            $table->integer('player1hole2');
            $table->integer('player1hole3');
            $table->integer('player1hole4');
            $table->integer('player1hole5');
            $table->integer('player1hole6');
            $table->integer('player1hole7');
            $table->integer('player1hole8');
            $table->integer('player1hole9');
            $table->integer('player1hole10');
            $table->integer('player1hole11');
            $table->integer('player1hole12');
            $table->integer('player1hole13');
            $table->integer('player1hole14');
            $table->integer('player1hole15');
            $table->integer('player1hole16');
            $table->integer('player1hole17');
            $table->integer('player1hole18');
            $table->integer('player2hole1')->nullable();
            $table->integer('player2hole2')->nullable();
            $table->integer('player2hole3')->nullable();
            $table->integer('player2hole4')->nullable();
            $table->integer('player2hole5')->nullable();
            $table->integer('player2hole6')->nullable();
            $table->integer('player2hole7')->nullable();
            $table->integer('player2hole8')->nullable();
            $table->integer('player2hole9')->nullable();
            $table->integer('player2hole10')->nullable();
            $table->integer('player2hole11')->nullable();
            $table->integer('player2hole12')->nullable();
            $table->integer('player2hole13')->nullable();
            $table->integer('player2hole14')->nullable();
            $table->integer('player2hole15')->nullable();
            $table->integer('player2hole16')->nullable();
            $table->integer('player2hole17')->nullable();
            $table->integer('player2hole18')->nullable();
            $table->integer('player3hole1')->nullable();
            $table->integer('player3hole2')->nullable();
            $table->integer('player3hole3')->nullable();
            $table->integer('player3hole4')->nullable();
            $table->integer('player3hole5')->nullable();
            $table->integer('player3hole6')->nullable();
            $table->integer('player3hole7')->nullable();
            $table->integer('player3hole8')->nullable();
            $table->integer('player3hole9')->nullable();
            $table->integer('player3hole10')->nullable();
            $table->integer('player3hole11')->nullable();
            $table->integer('player3hole12')->nullable();
            $table->integer('player3hole13')->nullable();
            $table->integer('player3hole14')->nullable();
            $table->integer('player3hole15')->nullable();
            $table->integer('player3hole16')->nullable();
            $table->integer('player3hole17')->nullable();
            $table->integer('player3hole18')->nullable();
            $table->integer('player4hole1')->nullable();
            $table->integer('player4hole2')->nullable();
            $table->integer('player4hole3')->nullable();
            $table->integer('player4hole4')->nullable();
            $table->integer('player4hole5')->nullable();
            $table->integer('player4hole6')->nullable();
            $table->integer('player4hole7')->nullable();
            $table->integer('player4hole8')->nullable();
            $table->integer('player4hole9')->nullable();
            $table->integer('player4hole10')->nullable();
            $table->integer('player4hole11')->nullable();
            $table->integer('player4hole12')->nullable();
            $table->integer('player4hole13')->nullable();
            $table->integer('player4hole14')->nullable();
            $table->integer('player4hole15')->nullable();
            $table->integer('player4hole16')->nullable();
            $table->integer('player4hole17')->nullable();
            $table->integer('player4hole18')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scorecards');
    }
}
