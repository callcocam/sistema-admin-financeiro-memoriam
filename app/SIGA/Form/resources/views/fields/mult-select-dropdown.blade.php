<div class="col-span-6 sm:col-spa-{{ $field->span }}" x-data="{open: false}" @click.away="open = false" @close.stop="open = false">
    <label class="block text-sm font-medium text-gray-700" for="{{ $field->name }}"> {{ $field->label }} </label>
    <div class="flex flex-col border border-gray-200 rounde-lg p-3 mt-2" @click="open=true">
        <div class="flex flex-col">           
                <span class="flex py-2">
                    @if($this->ValueOptions)
                            @foreach($this->ValueOptions as $key => $ValueOptions)
                                <span class="bg-gray-100 mx-1 px-2 py-2 rounded">{{ $ValueOptions }}
                                    <span class="cursor-pointer p-1" aria-label="Close">
                                        <span aria-hidden="true"
                                                wire:click="removeMutSelect('{{ $key }}','{{$field->name}}')">×</span>
                                    </span>
                                </span>
                            @endforeach
                            @else
                    <span class="mx-1 px-2 py-2 rounded">@lang('form.not-item-selected')</span>
                    @endif
                </span>
            <input wire:model="MultselectSearch.{{ $field->name }}" {{ $field->merge(['class'=>$field->class]) }}>
            @if($field->options)
              <div class="relative flex w-full" x-show="open">
                <div class="flex flex-col absolute top-0 z-100 w-full bg-white">
                    @foreach($field->options as $value => $label)
                        <div class="flex py-1 mx-1 my-1 cursor-pointer hover:bg-gray-100 px-2 items-center {{ $this->isSelected($value) }} {{ $this->isSelected($value) }}"
                             wire:click="setMultSelectValue('{{ $value }}','{{$label}}','{{$field->name}}')"
                             tabindex="0">
                                <span class="inset-y-0 left-0 flex items-center w-4 h-4 border border-2 mr-2 border-indigo-900 items-center justify-center rounded">
                                    @if ($this->isSelected($value, true))
                                    <!-- Heroicon name: solid/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="font-bold">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                                        </svg>
                                    @endif
                                </span>
                             {{ $label }}
                             </div>
                    @endforeach
                </div>
                </div>
            @endif
        </div>
    </div>
</div>
