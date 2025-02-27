<?php

use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Formation;
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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('grade');
            $table->timestamps();
        });

        Schema::create('formations_enseignants',function(Blueprint $table){
            $table->foreignIdFor(Formation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Enseignant::class)->constrained()->cascadeOnDelete();
            $table->primary(['formation_id','enseignant_id']);
        });

        Schema::create('cours_enseignants',function(Blueprint $table){
            $table->foreignIdFor(Cours::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Enseignant::class)->nullable()->constrained()->cascadeOnDelete();
            $table->primary(['cours_id','enseignant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_enseignants');
        Schema::dropIfExists('formations_enseignants');
        Schema::dropIfExists('enseignants');
    }
};
