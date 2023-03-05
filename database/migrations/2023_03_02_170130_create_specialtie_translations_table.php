<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specialtie_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specialtie_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('address');
            $table->softDeletes();
            
            $table->unique(['specialtie_id', 'locale']);
            $table->foreign('specialtie_id')->references('id')->on('specialties')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialtie_translations');
    }
};
