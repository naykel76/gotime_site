<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subgrid Demo</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: system-ui, -apple-system, sans-serif;
                line-height: 1.6;
                color: #333;
                background: #f8fafc;
            }

            /* Parent grid container */
            .docs-container {
                display: grid;
                grid-template-columns: 250px 1fr 250px;
                gap: 2rem;
                max-width: 1400px;
                margin: 0 auto;
                padding: 2rem;
                min-height: 100vh;
            }

            /* Sidebar styling */
            .sidebar {
                background: #e0e7ef;
                padding: 1.5rem;
                border-radius: 8px;
                position: sticky;
                top: 2rem;
                height: fit-content;
            }

            .sidebar h3 {
                margin-bottom: 1rem;
                color: #2563eb;
                font-size: 1rem;
            }

            .sidebar ul {
                list-style: none;
            }

            .sidebar li {
                padding: 0.5rem 0;
                color: #475569;
                font-size: 0.9rem;
                cursor: pointer;
            }

            .sidebar li:hover {
                color: #2563eb;
            }

            /* The main content area uses subgrid */
            main {
                display: grid;
                grid-column: 2 / 4;
                /* Spans the content and TOC columns */
                grid-template-columns: subgrid;
                align-items: start;
            }

            /* The markdown wrapper div */
            main>div {
                grid-column: 1;
                /* Only takes first column */
                display: contents;
                /* This makes its children participate in the grid */
            }

            /* TOC styling - goes in the right column */
            .toc {
                grid-column: 2;
                /* Second column of the subgrid = third column of parent */
                grid-row: 1 / 999;
                /* Start at row 1 and span to the end */
                background: #fef9e7;
                padding: 1.5rem;
                border-radius: 8px;
                position: sticky;
                top: 2rem;
                height: fit-content;
                align-self: start;
            }

            .toc h3 {
                margin-bottom: 1rem;
                color: #d97706;
                font-size: 0.875rem;
                font-weight: 600;
            }

            .toc ul {
                list-style: none;
            }

            .toc li {
                padding: 0.25rem 0;
                font-size: 0.875rem;
                color: #92400e;
                cursor: pointer;
            }

            .toc li:hover {
                color: #d97706;
            }

            /* All article content stays in first column */
            main>div>h1,
            main>div>h2,
            main>div>p,
            main>div>.highlight {
                grid-column: 1;
                /* First column of subgrid = second column of parent */
            }

            main h1 {
                font-size: 2.25rem;
                margin-bottom: 1.5rem;
                color: #1e293b;
                font-weight: 700;
            }

            main h2 {
                font-size: 1.5rem;
                margin-top: 3rem;
                margin-bottom: 1rem;
                color: #334155;
                font-weight: 600;
            }

            main p {
                margin-bottom: 1.5rem;
                color: #475569;
            }

            .highlight {
                background: #dcfce7;
                padding: 1.5rem;
                border-left: 4px solid #16a34a;
                margin: 2rem 0;
                border-radius: 6px;
            }

            .highlight-title {
                color: #15803d;
                font-weight: 600;
                margin-bottom: 0.5rem;
            }

            code {
                background: #1e293b;
                color: #e2e8f0;
                padding: 0.125rem 0.375rem;
                border-radius: 3px;
                font-size: 0.875em;
                font-family: 'Courier New', monospace;
            }

            .highlight code {
                background: #bbf7d0;
                color: #15803d;
            }

            /* Responsive behavior */
            @media (max-width: 1024px) {
                .docs-container {
                    grid-template-columns: 1fr;
                }

                .sidebar {
                    position: static;
                }

                main {
                    grid-column: 1;
                    display: block;
                }

                main>div {
                    display: block;
                }

                .toc {
                    position: static;
                    margin-bottom: 2rem;
                }
            }
        </style>
    </head>

    <body>
        <div class="docs-container">
            <aside class="sidebar">
                <h3>Documentation</h3>
                <ul>
                    <li>Introduction</li>
                    <li>Getting Started</li>
                    <li>Advanced Topics</li>
                    <li>API Reference</li>
                    <li>Examples</li>
                </ul>
            </aside>

            <main>
                <div>
                    <!-- TOC at the top (as required by your markdown component)
                     But it positions itself in the right column! -->
                    <aside class="toc">
                        <h3>On This Page</h3>
                        <ul>
                            <li>Overview</li>
                            <li>How It Works</li>
                            <li>The Solution</li>
                            <li>Key Benefits</li>
                        </ul>
                    </aside>

                    <h1>CSS Subgrid Solution</h1>

                    <p>This demonstrates how CSS Subgrid solves the nested TOC problem. Even though the TOC is inside the main content div (as required by your markdown component), it still positions itself in the rightmost column.</p>

                    <div class="highlight">
                        <div class="highlight-title">✨ The Magic:</div>
                        The <code>main</code> element uses <code>grid-template-columns: subgrid</code> to inherit the parent grid's columns. This allows the nested TOC to position itself in the third column, even though it's not a direct child of the parent grid!
                    </div>

                    <h2>Overview</h2>
                    <p>Subgrid allows nested grid items to participate in the parent grid's track sizing. This means your TOC can be deeply nested in the HTML structure but still align perfectly with the parent grid's columns.</p>

                    <p>The beauty of this approach is that it doesn't matter where your markdown component inserts the TOC - at the beginning, middle, or end of the content. The subgrid ensures it always positions itself correctly in the right column.</p>

                    <h2>How It Works</h2>
                    <p>The parent container defines three columns: sidebar (250px), content (1fr), and TOC (250px). The main element spans columns 2-3 and uses <code>display: grid</code> with <code>grid-template-columns: subgrid</code>.</p>

                    <p>This creates a seamless integration where deeply nested elements can still participate in the top-level grid layout, solving the exact problem you described where the markdown component controls the HTML structure.</p>

                    <h2>The Solution</h2>
                    <p>This approach works perfectly even when the TOC is automatically inserted by your markdown component. The TOC doesn't need to be a direct child of the main grid - it just needs an ancestor that uses subgrid.</p>

                    <p>No JavaScript required, no absolute positioning hacks, no complex calculations. Just pure CSS Grid with subgrid doing exactly what it was designed to do.</p>

                    <h2>Key Benefits</h2>
                    <p><strong>Flexibility:</strong> Your markdown component can insert the TOC anywhere in the content structure, and it will always appear in the correct column.</p>

                    <p><strong>Alignment:</strong> Everything stays perfectly aligned with the parent grid, maintaining visual consistency across your documentation.</p>

                    <p><strong>Responsive:</strong> Easy to stack everything on mobile with a single media query - the subgrid collapses gracefully.</p>

                    <p><strong>Clean Code:</strong> No absolute positioning, no JavaScript calculations needed. The layout is declarative and maintainable.</p>

                    <p><strong>Performance:</strong> Browser-native grid layout is highly optimized and performs better than JavaScript-based solutions.</p>
                </div>
            </main>
        </div>
    </body>

</html>
