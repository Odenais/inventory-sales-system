<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Tecnología',
                'description' => 'Productos y servicios tecnológicos'
            ],
            [
                'name' => 'Salud',
                'description' => 'Artículos y servicios relacionados con la salud'
            ],
            [
                'name' => 'Educación',
                'description' => 'Cursos, libros y material educativo'
            ],
            [
                'name' => 'Deportes',
                'description' => 'Equipamiento y actividades deportivas'
            ],
            [
                'name' => 'Hogar',
                'description' => 'Productos para el hogar'
            ],
            [
                'name' => 'Moda',
                'description' => 'Ropa y accesorios'
            ],
            [
                'name' => 'Belleza',
                'description' => 'Productos de cuidado personal'
            ],
            [
                'name' => 'Automotriz',
                'description' => 'Vehículos y accesorios'
            ],
            [
                'name' => 'Alimentos',
                'description' => 'Comida y bebidas'
            ],
            [
                'name' => 'Mascotas',
                'description' => 'Productos y servicios para mascotas'
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
