<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class InvoiceDetail extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $table = 'invoices_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'invoice_id',
        'product_id',
        'unit_price',
        'quantity'
    ];

    public function invoice() {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getUnitPriceAttribute($value){
        $newValue = $value ." VND";
        return $newValue;
    }

}
