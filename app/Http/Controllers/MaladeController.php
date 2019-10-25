<?php

namespace App\Http\Controllers;

use App\Malade;
use App\Protocole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MaladeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malade = Malade::all();
        $nbrMlade = Malade::all()->count();

        return view('malade.index',compact('malade','nbrMlade'));
    }
    public function stat(){
        $nbrMlade = Malade::all()->count();
        return view('malade.statistiques',compact('nbrMlade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $maladeId = new Malade();
        $protocole = Protocole::all();
        return view('malade.create',compact('maladeId','protocole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //


        $malade = \App\Malade::create($this->validateData());
        $this->storeImage($malade);

        return  redirect('/malades');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function show(Malade $maladeId)
    {
        return view('malade.show',compact('maladeId'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Malade  $malade
     * @return \Illuminate\Http\Response
     */
    public function edit(Malade $maladeId)
    {

        return view('malade.edit',compact('maladeId'));
    }


    /**
     * @param Malade $maladeId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Malade $maladeId)
    {


        if(\request('image')){

        Storage::delete('public/'.$maladeId->image);

        }

        $maladeId->update($this->validateData());
        $this->storeImage($maladeId);


        return redirect('/malades/'.$maladeId->id);
    }


    /**
     * @param Malade $maladeId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Malade $maladeId)

    {

      Storage::delete('public/'.$maladeId->image);

        $maladeId->delete();
        return redirect('/malades');
    }

    private function storeImage($malade)
    {
        if (\request()->has('image')){
            $malade->update([
                'image' => \request()->image->store('uploads','public'),
            ]);
        }
        $image = Image::make(public_path('storage/'.$malade->image))->fit('300','300');

        $image->save();
    }
    private function validateData(){
        $request =  \request()->validate([
            'prenom' =>'required',
            'nom' =>'required',
            'lieuSuivi' =>'required',
            'numeroSuivi' =>'max:10',
            'numTel' =>'',
            'numTel1' =>'',
            'age' =>'required',
            'sexe' =>'required',
            'ethnie' =>'',
            'religion' =>'required',
            'nationalite' =>'required',
            'profession' =>'',
            'niveauIntelec' =>'',
            'ninp' =>'required',
            'adresse' =>'required',
            'pccb1' =>'',
            'pccb2' =>'',
            'habitat' =>'',
            'statuthabitat' =>'',
            'datenaiss' =>'required',
            'statutMalade' =>'required',
            'image'=>'sometimes|required|image',
        ]);

        $request['prenom'] = ucwords($request['prenom']);
        $request['lieuSuivi'] = ucwords($request['lieuSuivi']);
        $request['nationalite'] = ucwords($request['nationalite']);
        $request['adresse'] = ucwords($request['adresse']);
        $request['nom'] = strtoupper($request['nom']);
        return $request;
    }
}
