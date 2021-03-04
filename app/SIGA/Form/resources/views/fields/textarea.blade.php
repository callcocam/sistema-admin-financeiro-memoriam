<div class="col-span-6 sm:{{ $field->span }}">
    <label class="block text-sm font-medium text-gray-700" for="{{ $field->name }}">
        {{ _translate(sprintf('form.%s', $field->name),$field->label) }}
    </label>
    <div>
        <textarea  wire:ignore wire:model.lazy="{{ $field->key }}"  {{ $field->merge(['class'=>$field->class]) }}></textarea>
        @include('laravel-livewire-forms::fields.error-help')
        @isset($field->help)
            <p class="mt-2 text-sm text-gray-500">
                {{$field->help}}
            </p>
        @endisset
    </div>
</div>
