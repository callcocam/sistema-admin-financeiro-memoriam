{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
<div class="form-group row">
    <div class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </div>
    <div class="col-md">
        @if($field->array_fields)

            <div class="list-group-item list-group-item-action p-2">
                <div class="form-row">
                    @foreach($field->array_fields as $array_field)
                        @include('laravel-livewire-forms::array-fields.' . $array_field->view)
                    @endforeach
                    <div class="col-md-auto">
                        @if($field->array_sortable)
                            <button class="btn btn-sm btn-primary" wire:click="arrayMoveUp('{{ $field->name }}', '{{ $key }}')">
                                <i class="fa fa-arrow-up"></i>
                            </button>

                            <button class="btn btn-sm btn-primary" wire:click="arrayMoveDown('{{ $field->name }}', '{{ $key }}')">
                                <i class="fa fa-arrow-down"></i>
                            </button>
                        @endif

                        <button class="btn btn-sm btn-danger"
                                onclick="confirm('{{ __('Are you sure?') }}') || event.stopImmediatePropagation();"
                                wire:click="arrayRemove('{{ $field->name }}', '{{ $key }}')">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <button class="btn btn-primary" wire:click="arrayAdd('{{ $field->name }}')">
            Add {{ Str::singular($field->label) }}
        </button>

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
