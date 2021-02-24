<div>
    <div class="row p-4">
        <div class="col-md-6">
            <h2>Despesas</h2>
        </div>
        <div class="col-md-6 text-right">
            <button class="btn btn-success btn-sm " wire:click="create">Adicionar Despesa</button>
        </div>
        @if($createMode)@include('livewire.admin.expenses.create')@endif
        @if($updateMode)@include('livewire.admin.expenses.update')@endif

        <div class="col-md-12">

            @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered mt-4">
                    <thead>
                    <tr>
                        <div class="row">
                            <div class="col-md-3 col-6 mt-2">
                                <input type="text"  class="form-control" placeholder="Pesquise" wire:model="searchTerm" />
                            </div>
                            <div class="col-md-3 col-6 mt-2">
                                <select wire:model="orderBy" class="form-control" id="grid-state">
                                    <option value="id">ID</option>
                                    <option value="due_at">Vencimento</option>
                                    <option value="value">Valor</option>
                                    <option value="created_at">Data de Cadastro</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6 mt-2">
                                <select wire:model="orderAsc" class="form-control" id="grid-state">
                                    <option value="0">Últimos</option>
                                    <option value="1">Primeiros</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6 mt-2">
                                <select wire:model="perPage" class="form-control" id="grid-state">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </div>

                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <th>Fornecedor</th>
                        <th>Fornecedor</th>
                        <th>Valor</th>
                        <th>Vencimento</th>
                        <th width="150px">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($expenses as $expense)
                        <tr>
                            <td> {{$expense->description}} </td>
                            <td> {{$expense->provider}} </td>
                            <td>
                                @if($providers)
                                <form>
                                    @if (session()->has('message'))
                                        @if($expense->id == $id_expense)
                                            <div class="alert alert-success mt-3">
                                                {{ session('message') }}
                                            </div>
                                        @endif

                                    @endif
                                    <select class="custom-select" id="tenant_id" wire:model="provider_id.{{$expense->id}}">
                                        <option selected>Selecione...</option>
                                        @forelse($providers as $provider)
                                            <option value="{{$provider->id}}">{{$provider->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    <button wire:click.prevent="updateProvider({{$expense->id}})"  class="btn btn-primary mb-2">ok</button>
                                </form>
                                @endif
                            </td>
                            <td> {{$expense->value}} </td>
                            <td> {{$expense->due_at->format('d/m/Y')}} </td>
                            <td style="width:180px">
                                {{--                    <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $item->id }})" class="btn btn-primary btn-sm p-0 font-13">Editar</button>--}}
                                @if($expense->status == null )
                                    <button wire:click="pay({{ $expense->id }})" class="btn btn-danger btn-sm py-0">A pagar</button>
                                @elseif($expense->status == 1)
                                    <button wire:click="unpay({{ $expense->id }})" class="btn btn-success btn-sm py-0">Paga</button>
                                @endif
                                <button wire:click="edit({{ $expense->id }})" class="btn btn-primary btn-sm py-0"><i class="fa fa-pen"></i></button>
                                <button onclick="confirm('tem certeza') || event.stopImmediatePropagation()" wire:click="delete({{ $expense->id }})" class="btn btn-warning btn-sm py-0"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>
                    @empty
                        Nada Publicado Ainda
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="my-3 mx-auto">

                    {{ $expenses->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

