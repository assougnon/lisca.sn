<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Malade;
use App\Medicament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $idMedicament = Medicament::all();

        return view('medicament.index',compact('idMedicament'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idMedicament = new Medicament();
        $fournisseurs =Fournisseur::all();
        return view('medicament.create',compact('idMedicament','fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idMedicament = Medicament::create($this->validateData());
        $this->storeImage($idMedicament);

        return  redirect('/medicaments');
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


    public function destroy(Medicament $idMedicament)
    {
        Storage::delete('public/'.$idMedicament->image);

        $idMedicament->delete();
        return redirect('medicaments');
    }

    private function validateData(){
        $request =  \request()->validate([
            'idMedicament' =>'required',
            'nomMedicament' =>'required',
            'formeGalinique' =>'required',
            'dosageMedicament' =>'required',
            'dosageMedicament' =>'required',
            'quantiteStockMed' =>'required',
            'seuilMinMed' =>'required',
            'prixMedicament' =>'required',
            'conditionnement' =>'required',
            'provenanceMed' =>'required',
            'imageMedicament' =>'required',


            ]);
            return $request;


    }
    private function storeImage($malade)
    {
        if (\request()->has('imageMedicament')){
            $malade->update([
                'imageMedicament' => \request()->imageMedicament->store('uploads','public'),
            ]);
        }
        $image = Image::make(public_path('storage/'.$malade->imageMedicament))->fit('300','300');

        $image->save();
    }
}
