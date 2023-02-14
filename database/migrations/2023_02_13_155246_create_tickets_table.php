<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Passenger;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tickets', function (Blueprint $table) {

                $table->id();

                $table->bigInteger('sub_agency_id');

                $table->bigInteger('travel_id');

                $table->foreignIdFor(Passenger::class)
                    ->constrained()
                    ->restrictOnUpdate()
                    ->restrictOnDelete();

                $table->boolean('type')->default(0);
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
        Schema::dropIfExists('tickets');
    }
};
