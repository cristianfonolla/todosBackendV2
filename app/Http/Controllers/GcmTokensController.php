<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Auth;
use Illuminate\Http\Request;

/**
 * Class GcmTokensController
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Http\Controllers
=======
 * @package PaoloDavila\TodosBackend\Http\Controllers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class GcmTokensController extends TodosBaseController
{
    /**
     * Add gcm token to user.
     */
    public function addToken(Request $request)
    {
        $user = Auth::user();
        $token = $user->gcmTokens()->firstOrCreate([
            'registration_id' => $request->input('registration_id')
        ]);

        //Broadcast
        broadcast(new GcmTokenCreated($user,$token))->toOthers();
        return ['status' => 'Token saved!'];
    }
}
