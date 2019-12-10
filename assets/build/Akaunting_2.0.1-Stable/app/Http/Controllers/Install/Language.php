<?php

namespace App\Http\Controllers\Install;

use Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Language extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('install.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // Set locale
        Session::put('locale', $request['lang']);

        $response['redirect'] = route('install.database');

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getLanguages()
    {
        $response = [
            'languages' => $languages = language()->allowed(),
        ];

        return response()->json($response);
    }
}