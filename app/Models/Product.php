<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'price',
        'intro',
        'quantity',
        'sale',
        'view',
        'description',
        'detail',
    ];
    
    protected $table = 'products';
    protected $primariKey = 'id';

    public function category(){
        return $this->belongsTo(Category::class);
   }

    public function comments(){
        return $this->hasMany(Comment::class);

    }

    public function invoicePro(){
        return $this->hasMany(InvoiceDetail::class);

    }
}
