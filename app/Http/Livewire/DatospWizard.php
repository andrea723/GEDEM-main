<?php

namespace App\Http\Livewire;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Datosp;
use App\Models\DatoSalud;
use App\Models\DatoFamilia;
use App\Models\PrendasVestir;
use App\Models\TallasGeneral;
use App\Post;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class DatospWizard extends Component
{

  
    
    use LivewireAlert;
       ##Datos que necito
   public $amount;
    ## Datos Personales
    public $nombre = 0;
    public $apellido = 0;
    public $nationality = 0;
    public $type_document = 0;
    public $cedula;
    public $pais;
    public $geplaceBirth;
    public $datebirth;
    public $civilState = 0;
    public $sexualOrigin = 0;
    public $anotherOrientation = 0;
    public $otraOrientation;
    public $particularSigns;
    public $instructionLevel =0;
    public $instructionStatus = 0;
    public $occupation;
    public $laborSkills;
    public $numberChildren = 0;
    public $parroquia =0;
    public $direction;
    ## Datos del familiar
    public $nomFami;
    public $apeFami;
    public $naciFami = 0;
    public $ceduFami;
    public $parenteso = 0;
    public $nroTelef;
    public $indigena;
    public $evaMeFo;
    public $region = 0;
   #Datos Salud
    public $presEmbarazo;
    public $espeEmba;
    public $espeForen;
    public $presHeri;
    public $espeHeri;
    public $poseTrataMedico;
    public $espeTratamiento;
    public $poseEnferGeneral;
    public $espeEnfeGeneral;
    public $poseEnferesPecífica;
    public $espeEnfeEsPecífica;
   #TALLAS GENERALES    
    public $pesoKilo;
    public $tallaCamisa;
    public $tallaPantalon;
    public $tallaZapatos;
    #PRENDAS DE VESTIR
    public $poseeCamisa;
    public $poseepantalon;
    public $poseezapatos;
    public $successMessage = '';
     ## Residencia Actual
     public $state = 0;
     public $municipality = 0;
     public $parish = 0;
    ## Inputs Selects
    public $paises = [];
    public $estados;
    public $municipios = [];
    public $parroquias = [];
    

    public function mount()
    {
        $this->estados = Estado::orderBy('nombre', 'ASC')->get();
        
    }
    public function render()
    {
        return view('livewire.datosp-Wizard');
    }
    public function updatedregion($value)
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
   

    public function submitFormulario()
    {  
        
     console.log();
        $validation = Validator::make([
            
           'cedula' => $this->cedula,
            'pais' => $this->pais,
            'geplaceBirth' => $this->geplaceBirth,
            'datebirth' => $this->datebirth,
            'civilState' => $this->civilState,
            'anotherOrientation' => $this->anotherOrientation,
            'otraOrientation' => $this->otraOrientation,
            'particularSigns' => $this->particularSigns,
            'instructionLevel' => $this->instructionLevel,
            'instructionStatus' => $this->instructionStatus,
            'occupation' => $this->occupation,
            'laborSkills' => $this->laborSkills,
            'numberChildren' => $this->numberChildren,
            'region' => $this->region,
            'municipality' => $this->municipality,
            'nomFami' => $this->nomFami,
            'apeFam' => $this->apeFam,
            'naciFami' => $this->naciFami,
            'ceduFami' => $this->ceduFami,
            'parenteso' => $this->parenteso,
            'nroTelef' => $this->nroTelef,
            'indigena' => $this->indigena,
            'evaMeFo' => $this->terms,
            'presEmbarazo' => $this->presEmbarazo,
            'espeEmba' => $this->espeEmba,
            'espeForen' => $this->espeForen,
            'presHeri' => $this->presHeri,
            'espeHeri' => $this->espeHeri,
            'poseTrataMedico' => $this->poseTrataMedico,
            'espeTratamiento' => $this->espeTratamiento,
            'poseEnferGeneral'=> $this->poseEnferGeneral,
            'espeEnfeGeneral'=> $this->espeEnfeGeneral,
            'poseEnferesPecífica'=> $this->poseEnferesPecífica,
            'espeEnfeEsPecífica'=> $this->espeEnfeEsPecífica,
            'pesoKilo' => $this->pesoKilo,
            'tallaCamisa' => $this->tallaCamisa,
            'tallaPantalon' => $this->tallaPantalon,
            'tallaZapatos' => $this->tallaZapatos,
            'poseeCamisa' => $this->poseeCamisa,
            'poseepantalon' => $this->poseepantalon,
            'poseezapatos' => $this->poseezapatos,
            
        ],[
            'nationalidad' => 'required|in:1,2',
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'sexualOrigin'=> 'required|in:1,2',
            'geplaceBirth' => 'required',
            'region' => 'required|not_in:0',
            'municipality' => 'required|not_in:0',
            'parroquia'=>'parroquia',
            'direction' => 'required',
            'tallaCamisa' => 'required',
            'tallaPantalon' => 'required',
            'tallaZapatos' => 'required|regex:/^[0-9]+$/',
            
        ]);

            if ($validation->fails())
                $validation->validate();

                Datosp::create([
            'cedula' => $this->cedula,
            'nombre' =>  $this->nombre,
            'apellido' =>  $this->apellido,
            'sexualOrigin'=> $this->gender == '1' ? 'Masculino' : 'Femenino',
            'otraOrientation' => $this->otraOrientation,
            'geplaceBirth' =>  $this->geplaceBirth,
            'region'=> $this->region,
            'municipality' => $this->municipality,
            'parroquia' => $this->parroquia,
            'pais' => $this->pais,
            'geplaceBirth' => $this->geplaceBirth,
            'datebirth' => $this->datebirth,
            'civilState' => $this->civilState,
            'anotherOrientation' => $this->anotherOrientation,
            'particularSigns' => $this->particularSigns,
            'instructionLevel' => $this->instructionLevel,
            'instructionStatus' => $this->instructionStatus,
            'occupation' => $this->occupation,
            'laborSkills' => $this->laborSkills,
            'numberChildren' => $this->numberChildren,
                       
            
        ]);
        DatoFamilia::create([
            'nomFami' => $this->nomFami,
            'apeFam' => $this->apeFam,
            'naciFami' => $this->naciFami,
            'ceduFami' => $this->ceduFami,
            'parenteso' => $this->parenteso,
            'nroTelef' => $this->nroTelef,
            'indigena' => $this->indigena,
            'evaMeFo' => $this->terms,
        ]);

            DatoSalud::create([
            'presEmbarazo' => $this->presEmbarazo,
            'espeEmba' => $this->espeEmba,
            'espeForen' => $this->espeForen,
            'presHeri' => $this->presHeri,
            'espeHeri' => $this->espeHeri,
            'poseTrataMedico' => $this->poseTrataMedico,
            'espeTratamiento' => $this->espeTratamiento,
            'poseEnferGeneral'=> $this->poseEnferGeneral,
            'espeEnfeGeneral'=> $this->espeEnfeGeneral,
            'poseEnferesPecífica'=> $this->poseEnferesPecífica,
            'espeEnfeEsPecífica'=> $this->espeEnfeEsPecífica,
            ]);
            TallasGeneral::create([
                'pesoKilo' => $this->pesoKilo,
                'tallaCamisa' => $this->tallaCamisa,
                'tallaPantalon' => $this->tallaPantalon,
                'tallaZapatos' => $this->tallaZapatos,
            ]);


            PrendasVestir::create([
                'poseeCamisa' => $this->poseeCamisa,
                'poseepantalon' => $this->poseepantalon,
                'poseezapatos' => $this->poseezapatos,
            ]);
    $this->successMessage = 'Product Created Successfully.';
    $this->clearForm();
   
    // return redirect()->route('guest-datosp_guardados', ['id' => $this->identification ]);
    }
    public function save()
    {
        dd("entre");
console.log("entre");
        $this->validate();
 
        $this->post->save();
      
    }
    public function clearForm()
    {
        $this->name = '';
        $this->cedula= '';
        $this->pais= '';
        $this->geplaceBirth= '';
        $this->datebirth= '';
        $this->civilState= '';
        $this->anotherOrientation= '';
        $this->otraOrientation='';
        $this->particularSigns= '';
        $this->instructionLevel= '';
        $this->instructionStatus= '';
        $this->occupation= '';
        $this->laborSkills= '';
        $this->numberChildren= '';
        $this->nomFami= '';
        $this->apeFam= '';
        $this->naciFami= '';
        $this->ceduFami= '';
        $this->parenteso= '';
        $this->nroTelef= '';
        $this->indigena= '';
        $this->terms= '';
        $this->presEmbarazo= '';
        $this->espeEmba= '';
        $this->espeForen= '';
        $this->presHeri= '';
        $this->espeHeri= '';
        $this->poseTrataMedico= '';
        $this->espeTratamiento= '';
        $this->poseEnferGeneral= '';
        $this->espeEnfeGeneral= '';
        $this->poseEnferesPecífica= '';
        $this->espeEnfeEsPecífica= '';
        $this->pesoKilo= '';
        $this->tallaCamisa= '';
        $this->tallaPantalon= '';
        $this->tallaZapatos= '';
        $this->poseeCamisa= '';
        $this->poseepantalon= '';
        $this->poseezapatos= '';
    }  

}
