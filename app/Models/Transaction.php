<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'reference', 'total_amount', 'status'];

    public function user()
    {
         return $this->belongsTo(User::class);
    }

    public function book()
    {
         return $this->belongsTo(Book::class);
    }
}
