---
name: livewire-file-uploads
description: >-
  Adds file upload capability to Livewire form components. Handles
  temporary storage, validation, and persisting uploads.
---

<!-- to make this a little less magical should i make a note to mention that -->
<!-- needs WithFormActions which has all the mthods and properties required-->

# Livewire File Upload

File uploads use FilePond, a JavaScript library that provides drag-and-drop,
previews, and progress indicators. It integrates with Livewire's temporary
upload system.

**Activate this skill when:**

- Forms need image/file upload fields

## Setup

Add `WithFileUploads` trait to component:

```php
use Livewire\WithFileUploads;

class CreateEdit extends Component
{
    use WithFormActions, WithFileUploads;
}
```

> Use on component, not form object.

Add filepond to view:

```blade
<x-gt-filepond wire:model="form.tmpUpload" />
```

## Storage Configuration

Configure in form object:

<!-- nathan to change this -->
```php
public array $storage = [
    'disk' => 'media',
    'dbColumn' => 'image_name',
    'path' => 'uploads/images',
];
```

<!-- i think this is one i will review later. -->
## Image Preview

```php
public function featuredImageUrl()
{
    return $this->image_name
        ? Storage::disk('media')->url($this->image_name)
        : url('/svg/placeholder.svg');
}
```

View:

```blade
<img src="{{ $this->imageUrl() }}" alt="{{ $form->title }}">
```

Component method:

```php
public function imageUrl()
{
    return $this->form->tmpUpload?->temporaryUrl()
        ?? $this->form->editing?->featuredImageUrl()
        ?? url('/svg/placeholder.svg');
}
```
