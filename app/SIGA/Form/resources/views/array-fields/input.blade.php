{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<div class="col-span-6 sm:{{ $array_field->span }}">
    <input
        {{ $array_field->merge(['class'=>$field->class]) }}
        wire:model.lazy="{{ $array_field->key . '.' . $key . '.' . $array_field->name }}">
</div>
