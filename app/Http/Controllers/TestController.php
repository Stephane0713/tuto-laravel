<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $titre = "Nouveau titre";

        return view('tests/index', [
            'titre' => $titre
        ]);
    }

    public function show($id) {
        $person = Test::findOrFail($id);

        return view('tests/show', [
            'person' => $person
        ]);
    }
}
