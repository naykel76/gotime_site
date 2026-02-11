# Livewire Rules

## Component Generation

- Always use `php artisan livewire:make` to create components
- Use the namespace when specified in the prompt (e.g., "admin product index" →
  `admin::resource.index`)
- Namespaces are configured in `config/livewire.php` under
  `component_namespaces`
- Livewire handles all file structure and code generation automatically

```bash
# With namespace
php artisan livewire:make admin::resource.index

# No namespace
php artisan livewire:make resource.index
```

```bash
# example of multiple components for a resource
pa livewire:make admin::resource.form
pa livewire:make admin::resource.index
pa livewire:form WidgetFormObject
```

### Blade References

```html +code-blade
<livewire:admin::resource.index />
<livewire:resource.index />
```

## Naming Conventions

Component names follow the pattern: `{namespace}::{resource}.{type}`

**Examples:**

- `product.index` - Public product listing
- `admin::course.index` - Admin course listing  
- `admin::course.manager` - Admin course management hub
- `quiz.editor` - Quiz editing workspace
