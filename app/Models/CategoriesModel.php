<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;

    public static $categories = [
         0=>[
                'id'        => 1,
                'name'      =>"Mobile Phone"
            ],
            1=>[
                'id'        => 2,
                'name'      =>"TV"
            ],
            3=>[
                'id'        => 3,
                'name'      =>"Fridge"
            ]
        ];

    public static function getAllCategories()
    {
        return self::$categories;
    }

}
