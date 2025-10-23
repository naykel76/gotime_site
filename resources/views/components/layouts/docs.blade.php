<x-layouts.base :title="$title ?? 'Docs'" class="nk-dos">

    @includeFirst(['components.layouts.partials.navbar', 'gotime::components.layouts.partials.navbar'])

    <main class="nk-main container py-2 md:py-5 flex gap-5">

        <aside class="w-18 fs0 space-y-2">
            @foreach ($data['menus'] as $menu)
                <x-gt-menu menuname="{{ $menu }}" filename="{{ $data['filename'] }}" class="menu" title="{{ $menu }}" />
            @endforeach
        </aside>

        <div class="markdown-content-area" style="min-width: 0;">
            <x-gt-markdown path="{{ resource_path('views/' . $data['path']) }}" />
        </div>

    </main>

    @includeFirst(['components.layouts.partials.footer', 'gotime::components.layouts.partials.footer'])

</x-layouts.base>
