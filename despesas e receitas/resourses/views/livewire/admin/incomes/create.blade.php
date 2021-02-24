<div class="p-4 bg-white rounded shadow-lg col-md-12 my-4 border border-info">
    <h4>Adicionar Receita</h4>
    <form class="form-inline mt-4">
        <input type="text" class="form-control mb-2 mr-sm-2" id="descricao" placeholder="Descrição" wire:model="description">
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        <input type="text" class="form-control mb-2 mr-sm-2" id="Fonte" placeholder="Fonte" wire:model="provider">
        @error('provider') <span class="text-danger">{{ $message }}</span>@enderror
        <input type="text" class="form-control mb-2 mr-sm-2" id="valor" placeholder="Valor" wire:model.debounce.500ms="value">
        @error('value') <span class="text-danger">{{ $message }}</span>@enderror

        Data - <input type="date" class="form-control mb-2 mr-sm-2" id="data" wire:model="due_at">
        @error('due_at') <span class="text-danger">{{ $message }}</span>@enderror
        <button wire:click.prevent="store()"  class="btn btn-primary mb-2">Add</button>
    </form>
</div>
