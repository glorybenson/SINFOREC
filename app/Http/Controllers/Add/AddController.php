<?php

namespace App\Http\Controllers\Add;

use App\Http\Controllers\Controller;
use App\Models\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Add;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
//    const VALIDATION_FIELDS = [
//        'first_name' => 'required',
//        'last_name' => 'required',
//        'date_naissance' => 'required',
//        'name_of_mother' => 'required',
//        'name_of_father' => 'required',
//        'mother_maiden_name' => 'required',
//    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $add = DB::table('naissance_add')
            ->join('users', 'naissance_add.created_by', '=', 'users.id')
            ->select('naissance_add.*')
            ->get();

        return view('naissance.registre.index', ['add' => $add]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $shell = new \stdClass();
        $binding = Util::load( $shell);

        return view('naissance.registre.create', $binding);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        //$this->validate( $request, AddController::VALIDATION_FIELDS);
        $inputs = $request->all();
        unset($inputs['_token']);
        $add = new Add();
        $add->values = json_encode($inputs);
        $add->created_by = Auth::user()->id;
        $add->done = 'yes';
        $add->save();
        return back()->with('success', 'Ajout créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $add = DB::table('naissance_add')
            ->join('users', 'naissance_add.created_by', '=', 'users.id')
            ->select('naissance_add.*', 'users.first_name as admin_first_name', 'users.last_name as admin_last_name')
            ->get()->first();
        return view('naissance.registre.show', ['registre' => collect($add)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add = Add::find($id);
        return view('naissance.registre.edit', ['registre' => collect($add)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        //$this->validate( $request, AddController::VALIDATION_FIELDS);

        $add = Add::find( $id);
        $add->first_name = $request->first_name;
        $add->last_name = $request->last_name;
        $add->date_naissance = $request->date_naissance;
        $add->name_of_mother = $request->name_of_mother;
        $add->name_of_father = $request->name_of_father;
        $add->mother_maiden_name = $request->mother_maiden_name;
        $add->created_by = Auth::user()->id;
        $add->save();
        return redirect()->back()->with('success', 'Add créée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Add::destroy($id);
        return redirect()->route('registre.index')->with('success', 'Supprimée avec succès');
    }
}
