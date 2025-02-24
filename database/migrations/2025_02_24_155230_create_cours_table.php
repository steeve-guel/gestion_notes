<?php

use App\Models\Cours;
use App\Models\UniteEns;
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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('intitule');
            $table->timestamps();
        });

        Schema::create('unite_ens_cours', function (Blueprint $table) {
            $table->foreignIdFor(UniteEns::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Cours::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->primary(['unite_ens_id', 'cours_id']);
            $table->integer('coeff');
            $table->integer('coursMagistral');
            $table->integer('tDiriges');
            $table->integer('tPratiques');
            $table->integer('tPersEtudiant');
            $table->integer('volmHoraireTPers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unite_ens_cours');
        Schema::dropIfExists('cours');
    }
};
