---
name: livewire-form-component
description: >-
    Build Livewire Form components for creating and editing records. Displays
    structured input fields, handles user input and submission. Activates when
    creating data entry forms, edit interfaces, or input screens.
---

## When to use me

- Creating form interfaces for user interaction
- Building create/edit/profile forms
- Any component that renders a form

## Related skills

- livewire-resource-config

## Implementation

### Base structure

```php +code
<?php

use Naykel\Gotime\BaseForm;
use App\Livewire\Forms\ModelFormObject;
use App\Models\Model;

new class extends BaseForm
{
    public ModelFormObject $form;
    protected string $modelClass = Model::class;

    protected function configKey(): string
    {
        return 'resource';
    }
};
```

## Modal <!-- under review -->

- Can only have single modal when using `showModal` property. If you need
  multiple modals, you'll need to use `selectedId`.

<!-- TODO: Check this for accuracy and refine if necessary -->
```html +code-blade
<x-gt-modal wire:model="showModal">
    <form wire:submit="save">
        <x-gt-input wire:model="form.title" label="title" />
        <div class="tar">
            <x-gt-button wire:click="cancel" class="btn sm" text="CANCEL" />
            <x-gt-button wire:click="save" class="btn primary sm" text="SAVE" />
        </div>
    </form>
</x-gt-modal>
```
