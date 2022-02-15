<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Request $request)
    {
        // $request->session()->put('name', 'An');
        // $request->session()->put('age', '18');

        // //Lấy ra session có tên là key
        // $name = $request->session()->get('name');
        // $age = $request->session()->get('age');

        // var_dump($name);
        // var_dump($age);

        // //Lấy ra session có tên là key, nếu ko có thì sẽ cho ra giá trị mặc định
        // $name = $request->session()->get('name', '123');
        // $age = $request->session()->get('age', '123');

            $request->session()->put('name', 'An');
            // Lấy session có tên là key
            $name = session('name');

            //Lấy ra session có tên là key, nếu ko có thì sẽ cho ra giá trị mặc định
            $name = session('name', '234');

            //lưu session 
            session(['name' => 'An']);

            dd($name);
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
