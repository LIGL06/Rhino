<?php

namespace Rhino\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Get the user that owns the Elder.
     */
    public function user()
    {
        return $this->belongsTo('Rhino\Models\User');
    }
}
