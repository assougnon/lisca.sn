<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malade extends Model
{
    //
    protected $guarded =[];

    public function laDate(){
        $date=date_create($this->datenaiss);
        return date_format($date,"d/m/Y ");
    }
    public function ageMalade() {
        $date = $this->datenaiss;
        $age = date('Y') - date('Y', strtotime($date));
        if (date('md') < date('md', strtotime($date))) {
            return $age - 1;
        }
        return $age;
    }
    public function  dateDeCréation(){
        $date=date_create($this->created_at);
        return date_format($date,"d/m/Y à H:i:s");
    }
    public function statutDuMalade(){
        switch ($this->statutMalade){
            case '1':
                return "Traitement en cours";
                break;
            case '2':
                return "En rémission";
                break;
            case '3':
                return "Guéri";
                break;
            case '4':
                return "Décédé";
                break;
        }

    }
}
