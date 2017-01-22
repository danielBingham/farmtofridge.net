<?php
namespace App\Http\Controllers\Farm;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use App\Models\Farm\Farm;

/**
 * A resource controller for handling actions manipulating farms.
 *
 */
class FarmController extends Controller {

    /**
     * Retrieve a list of all farms in the database and display them 
     * on a single page.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index() {
        $farms = Farm::all();
        return view('farms.index', ['farms' => $farms]);
    }

    /**
     * Show a form allowing the user to enter the information that
     * would create a new farm.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create() {
        return view('farms.store');
    }

    /**
     * Create a new farm model and save it to storage.
     *
     * @param   \Illuminate\Http\Request    $request    The request from which to
     *      create a farm model.
     *
     * @return  \Illuminate\Http\Response 
     */
    public function store(Request $request) {
        $farm = Farm::create($request->all());
        return redirect('farms/' . $farm->id . '/' . $farm->slug);
    }

    /**
     * Show an individual farm by id.
     *
     * @param   int $id The id of the farm we want to show.
     * @param   string  $slug   The slug of the farm we want to show.
     *
     * @return \Illuminate\Http\Response 
     */
    public function show($id, $slug) {
        $farm = Farm::find($id);
        return view('farms.show', ['farm' => $farm]); 
    }

    /**
     * Show the form for editing a Farm.
     *
     * @param   int $id The id of the Farm to show an edit form for.
     *
     * @return  \Illuminate\Http\Response
     *
     */
    public function edit($id) {
        $farm = Farm::find($id);
        return view('farms.edit', ['farm' => $farm]);
    }

    /**
     * Update a farm model in storage.
     *
     * Redirects to show: ``farms/:id/:slug``
     *
     * @param   \Illuminate\Http\Request $request    The request object from which to update the farm.
     * @param   int $id The id of the farm we're updating.
     *
     * @return  \Illuminate\Http\Response
     *
     */
    public function update(Request $request, $id) {

        $farm = Farm::find($id);

        $farm->name = $request->name;
        $farm->email = $request->email;
        $farm->phone_number = $request->phone_number;
        $farm->address = $request->address;
        $farm->description = $request->description;
        $farm->practices = $request->practices;

        $farm->save();

        return redirect('farms/' . $farm->id . '/' . $farm->slug);
    }

    /**
     * Remove the farm from storage.
     *
     * @param   int $id The id of the Farm to delete from storage.
     *
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id) {
        Farm::destroy($id);
        return redirect('farms/');
    }

}
