---
name: livewire-index-component
description: >-
    Build Livewire Index components that display and manage resource collections.
    Handles listing, searching, filtering, sorting, pagination, and actions on
    records. Activates when creating resource listing pages, data tables, or browse
    interfaces.
---

## When to use me

- Creating a listing/index page for a resource
- Building the main entry point for browsing records
- User asks for searchable, sortable, or paginated lists

## Related skills

- livewire-resource-config
- livewire-form-component

## Implementation

### Base structure

```php
use App\Models\Model;
use Naykel\Gotime\Livewire\BaseIndex;

new class extends BaseIndex
{
    protected string $modelClass = Model::class;
    
    protected function configKey(): string
    {
        return 'resource';
    }
    
    protected function query($query)
    {
        return $query;
    }
}
```

## Features

### Search

- If config has `searchableFields`, add `Searchable` trait
- Apply search in query method:

```php +code
  protected function query($query)
  {
      $query = $this->applySearch($query);
      return $query;
  }
```

### Sort

- If config has `sortColumn`, add `Sortable` trait  
- Apply sorting in query method:

```php +code
  protected function query($query)
  {
      $query = $this->applySorting($query);
      return $query;
  }
```

- `sortDirection` is automatically applied by trait

### Combining features

```php
use Naykel\Gotime\Traits\Searchable;
use Naykel\Gotime\Traits\Sortable;

new class extends BaseIndex
{
    use Searchable, Sortable;
    
    protected function query($query)
    {
        $query = $this->applySorting($query);
        $query = $this->applySearch($query);

        return $query;
    }
}
```
