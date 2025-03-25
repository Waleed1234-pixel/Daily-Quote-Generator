<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->text('content');
            $table->string('author');
            $table->integer('likes')->default(0); 
            $table->timestamps();
            $table->text('comments')->nullable(); 
             
            
          
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}


   
       
   



