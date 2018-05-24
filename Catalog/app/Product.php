<?php

namespace App;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       
        'namaproduct', 
        'descriptionproduct',
        'currency',
        'ukuran',
        'warna',
        'type',
        'stock',
        'harganormal',
        'hargadiskon',
        'tanggaldibuat',
        
    ];
   
    use SortableTrait;
    public $sortable = [
       
        'namaproduct', 
        'descriptionproduct',
        'currency',
        'ukuran',
        'warna',
        'type',
        'stock',
        'harganormal',
        'hargadiskon',
        
    ];
}
