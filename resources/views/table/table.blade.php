<table {{ $attributes->merge(['class' => 'min-w-full divide-y divide-gray-200 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg']) }}>
    <thead class="bg-gray-50">
    <tr>
        {{ $headerRow }}
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        {{ $slot }}
    </tbody>
</table>
