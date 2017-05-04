<?php

<<<<<<< HEAD
namespace App\TodosBackend;
=======
namespace PaoloDavila\TodosBackend;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['id', 'name', 'done', 'priority','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
