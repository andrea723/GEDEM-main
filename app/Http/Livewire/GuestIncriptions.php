<?php

namespace App\Http\Livewire;

use App\Models\Banks;
use App\Models\Categorias;
use App\Models\Estado;
use App\Models\InscripcionAtleta;
use App\Models\Municipio;
use App\Models\Parroquia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GuestIncriptions extends Component
{
    use LivewireAlert;

    ## Datos Personales
    public $type_document = 0;
    public $nationality = 0;
    public $identification;
    public $name;
    public $lastname;
    public $gender = 0;
    public $datebirth;
    
    ## Residencia Actual
    public $state = 0;
    public $municipality = 0;
    public $parish = 0;
    public $address;
    
    ## Informacion de Contacto
    public $email;
    public $phone;
    
    ## Informacion de Contacto
    public $recordtime;
    public $reducedmobility;
    
    ## Categoria
    public $category = 0;

    ## Datos Adicionales
    public $size = 0;
    public $runnigclub;

    ## Pago Inscripcion
    public $accountholder;
    public $accountidentification;
    public $datepay;
    public $bank = 0;
    public $reference;
    public $amount;
    public $accountphone;
    public $terms;

    ## Inputs Selects
    public $categorias = [];
    public $banks;
    public $estados;
    public $municipios = [];
    public $parroquias = [];

    public function mount()
    {
        $this->estados = Estado::orderBy('nombre', 'ASC')->get();
        $this->banks = Banks::orderBy('code', 'ASC')->get();
    }

    public function render()
    {
        return view('livewire.guest-incriptions');
    }

    public function updatedstate($value)
    {
        $this->reset(['municipios','parroquias','municipality','parish']);

        if ( $value != 0)
            $this->municipios = Municipio::where('estado_id', $value)->orderBy('nombre', 'ASC')->get();
    }

    public function updatedmunicipality($value)
    {
        $this->reset(['parroquias','parish']);

        if ( $value != 0)
            $this->parroquias = Parroquia::where('municipio_id', $value)->orderBy('nombre', 'ASC')->get();
    }

    public function updateddatebirth($value)
    {
        $nacimiento = Carbon::parse( $value )->toDateTimeString();
        $edad = Carbon::createFromDate( Carbon::parse( $value )->toDateTimeString() )->age;
            $this->categorias = Categorias::select('name','year_in','year_out')
                                    ->where('year_in', '<=', $edad)
                                    ->where('year_out', '>=', $edad)
                                    ->get();
    }


    public function submitFormulario()
    {
        $validation = Validator::make([
            'type_document' => $this->type_document,
            'nationality' => $this->nationality,
            'identification' => $this->identification,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'gender' => $this->gender,
            'datebirth' => $this->datebirth,
            'state' => $this->state,
            'municipality' => $this->municipality,
            'parish' => $this->parish,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'recordtime' => $this->recordtime,
            'reducedmobility' => $this->reducedmobility,
            'category' => $this->category,
            'size' => $this->size,
            'runnigclub' => $this->runnigclub,
            'accountholder' => $this->accountholder,
            'accountidentification' => $this->accountidentification,
            'datepay' => $this->datepay,
            'bank' => $this->bank,
            'reference' => $this->reference,
            'amount' => $this->amount,
            'accountphone' => $this->accountphone,
            'terms' => $this->terms,
        ],[
            'type_document' => 'required|in:1,2',
            'nationality' => 'required|in:1,2',
            'identification' => 'required|regex:/^[0-9]+$/|unique:inscripcion_atletas,identification',
            'name' => 'required|string|max:20',
            'lastname' => 'required|string|max:20',
            'gender' => 'required|in:1,2',
            'datebirth' => 'required',
            'state' => 'required|not_in:0',
            'municipality' => 'required|not_in:0',
            'parish' => 'required|not_in:0',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]+$/',
            'recordtime' => 'required',
            'category' => 'required|not_in:0',
            'size' => 'required|not_in:0',
            'accountholder' => 'required',
            'accountidentification' => 'required|regex:/^[0-9]+$/',
            'datepay' => 'required',
            'bank' => 'required|not_in:0',
            'reference' => 'required',
            'amount' => 'required',
            'accountphone' => 'required',
            'terms' => 'accepted',
        ]);

            if ($validation->fails())
                $validation->validate();

        InscripcionAtleta::create([
            'type_document' => $this->type_document == '1' ? 'Cédula' : 'Pasaporte',
            'nationality' => $this->nationality == '1' ? 'Venezolana' : 'Extranjera',
            'identification' => $this->identification,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'gender' => $this->gender == '1' ? 'Masculino' : 'Femenino',
            'datebirth' => $this->datebirth,
            'state' => $this->state,
            'municipality' => $this->municipality,
            'parish' => $this->parish,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'recordtime' => $this->recordtime,
            'reducedmobility' => $this->reducedmobility,
            'category' => $this->category,
            'size' => $this->size,
            'runnigclub' => $this->runnigclub,
            'accountholder' => $this->accountholder,
            'accountidentification' => $this->accountidentification,
            'datepay' => $this->datepay,
            'bank' => $this->bank,
            'reference' => $this->reference,
            'amount' => $this->amount,
            'accountphone' => $this->accountphone,
            'terms' => $this->terms,
        ]);

        return redirect()->route('guest-pending', ['id' => $this->identification ]);
    }
}
