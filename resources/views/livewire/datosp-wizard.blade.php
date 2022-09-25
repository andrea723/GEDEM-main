<tr class="row">
        <td class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">PRIVADOS DE LIBERTAD DATOS PERSONALES</h4>

                    <div id="basic-example">
                        <!-- Seller Details -->
                        <h3>Datos del Privado de Libertad</h3>
                        <section>
                          
                            <form wire:submit.prevent="save">
                           <!-- directiva seguridad token!--> 
                            @csrf 
                        
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nombre">Nombres</label>
                                            <input type="text"  class="form-control @error('nombre') is-invalid @enderror" id="nombre"  wire:model.defer="post.nombre">
                                            @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                 </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="apellido">Apellidos</label>
                                            <input type="text"  class="form-control @error('apellido') is-invalid @enderror" id="apellido"  wire:model.defer="apellido">
                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                 </span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="type_document">Tipo de Documento</label>
                                                <select  class="form-select @error('type_document') is-invalid @enderror"   id="type_document" wire:model.defer="type_document">
                                                    <option value="0" disabled select>Seleccione...</option>
                                                    <option value="1">Cédula</option>
                                                    <option value="2">Pasaporte</option>
                                                
                                                </select>
                                                @error('type_document')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nationality">Nacionalidad</label>
                                                <select  class="form-select @error('type_document') is-invalid @enderror"   id="nationality" wire:model.defer="nationality">
                                                    <option value="0" disabled select>Seleccione...</option>
                                                    <option value="1">Venezolano (a)</option>
                                                    <option value="2">Extranjero (a)</option>
                                                
                                                </select>
                                                @error('nationality')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="card">Cédula o Pasaporte</label>
                                            <input type="text" class="form-control @error('card') is-invalid @enderror" id="card" wire:model.defer="card">
                                            @error('card')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>        
                                    <div class="row">        
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="country">País de Origen</label>
                                                    <select class="form-select @error('country') is-invalid @enderror" id="country"   wire:model.defer="country">
                                                        
                                                    
                                                    </select>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror      
                                            </div>
                                        </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="placeBirth">Lugar de Nacimiento</label>
                                            <input type="text" class="form-control @error('placeBirth') is-invalid @enderror" id="placeBirth"  wire:model.defer="placeBirth">
                                            @error('placeBirth')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="maritalStatus">Estado Civil</label>
                                            <select id="maritalStatus" class="form-select @error('maritalStatus') is-invalid @enderror" wire:model.defer="maritalStatus">
                                                <option value="0" disabled select>Seleccione Estado Civil</option>
                                                <option value="Casado (a)">Casado (a)</option>
                                                <option value="Soltero (a)">Divorciado (a)</option>
                                                <option value="Unión de hecho estable">Unión de hecho estable</option>
                                                <option value="Viudo (a)">Viudo (a)</option>
                                             </select>
                                            @error('maritalStatus')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="dateBirth">Fecha de Nacimiento</label>
                                                <input id="dateBirth" class="form-control input-mask @error('dateBirth') is-invalid @enderror" wire:model.defer="dateBirth"                                               data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy">
                                                <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                                @error('dateBirth')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                 @enderror 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pancard-input">Género de Nacimiento</label>
                                            <select id="sexualOrigin" class="form-select @error('sexualOrigin') is-invalid @enderror" wire:model.defer="sexualOrigin">
                                                <option value="0" disabled select>Seleccione...</option>
                                                <option value="1">Femenino</option>
                                                <option value="2">Masculino</option>
                                            </select>
                                            @error('sexualOrigin')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="anotherOrientation">Orientación Sexual</label>
                                            <select id="anotherOrientation" class="form-select @error('anotherOrientation') is-invalid @enderror" wire:model.defer="anotherOrientation">
                                                <option value="0" disabled select>Seleccione...</option>
                                                <option value="Heterosexualidad">Heterosexualidad.</option>
                                                <option value="Homosexualidad">Homosexualidad</option>
                                                <option value="Bisexualidad">Bisexualidad</option>
                                                <option value="Pansexualidad">Pansexualidad</option>
                                                <option value="Asexualidad">Asexualidad</option>
                                                <option value="Demisexualidad">Demisexualidad</option>
                                                <option value="Lithsexualidad">Lithsexualidad</option>
                                                <option value="Autosexualidad">Autosexualidad</option>
                                                <option value="Antrosexualidad">Antrosexualidad</option>
                                                <option value="Polisexualidad">Polisexualidad</option>
                                                <option value="Otro">Otro</option>

                                            </select>
                                            @error('anotherOrientation')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>     
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label for="otraOrientation">Otra Orientación</label>
                                            <input type="text" class="form-control @error('otraOrientation') is-invalid @enderror" id="otraOrientation" wire:model.defer="otraOrientation">
                                            @error('otraOrientation')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror    
                                        </div>
                                        
                                    </div>
                                </div> 
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                       
                                        <div class="mb-3">
                                            <label for="particularSigns">Señas particulares</label>
                                            <input type="text" class="form-control @error('particularSigns') is-invalid @enderror" id="particularSigns" wire:model.defer="particularSigns">
                                            @error('particularSigns')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="instructionLevel">Nivel de Instrucción</label>
                                            <select id="instructionLevel" class="form-select @error('instructionLevel') is-invalid @enderror" wire:model.defer="instructionLevel">
                                                <option selectedvalue="0" disabled select>Seleccione...</option>
                                                <option value="Educación Inicial">Educación Inicial.</option>
                                                <option value="Educación Primaria">Educación Primaria</option>
                                                <option value="Educación Secundaria">Educación Secundaria</option>
                                                <option value="Educación Superior">Educación Superior</option>
                                                

                                            </select>
                                            @error('instructionLevel')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>  
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label for="instructionStatus">Estado del Nivel de Instrucción</label>
                                                <select id="instructionStatus" class="form-select @error('instructionStatus') is-invalid @enderror" wire:model.defer="instructionStatus">
                                                    <option value="0" disabled select>Selecione...</option>
                                                    <option value="Iniciando">Iniciando</option>
                                                    <option value="En curso">En curso</option>
                                                    <option value="Culminado">Culminado</option>
                                                    <option value="En espera de titulo">En espera de titulo</option>
                                                    

                                                </select>
                                                @error('instructionStatus')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                        </div>
                                       
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="occupation">Ocupación</label>
                                            <input type="text" class="form-control @error('occupation') is-invalid @enderror" id="occupation" wire:model.defer="occupation">
                                            @error('occupation')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                </div>  
                                <div class="row">  
                                    <div class="col-lg-6"> 
                                        
                                        <div class="mb-3">
                                            <label for="laborSkills">Habilidades Laborales</label>
                                            <input type="text" class="form-control"  id="laborSkills" wire:model.defer="laborSkills">
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6"> 
                                       
                                        <div class="mb-3">
                                            <label for="numberChildren">Cantidad de Hijos</label>
                                            <select id="numberChildren" class="form-select @error('numberChildren') is-invalid @enderror" wire:model.defer="numberChildren">
                                                <option value="0" disabled select>Select...</option>
                                                <option value="0">0</option>
                                                <option value="1">1.</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                

                                            </select>
                                            @error('numberChildren')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                          
                                    </div> 
                                </div>  
                                
                                <div class="row">  
                                    <div class="mb-3">
                                        <label class="d-block mb-3">¿Inscrito en el Registro Electoral?</label>

                                            <div class="form-check form-check-inline ">
                                                <input class="form-check-input @error('electoral') is-invalid @enderror" type="radio" name="electoral"
                                                    id="electoral" value="Si"  wire:model.defer="electoral">
                                                <label class="form-check-label" for="inlineRadio1">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('electoral') is-invalid @enderror" type="radio" name="electoral"
                                                    id="electoral" value="No"  wire:model.defer="electoral">
                                                <label class="form-check-label" for="electoral">No</label>
                                            </div>
                                            @error('electoral')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                    </div>
                                
                                </div>
                                <h3 class="card-title mb-4">Domicilio</h3> 
                                <div class="row">  
                                    <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="region">Estado</label>
                                                <select id="region" class="form-select @error('region') is-invalid @enderror" wire:model.defer="region">
                                                    <option value="0" disabled select>Seleccione...</option>
                                                    @foreach ( $estados as $element )
                                                        <option value="{{ $element['id'] }}">{{ $element['nombre'] }}</option>
                                                    @endforeach
                                                    

                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="form-label">Municipio</label>
                                                <select class="form-select @error('municipality') is-invalid @enderror" id="municipality" wire:model="municipality" {{ $state != 0 ? '' : 'disabled' }}>
                                                    <option value="0" disabled select>Seleccione...</option>
                                                    @foreach ( $municipios as $element )
                                                        <option value="{{ $element['id'] }}">{{ $element['nombre'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('municipality')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="parroquia">Parroquía</label>
                                                <select class="form-select @error('parish') is-invalid @enderror" id="parish" wire:model="parish" {{ $municipality != 0 ? '' : 'disabled' }}>
                                                    <option value="0" disabled select>Seleccione...</option>
                                                    @foreach ( $parroquias as $element )
                                                        <option value="{{ $element['id'] }}">{{ $element['nombre'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('parish')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                </div> 
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="direction">Dirección</label>
                                            <textarea class="form-control @error('direction') is-invalid @enderror" id="direction" rows="3" wire:model.defer="direction"></textarea>
                                            @error('direction')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                             
                            </form>
                        </section>
                       
                        <!-- Company Document -->
                        <h3>DATOS DEL FAMILIAR</h3>
                        <section>
                            <form  wire:submit.prevent="save">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nomFami">Nombres</label>
                                            <input type="text" class="form-control" id="nomFami" wire:model.defer="nomFami"> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="apeFami">Apellidos</label>
                                            <input type="text" class="form-control" id="apeFami" wire:model.defer="apeFami">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Nacionalidad</label>
                                                <select id="naciFami" class="form-select" wire:model.defer="naciFami">
                                                    <option selected>Seleccione Nacionalidad</option>
                                                    <option value="V">Venezolano (a)</option>
                                                    <option value="E">Extranjero (a)</option>
                                                
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ceduFami">Cédula</label>
                                            <input type="number" class="form-control" id="ceduFami" wire:model.defer="ceduFami">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label>Parentesco</label>
                                                <select id="parenteso" class="form-select" wire:model.defer="parentesco">
                                                    <option selected>Seleccione Nacionalidad</option>
                                                    <option value="Padre">Padre</option>
                                                    <option value="Madre">Madre</option>
                                                    <option value="Suegro/a">Suegro/a</option>
                                                    <option value="Hijo/a">Hijo/a</option>
                                                    <option value="Yerno">Yerno</option>
                                                    <option value="Nuera">Nuera</option>
                                                    <option value="Abuelo/a">Abuelo/a</option>
                                                    <option value="Nieto/a">Nieto/a</option>
                                                    <option value="Hermano/a">Hermano/a</option>
                                                    <option value="Cuñado/a">Cuñado/a</option>
                                                    <option value="Bisabuelo/a">Bisabuelo/a</option>
                                                    <option value="Biznieto/a">Biznieto/a</option>
                                                    <option value="Tio/a">Tio/a</option>
                                                    <option value="Sobrino/a">Sobrino/a</option>
                                                </select>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nroTelef">N° Teléfono</label>
                                            <input type="number" class="form-control" id="nroTelef" wire:model.defer="nroTelef">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="mb-3">
                                        <label class="d-block mb-3">¿Pertenece a una Comunidad Indígena?</label>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="indigena"
                                                    id="indigena" value="Si" wire:model.defer="indigena">
                                                <label class="form-check-label" for="inlineRadio1">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="indigena"
                                                    id="indigena" value="No" wire:model.defer="indigena">
                                                <label class="form-check-label" for="indigena">No</label>
                                            </div>
                                    </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="observaciones">Observaciones</label>
                                            <textarea id="observaciones" class="form-control" rows="2" wire:model.defer="observaciones"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h3>DATOS DE SALUD</h3>
                        <section>
                            <div>
                                <form wire:submit.prevent="save">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="d-block mb-3">¿Presenta embarazo?</label>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="presEmbarazo"
                                                        id="presEmbarazo" value="Si" wire:model.defer="presEmbarazo">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="presEmbarazo"
                                                        id="presEmbarazo" value="No" wire:model.defer="presEmbarazo">
                                                    <label class="form-check-label" for="presEmbarazo">No</label>
                                                </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeEmba">Especifique</label>
                                                <input type="text" class="form-control" id="espeEmba" wire:model.defer="espeEmba">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="d-block mb-3">¿Evaluado por Médico Forense?</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="evaMeFo"
                                                        id="evaluadoMedicoForen" value="Si" wire:model.defer="evaluadoMedicoForen">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="evaMeFo"
                                                        id="evaluadoMedicoForen" value="No" wire:model.defer="evaluadoMedicoForen">
                                                    <label class="form-check-label" for="evaMeFo">No</label>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeForen">Especifique</label>
                                                <input type="text" class="form-control" id="espeForen" wire:model.defer="espeForen">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="d-block mb-3">¿Presenta heridas? </label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="presHeri"
                                                        id="presentaHeridas" value="Si" wire:model.defer="presHeri">
                                                    <label class="form-check-label" for="presentaHeridas">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="presHeri"
                                                        id="presentaHeridas" value="No" wire:model.defer="presHeri">
                                                    <label class="form-check-label" for="presentaHeridas">No</label>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeHeri">Especifique</label>
                                                <input type="text" class="form-control" id="espeHeri" wire:model.defer="espeHeri">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="d-block mb-3">¿Posee tratamiento médico?  </label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseTrataMedico"
                                                        id="poseeTrataMedico" value="Si" wire:model.defer="poseeTrataMedico">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseTrataMedico"
                                                        id="poseeTrataMedico" value="No" wire:model.defer="poseeTrataMedico">
                                                    <label class="form-check-label" for="poseTrataMedico">No</label>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeTratamiento">Especifique</label>
                                                <input type="text" class="form-control" id="espeTratamiento" wire:model.defer="espeTratamiento">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="d-block mb-3">¿Posee enfermedad general?</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseEnferGeneral"
                                                        id="poseEnferGeneral" value="Si" wire:model.defer="poseEnferGeneral">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseEnferGeneral"
                                                        id="poseEnferGeneral" value="No" wire:model.defer="poseEnferGeneral">
                                                    <label class="form-check-label" for="poseEnferGeneral">No</label>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeEnfeGeneral">Especifique</label>
                                                <input type="text" class="form-control" id="espeEnfeGeneral" wire:model.defer="espeEnfeGeneral">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="d-block mb-3">¿Posee enfermedad específica?</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseEnferesPecífica"
                                                        id="poseEnferesPecífica" value="Si" wire:model.defer="poseEnferesPecífica">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseEnferesPecífica"
                                                        id="poseEnferesPecífica" value="No" wire:model.defer="poseEnferesPecífica">
                                                    <label class="form-check-label" for="poseEnferesPecífica">No</label>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="espeEnfeEsPecífica">Especifique</label>
                                                <input type="text" class="form-control" id="espeEnfeEsPecífica" wire:model.defer="espeEnfeEsPecífica">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </section>
                         <!-- Bank Details -->
                         <h3>TALLAS GENERALES</h3>
                        <section>
                            <div>
                                <form  wire:submit.prevent="save">
                                      
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="d-block mb-3">Peso (Kilogramos)</label>
                                            <input type="text" class="form-control" id="pesoKilo" wire:model.defer="pesoKilo">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="d-block mb-3">Talla de Camisa</label>
                                            <input type="text" class="form-control" id="tallaCamisa" wire:model.defer="tallaCamisa">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="d-block mb-3">Talla de Pantalón</label>
                                            <input type="text" class="form-control" id="tallaPantalon" wire:model.defer="tallaPantalon">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="tallaZapatos">Talla de Zapatos</label>
                                            <input type="text" class="form-control" id="tallaZapatos" wire:model.defer="tallaZapatos">
                                        </div>
                                    </div>
                                
                                    
                                </form>
                            </div>
                        </section>
                         <!-- Bank Details -->
                         <h3>PRENDAS DE VESTIR</h3>
                        <section>
                            <div>
                                <form wire:submit.prevent="save">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="poseeCamisa">Camisa</label>
                                            <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseecamisa"
                                                        id="poseecamisa" value="Si" wire:model.defer="poseeCamisa">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseecamisa"
                                                        id="poseecamisa" value="No" wire:model.defer="poseeCamisa">
                                                    <label class="form-check-label" for="poseecamisa">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="poseePantalon">Pantalón</label>
                                            <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseepantalon"
                                                        id="poseepantalon" value="Si" wire:model.defer="poseePantalon">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseepantalon"
                                                        id="poseepantalon" value="No" wire:model.defer="poseePantalon">
                                                    <label class="form-check-label" for="poseepantalon">No</label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="poseeZapatos">Zapatos</label>
                                            <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseezapatos"
                                                        id="poseezapatos" value="Si" wire:model.defer="poseeZapatos">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="poseezapatos"
                                                        id="poseezapatos" value="No" wire:model.defer="poseeZapatos">
                                                    <label class="form-check-label" for="poseezapatos">No</label>
                                                </div>
                                        </div>
                                        
                                        
                                    </div>
                                
                                    
                                </form>
                            </div>
                        </section>
                     
                        <!-- Confirm Details -->
                        <h3>Confirmar Información</h3>
                        <section>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary waves-effect waves-light" type="button" wire:click="save">Completar Inscripción</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </td>
        <!-- end col -->
    </tr>
    <!-- end row --> 

    @wireUiScripts 