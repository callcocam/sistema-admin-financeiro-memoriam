@if ($paginationEnabled || $searchEnabled)
    <div class="card-header">
        <div class="row mt-4">
            @if ($paginationEnabled && count($perPageOptions))
                @include(table_includes('options.per-page'))
            @endif
            @if ($searchEnabled)
                @include(table_includes('options.search'))
            @endif
                @include(table_includes('options.actions'))
        </div>
    </div><!--row-->
@endif
