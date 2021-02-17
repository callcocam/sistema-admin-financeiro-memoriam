<div class="mr-4 ml-4">
    <x-form-card>
        <x-slot name="title">
            <strong>Basic Form</strong> Elements
        </x-slot>
        @foreach($fields as $field)
            @include('laravel-livewire-forms::fields.' . $field->view)
        @endforeach
        <x-slot name="actions">
            <button class="btn btn-defaul" wire:click="saveAndGoBackResponse" type="button">
                <x-c-icon class="h-6 w-6 mr-2" icon="arrow-thick-to-left" fill="currentColor"/> @lang('form.back-to-list')</button>
            @if($model->exists)
                <button class="btn btn-defaul" wire:click="saveAndStay" type="button">
                    <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save')</button>
            @else
                <button class="btn btn-defaul" wire:click="saveAndEditStay" type="button">
                    <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save')</button>
            @endif
            <button class="btn btn-defaul" wire:click="saveAndGoBack" type="button">
                <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save-go-back')</button>
        </x-slot>
    </x-form-card>
    @include("laravel-livewire-forms::scripts",['class'=>get_class($this)])
    @push('jsLivewire')
        <script>
            Livewire.on('initializeCkEditor', function (idOfTextarea) {
                console.log(idOfTextarea)
                //initEditor(idOfTextarea);
            });
        </script>
    @endpush
</div>
