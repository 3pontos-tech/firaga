# Technology Stack

## Core Framework
- **Laravel 12.36.0** - PHP web application framework
- **PHP 8.4.14** - Server-side scripting language
- **Filament 4.1.10** - Admin panel and form builder
- **Livewire 3.6.4** - Full-stack framework for Laravel

## Frontend Technologies
- **Alpine.js 3.14.9** - Lightweight JavaScript framework
- **Tailwind CSS 4.1.10** - Utility-first CSS framework
- **Vite 7.1.11** - Build tool and dev server
- **Laravel Echo 2.1.4** - Real-time event broadcasting

## Database
- **SQLite** - Default database engine
- **Laravel Migrations** - Database schema management

## Development Tools
- **Laravel Pint** - Code style fixer (PSR-12 compliant)
- **PHPStan (Larastan)** - Static analysis tool (max level)
- **Rector** - Automated code refactoring
- **Pest 4.1.2** - Testing framework
- **Laravel Sail** - Docker development environment

## Package Manager
- **Composer** - PHP dependency management
- **PNPM 10.6.3** - Node.js package manager

## Common Commands

### Development
```bash
# Start development environment
composer run dev

# Run migrations and seed database
make migrate-fresh
# or
php artisan migrate:fresh --seed
```

### Code Quality
```bash
# Fix code style
make pint
composer run pint

# Run static analysis
make phpstan
composer run phpstan

# Run automated refactoring
make rector
composer run rector

# Run all quality checks
make check
```

### Testing
```bash
# Run tests with coverage
composer run test
make test-pest

# Run individual quality checks
make test-pint
make test-phpstan
make test-rector
```

### Build
```bash
# Build for production
npm run build

# Development build with hot reload
npm run dev
```

## Code Style Standards
- **PSR-12** compliance enforced by Pint
- **Pre-increment style** for loops
- **Single space** concatenation
- **No unused imports** rule enabled
- **Maximum PHPStan level** for strict type checking