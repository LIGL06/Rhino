<?php

namespace Rhino\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
       'school_id', 'user_id', 'SKU', 'student_validated'
    ];
    /**
     * Get the user that owns the Elder.
     */
    public function user()
    {
        return $this->belongsTo('Rhino\Models\User');
    }
}
