<div>
    @if($title)
        <div class="flex justify-start gap-2">
            @if($icon)
                <div class="flex flex-col justify-center items-center">
                    <x-icon name="{{ $icon }}" class="w-5 h-5 text-primary-500" />
                </div>
            @endif
            <h3 class="text-lg font-medium">{{ $title }}</h3>
        </div>
    @endif
</div>

