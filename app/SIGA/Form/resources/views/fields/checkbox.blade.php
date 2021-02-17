<fieldset class="col-span-6 sm:{{ $field->span }}">
    <legend class="text-base font-medium text-gray-900">{{ $field->label }}</legend>
    <div class="mt-4 space-y-4">               
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input wire:model.lazy="{{ $field->key }}"  {{ $field->merge(['class'=>$field->class]) }}>
            </div>
            <div class="ml-3 text-sm">
                <label for="{{ $field->name }}" class="font-medium text-gray-700"> {{ $field->placeholder }}</label>
                <p class="text-gray-500">  
                    @include('laravel-livewire-forms::fields.error-help') 
                 </p>
            </div>
        </div>
    </div>
</fieldset>