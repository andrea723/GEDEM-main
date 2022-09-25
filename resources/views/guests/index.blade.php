@extends('layouts.guess.master-without-nav')

@section('title')
   Registro de Datos del Privado de Libertad
@endsection

@section('css')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

@endsection

@section('header')

@endsection

@section('body')
  
    <body>
        
@endsection

@section('content')
        @slot('li_1') Forms @endslot
       
        @slot('title') Datos Privados de Libertad @endslot




        @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Datos Privados de Libertad @endslot
        @endcomponent
      
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="home-wrapper">
                        <h3 class="mt-5 text-center"> SISTEMA DE REGISTRO DE INFORMACIÓN DE PRIVADOS DE LIBERTAD EN CENTROS DE DETENCIÓN PREVENTIVOS DEL ESTADO MIRANDA</h3>
                                                  @livewire('datosp-wizard')
                    </div>
                </div>
            </div>
        </div>
    </section>

 
   


@endsection

@section('script')
<!-- jquery step -->


<!-- Alpine v3 -->

<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
    <!-- form mask -->
    <script src="{{ URL::asset('/assets/libs/inputmask/inputmask.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/moment/moment.min.js') }}"></script>

    <!-- form mask init -->
    <script src="{{ URL::asset('/assets/js/pages/form-mask.init.js') }}"></script>
    <script>
        $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
});  

    </script>
  
@endsection
