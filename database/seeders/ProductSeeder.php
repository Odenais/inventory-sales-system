<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop Lenovo IdeaPad 3',
                'category_id' => 1,
                'description' => 'Laptop con procesador Ryzen 5, 8GB RAM y 512GB SSD',
                'price' => 750.00,
                'stock' => 15,
                'image' => 'products/laptop_lenovo_ideapad_3.jpg'
            ],
            [
                'name' => 'Smartphone Samsung Galaxy A54',
                'category_id' => 1,
                'description' => 'Celular con pantalla AMOLED 6.4", 128GB almacenamiento',
                'price' => 420.00,
                'stock' => 25,
                'image' => 'products/samsung_galaxy_a54.jpg'
            ],
            [
                'name' => 'Tensiómetro Digital',
                'category_id' => 2,
                'description' => 'Medidor automático de presión arterial con pantalla LCD',
                'price' => 35.50,
                'stock' => 40,
                'image' => 'products/tensiometro_digital.jpg'
            ],
            [
                'name' => 'Proteína Whey 2lb',
                'category_id' => 2,
                'description' => 'Suplemento proteico sabor vainilla para recuperación muscular',
                'price' => 60.00,
                'stock' => 30,
                'image' => 'products/proteina_whey.jpg'
            ],
            [
                'name' => 'Curso de Programación en PHP',
                'category_id' => 3,
                'description' => 'Curso online completo desde nivel básico a avanzado',
                'price' => 120.00,
                'stock' => 100,
                'image' => 'products/curso_php.jpg'
            ],
            [
                'name' => 'Libro: Introducción a la Inteligencia Artificial',
                'category_id' => 3,
                'description' => 'Libro educativo con fundamentos y casos prácticos',
                'price' => 45.00,
                'stock' => 20,
                'image' => 'products/libro_ia.jpg'
            ],
            [
                'name' => 'Balón de Fútbol Profesional',
                'category_id' => 4,
                'description' => 'Balón oficial tamaño 5 para competición',
                'price' => 28.99,
                'stock' => 50,
                'image' => 'products/balon_futbol.jpg'
            ],
            [
                'name' => 'Cinta de Correr Eléctrica',
                'category_id' => 4,
                'description' => 'Caminadora plegable con monitor digital y 12 programas',
                'price' => 650.00,
                'stock' => 8,
                'image' => 'products/cinta_correr.jpg'
            ],
            [
                'name' => 'Juego de Sábanas Queen',
                'category_id' => 5,
                'description' => 'Sábanas de algodón 100% de 4 piezas',
                'price' => 55.00,
                'stock' => 35,
                'image' => 'products/sabanas_queen.jpg'
            ],
            [
                'name' => 'Sofá Reclinable 3 Puestos',
                'category_id' => 5,
                'description' => 'Sofá tapizado en tela con sistema reclinable manual',
                'price' => 899.99,
                'stock' => 5,
                'image' => 'products/sofa_reclinable.jpg'
            ],
            [
                'name' => 'Chaqueta de Cuero Negra',
                'category_id' => 6,
                'description' => 'Chaqueta moderna para hombre, material sintético',
                'price' => 120.00,
                'stock' => 18,
                'image' => 'products/chaqueta_cuero.jpg'
            ],
            [
                'name' => 'Reloj Deportivo Unisex',
                'category_id' => 6,
                'description' => 'Reloj resistente al agua con cronómetro y alarma',
                'price' => 75.00,
                'stock' => 22,
                'image' => 'products/reloj_deportivo.jpg'
            ],
            [
                'name' => 'Kit de Maquillaje Profesional',
                'category_id' => 7,
                'description' => 'Set completo con sombras, labiales y brochas',
                'price' => 85.00,
                'stock' => 27,
                'image' => 'products/kit_maquillaje.jpg'
            ],
            [
                'name' => 'Crema Facial Hidratante',
                'category_id' => 7,
                'description' => 'Crema con ácido hialurónico para todo tipo de piel',
                'price' => 25.00,
                'stock' => 60,
                'image' => 'products/crema_facial.jpg'
            ],
            [
                'name' => 'Cámara de Reversa HD',
                'category_id' => 8,
                'description' => 'Cámara trasera para auto con visión nocturna',
                'price' => 49.99,
                'stock' => 30,
                'image' => 'products/camara_reversa.jpg'
            ],
            [
                'name' => 'Aceite de Motor 5W-30',
                'category_id' => 8,
                'description' => 'Aceite sintético para motores a gasolina',
                'price' => 32.00,
                'stock' => 45,
                'image' => 'products/aceite_motor.jpg'
            ],
            [
                'name' => 'Café Molido Premium 500g',
                'category_id' => 9,
                'description' => 'Café tostado y molido 100% arábica',
                'price' => 12.50,
                'stock' => 80,
                'image' => 'products/cafe_premium.jpg'
            ],
            [
                'name' => 'Pack de Bebidas Energéticas x6',
                'category_id' => 9,
                'description' => 'Bebidas energéticas sabor original 250ml',
                'price' => 15.00,
                'stock' => 40,
                'image' => 'products/bebidas_energeticas.jpg'
            ],
            [
                'name' => 'Alimento para Perro 20kg',
                'category_id' => 10,
                'description' => 'Comida balanceada para perros adultos',
                'price' => 70.00,
                'stock' => 25,
                'image' => 'products/alimento_perro.jpg'
            ],
            [
                'name' => 'Juguete Interactivo para Gato',
                'category_id' => 10,
                'description' => 'Juguete con movimiento automático y luces LED',
                'price' => 18.99,
                'stock' => 50,
                'image' => 'products/juguete_gato.jpg'
            ],
        ];
    }
}
