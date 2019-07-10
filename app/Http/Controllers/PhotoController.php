<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\demo1;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //return view('demo1');
            $auth = new demo1();
            $abc = $auth->getData();
            //echo $abc;
            return view('demo1')->with('abc',$abc);
    }

    public function insertRecords(Request $request) {
      /*$id = $request->id;
      $name = $request->name;
      $address = $request->address;
      $mobile = $request->mobile;
      */

      $auth = new demo1();
      $abc = $auth->insertData($request);
      if($abc) {
        echo true;
      } else {
        echo false;
      }
    }

    public function deleteRecords(Request $request) {
      $auth = new demo1();
      $abc = $auth->deleteRecords($request);
      if($abc) {
        echo true;
      } else {
        echo false;
      }
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
        //
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
