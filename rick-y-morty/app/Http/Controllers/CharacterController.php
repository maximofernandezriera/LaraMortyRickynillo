<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page', 1);

        $response = Http::get("https://rickandmortyapi.com/api/character?page={$page}");
        $characters = $response->json()['results'];

        return view('characters.index', [
            'characters' => $characters,
            'nextPage' => $response->json()['info']['next'] ? $page + 1 : null,
            'prevPage' => $response->json()['info']['prev'] ? $page - 1 : null,
        ]);
    }
}