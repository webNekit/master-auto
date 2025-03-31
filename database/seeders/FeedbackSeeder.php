<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = [
            [
                'name' => 'Иван Петров',
                'email' => 'ivan.petrov@example.com',
                'text' => 'Отличный сайт! Нашел подробную инструкцию по замене масла, все сделал сам без проблем. Спасибо за качественный контент!',
                'is_active' => true
            ],
            [
                'name' => 'Алексей Смирнов',
                'email' => 'alex.smirnov@example.com',
                'text' => 'Статья про зимние шины очень помогла с выбором. Впервые купил нормальную резину на зиму, теперь не боюсь снега.',
                'is_active' => true
            ],
            [
                'name' => 'Екатерина Волкова',
                'email' => 'ekaterina.v@example.com',
                'text' => 'Как начинающему автолюбителю, мне очень нравятся ваши пошаговые руководства. Все объяснено просто и понятно!',
                'is_active' => true
            ],
            [
                'name' => 'Дмитрий Козлов',
                'email' => 'dmitry.k@example.com',
                'text' => 'Хотелось бы больше статей про электрику автомобилей. А так ресурс очень полезный, регулярно читаю новые материалы.',
                'is_active' => false
            ],
            [
                'name' => 'Ольга Новикова',
                'email' => 'olga.novikova@example.com',
                'text' => 'Благодаря вашему гайду смогла сама заменить тормозные колодки. Экономия на сервисе 5000 рублей!',
                'is_active' => true
            ],
            [
                'name' => 'Артем Лебедев',
                'email' => 'artem.lebedev@example.com',
                'text' => 'Понравилась статья про диагностику ABS. Теперь понимаю, как работает система и на что обращать внимание.',
                'is_active' => true
            ],
            [
                'name' => 'Мария Соколова',
                'email' => 'maria.s@example.com',
                'text' => 'Удобная навигация по сайту, быстро нашла нужную информацию по подготовке машины к лету. Спасибо!',
                'is_active' => false
            ],
            [
                'name' => 'Сергей Иванов',
                'email' => 'sergey.i@example.com',
                'text' => 'Хороший подбор материалов, но иногда не хватает более подробных схем и иллюстраций в статьях.',
                'is_active' => true
            ],
            [
                'name' => 'Анна Кузнецова',
                'email' => 'anna.k@example.com',
                'text' => 'Советы по обслуживанию аккумулятора зимой реально работают. В этом году проблем с запуском не было!',
                'is_active' => true
            ],
            [
                'name' => 'Павел Морозов',
                'email' => 'pavel.m@example.com',
                'text' => 'Раздел с частыми ошибками при мойке машины - просто клад! Теперь мою авто правильно, без разводов.',
                'is_active' => true
            ]
        ];

        foreach ($feedbacks as $feedback) {
            Feedback::create($feedback);
        }
    }
}
