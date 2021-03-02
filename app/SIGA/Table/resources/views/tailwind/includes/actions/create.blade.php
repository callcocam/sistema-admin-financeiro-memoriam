@if ($route)
    @if (\Route::has($route))
        <a title="{{ _('Create new register') }}" href="{{ route($route) }}"
           class="btn btn-defaul">
            <x-c-icon class="h-5 w-5" icon="plus" stroke="currentColor"/>
            <span class="hidden md:block">{{ _('Create') }}</span> </a>
    @endif
@endif
