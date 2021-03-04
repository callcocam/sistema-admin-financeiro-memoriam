<div class="col-span-6 sm:{{ $field->span }}">
    <div>
        <label for="{{ $field->key }}" class="block text-sm font-medium text-gray-700">
            {{ _translate(sprintf('form.%s', $field->name),$field->label) }}
        </label>
        <input wire:model.lazy="{{ $field->key }}" {{ $field->merge(['class'=>$field->class]) }}>
        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
