<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    protected $table = "showrooms";

    protected $fillable =[
        'name',
        'user_id',
        'owner', 
        'brand', 
        'purchase_date', 
        'description', 
        'image', 
        'status'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
