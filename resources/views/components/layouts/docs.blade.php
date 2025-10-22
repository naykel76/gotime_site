<x-layouts.base :title="$title ?? 'Docs'" class="nk-docs">

    @includeFirst(['components.layouts.partials.navbar', 'gotime::components.layouts.partials.navbar'])

    <div class="docs-container">
        <aside class="sidebar bdr-r bdr-slate-700 pxy px-1.5 py-2 xyz">
            @if (empty($data['menus']))
                <p class="bx warning mr-1 tac">No Menus to display. <br> Maybe you should get onto that!</p>
            @else
                <div class="space-y-2">
                    @foreach ($data['menus'] as $menu)
                        <x-gt-menu menuname="{{ $menu }}" filename="{{ $data['filename'] }}" class="menu" title="{{ $menu }}" />
                    @endforeach
                </div>
            @endif
        </aside>

        <main >
            @if (!empty($data['type']))
                <div class="bx danger">WTF, Come find me!</div>
            @elseif(!empty($data['path']))
                <x-gt-markdown path="{{ resource_path('views/' . $data['path']) }}" />
            @endif
        </main>
    </div>

</x-layouts.base>
