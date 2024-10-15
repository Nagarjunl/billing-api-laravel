<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;
use Illuminate\Support\Facades\DB;

class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = DB::table('parties')->get();
        return response()->json($parties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Parties::create($request->all());
        return response()->json($result, 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Parties::find($id);
        return response()->json($result, 201); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Parties::find($id);
        return response()->json($result, 201); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatedParty =Parties::where('id', $id)->update($request->all());
        $result = ['message' => 'Party updated successfully', 'party' => $updatedParty];
        return response()->json($result);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteParty =Parties::destroy( $id);
        $result = ['message' => 'Party Deleted successfully', 'party' => $deleteParty];
        return response()->json($result);  
    }
}
