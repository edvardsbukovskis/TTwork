<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($country_id)
    {
        $cities=City::where('country_id','=',$country_id)->get();
		return view('cities',['country_id'=>$country_id,'cities'=>$cities]);
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
    public function edit($city_id)
    {
        $cities=City::where('city_id', '=',$city_id)->first();
		return view('city_update',['cities'=>$cities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($city_id,$city_name)
    {
        $cities=City::where('city_id','=',$city_id)->update(['city_name'=>$city_name]);
		return redirect('country/');
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
	public function store($id,$name)
    {
       	$city = new City();
	$city->city_name=$name;
	$city->country_id=$id;
	$city->save();
	return redirect('city/'.$id);
    }

	
	public function new($country_id){
		$countries=Country::where('country_id','=',$country_id)->get();
		return view('city_new',['country_id'=>$country_id,'country_name'=>$countries[0]->country_name]);		
	}
}

