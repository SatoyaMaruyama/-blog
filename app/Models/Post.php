<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'body',
    'record_id'
   ];
    
    public function getPaginateByLimit(int $limit_count = 10)
 {
    // updated_atで降順に並べたあと、limitで件数制限をかける
   return $this::with('record')->orderBy('updated_at', 'DESC')->paginate($limit_count);
 }
  
    public function record()
 {
    return $this->belongsTo(Record::class);
 }
    
}
