---
name: livewire-form-object
description: >-
    Build Form Objects that centralize form data, validation, and state management.
    Handles field definitions, validation rules, error handling, and data
    persistence separate from UI components. Activates when creating structured form
    data containers, implementing validation logic, or managing form state and
    submission.
---

## When to use me

- When form logic needs to be reused across multiple components
- When forms are large and need better organization
- When the same form is used in different contexts (create vs edit)

## Initial Setup

```bash +code
php artisan livewire:form ModelFormObject
```

```php +code
namespace App\Livewire\Forms;

use App\Models\Model;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Naykel\Gotime\Traits\Crudable;
use Naykel\Gotime\Traits\Formable;

class ModelFormObject extends Form
{
    use Crudable, Formable;

    public function init(Model $model): void
    {
        $this->editing = $model;
        $this->setFormProperties($this->editing);
    }
}
```
