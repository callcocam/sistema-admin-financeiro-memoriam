<div class="col-span-6 sm:col-spa-{{ $field->span }}">
    <label class="block text-sm font-medium text-gray-700" for="{{ $field->name }}"> {{ $field->label }}</label>
    <div class="flex flex-col p-1 border border-gray-200 rounded">
        <div class="flex flex-col">
            <span class="flex py-2 px-1">{{ $this->ValueOptionsCount }} item(s) selected</span>
            <input wire:model="MultselectSearch.{{ $field->name }}" {{ $field->merge(['class'=>$field->class]) }}>
            @if($field->options)
                <div class="flex flex-col mt-3">
                    @foreach($field->options as $value => $label)
                        <div class="relative flex py-1 mx-1 my-1 cursor-pointer hover:bg-gray-100 px-2 items-center {{ $this->isSelected($value) }}"
                             wire:click="setMultSelectValue('{{ $value }}','{{$label}}','{{$field->name}}')"
                             tabindex="0">
                       <span class="inset-y-0 left-0 flex items-center w-4 h-4 border border-2 mr-2 border-indigo-900 items-center justify-center rounded">
                          @if ($this->isSelected($value, true))
                        <!-- Heroicon name: solid/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="font-bold">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                        </svg>
                         @endif
                         </span>{{ $label }}</div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
