<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $cards = Card::orderBy('created_at', 'desc')->paginate(10);
        return response()->json($cards);
    }

    public function showAll(){
        $cards = Card::orderBy('created_at', 'desc')->get();
        return response()->json($cards);
    }
}
