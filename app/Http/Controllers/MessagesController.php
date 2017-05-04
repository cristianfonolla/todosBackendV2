<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\TodosBackend\Events\MessageSent;
use App\TodosBackend\Message;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use PaoloDavila\TodosBackend\Events\MessageSent;
use PaoloDavila\TodosBackend\Message;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

class MessagesController extends TodosBaseController
{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('msg',$data);
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        $user->notify(new MessageSentNotification($user, $message));
        return ['status' => 'Message Sent!'];
    }

    /**
     * Fetch all message
     *
     * @return Message
     */
    public function fetchMessage()
    {
        return Message::with('user')->get();
    }
}
