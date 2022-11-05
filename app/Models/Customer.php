<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public $timestamps = false;

    protected $primaryKey = 'customer_id';

    protected $fillable = ['fname','lname','address','phone','town','city','customer_image','user_id'];
}
