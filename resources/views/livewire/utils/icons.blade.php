<div class="flex flex-col mt-8">
        <div class="mt-4">
            <div class="w-full bg-white shadow-md rounded-md overflow-hidden border">
                <form>
                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                        <h3 class="text-sm">Lista de icones</h3>                 
                        <div class="mt-2 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                            <x-c-icon class="h-6 w-6" icon="filter"/>
                            </span>
                            <input wire:model="search" type="text" class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                        </div>

                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-2 p-2">
                      @foreach ($this->Icons as $icon)
                         <div class="relative mb-3 h-24">
                            <div class="absolute inset-0 w-full flex flex-col items-center justify-center rounded-lg border border-gray-200 cursor-auto">
                            <x-c-icon class="h-6 w-6" icon="{{ $icon }}"/>
                           <span class="flex mt-3"> {{ $icon }}</span>
                            </div>
                         </div>
                      @endforeach
                    </div>
                </form>
            </div>
        </div>
</div>
