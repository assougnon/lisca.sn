<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $guarded =[];

    public function totalPrix(){

        return (integer) $this->prixMedicament * (integer) $this->quantiteStockMed;
    }
    //
}
