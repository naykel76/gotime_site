<x-layouts.base :title="$title ?? null" class="container mt-5 ">
    <div class="bx">
        <div class="bx-title">Document Page Structure</div>

        <main class="docs-layout">
            <aside class="left-sidebar bdr-5 bg-stripes-pink bdr-pink">Navigation</aside>
            <div class="main-content-area bdr-5 bg-stripes-fuchsia bdr-fuchsia">
                <div class="toc bdr-5 bg-stripes-amber bdr-amber" data-toc>
                    Table of Contents
                </div>
                <div class="markdown-content bdr-5 bg-stripes-sky bdr-sky">
                    <h1>Page Heading</h1>
                    <p>Some introductory text for the page.</p>
                </div>
            </div>
        </main>

        <!-- prettier-ignore-start -->
        <pre><x-torchlight-code language="blade">@verbatim
        <main class="docs-layout">
            <aside class="left-sidebar">Navigation</aside>
            <div class="main-content-area">
                <div class="toc" data-toc>Table of Contents</div>
                <div class="markdown-content">Content</div>
            </div>
        </main>
        @endverbatim</x-torchlight-code></pre>
        <!-- prettier-ignore-end -->
    </div>

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
        }

        @media (min-width: 1024px) {
            .main-content-area {
                display: grid;
                grid-template-columns: 1fr 250px;
                gap: 1rem;
                align-items: start;
            }

            .toc {
                grid-column: 2;
                grid-row: 1;
                position: sticky;
                top: 1rem;
            }
        }
    </style>
</x-layouts.base>
