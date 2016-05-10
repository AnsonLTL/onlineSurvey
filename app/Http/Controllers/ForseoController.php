<?php

namespace App\Http\Controllers;

use App\forseo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ForseoRequest;

class ForseoController extends Controller
{
    protected $forseos;
    public function index() {
        return view('mostiB');
    }
    public function create() {
        return view('mostiB');
    }
    public function store(ForseoRequest $request) {
        $success = 1;

        $forseo = new Forseo;
        $forseo->staffid = $request->staffid;
        $forseo->authornames = $request->authornames;
        $forseo->forarea = $request->forarea;
        $forseo->seo = $request->seo;
        $forseo->comments = $request->comments;
        $forseo->save();

        //Forseo::create(Request::all());
        return view('mostiB', compact('success'));
    }
    public function edit($id) {
        $forseo = Forseo::where('staffid', '=', $id)->firstOrFail();
        return view('mostiEdit', compact('forseo'));
    }
    public function update($staffid, ForseoRequest $request) {
        $forseo = Forseo::where('staffid', '=', $staffid)->firstOrFail();
        $forseo->update($request->all());
        return redirect('/mosti');
    }
    public function all() {
        $forseos = Forseo::all();
        return view('mostiall', [
            'forseos' => $forseos,
        ]);
    }
    public function tryPassValue() {
        $data = [];
        $data['first'] = 'hi';
        $data['last'] = 'bye';
        return view('test', $data);
    }
    public function tryPassValue2() {
        $first = 'hi2';
        $last = 'bye2';
        return view('test', compact('first', 'last'));
    }
}
