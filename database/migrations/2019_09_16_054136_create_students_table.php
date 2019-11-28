<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('serial_no');
            $table->float('ssc_grade',8,2);
            $table->float('hsc_grade',8,2);
            $table->string('last_degree');
            $table->float('ssc_mark',8,2)->nullable();
            $table->float('hsc_mark',8,2)->nullable();
            $table->float('viva_mark',8,2)->nullable();
            $table->float('total', 8, 2)->nullable();
            $table->boolean('admission_status')->default(false);
            $table->boolean('waiting_status')->default(false);
            $table->boolean('initialstatus')->default(false);
            $table->unsignedBigInteger('batch_id');
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
