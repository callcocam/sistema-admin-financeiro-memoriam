<div class="col-span-6 sm:{{ $field->span }}" x-data="{open: false}" @click.away="open = false"
     @close.stop="open = false">
    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
        {{ _translate(sprintf('form.%s', $field->name),$field->label) }}
    </label>
    <div class="mt-1 relative">
        <button @click="open=true" type="button" aria-haspopup="listbox" aria-expanded="true"
                aria-labelledby="listbox-label"
                class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

      <span class="flex items-center">
           @isset($this->SingleselectSelected[$field->name])
              @if (!is_string($this->SingleselectSelected[$field->name]))
                  <img
                      src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                      alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
              @endif
              <span class="ml-3 block truncate">
             {{ $this->SingleselectSelected[$field->name] }}
            </span>
          @else
              <span class="ml-3 block truncate">
                @lang('strings.select-item')
            </span>
          @endisset
      </span>
            <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
        <!-- Heroicon name: solid/selector -->
      <x-c-icon icon="swap-vertical" class="h-5 w-5"/>
      </span>
        </button>
        <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg" x-show="open">
            <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                @if($field->options)
                    @foreach($field->options as $value => $label)
                        <li @click="open = false" id="listbox-item-{{$value}}" role="option"
                            class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 {{ $this->isSingleSelected($value,$field->name, ' bg-gray-200') }}"
                            wire:click="setSingleSelectValue('{{ $value }}','{{ $label }}','{{$field->name}}')">

                            <div class="flex items-center">
                        <span
                            class="inset-y-0 left-0 flex items-center w-4 h-4 border border-2 mr-2 border-indigo-900 items-center justify-center rounded">
                            @if ($this->isSingleSelected($value,$field->name, true))
                                <!-- Heroicon name: solid/check -->
                                    <x-c-icon icon="check" class="h-5 w-5" fill="currentColor"/>
                                @endif
                        </span>
                                @if (!is_string($label))
                                    <img
                                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                @endif
                                <span class="ml-3 block font-normal truncate">
                        {{ $label }}
                        </span>
                            </div>
                        </li>
                @endforeach
            @endif
            <!-- More items... -->
            </ul>
        </div>
    </div>
</div>
