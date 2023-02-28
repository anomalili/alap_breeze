<?php

use App\Models\Ingatlanok;
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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->timestamp('hirdetesDatuma')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('tehermentes');
            $table->Integer('ar')->default(0);
            $table->longText('kepUrl');
            $table->timestamps();
        });
        Ingatlanok::create(['kategoria' => 1, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum.  ', 'tehermentes' => 1, 'ar' => 9100, 'kepUrl' => 'pics/1.jpg']);
        Ingatlanok::create(['kategoria' => 2, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 2, 'ar' => 8100, 'kepUrl' => 'pics/2.jpg']);
        Ingatlanok::create(['kategoria' => 3, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum.  ', 'tehermentes' => 2, 'ar' => 7100, 'kepUrl' => 'pics/3.jpg']);
        Ingatlanok::create(['kategoria' => 4, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 1, 'ar' => 9100, 'kepUrl' => 'pics/4.jpg']);
        Ingatlanok::create(['kategoria' => 5, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum.', 'tehermentes' => 2, 'ar' => 5100, 'kepUrl' => 'pics/5.jpg']);
        Ingatlanok::create(['kategoria' => 6, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum.', 'tehermentes' => 1, 'ar' => 3100, 'kepUrl' => 'pics/6.webp']);
        Ingatlanok::create(['kategoria' => 1, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 2, 'ar' => 7100, 'kepUrl' => 'pics/7.jpg']);
        Ingatlanok::create(['kategoria' => 2, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 1, 'ar' => 3100, 'kepUrl' => 'pics/8.jpg']);
        Ingatlanok::create(['kategoria' => 3, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 1, 'ar' => 6100, 'kepUrl' => 'pics/1.jpg']);
        Ingatlanok::create(['kategoria' => 5, 'leiras' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ex ac nisl placerat suscipit. Suspendisse potenti. Sed non lacus fermentum, pretium purus at, varius ipsum. ', 'tehermentes' => 2, 'ar' => 9100, 'kepUrl' => 'pics/10.jpg']);

    }

    public function down()
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
