<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
	public function store(Card $card)
	{
		//return $request->all();
		// or
		//return \Request::all();
		//or
		//return request()->all();

		$note = new Note;
		$note->body = request('body');
		$card->notes()->save($note);

		//return \Redirect::to();
		// or
		//return redirect('');
		// or redirect back where we before
		return back();
	}
}
