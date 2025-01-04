<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('resume');
            $table->text('description');
            $table->enum('continent', ["Afrique", "Amérique", "Asie", "Europe", "Océanie"]);
            $table->boolean("en_ligne")->default(false);
            $table->string('visuel')->nullable(env('APP_URL') . '/storage/images/arbre.jpg');
            $table->foreignIdFor(User::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('voyages', function (Blueprint $table) {
            $table->dropIfExists('voyages');
        });
    }
};
