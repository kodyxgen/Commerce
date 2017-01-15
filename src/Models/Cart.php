<?php

namespace Yab\Hadron\Models;

use Yab\Quarx\Models\QuarxModel;

class Cart extends QuarxModel
{
    public $table = 'cart';

    public $primaryKey = 'id';

    public $timestamps = true;

    public $fillable = [
        'customer_id',
        'entity_id',
        'entity_type',
        'address',
        'product_variants',
        'quantity',
    ];

    public static $rules = [];
}
