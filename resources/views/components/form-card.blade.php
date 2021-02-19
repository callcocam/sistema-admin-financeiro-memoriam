<div>
    <form class="form-horizontal" wire:submit.prevent="save">
    <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
    <h2 class="p-6 text-lg text-gray-700 font-semibold capitalize"> {{ $title }}</h2>        
        <div class="grid grid-cols-6 gap-6 px-4 py-5 sm:p-6">
        {{ $slot }}
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            {{ $actions }}
        </div>
    </div>
    </form>
</div>