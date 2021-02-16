<div class="flex">
   @if($this->actionLink($model, 'show'))
        <a href="{{ $this->actionLink($model, 'show') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-gray-500" fill="currentColor" icon="external-link"/><span class="ml-2 hidden md:block">Show</span></a>
    @endif
    @if($this->actionLink($model, 'edit'))
        <a href="{{ $this->actionLink($model, 'edit') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-gray-500" fill="currentColor" icon="pencil"/> <span class="ml-2 hidden md:block">Edit</span></a>
    @endif
    @if($this->actionLink($model, 'destroy'))
        @if($confirming)

        @else
            <a wire:click="confirmDelete({{$model->id}})" class="cursor-pointer inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><x-c-icon class="-ml-1 mr-1 h-5 w-5 text-danger-500" fill="currentColor" icon="trash"/> <span class="ml-2 hidden md:block">Delete</span></a>
        @endif
    @endif
</div>
