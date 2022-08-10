<?php

namespace App\Http\Controllers;

use App\Models\Dryer;
use Illuminate\Http\Request;

class DryerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = [
            'Humidity' => 'Min -20%',
            'Body Dryer' => 'Bebas Debu',
            'Indikator Filter In' => 'Range Hijau',
            'Indikator Filter Out' => 'Range Hijau',
        ];

        return view('dryer.index', compact('items'));
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
        $dryer = Dryer::create([
            'Humidity' => $request->Humidity,
            'remarks1' => $request->remarks1,
            'BodyDryer' => $request->BodyDryer,
            'remarks2' => $request->remarks2,
            'IndikatorFilterIn' => $request->IndikatorFilterIn,
            'remarks3' => $request->remarks3,
            'IndikatorFilterOut' => $request->IndikatorFilterOut,
            'remarks4' => $request->remarks4,
            'checker' => $request->checker,
        ]);

        return redirect()->route('dashboard')->with('message', 'Your data is successfully recorded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function show(Dryer $dryer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function edit(Dryer $dryer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dryer = Dryer::find($id)->update($request->all()); 

        return redirect()->route('dashboard')->with('message', 'Your data is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dryer $dryer)
    {
        //
    }
}
