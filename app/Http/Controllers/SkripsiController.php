<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input, Validator, Response, Redirect;
use App\Skripsi;

class SkripsiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	return view('dashboard.index');
    }

    public function skripsi()
    {
    	$data['skripsi'] = Skripsi::all();
    	return view('dashboard.index', $data)->withTitle('Skripsi');
    }

    public function edit($id) {
    	$skripsi = Skripsi::find($id);
    	return Response::json($skripsi);
    }

    public function store(Request $request) 
    {
    	$rules = array(
    			'judul' 	=> 'required',
    			'deskripsi' => 'required',
    			'referensi' => 'required',
    			'kategori' 	=> 'required'
    		);

    	$validator = Validator::make(Input::all(), $rules);

    	if($validator->fails())
        {
            return response()->json([
                'success' => false,
                'errors'   => $validator->errors()->toArray()
                ]);
        }

    	$skripsi = Skripsi::create($request->all());
    	return response()->json([
    			'success' => true,
    			'data' => $skripsi
    		]);
    }	

    public function update(Request $request, $id)
    {
    	$rules = array(
    			'judul' 	=> 'required',
    			'deskripsi' => 'required',
    			'referensi' => 'required',
    			'kategori' 	=> 'required'
    		);
    	
    	$validator = Validator::make(Input::all(), $rules);
    	if ($validator->fails()) {
    		return response()->json([
    				'success' => false,
    				'errors' => $validator->errors()->toArray()
    			]);	
    	}

    	$skripsi = Skripsi::findOrFail($id);
    	$skripsi->update($request->all());
		return response()->json([
    			'success' => true,
    			'data' => $skripsi
    		]);
    }

    public function destroy($id) {
    	Skripsi::destroy($id);
    	return response()->json([
    			'success' => true
    		]);
    }

}
