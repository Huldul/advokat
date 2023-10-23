<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Contact;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();

            $table->string('adress');
            $table->string('shortadress');
            $table->string('number');
            $table->string('email');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('whatsapp');

            $table->timestamps();
        });
        if (!Contact::where('email', 'moroz_rinat@mail.ru')->exists()) {
            Contact::create([
                'adress' => 'г.Астана, пр.Республики, 24, офис 609 (бизнес-центр «Парасат»)',
                'shortadress' => 'пр.Республики, 24, офис 609',
                'email' => 'moroz_rinat@mail.ru',
                'number' => '+ 7 777 298 72 71', 
                'instagram' =>'instagram.com/',
                'facebook' =>'facebook.com/',
                'whatsapp' => 'wa.me/+77772987271',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
