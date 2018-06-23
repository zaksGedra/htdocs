<?php
namespace App\Http\Controllers;
use App\Vinyl;
use Illuminate\Http\Request;
class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinyls = Vinyl::all();
        return view('vinyls.index', ['vinyls' => $vinyls]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route('vinyls.show', $vinyl));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vinyl = new Vinyl();
        $vinyl->name = $request['name'];
        $vinyl->hours = $request['hours'];
        $vinyl->description = $request['description'];
        $vinyl->save();
        return redirect(route('vinyls.index'));
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function show(Vinyl $vinyl)
    {
        return view('vinyls.show', ['vinyl'=>$vinyl]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinyl $vinyl)
    {
        return view('vinyls.edit', ['vinyl'=>$vinyl]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinyl $vinyl)
    {
        $vinyl->name = $request['name'];
        $vinyl->hours = $request['hours'];
        $vinyl->description = $request['description'];
        $vinyl->save();
        return redirect(route('vinyls.show', $vinyl));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinyl $vinyl)
    {
        $vinyl->delete();
        return redirect(route('vinyls.index'));
    }
}