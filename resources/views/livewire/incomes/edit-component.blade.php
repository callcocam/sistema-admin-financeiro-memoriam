<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <section class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
                <div class="relative w-screen max-w-xl">
                    <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                        <button wire:click="close_modal" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <span class="sr-only">Close panel</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
                        <div class="px-4 sm:px-6">
                            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                {{ $modal->client->name }}
                            </h2>
                        </div>
                        <div class="mt-6 relative flex-1 px-4 sm:px-6">
                            <!-- Replace with your content -->
                            <div class="absolute inset-0 px-4 sm:px-6">
                                <div class="h-full border-2 border-dashed border-gray-200" aria-hidden="true">
                                    <form class="form-horizontal" wire:submit.prevent="save">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
                                            <h2 class="p-6 text-lg text-gray-700 font-semibold capitalize"> {{ $this->title() }}</h2>
                                            <div class="grid grid-cols-6 gap-x-6 gap-y-2 px-4 py-5 sm:p-6">
                                                @foreach($fields as $field)
                                                    @include('laravel-livewire-forms::fields.' . $field->view)
                                                @endforeach
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button class="btn btn-defaul" wire:click="close_modal" type="button">
                                                    <x-c-icon class="h-6 w-6 mr-2" icon="arrow-thick-to-left"
                                                              fill="currentColor"/> @lang('form.back-to-list')</button>
                                                @if($isActions)
                                                    @if($model->exists)
                                                        <button class="btn btn-defaul" wire:click="saveAndStay" type="button">
                                                            <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save')</button>
                                                    @else
                                                        <button class="btn btn-defaul" wire:click="saveAndEditStay" type="button">
                                                            <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save')</button>
                                                    @endif
                                                    <button class="btn btn-defaul" wire:click="saveAndCopy" type="button">
                                                        <x-c-icon class="h-6 w-6 mr-2" icon="save" fill="currentColor"/> @lang('form.save-and-copy')
                                                    </button>
                                                @endif
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
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include("laravel-livewire-forms::scripts",['class'=>get_class($this)])
@push('jsLivewire')
    <script>
        Livewire.on('initializeCkEditor', function (idOfTextarea) {
            console.log(idOfTextarea)
            //initEditor(idOfTextarea);
        });
    </script>
@endpush
