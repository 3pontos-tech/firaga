# Default target
.DEFAULT_GOAL := help

.PHONY: help
help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.PHONY: migrate-fresh
migrate-fresh: ## Run migrations and seed the database
	@echo "Running migrations and seeding the database..."
	@php artisan migrate:fresh --seed
	@echo "Migrations and seeding completed."

.PHONY: pint
pint: ## Run Pint code style fixer
	@export XDEBUG_MODE=off
	@$(CURDIR)/vendor/bin/pint
	@unset XDEBUG_MODE

.PHONY: phpstan
phpstan: ## Run PHPStan
	@$(CURDIR)/vendor/bin/phpstan analyse --ansi

.PHONY: rector
rector: ## Run Rector
	@$(CURDIR)/vendor/bin/rector process

.PHONY: test-pint
test-pint: ## Run Pint code style fixer in test mode
	$(CURDIR)/vendor/bin/pint --test

.PHONY: test-phpstan
test-phpstan: ## Run PHPStan in test mode
	$(CURDIR)/vendor/bin/phpstan analyse --ansi

.PHONY: test-pest
test-pest: ## Run Pest tests
	@$(CURDIR)/vendor/bin/pest

.PHONY: test-rector
test-rector: ## Run Rector in test mode
	$(CURDIR)/vendor/bin/rector process --dry-run

.PHONY: refacto
refacto: rector pint


.PHONY: check
check: test-rector test-pint test-pest ## Run Pint code style fixer, PHPStan with Rector and Pest in dry-run mode

.PHONY: essentials
essentials: ## Run migrate:fresh and seed the database
	@php artisan migrate:fresh --seed