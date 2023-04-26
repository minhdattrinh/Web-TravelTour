<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
  protected $fillable = ['code', 'percent', 'remaining', 'expire'];
}
