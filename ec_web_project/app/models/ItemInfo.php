<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ItemInfo extends Model
{
    protected $fillable = [
        'item_name',
        'category_id',
        'stock_quantity',
        'price',
        'desctiption',
        'details',
        'color',
        'size',
        'pattern',
        'evaluation',
        'review',
        'point_level',
        'sale_level',
        'customer_question',
        'customer_answer',
        'delete_flg'
    ];
}
