<div
    {{ $attributes->merge(
        array_merge([
            'class' => "filament-icon-picker filament-icon-picker-{$getLayout()}",
        ], $getColumnsConfig()),
    ) }}>
    @include('forms::components.select')
</div>
