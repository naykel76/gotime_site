<x-layouts.base :title="$title ?? null">

    @includeFirst(['components.layouts.partials.navbar', 'gotime::components.layouts.partials.navbar'])

    <main {{ $attributes->merge(['class' => 'nk-main']) }}>
        {{ $title ?? '' }}
        {{ $slot }}
    </main>

    @includeFirst(['components.layouts.partials.footer', 'gotime::components.layouts.partials.footer'])
    
</x-layouts.base>
