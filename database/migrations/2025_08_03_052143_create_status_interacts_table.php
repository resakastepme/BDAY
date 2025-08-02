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
        Schema::create('status_interacts', function (Blueprint $table) {
            $table->id(); // Kolom id (bigint, unsigned, auto-increment, primary)
            $table->string('ip'); // Kolom ip (varchar)
            $table->boolean('answer'); // Kolom answer (boolean)
            $table->timestamps(); // Kolom created_at dan updated_at (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_interacts');
    }
};
