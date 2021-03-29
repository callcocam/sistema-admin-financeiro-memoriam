<div class="flex">
    @foreach($this->actions_table() as $action)
        @if($this->actionLink($model, $action['action']))
            <a href="{{ $this->actionLink($model, $action['action'], $query) }}" class="inline-flex items-center px-4 py-2 border border-{{$action['color']}}-300 rounded-md shadow-sm text-sm font-medium text-{{$action['color']}}-700 bg-white hover:bg-{{$action['color']}}-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{$action['color']}}-500 mr-2"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-gray-500" fill="currentColor" icon="{{$action['icon']}}"/><span class="ml-2 hidden md:block">{{$action['text']}}</span></a>
        @endif
    @endforeach
   @if($this->actionLink($model, 'show'))
        <a href="{{ $this->actionLink($model, 'show', $query) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-gray-500" fill="currentColor" icon="external-link"/><span class="ml-2 hidden md:block">{{ $this->isShowLabel() }}</span></a>
    @endif
    @if($this->actionLink($model, 'edit'))
        <a href="{{ $this->actionLink($model, 'edit', $query) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-gray-500" fill="currentColor" icon="pencil"/> <span class="ml-2 hidden md:block">{{ $this->isEditLabel() }}</span></a>
    @endif
    @if($this->permission('destroy'))
        @if($this->confirming && $this->confirming == $model->id)
               <a wire:click="kill('{{$model->id}}')" class="ml-2 cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-danger-500" fill="currentColor" icon="trash"/> <span class="ml-2 hidden md:block">{{ $this->isConfirmLabel() }}</span></a>
        @else
            <a wire:click="confirmDelete('{{$model->id}}')" class="ml-2 cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-danger-500" fill="currentColor" icon="trash"/> <span class="ml-2 hidden md:block">{{ $this->isDeleteLabel() }}</span></a>
        @endif
    @endif
</div>
