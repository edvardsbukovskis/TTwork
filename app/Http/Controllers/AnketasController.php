<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anketa;
use App\jautajumi;
use App\Atbildes;
use Auth;

class AnketasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anketa=anketa::all();

        return view('anketas',['anketas'=>$anketa]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('AnketaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::id();
        $anketa=new Anketa;
        $anketa->description=$request['description'];
        $anketa->nosaukums=$request['nosaukums'];
        $anketa->users_id=$user;
        $anketa->save();
        return view ('AnketaCreate');
    }

    public function aizpildit(Request $request, $id)
    {
        $jautajumi = jautajumi::where('id',$id)->get();
        $user=Auth::id();
        $atbilde=new Atbildes;
        $atbilde->atbilde=$request['atbilde'];
        $atbilde->users_id=$user;
        $atbilde->jautajumi_id=$id;
        $atbilde->save();
        return view ('AnketasAtbildes', ['jautajumi'=>$jautajumi]);

    }

    public function showJautajumi($id)
    {
        $jautajumi = jautajumi::where('id',$id)->get();
        return view ('AnketasAtbildes', ['jautajumi'=>$jautajumi]);

    }


    public function createJautajums($id){
        $anketid=anketa::find($id);
        return view('AnketasJautajumi', ['anketa'=>$anketid]);
    }

    public function submitJautajums(Request $request, $id){
      $anketid=anketa::find($id);
      $jautajums=new jautajumi;
      $jautajums->jautajums=$request['jautajums'];
      $jautajums->anketa_id=$id;
      $jautajums->save();
      return view('AnketasJautajumi', ['anketa'=>$anketid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
