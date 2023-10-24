<?php

use App\Models\AboutPage;
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
        Schema::create('aboutpage', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('subtitle');
            $table->text('subtitle2');
            $table->string('image1');
            $table->string('image2');

            $table->timestamps();
        });
        if (!AboutPage::where('id', 1)->exists()) {
            AboutPage::create([
                'title'=> 'ОБЩИЙ СТАЖ РАБОТЫ С УГОЛОВНЫМИ ДЕЛАМИ <span>БОЛЕЕ 20 ЛЕТ.</span>',
                'subtitle'=> 'После окончания специализированного ВУЗа МВД в 2000 году я приступил к практической работе в полиции. В 2002 году я был переведен в следственную службу, где прошел путь от следователя районного отдела полиции до старшего следователя по особо важным делам областного департамента внутренних дел.

                Общий срок моей работы в следственных подразделениях МВД составляет 13 лет. За этот период я расследовал множество разных уголовных дел, среди которых были убийства, бандитизм, преступления в составе ОПГ. Неоднократно мне приходилось расследовать уголовные дела о хищениях: кражи, мошенничества, присвоения и растраты вверенного имущества, грабежи и разбойные нападения. Расследовал уголовные дела в отношении медицинских работников и многое другое.
                
                В 2015 году я получил государственную лицензию на занятие адвокатской деятельностью и с того времени стал работать адвокатом. Учитывая следовательское прошлое, я избрал основным направлением для своей адвокатской деятельности работу по уголовным делам. Мой опыт позволяет мне успешно защищать своих клиентов в уголовных делах, поскольку работу следователя я знаю изнутри и понимаю наперед, какие действия он будет предпринимать в той или иной ситуации.',
                'image1'=> 'about-img-1.jpg',
                'image2'=> 'mission-img.jpg',
                'subtitle2'=> 'Также я успешно представляю интересы потерпевших по уголовным делам, поскольку точно знаю, какая стратегия расследования будет наиболее результативной для моего клиента. '
            ]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutpage');
    }
};