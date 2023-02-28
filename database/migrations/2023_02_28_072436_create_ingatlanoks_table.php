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
            $table->foreignId('kategoria')->references('id')->on('kategoriaks')->nullable(false);
            $table->string('leiras');
            $table->date('hirdetesDatuma')->useCurrent();
            $table->boolean('tehermentes')->nullable(false);
            $table->Integer('ar')->nullable(false);
            $table->string('kepUrl')->default("null");
        });

        Ingatlanok::create(['kategoria'=>1, 'leiras'=>'nagyon szép', 'hirdetesDatuma' => '2015-06-14','tehermentes'=>1, 'ar'=>60000000]);
        Ingatlanok::create(['kategoria'=>2, 'leiras'=>'házikó','hirdetesDatuma' => '2015-06-14', 'tehermentes'=>0, 'ar'=>40000000]);
        Ingatlanok::create(['kategoria'=>5, 'leiras'=>'otthon melege', 'hirdetesDatuma' => '2015-06-14','tehermentes'=>1, 'ar'=>320000000]);
        Ingatlanok::create(['kategoria'=>4, 'leiras'=>'4 fal', 'hirdetesDatuma' => '2015-06-14','tehermentes'=>0, 'ar'=>45000000]);
        Ingatlanok::create(['kategoria'=>3, 'leiras'=>'van minden jó', 'hirdetesDatuma' => '2015-06-14','tehermentes'=>1, 'ar'=>72800000]);
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
