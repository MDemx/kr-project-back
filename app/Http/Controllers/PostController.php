<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Store new player data
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:100',
            'email' => 'required|email:rfc,dns',
            'sex' => 'required',
            'description' => 'required|min:10|max:255',
            'lvl' => 'required',
        ]);

        $player = new Player;

        $player->username = $request->get('username');
        $player->email = $request->get('email');
        $player->sex = $request->get('sex');
        $player->description = $request->get('description');
        $player->lvl = $request->get('lvl');

        $player->save();

        return response('success', 200);
    }
}

