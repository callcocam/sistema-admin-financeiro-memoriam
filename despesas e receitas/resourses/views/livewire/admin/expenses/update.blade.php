<div class="p-4 bg-white rounded shadow-lg col-md-12 my-4 border border-info">
    <h4>Atualizar Receita</h4>
    <form class="form-inline mt-4">

        <input type="text" class="form-control mb-2 mr-sm-2" id="descricao" placeholder="Descrição" wire:model="description">
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        <input type="text" class="form-control mb-2 mr-sm-2" id="Fonte" placeholder="Fonte" wire:model="provider">

        @error('provider') <span class="text-danger">{{ $message }}</span>@enderror
        <input type="text" class="form-control mb-2 mr-sm-2" id="valor" placeholder="Valor" wire:model="value">
        @error('value') <span class="text-danger">{{ $message }}</span>@enderror

        <input type="date" class="form-control mb-2 mr-sm-2" id="data" placeholder="Data" wire:model="due_at">
        @error('due_at') <span class="text-danger">{{ $message }}</span>@enderror

        <button wire:click.prevent="update({{$expense_id}})"  class="btn btn-primary mb-2">Atualizar</button>
    </form>
</div>
