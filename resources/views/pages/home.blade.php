<x-layouts.app>

    <script>
        function setTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
        }

        // Restore saved theme on page load
        const savedTheme = localStorage.getItem('theme') || 'docs';
        setTheme(savedTheme);
    </script>

    <div class="theme-switcher">
        <button class="btn" onclick="setTheme('light')">Light</button>
        <button class="btn" onclick="setTheme('dark')">Dark</button>
        <button class="btn" onclick="setTheme('docs')">Docs</button>
    </div>

    <section class="bg-blue-950 py-5-3-2 txt-white">
        <div class="container-md tac">
            <h1 class="txt-3 fw7">Show, don't tell.</h1>
            <p class="txt-xxl">A living, action-based reference for building with JLAG</p>
            <p class="txt-xl mt-0">Real examples, no waffle, ready to copy, tweak, and ship.</p>
        </div>
    </section>


    <div class="py container">
        <livewire:products.create-edit />
        <livewire:products.index />
    </div>

    <div class="container-sm py-3">
        <!-- prettier-ignore-start -->
        <pre><x-torchlight-code language="blade">@verbatim
            <x-layouts.app title="Awesome Page Title">
                <x-slot:title> 
                    Even More Awesome Page Title (Slot) 
                </x-slot>
            </x-layouts.app> 
        @endverbatim </x-torchlight-code></pre>
        <!-- prettier-ignore-end -->
    </div>
</x-layouts.app>
