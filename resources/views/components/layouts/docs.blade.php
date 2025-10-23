<x-layouts.base :title="$title ?? 'Docs'" class="nk-docs">

    @includeFirst(['components.layouts.partials.navbar', 'gotime::components.layouts.partials.navbar'])
    <main class="docs-layout pxy">
        <aside class="left-sidebar bx">
            @foreach ($data['menus'] as $menu)
                <x-gt-menu menuname="{{ $menu }}" filename="{{ $data['filename'] }}" class="menu" title="{{ $menu }}" />
            @endforeach
        </aside>

        <div class="main-content-area">
            <x-gt-markdown path="{{ resource_path('views/' . $data['path']) }}" />
        </div>
    </main>

    @includeFirst(['components.layouts.partials.footer', 'gotime::components.layouts.partials.footer'])

    <style>
        .docs-layout {
            display: grid;
            grid-template-columns: 1fr;
        }


        @media (min-width: 768px) {
            .docs-layout {
                grid-template-columns: 250px 1fr;
                gap: 1rem;
            }

            .main-content-area {
                grid-column: 2;
            }
        }

        @media (min-width: 1024px) {
            .main-content-area {
                display: grid;
                grid-template-columns: 1fr 250px;
                gap: 1rem;
                align-items: start;
            }

            .toc {
                display: block;
                grid-column: 2;
                grid-row: 1;
                position: sticky;
                top: 1rem;
            }

            .markdown-content {
                grid-column: 1;
                grid-row: 1;
                max-width: 700px;
                margin: 0 auto;
                width: 100%;
            }
        }
    </style>

</x-layouts.base>
