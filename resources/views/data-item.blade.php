<div {{ $attributes->merge(['class' => 'border rounded bg-white']) }}>
    <div class="flex justify-between border-b px-3 py-3 text-sm bg-gray-50 text-gray-600 tracking-wide rounded-t">
        {{ $header }}
    </div>
    <div class="px-3 text-sm mt-2 mb-2">
        {{ $slot }}
    </div>
</div>
