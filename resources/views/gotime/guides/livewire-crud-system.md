# Livewire CRUD System

- [Initial Setup](#initial-setup)
    - [1. Create Livewire Components](#1-create-livewire-components)
    - [2. Add Route and Update Navigation (optional)](#2-add-route-and-update-navigation-optional)
- [Component Implementation](#component-implementation)
    - [`Index` Component and View](#index-component-and-view)
        - [Searchable Columns](#searchable-columns)
    - [`CreateEdit`](#createedit)
- [FAQ's](#faqs)


> This document references custom VS Code snippets like `gtlc:form-class` and
> `gtlc:form-object` that generate boilerplate code for common patterns. These
> are not available by default but can be added as custom snippets to speed up
> development.


## Initial Setup

### 1. Create Livewire Components
```bash +torchlight-bash
php artisan livewire:make Products/Index --pest
php artisan livewire:make Products/CreateEdit --pest
php artisan livewire:form ProductFormObject
```

### 2. Add Route and Update Navigation (optional)
```php +torchlight-php
use App\Livewire\Products\Index as ProductIndex;

Route::prefix('admin')->name('admin')->group(function () {
    Route::get('/products', ProductIndex::class)->name('.products.index');
});
```

```json +torchlight-json
{
    "name": "Product",
    "route_name": "admin.products.index",
    "icon": "box",
    "exclude_route": true
}
```

## Component Implementation

### `Index` Component and View


1. From the `Index.php` component run `gtlc:table-component` to scaffold the table
   class with pagination and sort functionality.

2. From the `index.blade.php` view run `gtlc:table-view` to scaffold the table view.

    - Add quick edit action button (modal) and set dispatch event to open `CreateEdit` component.

    ```html +torchlight-blade
    <td><x-gt-resource-action action="edit" dispatchTo="admin.modules.create-edit" :id="$item->id" /></td>
    ```


    - Add delete action button

<!-- fix pagination -->
<!-- fix borders -->





- [ ] Add listeners for create, edit, delete actions.

    ```php +torchlight-php
    #[On('model-saved')]
    public function refreshComponent() {
        $this->resetPage(); // Reset to the first page
    }
    ```
    



#### Searchable Columns

1. In the component class Add the `Searchable` trait and import it.
2. Define searchable fields 
    ```php +torchlight-php
    public array $searchableFields = ['name', 'email'];
    ```
3. Add the applySearch method to the query builder.
    ```php +torchlight-php
    $query = $this->applySearch($query);
    ```
4. Add search input to the view.
    ```html +torchlight-blade
    <x-gt-search-input placeholder="Search by name or email..." />
    ```




### `CreateEdit`

`gtl:form-class` command scaffolds this basic functionality.

1. Add `WithFormActions` trait to handle form actions.
2. Add `ProductFormObject` for form fields and validation.


Add component to index view for creating new records. <livewire:create-edit />

Make sure you set perPage in pagination if using pagination.



```php +torchlight-php
<x-gt-button wire:click="$dispatchTo('product-create-edit', 'create-model')" text="Create" />
```



- [ ] Add listeners for create, edit, delete actions to the `Index` component.

    ```php +torchlight-php
    #[On('model-saved')]
    public function refreshComponent() {
        $this->resetPage(); // Reset to the first page
    }
    ```

## FAQ's

How do I handle relationships?

    public int $course_id; // not being set ????