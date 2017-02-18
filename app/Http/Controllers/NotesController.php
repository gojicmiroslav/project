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

		// One way to store associated model
		// $note = new Note;
		// $note->body = request('body');
		// $card->notes()->save($note);

		//return \Redirect::to();
		// or
		//return redirect('');
		// or redirect back where we before

		//Second way
		//$note = new Note(['body' => request('body')]); //we have to set $fillable fields in model for mass assigment
		//$card->notes()->save($note);

		//Third way
		//$card->notes()->create(['body' => request('body')]);

		//Fourth way
		// $card->addNote(
		// 	new Note(['body' => request('body')])
		// );

		$this->validate(request(), [
			'body' => 'required|min:10'
		]); 

		$note = new Note(['body' => request('body')]);
		$note->user_id = 1;
		$card->addNote($note);

		return back();
	} 

	public function edit(Note $note)
	{
		return view('notes.edit', compact('note'));
	}

	public function update(Request $request, Note $note)
	{
		$note->update($request->all());
		return redirect('cards/' . $note->card->id);
	}
}
