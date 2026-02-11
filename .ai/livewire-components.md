# Livewire Components

## Index

Gateway to discover and manage records. Lists items and provides tools to work
with them.

**Typical features:**

- Search, filters, sorting and pagination
- Action buttons (view, edit, delete)
- Create new record button (optional)

## Manager

Routable hub for managing a single resource. Coordinates multiple features
without doing the work itself.

**Typical features:**

- Full-page component with its own route (e.g., `/courses/{course}`)
- Organizes features using tabs, sections, or other navigation
- Delegates work to child components

## Form

Component for creating or editing a record.

**Typical features:**

- Displays the form UI and handles user input
- Can be standalone with its own route
- Can be embedded in a Manager or Editor
- Can be used within a modal

## Form-Modal

Form component that includes its own modal wrapper.

**Typical features:**

- Displays form UI within a modal dialog
- Manages modal state (open/close)
- Triggered by parent component or user action

## Editor

Workspace for editing complex content that involves multiple related forms.
Unlike a simple Form, an Editor coordinates several forms that work together.

**Typical features:**

- Coordinates multiple forms and models (e.g., quiz + questions + answers)
- Single save action persists everything at once
- May be standalone with its own route
- May be embedded within a Manager tab

## Component Comparisons

### Manager vs Editor

**Manager:**

- Coordinates multiple different concerns
- Each section/tab typically has its own save button
- Example: CourseManager with tabs for Details, Modules, Enrolments, Settings

**Editor:**

- Coordinates multiple parts of one editing task
- Single save button persists everything at once
- Example: QuizEditor with settings, questions, and answers

### Form vs Editor

**Form:**

- Single form, straightforward

**Editor:**

- Multiple coordinated forms working together
