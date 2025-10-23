<x-layouts.base :title="$title ?? null" class="pxy-5 space-y">

    <div class="bx">
        <div class="bx-title">Document Markup Structure</div>
        {{-- <p>This is a straightforward three-column grid. The dashed gray border shows the outer wrapper that defines the grid layout.</p> --}}

{{-- current-md-markup-structure  --}}
        <main class="markdown-layout flex gap-5">
            <aside class="left-sidebar w-18 bg-stripes-pink bdr-pink">
                <div class="bx tac txt-sm txt-upper">Left-Sidebar</div>
            </aside>
            <div class="main-content-area bg-stripes-green bdr-green">
                <div class="toc">
                    <ul>
                        <li><a href="#heading-2">Heading 2</a></li>
                    </ul>
                </div>
                <h1>Page Heading<a id="page-heading" href="#page-heading" class="heading-permalink" aria-hidden="true" title="Permalink"> #</a></h1>
            </div>
        </main>

    </div>

    <div class="bx">
        <div class="bx-title">3 Column Grid</div>
        <p>This is a straightforward three-column grid. The dashed gray border shows the outer wrapper that defines the grid layout.</p>
        <!-- prettier-ignore-start -->
        <pre><x-torchlight-code language="css">@verbatim
        .side-main-side {
            display: grid;
            grid-template-columns: 1fr 4fr 1fr;
        }
        @endverbatim </x-torchlight-code></pre>
        <!-- prettier-ignore-end -->
        <main class="side-main-side">
            <aside class="left-sidebar bg-stripes-pink bdr-pink">
                <div class="bx tac txt-sm txt-upper">Left-Sidebar</div>
            </aside>
            <div class="main-content-area bg-stripes-green bdr-green">
                <div class="docs-container bg-sky-100 bdr-sky">
                    <div class="bx tac txt-sm txt-upper">Main</div>
                    <p>The width of the content area is defined by the container size (indicated by the blue border), not the outer wrapper. The hatched section will shrink and grow as needed.</p>
                </div>
            </div>
            <aside class="right-sidebar bg-stripes-amber bdr-amber">
                <div class="bx tac txt-sm txt-upper">Right-Sidebar</div>
            </aside>
        </main>
    </div>


    {{-- Important note: The structure of the markdown rendered content div above cannot be changed, as the markdown renderer depends on it. --}}
    {{-- /* Sizes and colors are arbitrary for demonstration purposes only */ --}}

    <style>
        .side-main-side {
            display: grid;
            grid-template-columns: 1fr 4fr 1fr;
        }

        /* these classes are arbitrary for demonstration and visual purposes */
        .markdown-layout,
        .side-main-side {
            border: 5px dashed gray;
            gap: 0.5rem;
            padding: 0.5rem
        }

        .left-sidebar,
        .right-sidebar,
        .main-content-area,
        .docs-container {
            border-width: 5px;
            padding: 1rem;
            min-height: 20vh;
        }

        .docs-container {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>

</x-layouts.base>
