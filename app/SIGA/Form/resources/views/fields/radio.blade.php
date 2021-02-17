{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<fieldset class="col-span-6 sm:{{ $field->span }}">
    <legend class="text-base font-medium text-gray-900">{{ $field->label }}
        @if($field->placeholder)
            <p class="text-gray-500">{{ $field->placeholder }}</p>
        @endif
     </legend>
    <div class="mt-4 space-y-4">
        @foreach($field->options as $value => $label)
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input
                        id="{{ $field->name . '.' . $loop->index }}"
                        type="radio"
                        class="form-check-input @error($field->key) is-invalid @enderror"
                        value="{{ $value }}"
                        wire:model.lazy="{{ $field->key }}">
                </div>
                <div class="ml-3 text-sm">
                    <label class="font-medium text-gray-700" for="{{ $field->name . '.' . $loop->index }}">
                        {{ $label }}
                    </label>
                </div>
            </div>
        @endforeach
        @include('laravel-livewire-forms::fields.error-help')
    </div>
</fieldset>
