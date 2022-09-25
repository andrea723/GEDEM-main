<?php

namespace App\Http\Controllers;

use App\Models\InscripcionAtleta;
use Illuminate\Http\Request;
use PDF;

class GuestController extends Controller
{
    /*Guest Index*/
    public function viewGuest(Request $request)
    {
        return view('guests.index');
    }

    /*Guest Index*/
    public function viewNewCompetitor()
    {
        return view('guests.inscripcion');
    }

    /*Guest Index*/
    public function viewValidatePayment($id)
    {
        if ( InscripcionAtleta::where([ 'identification' => $id ])->doesntExist() )
            abort(404);

            if ( InscripcionAtleta::where([ 'identification' => $id ])->pluck('aproved')->first() === 'pending' )
                return view('guests.pending');

            if ( InscripcionAtleta::where([ 'identification' => $id ])->pluck('aproved')->first() !== 'pending' )
                return view('guests.aproved', compact('id'));

    }

    /*Guest Index*/
    public function viewGeneratePDF($id)
    {
        if ( InscripcionAtleta::where([ 'identification' => $id ])->doesntExist() )
            abort(404);

        $content = InscripcionAtleta::select('name','lastname','identification','created_at')->where([ 'identification' => $id ])->first()->toArray();

        return PDF::loadView('pdf.pdf_liberacion', compact('content'))->stream('LIBERACIÓN DE RESPONSABILIDAD.pdf');
    }
}
