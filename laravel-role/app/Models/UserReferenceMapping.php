<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReferenceMapping extends Model
{
    use HasFactory;
    protected $table = "user_reference_mapping";
    protected $fillable = [
        'user_id',
        'reference_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
