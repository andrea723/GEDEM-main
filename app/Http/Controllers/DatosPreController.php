<?php
namespace App\Http\Livewire;
use Livewire\Component;
#namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datosp;

#class DatosPreController extends Controller
class DatospWizard extends Component
{
      
    /**
    *index para mostrar todos los registros
    *store para guardar un registro
    *update para actualizar todo
    *destroy para eliminar un registro
    *edit para mostrar el formulario de edicion 

    */

    public $h1="Animo Gely";
    public function viewGuest(Request $request)
    {
        return view('guests.index');
    }

    public function store(Request $request){

     
#validamos
        $request ->validate([
            'nombre' => 'required|min:30',
            'apellido' => 'required|min:30',
            'nationality' => 'required|min:2',
            'cedula',
            'pais'=> 'required|min:2',
            'placeBirth'=>'required',
            'maritalStatus'=>'required',
            'dateBirth'=>'required',
            'civilState'=>'required',
            'sexualOrigin'=>'required',
            'anotherOrientation',
            'particularSigns',
            'instructionLevel'=>'required',
            'instructionStatus'=>'required',
            'occupation'=>'required',
            'laborSkills'=>'required',
            'numberChildren'=>'required',
            'parroquia'=>'required',
            'direction'=>'required'
            
           
        ]);
       
        #creamos el objeto y asignamos los valores
           $datosp = new Datosp();
           $datosp->nombre = $request ->nombre;
           $datosp->apellido= $request ->apellido;
           $datosp->nationality= $request ->nationality;
           $datosp->cedula= $request ->cedula;
           $datosp->pais= $request ->pais;
           $datosp->placeBirth= $request ->placeBirth;
           $datosp->maritalStatus= $request ->maritalStatus;
           $datosp->dateBirth= $request -> dateBirth;
           $datosp->civilState= $request ->civilState;
           $datosp->sexualOrigin= $request ->sexualOrigin;
           $datosp->anotherOrientation= $request ->anotherOrientation;
           $datosp->particularSigns= $request ->particularSigns;
           $datosp->instructionLevel= $request ->instructionLevel;
           $datosp->instructionStatus= $request ->instructionStatus;
           $datosp->occupation= $request ->occupation;
           $datosp->laborSkills= $request ->laborSkills;
           $datosp->numberChildren= $request ->numberChildren;
           $datosp->parroquia= $request ->parroquia;
           $datosp->direction= $request ->direction;
          
           $datosp->save();
           dd($request->all);
           #redirijimos al usuario a una ruta con un mensaje
           return redirect()->route('datosp')->with('success','Registro creado con éxito');

    }
}
