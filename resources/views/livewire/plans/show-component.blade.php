<div>
    <h3 class="text-gray-700 text-3xl font-medium">Assinaturas</h3>
    <div class="mt-4">
        <div class="w-full bg-white shadow-md rounded-md overflow-hidden border">
            <form class="pt-5 pl-5 pr-5">
                <div class="col-span-6" x-data="{open: false}" @click.away="open = false"
                     @close.stop="open = false">
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                        Selecione um cliente
                    </label>
                    <div class="mt-1 relative">
                        <input @click="open=true" type="text" wire:model="search"
                               class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                        <span class="flex items-center absolute top-2 left-2">
                            @if($this->nameSelected)
                                <span class="ml-3 block truncate" x-show="!open">
                                {{ $this->nameSelected }}
                                </span>
                            @else
                                @if(!$this->search)
                                    <span class="ml-3 block truncate" x-show="!open">
                                    @lang('strings.select-item')
                                </span>
                                @endif
                            @endif
                            </span>
                        <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <x-c-icon icon="swap-vertical" class="h-5 w-5"/>
                            </span>
                        <div class="absolute z-50 mt-1 w-full rounded-md bg-white shadow-lg" x-show="open">
                            <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                aria-activedescendant="listbox-item-3"
                                class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                @if($this->options)
                                    @foreach($this->options as $value => $label)
                                        <li @click="open = false" id="listbox-item-{{$value}}" role="option"
                                            class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 {{ $this->isSingleSelected($value, ' bg-gray-200') }}"
                                            wire:click="setSingleSelectValue('{{ $value }}','{{ $label }}')">
                                            <div class="flex items-center">
                                            <span
                                                class="inset-y-0 left-0 flex items-center w-4 h-4 border border-2 mr-2 border-indigo-900 items-center justify-center rounded">
                                                @if ($this->isSingleSelected($value, true))
                                                    <!-- Heroicon name: solid/check -->
                                                        <x-c-icon icon="check" class="h-5 w-5" fill="currentColor"/>
                                                    @endif
                                            </span>
                                                <span class="ml-3 block font-normal truncate">{{ $label }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center px-5 py-3">
                    @if($idSelected)
                        <button type="button"
                                class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                            Cancel
                        </button>
                        <button type="button"
                                wire:click="addSignature"
                                class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">
                            Save
                        </button>
                    @endif
                </div>
            </form>
            <div class="mt-8">
                <div class="flex flex-col mt-6">
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div
                            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                            <table class="min-w-full">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @if($this->signatures)
                                    @foreach($this->signatures as $signature)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                    @isset($signature->cover)
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                 alt=""/>
                                                        </div>
                                                    @endisset
                                                    <div class="ml-4">
                                                        <div
                                                            class="text-sm leading-5 font-medium text-gray-900">{{ $signature->name }}</div>
                                                        @isset($signature->email)
                                                            <div class="text-sm leading-5 text-gray-500">
                                                                {{ $signature->email }}
                                                            </div>
                                                        @endisset
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                               @isset($signature->pivot->status)
                                                    @if($signature->pivot->status == "draft")
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Active</span>
                                                    @else
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>

                                                    @endif
                                                @endisset
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <button type="button"
                                                        wire:click="removeSignature('{{ $signature->id }}')"
                                                        class="text-indigo-600 hover:text-indigo-900">Remover
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
