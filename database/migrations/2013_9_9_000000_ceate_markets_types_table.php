<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {



		Schema::create('markets_types', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('markets_type');
            $table->string('image')->nullable();
			$table->timestamps();
		});
	}


	public function down(): void
    {
        Schema::dropIfExists('markets_types');
    }
};

