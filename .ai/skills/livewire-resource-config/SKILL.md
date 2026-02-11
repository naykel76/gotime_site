---
name: livewire-resource-config
description: >-
    Define resource configuration in config/resources.php for Livewire components.
    Controls index and form behaviour including columns, buttons, search, sorting,
    and basic routing. Use this before generating or modifying Livewire components.
---

## When to use me

- Setting up a new model that needs Livewire components
- Changing index behaviour (columns, buttons, search, sorting)
- Configuring form fields and actions
- Before scaffolding any Livewire components that rely on resource config

## Base Configuration

- Always use the full Eloquent model class for the `model` key
- `routePrefix` is only required for full-page components and may be omitted otherwise
- Only add buttons, search, or sorting when explicitly required
- If columns are explicitly defined, use them exactly as provided
- If no columns are defined, make sensible assumptions based on the model
- Only define options that are needed; do not invent configuration
- Remove example comments when creating for production use

```php +code
'resource' => [
    'model' => \App\Models\Model::class,
    'routePrefix' => 'resource',    // or 'admin.resource' for admin routes
    
    'index' => [
        'title' => '',              // Page title for the index view
        'columns' => [],            // Column names shown in the index table
        'buttons' => [],            // Action buttons (create, edit, delete)
        'searchableFields' => [],   // Fields included in search
        'sortColumn' => '',         // Default sort column
        'filterableFields' => [],   // Fields included in filters
    ],
    
    'form' => [
        'title' => '',              // Page title for the form view
        'fields' => [],             // Field names to include in the form
        'buttons' => [],            // Defines action buttons for the form view (save, cancel, etc.)
    ],
],
```

<!-- 
AI DO NOT DO ANYTHING FROM HERE DOWN THIS IS WORK IN PROGRESS 
AI DO NOT DO ANYTHING FROM HERE DOWN THIS IS WORK IN PROGRESS 
AI DO NOT DO ANYTHING FROM HERE DOWN THIS IS WORK IN PROGRESS 
AI DO NOT DO ANYTHING FROM HERE DOWN THIS IS WORK IN PROGRESS 
AI DO NOT DO ANYTHING FROM HERE DOWN THIS IS WORK IN PROGRESS 
-->

## Button Types

Buttons define available actions on index and form pages. The suffix determines behavior:

**No suffix** (e.g., `create`, `edit`) - Opens a full page route

- Indicates full page component with route navigation
- Requires route if not included

**`-modal` suffix** (e.g., `create-modal`, `edit-modal`) - Opens a modal dialog

- Indicates modal form component typically rendered on the same page
- Uses events to trigger actions (do not just create an event)

### Index Page Buttons

- use namespace when required.

| Button         | Button Code                                                                                                             |
| :------------- | :---------------------------------------------------------------------------------------------------------------------- |
| `create`       | `<x-gt-resource-action action="create" :$routePrefix />`                                                                |
| `create-modal` | `<x-gt-resource-action action="create" :$routePrefix dispatchTo="admin.courses.module-form-modal" text="Add Module" />` |
| `edit`         | `<x-gt-resource-action action="edit" :$routePrefix :id="$item->id" />`                                                  |
| `edit-modal`   | `<x-gt-resource-action action="edit" :id="$item->id" dispatchTo="admin::module.form-modal" />`                          |
| `show`         | `<x-gt-resource-action action="show" :$routePrefix :slug="$item->slug" target="_blank" />`                              |
| `delete`       | `<x-gt-resource-action action="delete" :id="$item->id" />`                                                              |
