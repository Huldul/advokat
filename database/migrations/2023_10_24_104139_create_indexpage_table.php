<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\IndexPage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('indexpage', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('image4');
            $table->string('image5');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('name');
            $table->text('description');
            $table->string('consultation');
            $table->text('subtitle2');
            $table->string('quote');
            
            $table->string('practitle');
            $table->string('revtitle');
            $table->string('blogtitle');

            $table->timestamps();
        });
        if (!IndexPage::where('id', 1)->exists()) {
            IndexPage::create([
                'title'=> 'АДВОКАТ ПО УГОЛОВНЫМ ДЕЛАМ В Г. АСТАНА',
                'subtitle'=> 'Стаж работы по уголовным делам более 20 лет',
                'name'=> 'МОРОЗ РИНАТ ЛЕОНИДОВИЧ',
                'description'=> 'Общий стаж работы с уголовными делами более 20 лет. Имеется большой опыт работы следователем МВД. Расследовал сложные уголовные дела, среди которых были хищения, убийства, дела в отношении медицинских работников и многое другое.
                Все эти знания и опыт теперь успешно применяются в адвокатской деятельности.',
                'consultation'=> 'ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ',
                'subtitle2'=> 'Записаться на консультацию Вы можете, позвонив по телефону 87772987271 ежедневно с 09:00 часов до 22:00 часов, либо написав в WhatsApp на этом номере. 
                Также можно записаться на консультацию путем оставления заявки на этом сайте. Консультации платные.',
                'quote'=>'ПОМОЧЬ ВАМ ДОБИТЬСЯ СПРАВЕДЛИВОСТИ',
                'image1'=> 'hero-bg.jpg',
                'image2'=> 'hero-bg-2.jpg',
                'image3'=> 'hero-bg.jpg',
                'image4'=> 'mission-img.jpg',
                'image5'=> 'principle-img.jpg',
                'practitle'=> 'ИЗ МОЕЙ ПРАКТИКИ',
                'revtitle'=> 'ОТЗЫВЫ',
                'blogtitle'=> 'БЛОГ',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indexpage');
    }
};
