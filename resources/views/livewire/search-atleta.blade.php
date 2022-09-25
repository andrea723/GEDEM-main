<div class="col-xl-8">
    <h4 class="">Cédula o Pasaporte !</h4>
    <div class="input-group bg-light rounded mt-3">
        <input type="email" class="form-control bg-transparent border-0" placeholder="Ingrese su Cédula o Pasaporte" aria-label="Recipient's username" aria-describedby="button-addon2" wire:model.defer="inputSearch">
        <button class="btn btn-primary" type="button" id="button-addon2" wire:click="submitSearch">
            <i class="bx bx-search-alt"></i>
        </button>
    </div>
</div>