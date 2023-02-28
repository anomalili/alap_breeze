<?php

use App\Models\Kategoriak;
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
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('szoveg');
            $table->timestamps();
        });
        Kategoriak::create(['id'=> 1,'szoveg'=>'Ház']);
        Kategoriak::create(['id'=> 2,'szoveg'=>'Lakás']);
        Kategoriak::create(['id'=> 3,'szoveg'=>'Építési telek']);
        Kategoriak::create(['id'=> 4,'szoveg'=>'Garázs']);
        Kategoriak::create(['id'=> 5,'szoveg'=>'Mezőgazdasági terület']);
        Kategoriak::create(['id'=> 6,'szoveg'=>'Ipari ingatlan']);
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
