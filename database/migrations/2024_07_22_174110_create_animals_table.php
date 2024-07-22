<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();  // Definisce una colonna auto_increment primary key
            $table->string('nome', 50);
            $table->string('specie', 50);

            $table->integer('eta');  // Definisce una colonna int, senza auto_increment
            $table->decimal('peso', 5, 2);
            $table->integer('sesso');  // Definisce una colonna int, senza auto_increment
            $table->string('url_img', 255);
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
