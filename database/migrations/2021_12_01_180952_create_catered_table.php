<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catereds', function (Blueprint $table) {
            $table->id();

            $table->foreignId("customer_id")
            ->nullable()
            ->constrained("customers")
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId("professional_id")
            ->nullable()
            ->constrained("professionals")
            ->cascadeOnUpdate()
            ->nullOnDelete();

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
        Schema::dropIfExists('catered');
    }
}
