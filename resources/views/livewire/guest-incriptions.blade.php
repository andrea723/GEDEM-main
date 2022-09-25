<div class="row">
    <h5 class="font-size-15 text-uppercase text-center mt-3">Planilla de Inscripción</h5>
    <div class="col-md-6">
        <div class="card mt-3 maintenance-box">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title mb-4">Datos Personales</h4>
                    <div class="row ms-1">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="type_document" class="form-label">Tipo de Documento</label>
                                <select class="form-select @error('type_document') is-invalid @enderror" id="type_document" wire:model.defer="type_document">
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
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="nationality" class="form-label">Nacionalidad</label>
                                <select class="form-select @error('nationality') is-invalid @enderror" id="nationality" wire:model.defer="nationality">
                                    <option value="0" disabled select>Seleccione...</option>
                                    <option value="1">Venezolano</option>
                                    <option value="2">Extranjero</option>
                                </select>
                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="identification" class="form-label">Cedula o Pasaporte</label>
                                <input type="text" class="form-control @error('identification') is-invalid @enderror" id="identification" wire:model.defer="identification">
                                @error('identification')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model.defer="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" wire:model.defer="lastname">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Genero</label>
                                <select class="form-select @error('gender') is-invalid @enderror" id="gender" wire:model.lazy="gender">
                                    <option value="0" disabled select>Seleccione...</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="datebirth">Fecha de Nacimiento</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control @error('datebirth') is-invalid @enderror" id="datebirth" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" wire:model="datebirth" onchange="this.dispatchEvent(new InputEvent('input'))">
                                    @error('datebirth')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Residencia Actual</h4>
                    <div class="row ms-1">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="state">Estado</label>
                                <select class="form-select @error('state') is-invalid @enderror" id="state" wire:model="state">
                                    <option value="0" disabled select>Seleccione...</option>
                                    @foreach ( $estados as $element )
                                        <option value="{{ $element['id'] }}">{{ $element['nombre'] }}</option>
                                    @endforeach
                                </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="municipality">Municipio</label>
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
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="parish">Parroquia</label>
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
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Direccion</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" wire:model.defer="address"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Informacion de Contacto</h4>
                    <div class="row ms-1">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model.defer="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Numero Telefónico</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" wire:model.defer="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Mejor tiempo registrado</h4>
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input id="timepicker" type="text" class="form-control @error('recordtime') is-invalid @enderror" placeholder="hh:mm:ss" wire:model.defer="recordtime" onchange="this.dispatchEvent(new InputEvent('input'))">
                                @error('recordtime')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Movilidad reducida</h4>
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" value="mr_on" wire:model.lazy="reducedmobility">
                                    <label class="form-check-label" for="formRadios1">Movilidad reducida con silla de ruedas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios2" value="mr_off" wire:model.lazy="reducedmobility">
                                    <label class="form-check-label" for="formRadios2">Movilidad reducida sin silla de ruedas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Categorias</h4>
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <select class="form-select @error('category') is-invalid @enderror" id="category" wire:model.defer="category" {{ $datebirth != null && count( $categorias ) != 0 ? '' : 'disabled' }}>
                                    <option value="0" disabled select>Seleccione...</option>
                                    @foreach ($categorias as $element)
                                        <option value="{{ $element['name'] }}">{{ $element['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4 class="card-title mb-4">Datos adicionales</h4>
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="size">Talla de franela.</label>
                                <small>Recuerde que no se realizan cambios de talla</small>
                                <select class="form-select @error('size') is-invalid @enderror" id="size" wire:model.defer="size">
                                    <option value="0" disabled select>Seleccione...</option>
                                    @if ( $gender == '1')
                                        <option value="S">Hombre Talla S</option>
                                        <option value="L">Hombre Talla L</option>
                                        <option value="XL">Hombre Talla XL</option>
                                        <option value="XXL">Hombre Talla XXL</option>
                                    @endif
                                    @if ( $gender == '2')
                                        <option value="XS">Dama Talla XS</option>
                                        <option value="S">Dama Talla S</option>
                                        <option value="M">Dama Talla M</option>
                                        <option value="L">Dama Talla L</option>
                                        <option value="XL">Dama Talla XL</option>
                                    @endif
                                </select>
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="runnigclub" class="form-label">Pertenece a algun club de corredor?</label>
                                <input type="text" class="form-control" id="runnigclub" wire:model.defer="runnigclub" placeholder="Nombre del Club">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mt-3">
            <h5 class="font-size-15 text-uppercase text-center mt-3">Datos y Método de Pago</h5>
            <div class="col-md-12 ms-3">
                <div class="mb-2 mt-3">                                                
                    <p class="mb-1"><strong>Beneficiario:</strong> RIF G 20004596-5</p>
                    <p class="mb-1"><strong>Banco Destino:</strong> Banco de Venezuela</p>
                    <p class="mb-1"><strong>N° Cuenta:</strong> 0102-0479-81-0000083085</p>
                </div>
                <small><strong>* Solo se permiten realizar transferencias electrónicas</strong></small>
            </div>
        </div>
        <hr>
        <div class="card mt-2 maintenance-box">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title mb-4">Registro del Pago de Inscripción</h4>
                    <div class="row ms-1">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="accountholder">Nombre del títular de la cuenta</label>
                                <input type="text" class="form-control @error('accountholder') is-invalid @enderror" id="accountholder" wire:model.defer="accountholder">
                                @error('accountholder')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label" for="accountidentification">Cédula o RIF del titular de la cuenta</label>
                                <input type="text" class="form-control @error('accountidentification') is-invalid @enderror" id="accountidentification" wire:model.defer="accountidentification">
                                @error('accountidentification')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="datepay">Fecha del pago</label>
                                <div class="input-group" id="datepicker1">
                                    <input type="text" class="form-control @error('datepay') is-invalid @enderror" id="datepay" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true" wire:model="datepay" onchange="this.dispatchEvent(new InputEvent('input'))">
                                    @error('datepay')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label class="form-label" for="bank">Banco</label>
                                <select class="form-select @error('bank') is-invalid @enderror" id="bank" wire:model.defer="bank">
                                    <option value="0" disabled select>Seleccione...</option>
                                    @foreach ($banks as $element)
                                        <option value="{{ $element['code'] }}">{{ $element['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label" for="reference">Número de Referencia</label>
                                <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" wire:model.defer="reference">
                                @error('reference')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="amount">Monto cancelado</label>
                                <input type="number" step="0.01" class="form-control @error('amount') is-invalid @enderror" id="amount" wire:model.defer="amount">
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="accountphone">Teléfono</label>
                                <input type="text" class="form-control @error('accountphone') is-invalid @enderror" id="accountphone" wire:model.defer="accountphone">
                                @error('accountphone')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row mt-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms" wire:model.defer="terms">
                                        <label class="form-check-label" for="terms">He leído y aceptado la </label> <a href="#" target="_blank"><strong>Liberación de Responsabilidad</strong></a>
                                        @error('terms')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light" type="button" wire:click="submitFormulario">Completar Inscripción</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>