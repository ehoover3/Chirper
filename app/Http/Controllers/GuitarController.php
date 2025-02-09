<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GuitarController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Guitars/Index', [
            'guitars' => Guitar::latest()->get(),
        ]);
    }
}