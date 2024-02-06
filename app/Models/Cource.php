<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{

    protected $table = 'Cources';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'syllabus', 'duration' , 'video'];
 
    use HasFactory;

    public function duration()
    {
        return $this->duration . '  دقيقة' ;
    }
}
