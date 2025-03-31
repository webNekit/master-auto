<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Техническое обслуживание', 'is_active' => true],
            ['name' => 'Ремонт двигателя', 'is_active' => true],
            ['name' => 'Электрооборудование', 'is_active' => true],
            ['name' => 'Трансмиссия', 'is_active' => true],
            ['name' => 'Подвеска и рулевое управление', 'is_active' => true],
            ['name' => 'Тормозная система', 'is_active' => true],
            ['name' => 'Кузов и салон', 'is_active' => true],
            ['name' => 'Шины и диски', 'is_active' => true],
            ['name' => 'Автомобильные аксессуары', 'is_active' => true],
            ['name' => 'Юридические вопросы', 'is_active' => false],
        ];

        foreach ($categories as $category) {
            CategoryArticle::firstOrCreate(
                ['name' => $category['name']],
                ['is_active' => $category['is_active']]
            );
        }
    }
}
