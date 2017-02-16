<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
    	//$cards = DB::table('cards')->get();	
    	//$cards = \App\Card::all();

    	$cards = Card::all();
    	return view('cards.index', compact('cards'));
    }

    // First way fro show
    // public function show($id)
    // {
    // 	$card = Card::find($id);
    // 	return view('cards.show', compact('card'));
    // }

    // Second way fro show
    public function show(Card $card)
    {
    	return view('cards.show', compact('card'));
    }
}
