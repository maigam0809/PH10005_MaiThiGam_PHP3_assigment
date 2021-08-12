<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\LoaiTin;
class TheLoai extends Model
{

    use HasFactory;
    protected $fillable = [
        'Ten',
        'TenKhongDau',
       
    ];
    
    protected $table = 'theloai';
    protected $primariKey = 'id';

    public function loaitin(){
        return $this->hasMany('App\Models\LoaiTin','idTheLoai','id');

    }
    public function tinTuc(){
        return $this->hasManyThrough('App\Models\LoaiTin','App\Models\LoaiTin','idTheLoai','idLoaiTin');
    }

}
