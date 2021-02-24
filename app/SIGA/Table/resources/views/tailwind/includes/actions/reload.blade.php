@if ($this->permission('index'))
@if ($this->route())
    @if (\Route::has(sprintf('admin.%s.index', $this->route())))
        <a title="{{ _('Reload new register') }}" href="{{ route(sprintf('admin.%s.index', $this->route())) }}"
           class="btn btn-defaul">
            <x-c-icon class="mt-1 h-5 w-5 mr-2" icon="loop" stroke="currentColor"/>
            <span class="hidden md:block">{{ _('Reload') }}</span></a>
    @endif
@endif
@endif
