<?php

use App\Models\Formation;
use App\Models\Niveau;
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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('code',15)->unique();
            $table->string('domaine');
            $table->string('mention',30);
            $table->text('description');
            $table->string('grade',100);
            $table->string('specialite');
            $table->timestamps();
        });

        // Schema::table('niveaux', function (Blueprint $table) {
        //     $table->foreignIdFor(Formation::class)->nullable()->constrained()->cascadeOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');

        // Schema::table('niveaux',function(Blueprint $table){
        //     $table->dropForeignIdFor(Formation::class);
        // });
    }
};
