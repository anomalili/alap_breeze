<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\kategoriak;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->String("nev");
            $table->timestamps();
        });

        kategoriak::create(["nev"=>"ház"]);
        kategoriak::create(["nev"=>"lakás"]);
        kategoriak::create(["nev"=>"Építési telek"]);
        kategoriak::create(["nev"=>"Garázs"]);
        kategoriak::create(["nev"=>"Mezőgazdaság"]);
        kategoriak::create(["nev"=>"Ipari ingatlan"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoriaks');
    }
};
