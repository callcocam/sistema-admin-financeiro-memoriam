<div class="mr-4 ml-4">
  <form class="form-horizontal" wire:submit.prevent="save">
    <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
    <h2 class="p-6 text-lg text-gray-700 font-semibold capitalize"> <strong>Basic Form</strong> Elements</h2>        
        <div class="grid grid-cols-6 gap-x-6 gap-y-2 px-4 py-5 sm:p-6">
          @foreach($fields as $field)
            @include('laravel-livewire-forms::fields.' . $field->view)
        @endforeach
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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
           </div>
    </div>
    </form>
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
