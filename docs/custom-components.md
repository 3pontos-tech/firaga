# Adding Custom Components to the CMS

This technical documentation provides a step-by-step guide on how to add new components to the CMS structure.

## Overview

Components in the CMS are reusable blocks that can be used in pages or posts. Each component consists of:

1. A PHP class that implements the `ComponentInterface`
2. A Blade template for rendering the component
3. Registration in the CMS configuration

## Step 1: Create the Component Class

Create a new PHP class in the `app/Filament/Components` directory (or a subdirectory for organization). The class must
implement the `Webid\Druid\Components\ComponentInterface`.

```php
<?php

namespace App\Filament\Components;

use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class MyCustomComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            // Define form fields for configuring the component
            TextInput::make('title')
                ->required(),
            TextInput::make('content')
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        // Return a unique identifier for the component
        return 'my_custom';
    }

    public static function toBlade(array $data): View
    {
        // Render the component to a view
        return view('filament.components.my-custom', [
            'title' => $data['title'] ?? '',
            'content' => $data['content'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        // Return searchable content (can be empty)
        return '';
    }

    public static function imagePreview(): string
    {
        // Return a URL to an image for preview in the admin panel
        return '/path/to/preview-image.png';
    }
}
```

### Key Methods

- **blockSchema()**: Defines the form fields for configuring the component in the admin panel. You can use any Filament
  form components like TextInput, MarkdownEditor, Repeater, etc.
- **fieldName()**: Returns a unique identifier for the component. This will be used in the TemplateRender class.
- **toBlade()**: Renders the component to a Blade view. This method receives the component data and returns a View.
- **toSearchableContent()**: Returns searchable content for the component. This can be empty if the component doesn't
  need to be searchable.
- **imagePreview()**: Returns a URL to an image for preview in the admin panel.

## Step 2: Create the Blade Template

Create a Blade template in the `resources/views/filament/components` directory. The template name should match the one
used in the `toBlade()` method.

```blade
<!-- resources/views/filament/components/my-custom.blade.php -->
<div class="my-custom-component">
    <h2>{{ $title }}</h2>
    <div class="content">
        {{ $content }}
    </div>
</div>
```

## Step 3: Register the Component in the CMS Configuration

Open the `config/cms.php` file and add your component to the `components` array:

```php
'components' => [
    // Landing Components
    ['class' => MainHeroComponent::class],
    
    // Your custom component
    ['class' => \App\Filament\Components\MyCustomComponent::class],
    
    // Blog components
],
```

## Step 4: Update the TemplateRender Class

Open the `app/TemplateRender.php` file and add your component to the `resolveComponent` method:

```php
private function resolveComponent(string $type): ComponentInterface
{
    return match ($type) {
        'text' => app(TextComponent::class),
        'faq' => app(FaqComponent::class),
        'code' => app(CodeComponent::class),
        'main_hero' => app(MainHeroComponent::class),
        'my_custom' => app(\App\Filament\Components\MyCustomComponent::class), // Add your component
        default => throw new ViewException(__('Unsupported component type: :type', ['type' => $type])),
    };
}
```

## Step 5: Use the Component in Pages or Posts

Now you can use your custom component in pages or posts. When editing a page or post in the admin panel, you'll see your
component in the list of available components.

## Advanced Component Features

### Using Repeaters for Complex Components

For components that need to display multiple items (like a carousel or a list), you can use the Filament Repeater
component:

```php
public static function blockSchema(): array
{
    return [
        Repeater::make('items')
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->required(),
            ]),
    ];
}
```

### Using Media Library

For components that need to display images, you can use the Curator Media Library:

```php
public static function blockSchema(): array
{
    return [
        TextInput::make('title')
            ->required(),
        \Awcodes\Curator\Components\Forms\CuratorPicker::make('image')
            ->label('Image')
            ->required(),
    ];
}
```

### Component with Conditional Fields

You can use conditional logic in your component's form fields:

```php
public static function blockSchema(): array
{
    return [
        Select::make('type')
            ->options([
                'simple' => 'Simple',
                'advanced' => 'Advanced',
            ])
            ->required(),
        
        TextInput::make('title')
            ->required(),
            
        TextInput::make('subtitle')
            ->visible(fn (Closure $get) => $get('type') === 'advanced'),
    ];
}
```

## Troubleshooting

### Component Not Showing in Admin Panel

If your component is not showing in the admin panel:

1. Make sure it's properly registered in the `config/cms.php` file
2. Check that the class name and namespace are correct
3. Clear the Laravel configuration cache: `php artisan config:clear`

### Component Not Rendering Correctly

If your component is not rendering correctly:

1. Check the Blade template path and name
2. Verify that the data is being passed correctly from the component class to the template
3. Check for any errors in the browser console or Laravel logs

## Best Practices

1. **Keep components focused**: Each component should have a single responsibility
2. **Use meaningful names**: Choose clear and descriptive names for your components
3. **Validate input**: Use Filament's validation features to ensure data integrity
4. **Document your components**: Add PHPDoc comments to your component classes
5. **Use type hints**: Use proper type hints for method parameters and return types
6. **Follow Laravel coding style**: Adhere to the Laravel coding style guidelines
