<?php

namespace Rhino\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id', 'tag', 'valid_until', 'renew_approval'
  ];

  /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->BelongsTo('Rhino\Models\User');
    }
}
