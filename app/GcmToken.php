<?php

<<<<<<< HEAD
namespace App\TodosBackend;
=======
namespace PaoloDavila\TodosBackend;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Database\Eloquent\Model;

/**
 * Class GcmToken
 *
<<<<<<< HEAD
 * @package App\TodosBackend
=======
 * @package PaoloDavila\TodosBackend
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class GcmToken extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_id'
    ];

    /**
     * A message belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}