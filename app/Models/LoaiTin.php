<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TheLoai;
use App\Models\TinTuc;
class LoaiTin extends Model
{
    use HasFactory;
    protected $fillable = [
        'Ten',
        'TenKhongDau',
        'idTheLoai',
       
    ];
    
    public function theloai(){
        return $this->belongsTo(TheLoai::class,'idTheLoai','id');
    }
    public function tintuc(){
        return $this->hasMany(TinTuc::class,'idTinTuc','id');
    }
}
