# FAQ's

## Blade 

#### <question>How can I provide a default property but allow a slot to override it?</question>

For example, can I provide a default title property but allow a title slot to
override it?

**Using default or attribute:**
```html +torchlight-blade
@verbatim
<!-- No title provided (uses component's fallback) -->
<x-layouts.app> </x-layouts.app>

<!-- Title provided via attribute -->
<x-layouts.app title="Page Title"> </x-layouts.app>
@endverbatim
```

**Overriding with a named slot:**
```html +torchlight-blade
@verbatim
<x-layouts.app title="Page Title">
    <x-slot:title>Overridden Title</x-slot> 
</x-layouts.app>
@endverbatim
```

> When a named slot is provided, it takes precedence over the attribute and any
> fallback value.