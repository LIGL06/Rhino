<?php

namespace Rhino\Models;

use Illuminate\Database\Eloquent\Model;

class Elder extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'office_id', 'user_id', 'SKU'
     ];
    /**
     * Get the user that owns the Elder.
     */
    public function user()
    {
        return $this->belongsTo('Rhino\Models\User');
    }
}
