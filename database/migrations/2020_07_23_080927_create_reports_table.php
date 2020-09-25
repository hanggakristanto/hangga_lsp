<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("province_id");
            $table->unsignedBigInteger("city_id");
            $table->boolean("request");
            $table->text("description");
            $table->text("nama");
            // $table->timestamps();

            // $table->boolean("request");
            // $table->text("nama");
            $table->text("ttl");
            $table->text("jk");
            $table->text("bangsa");
            $table->text("alamat_1");
            $table->text("pos_1");
            $table->text("tlp_1");
            $table->text("mail_1");
            $table->text("pend");
            $table->text("kerjaan");
            $table->text("jabatan");
            $table->text("alamat_2");
            $table->text("pos_2");
            $table->text("tlp_2");
            $table->text("mail_2");
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
        Schema::dropIfExists('reports');
    }
}