<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppoinmentTableDryo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('Appoinment', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->integer('nik');
			$table->string('name', 100);
			$table->string('email', 100);
			$table->string('gender', 30);
			$table->string('ttl', 30);
			$table->integer('tinggi_badan');
			$table->integer('berat_badan');
			$table->integer('riwayat_penyakit');
			$table->timestamps();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Appoinment');
    }
}
