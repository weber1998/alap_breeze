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
            $table->id();
            $table->string('nev')->nullable(false)->unique();
        });

        Kategoriak::create(['nev'=>'Ház']);
        Kategoriak::create(['nev'=>'Lakás']);
        Kategoriak::create(['nev'=>'Építési telek']);
        Kategoriak::create(['nev'=>'Garázs']);
        Kategoriak::create(['nev'=>'Mezőgazdaság']);
        Kategoriak::create(['nev'=>'Ipari ingatlan']);
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
