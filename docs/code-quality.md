# Code Quality Guidelines

This document outlines the code quality standards and tools used in the LaraCrowd project. All pull requests must adhere
to these standards to be accepted.

## Code Quality Tools

So far here's what we're going to use:

- [Laravel Pint](https://laravel.com/docs/pint): Code style fixer
- [PHPStan](https://phpstan.org/): Static analysis tool
- [Rector](https://getrector.com/): Automated refactoring tool
- [Pest](https://pestphp.com/): Testing framework

> Make sure to get familiar with these tools and their configurations before contributing to the project.

### Laravel Pint

[Laravel Pint](https://laravel.com/docs/pint) is an opinionated PHP code style fixer based on PHP-CS-Fixer.

- **Configuration**: We use the Laravel preset with additional rules defined in `pint.json`
- **Key Rules**:
    - Laravel coding style
    - No unused imports

#### Running Pint

```bash
# Format your code
make pint
# or
composer pint

# Check if your code needs formatting (used in CI)
make test-pint
# or
composer test:pint
```

### PHPStan

[PHPStan](https://phpstan.org/) with [Larastan](https://github.com/larastan/larastan) is a static analysis tool that
finds errors in your code without running it.

- **Configuration**: We use the maximum level of strictness (level 9) as defined in `phpstan.neon`
- **Analyzed Directories**: app, config, bootstrap, database/factories, routes

#### Running PHPStan

```bash
# Analyze your code
make phpstan
# or
composer phpstan

# Same command used in tests
make test-phpstan
# or
composer test:phpstan
```

### Rector

[Rector](https://getrector.com/) is a tool for automated refactoring and upgrading of PHP code.

- **Configuration**: Defined in `rector.php`
- **Key Features**:
    - Enforces code quality standards
    - Applies Laravel-specific best practices
    - Modernizes code automatically

#### Running Rector

```bash
# Apply automated refactoring
make rector
# or
composer rector

# Check for potential improvements without applying them (used in CI)
make test-rector
# or
composer test:rector
```

### Pest PHP

[Pest](https://pestphp.com/) is a testing framework with a focus on simplicity and developer experience.

- **Configuration**: Defined in `tests/Pest.php`
- **Architecture Tests**: We use architecture tests to enforce code structure rules (see `tests/ArchTest.php`)

#### Running Tests

```bash
# Run all tests with coverage
make test-pest
# or
composer test
```

## Architecture Tests

We use architecture tests to enforce code structure and organization rules:

1. **PHP Rules**: Prevents using risky or outdated PHP functions
2. **Security Rules**: Blocks functions that can make the application less secure
3. **Annotation Rules**: Ensures classes and methods are properly documented
4. **Global Rules**: Prevents using global functions like `dd`, `dump`, `env`, etc.

## CI Pipeline

Our GitHub Actions workflow automatically checks all pull requests for compliance with these standards. The pipeline
includes:

1. **Pint**: Checks code style
2. **Rector**: Checks for potential code improvements
3. **Pest**: Runs all tests including architecture tests

## Pull Request Requirements

To ensure your pull request passes the CI pipeline and meets our quality standards:

1. **Run Code Quality Tools Locally**: Before submitting a PR, run the following commands:
   ```bash
   make pint
   make phpstan
   make test-rector
   make test-pest
   ```
   Or use the combined check command:
   ```bash
   make check
   ```

2. **Fix All Issues**: Address any issues reported by the tools before submitting your PR

3. **Write Tests**: Ensure your code is covered by tests

4. **Document Your Code**: Add proper docblocks to classes and methods

## Best Practices

1. **Follow Laravel Conventions**: Adhere to Laravel's naming conventions and design patterns
2. **Keep Methods Small**: Methods should do one thing and do it well
3. **Use Type Declarations**: Always use type declarations for method parameters and return types
4. **Avoid Global Functions**: You can use global functions like `dd()`, but remember to remove them before submitting
   your PR
5. **Document Your Code**: Add proper docblocks to classes and methods

