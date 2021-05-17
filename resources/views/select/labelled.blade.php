<div {{ $attributes->except('wire:model')->merge(['class' => 'flex items-center']) }}>
{{--    {{ dd(get_class_methods($attributes)) }}--}}
    <div class="py-3 px-5 flex flex-col items-center border-gray-400 border-t border-l border-b rounded-l-md bg-gray-50 text-sm whitespace-nowrap">{{ $label }}</div>
    <select class="py-3 px-5 w-full border-gray-400 text-gray-800 rounded-r-md text-sm"
        {{ $attributes->wire('model') }} >
        {{ $slot }}
    </select>
</div>
