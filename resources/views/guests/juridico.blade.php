@extends('layouts.guess.master-without-nav')

@section('title')
SISTEMA DE REGISTRO DE INFORMACIÓN DE PRIVADOS DE LIBERTAD EN CENTROS DE DETENCIÓN PREVENTIVOS DEL ESTADO MIRANDA
@endsection

@section('css')



@endsection

@section('header')

@endsection

@section('body')
  
    <body>
        
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">DATOS JURÍDICOS</h4>

                    <div id="basic-example">
                        <!-- Seller Details -->
                        <h3>DATOS JURÍDICOS</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="fetc_ingre">Fecha de Ingreso</label>
                                            <input type="text" class="form-control" id="fetc_ingre"
                                            data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy">
                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="fetc_detencion">Fecha de Detención</label>
                                            <input type="text" class="form-control" id="fetc_detencion"
                                            data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy">
                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Círculo Judicial</label>
                                            <input type="text" class="form-control" id="circuJudicial">
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="extension">Extensión</label>
                                            <input type="text" class="form-control" id="extension">
                                        </div>
                                    </div>
                                    </div>        
                                    <div class="row">        
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label>Tribunal</label>
                                                    <select id="pais_origen" class="form-select">
                                                        <option selected>Seleccione Pais de Origen</option>
                                                        <option value="V">Venezolano (a)</option>
                                                        <option value="E">Extranjero (a)</option>
                                                    
                                                    </select>
                                            </div>
                                        </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="faceTribunal">Fase Tribunal</label>
                                            <input type="text" class="form-control" id="faceTribunal">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Estado Civil</label>
                                            <input type="text" class="form-control" id="faceTribunal">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="numTribunal">Número del Tribunal</label>
                                                <input  type="numero" id="numTribunal" class="form-control input-mask">
                                         </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="numExpediente">Número del Expediente</label>
                                            <input  type="text" id="numExpediente" class="form-control input-mask">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label   for="numBoleta">Número de la Boleta de Excarcelación</label>
                                            <input  type="text" id="numBoleta" class="form-control input-mask">
                                        </div>
                                    </div> 
                                </div>     
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label  for="numBoletaLibertad">Número de la Boleta de Libertad</label>
                                            <input type="text" class="form-control" id="numBoletaLibertad">
                                        </div>
                                        
                                    </div>
                                </div> 
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                       
                                        <div class="mb-3">
                                            <label for="razonLibertad">Razón de Libertad</label>
                                            <input type="text" class="form-control" id="razonLibertad">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="numBoletaTraslado">Número de la Boleta de Traslado</label>
                                            <input type="text" class="form-control" id="numBoletaTraslado">
                                                

                                            </select>
                                        </div>
                                    </div> 
                                </div>  
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label for="centrRecluTraslado">Centro de Reclusión de Traslado</label>
                                            <input type="text" class="form-control" id="centrRecluTraslado">
                                               
                                        </div>
                                       
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="razTraslado">Razón del Traslado</label>
                                            <input type="text" class="form-control" id="razTraslado">
                                        </div>
                                    </div> 
                                </div> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="d-block mb-3">Otra Causa Jurídica</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otraCausaJuridica"
                                                    id="otraCausaJuridica" value="Si">
                                                <label class="form-check-label" for="inlineRadio1">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="otraCausaJuridica"
                                                    id="otraCausaJuridica" value="No">
                                                <label class="form-check-label" for="otraCausaJuridica">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="tiempoFisico">Tiempo Físico</label>
                                            <input type="text" class="form-control" id="tiempoFisico">
                                        </div>
                                    </div>
                                        
                                    </div> 
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label for="delitoExpediente">Delito del Expediente</label>
                                            <input type="text" class="form-control" id="delitoExpediente">
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6"> 
                                       
                                        <div class="mb-3">
                                            <label for="delitoMayorGravedad">Delito de Mayor Gravedad</label>
                                            <input type="text" class="form-control" id="delitoMayorGravedad">
                                        </div>
                                          
                                    </div> 
                                </div>  
                                
                                <div class="row">  
                                    <div class="mb-3">
                                        <label class="cantidaDroga">Cantidad de Droga</label>
                                        <input type="text" class="form-control" id="cantidaDroga">
                                    </div>
                                
                                </div>
                                <h3 class="card-title mb-4">Domicilio</h3> 
                                <div class="row">  
                                    <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="casoConmocion">Caso de Conmoción Pública</label>
                                                <input type="text" class="form-control" id="casoConmocion">
                                            </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="caposeeDefensa">¿Posee Defensa?</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="caposeeDefensa"
                                                    id="caposeeDefensa" value="Si">
                                                <label class="form-check-label" for="inlineRadio1">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="caposeeDefensa"
                                                    id="caposeeDefensa" value="No">
                                                <label class="form-check-label" for="caposeeDefensa">No</label>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="tipoDefensa">Tipo de Defensa</label>
                                                <input type="text" class="form-control" id="tipoDefensa">
                                            </div>
                                        </div>
                                    
                                </div> 
                                <div class="row">
                                <h4>Abogado</h4>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nombreAbogado">Nombre</label>
                                            <input type="text" class="form-control" id="nombreAbogado">
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="apellidoAbogado">Apellido</label>
                                            <input type="text" class="form-control" id="apellidoAbogado">
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="row">
                               
                               <div class="col-lg-6">
                                   <div class="mb-3">
                                       <label for="indiceDelictivo">Índice Delictivo</label>
                                       <input type="text" class="form-control" id="indiceDelictivo">
                                   </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="egreso">¿Egresó? </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="egreso"
                                                    id="egreso" value="Si">
                                                <label class="form-check-label" for="inlineRadio1">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="egreso"
                                                id="egreso" value="No">
                                            <label class="form-check-label" for="egreso">No</label>
                                        </div>
                                    </div>
                                </div>

                               
                           </div>
                           <div class="row">
                                <div class="col-lg-6">
                                   <div class="mb-3">
                                       <label for="condiJuridica">Condición Jurídica</label>
                                       <input type="text" class="form-control" id="condiJuridica">
                                   </div>
                                                                
                               </div>
  
                           </div>
                           
                            </form>
                        </section>
                       
@section('script')
    <!-- form mask -->
    <script src="{{ URL::asset('/assets/libs/inputmask/inputmask.min.js') }}"></script>

    <!-- form mask init -->
    <script src="{{ URL::asset('/assets/js/pages/form-mask.init.js') }}"></script>
    
@endsection
