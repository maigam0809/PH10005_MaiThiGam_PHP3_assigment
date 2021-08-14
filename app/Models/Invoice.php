<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'total_price',
        'status',
    ];

    protected $table = 'invoices';
    protected $primaryKey = 'id';
    
    public function invoiceDetails() {
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getTotalPriceAttribute($value){
        $newValue = $value ." VND";
        return $newValue;
    }

}
