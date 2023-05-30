<?php

use App\Models\Receptek;
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
        Schema::create('receptek', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->foreignId("kat_id")->references("id")->on("kategoriak");
            $table->string("kep_eleresi_ut");
            $table->string("leiras");
            $table->timestamps();
        });

        Receptek::create(["nev" => "Somlói", "kat_id" => 2, "kep_eleresi_ut" => "https://cdn.nwmgroups.hu/s/img/i/1408/20140807foto-szelfie-makako-majom-fenykep.jpg?w=800&h=1106&t=5", "leiras" => "Somlói"]);
        Receptek::create(["nev" => "Lasagne", "kat_id" => 1, "kep_eleresi_ut" => "https://cdn.nwmgroups.hu/s/img/i/1408/20140807foto-szelfie-makako-majom-fenykep.jpg?w=800&h=1106&t=5", "leiras" => "Lasagne"]);
        Receptek::create(["nev" => "Borsó leves", "kat_id" => 3, "kep_eleresi_ut" => "https://cdn.nwmgroups.hu/s/img/i/1408/20140807foto-szelfie-makako-majom-fenykep.jpg?w=800&h=1106&t=5", "leiras" => "Borsó leves"]);
        Receptek::create(["nev" => "Cézár saláta", "kat_id" => 4, "kep_eleresi_ut" => "https://cdn.nwmgroups.hu/s/img/i/1408/20140807foto-szelfie-makako-majom-fenykep.jpg?w=800&h=1106&t=5", "leiras" => "Cézár saláta"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptek');
    }
};
