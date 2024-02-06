<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    
    protected $table = 'Payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'amount'];
 
    use HasFactory;


    public function Enrollment()

    {
        return $this->belongsTo(Enrollment::class);

    }

    
}

