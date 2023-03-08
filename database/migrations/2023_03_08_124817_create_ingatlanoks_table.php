<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ingatlanok;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("kategoria")->references("id")->on("kategoriaks");
            $table->String("leiras");
            $table->timestamp("hirdetesDatuma")->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->boolean("tehermentes");
            $table->Integer("ar")->nullable();
            $table->String("kepUrl");
            $table->timestamps();
        });

        ingatlanok::create(["kategoria"=>1,"leiras"=>"szép","tehermentes"=>1,"ar"=>30000000,"kepUrl"=>"pic/p1.jpg"]);
        ingatlanok::create(["kategoria"=>2,"leiras"=>"nagyon szép","tehermentes"=>0,"ar"=>40000000,"kepUrl"=>"pic/p2.jpg"]);
        ingatlanok::create(["kategoria"=>3,"leiras"=>"csoda szép","tehermentes"=>1,"ar"=>45000000,"kepUrl"=>"pic/p3.jpg"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
