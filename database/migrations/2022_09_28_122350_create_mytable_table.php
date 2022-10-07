<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mytable', function (Blueprint $table) {
            $table->id("mytable_id");  //default write 

            $table->string('name', 20);

            $table->string('email',100);

            $table->integer('age')->default(18);

            $table->enum('gender',['male','female','other'])->nullable();

            $table->date('dob',);

            $table->string('password');

            $table->boolean('status')->default(1);

            $table->timestamps();  //default write 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mytable');
    }
};
