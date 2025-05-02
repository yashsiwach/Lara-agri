<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    /**
     * Display a listing of government schemes.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Get all schemes, ordered by title
        $schemes = Scheme::orderBy('title')->get();
        return view('schemes.index', ['schemes' => $schemes]);
    }

    /**
     * Display a specific government scheme.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $scheme = Scheme::findOrFail($id);
        return view('schemes.show', ['scheme' => $scheme]);
    }
}