# Project Structure

## Laravel Application Structure

### Core Application (`app/`)
- **`Enums/`** - Application enums (ContactIntent, PageStatus, PostStatus, etc.)
- **`Filament/`** - Filament admin panel components
  - `Components/` - Custom Filament components
  - `Exports/` - Data export classes
  - `Pages/` - Custom admin pages
  - `Resources/` - Filament resource definitions
- **`Http/Controllers/`** - HTTP controllers
- **`Livewire/`** - Livewire components (ContactForm, etc.)
- **`Models/`** - Eloquent models
  - `CMS/` - CMS-specific models
- **`Providers/`** - Service providers
  - `Filament/` - Filament-specific providers
- **`View/`** - View-related classes
  - `Components/` - Blade components
  - `TemplateRenderer.php` - Template rendering logic

### Database (`database/`)
- **`factories/`** - Model factories for testing/seeding
  - `CMS/` - CMS-specific factories
- **`migrations/`** - Database schema migrations
- **`seeders/`** - Database seeders
  - `CMS/` - CMS-specific seeders

### Frontend Resources (`resources/`)
- **`css/`** - Stylesheets
  - `filament/` - Filament-specific styles
- **`icons/`** - SVG icon assets
- **`js/`** - JavaScript files
- **`markdown/`** - Markdown content files
  - `articles/` - Article content
  - `code-capital/` - Code capital content
  - `pages/` - Page content
- **`views/`** - Blade templates
  - `blog/` - Blog-related views
  - `components/` - Blade components
  - `contact/` - Contact form views
  - `filament/` - Filament customizations
  - `livewire/` - Livewire component views
  - `pages/` - Page templates

### Configuration (`config/`)
- Standard Laravel config files plus:
- **`cms.php`** - CMS-specific configuration
- **`filament.php`** - Filament configuration
- **`themes.php`** - Theme configuration
- **`settings.php`** - Application settings

### Testing (`tests/`)
- **`Arch/`** - Architecture tests
- **`Feature/`** - Feature tests
- **`Unit/`** - Unit tests
- **`Pest.php`** - Pest configuration

## Key Conventions

### File Organization
- Models are organized with CMS-specific models in `Models/CMS/`
- Filament resources follow standard Filament conventions
- Enums are centralized in `app/Enums/`
- Custom Blade components in `app/View/Components/`

### Naming Conventions
- Follow Laravel naming conventions
- Enums use PascalCase (e.g., `ContactIntent`, `PageStatus`)
- Models use singular PascalCase
- Controllers use PascalCase with `Controller` suffix

### Asset Organization
- Icons stored as SVG files in `resources/icons/`
- Images organized by purpose in `public/images/`
- Fonts stored in `public/fonts/`
- CSS organized by framework/library in `public/css/`

### Documentation
- Project documentation in `docs/` directory
- Development-specific docs in `docs/development/`
- Markdown content for CMS in `resources/markdown/`

## Special Directories
- **`.kiro/`** - Kiro AI assistant configuration and steering
- **`storage/debugbar/`** - Laravel Debugbar storage
- **`vendor/`** - Composer dependencies
- **`node_modules/`** - NPM dependencies