<?php

use App\Models\Sertificate;
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
        Schema::create('sertificate', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->timestamps();
        });
        if (!Sertificate::where('id', 1)->exists()) {
            for($i = 1; $i <= 3; $i++){
                Sertificate::create([
                    'image' => 'certificate-'.$i.'.jpg',
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertificate');
    }
};
