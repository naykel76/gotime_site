How do I toggle a JSON value?



    public function toggleWebinarAccess($id)
    {
        $user = User::findOrFail($id);
        $extraData = $user->extra_data ?? [];
        // flip the value, and If it doesn't exist, set it to true.
        $extraData['webinar_access'] = ! ($extraData['webinar_access'] ?? false);
        $user->extra_data = $extraData;
        $user->save();

        $this->dispatch('notify', $user->first_name . ' ' . $user->last_name . ' webinar access: ' . ($extraData['webinar_access'] ? 'Enabled' : 'Disabled'));
    }


    

## FAQ's

### <question>How can I refresh the table from another component?</question>

You can use Livewire events to communicate between components. For example, if
you have a form component that updates data, you can dispatch an event after the
data is saved. The table component can listen for this event and refresh its
data accordingly.

The `WithFormActions` trait dispatches:

- `model-saved` is dispatched after a model is created or updated.
- `model-deleted` is dispatched after a model is deleted.

Add a listener in the table component using the `#[On]` attribute:

```php +torchlight-php
use Livewire\Attributes\On;

#[On('model-saved')]
#[On('model-deleted')]
public function refreshTable()
{
    $this->resetPage();
    // Additional refresh logic if needed
}
```

For a simple refresh without custom logic, you can use the built-in `$refresh` method:

```php +torchlight-php
use Livewire\Attributes\On;

#[On('model-saved')]
#[On('model-deleted')]
public function $refresh() {}
```
