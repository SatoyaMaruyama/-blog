<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    
    public function posts()   
 {
    return $this->hasMany(Post::class);  
 }
    public function getByCategory(int $limit_count = 5)
 {
    return $this->posts()->with('record')->orderBy('updated_at', 'DESC')->paginate($limit_count);
 }
 
}
