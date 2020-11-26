<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierProduct extends Model
{
    protected $table = 'supplier_products';
    public $primaryKey = 'id';
    public $timestamps = true;
}
