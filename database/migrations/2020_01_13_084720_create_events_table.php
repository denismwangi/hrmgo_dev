<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create(
            'events', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('branch_id');
            $table->longText('department_id');
            $table->longText('employee_id');
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('color');
            $table->text('description')->nullable();
            $table->string('created_by');
            $table->timestamps();
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
