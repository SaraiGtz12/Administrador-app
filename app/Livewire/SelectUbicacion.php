<?php

namespace App\Livewire;

use App\Models\Estado;
use App\Models\Municipio;
use Livewire\Component;

class SelectUbicacion extends Component
{

    public $estados;
    public $municipios=[];
    public $estadoId = null;
    public $municipioId = null;
    public $municipio = null;

    public function mount(){
        $this->estados = Estado::all();
        $this->municipios = collect();
    }

    public function render()
    {
        return view('livewire.select-ubicacion');
    }

    public function updatedMunicipioId($id):void{
        $this->municipios = Municipio::where('EstadoId', $id)->get();
        if($this->municipio && $this->municipio->first()){
            $this->municipio = $this->municipio->first()['idMunicipio'];
        }else{
            $this->municipio = null;
        }
    }
}
