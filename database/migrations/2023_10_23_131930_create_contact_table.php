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
            $table->string('title');
            $table->string('subtitle');
            $table->string('inst_title');
            $table->text('inst_subtitle');
            $table->text('licenze');

            $table->timestamps();
        });
        if (!Contact::where('id', 1)->exists()) {
            Contact::create([
                'licenze' => 'Государственная лицензия №15017208 от 23.09.2015 года на занятие адвокатской деятельностью,  выданная Министерством юстиции  Республики Казахстан.',
                'adress' => 'г.Астана, пр.Республики, 24, офис 609 (бизнес-центр «Парасат»)',
                'shortadress' => 'пр.Республики, 24, офис 609',
                'email' => 'moroz_rinat@mail.ru',
                'number' => '+ 7 777 298 72 71', 
                'instagram' =>'instagram.com/',
                'facebook' =>'facebook.com/',
                'whatsapp' => 'wa.me/+77772987271',
                'title' => 'РАСПОЛОЖЕНИЕ МОЕГО ОФИСА',
                'subtitle'=> 'Запишитесь на консультацию по телефону 87772987271 или оставьте заявку. Консультации платные.',
                'inst_title' => 'Подпишитесь на мой instagram аккаунт',
                'inst_subtitle' => 'Рассказываю о том, как защитить свои права, не стать жертвой злоумышленников, о реальных уголовных делах и других интересных вещах.'
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
