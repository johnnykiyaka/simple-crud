<?php
 
namespace App\Http\Controllers;
 
use App\Client;
use Illuminate\Http\Request;
use Redirect,Response;
 
class ClientsController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    if(request()->ajax()) {
        return datatables()->of(Client::select('*'))
        ->addColumn('action', 'action_button')
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('list');
}
 
 
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{  
    $clientId = $request->client_id;
    $client   =   Client::updateOrCreate(['id' => $clientId],
                ['name' => $request->name, 'email' => $request->email]);        
    return Response::json($client);
}
 
 
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{   
    $where = array('id' => $id);
    $client  = Client::where($where)->first();
 
    return Response::json($client);
}
 
 
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $client = Client::where('id',$id)->delete();
 
    return Response::json($client);
}
}
