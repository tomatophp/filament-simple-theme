@php
    $currentPage = call_user_func(request()->getRouteResolver())->controller??null;
@endphp

@if($currentPage)
    <div>
        <x-filament::actions :actions="$currentPage->getCachedHeaderActions()" />
    </div>
@endif
