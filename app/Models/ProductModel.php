<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public static $products=[
        0 => [
            "id" => 1,
            "category_id" => 1,
            "name" => "Samsung",
            "price" => 75000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/mobile/Samsung.jpg',
        ],
        1 => [
            "id" => 2,
            "category_id" => 1,
            "name" => "iphone",
            "price" => 175000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "IOS-17",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/mobile/iphone.jpg',
        ],
        2 => [
            "id" => 3,
            "category_id" => 1,
            "name" => "Sony",
            "price" => 85000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/mobile/sony.jpg',
        ],
        3 => [
            "id" => 4,
            "category_id" => 1,
            "name" => "Oppo",
            "price" => 55000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/mobile/oppo.jpg',
        ],
        4 => [
            "id" => 5,
            "category_id" => 2,
            "name" => "LG",
            "price" => 99877,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/tv/tv1.jpg',
        ],
        5 => [
            "id" => 6,
            "category_id" => 2,
            "name" => "Samsung",
            "price" => 25000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/tv/tv2.jpg',
        ],
        6 => [
            "id" => 7,
            "category_id" => 2,
            "name" => "Sony",
            "price" => 76000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/tv/tv3.jpg',
        ],
        7 => [
            "id" => 8,
            "category_id" => 3,
            "name" => "Sony",
            "price" => 35000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/Fridge/4.jpg',
        ],
        8 => [
            "id" => 9,
            "category_id" => 3,
            "name" => "Sony",
            "price" => 43568,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/Fridge/3.jpg',
        ],
        9 => [
            "id" => 10,
            "category_id" => 3,
            "name" => "Sony",
            "price" => 76550,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/Fridge/2.jpg',
        ],
        10 => [
            "id" => 11,
            "category_id" => 3,
            "name" => "Sony",
            "price" => 120000,
            "NETWORK" => "LTE",
            "BATTERY" => "Li-Ion 3400 mAh, non-removable",
            "SOUND" => "stereo speakers",
            "CAMERA" => "12 MP, f/1.5-2.4, 26mm (wide)",
            "MEMORY" => "128GB 6GB RAM",
            "PLATFORM" => "Android 9.0",
            "DISPLAY" => "Dynamic AMOLED, HDR10+",
            "BODY" => "149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)",
            "image" => 'img/Fridge/1.jpg',
        ],
    ];


    public static function getAllProductByCategory($id)
    {
        $productsInCategory = [];

        foreach (self::$products as $product)
        {
            if ($product['category_id'] == $id)
            {
                $productsInCategory[] = $product;
            }
        }

        return $productsInCategory;
    }

    public static function getProductById($id)
    {
        foreach (self::$products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }

}
