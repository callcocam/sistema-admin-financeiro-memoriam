<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
    <div class="flex justify-center items-center">
       {{ $logo }}
        <span class="text-gray-700 font-semibold text-2xl">{{ $title }}</span>
    </div>
        <!-- Validation Errors -->
        {{ $slot }}
    </div>
</div>