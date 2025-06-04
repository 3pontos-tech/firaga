# Database Modeling Guidelines

## Overview

The goal is to create a database schema that is easy to understand, maintain, and extend. The schema should be designed
with the following principles in mind:

- **Simplicity**: Keep the schema as simple as possible while still meeting the requirements.
- **Normalization**: Use normalization techniques to reduce data redundancy and improve data integrity.
- **Flexibility**: Design the schema to accommodate future changes and enhancements.
- **Performance**: Optimize the schema for performance, especially for read-heavy operations.

## Database Design Principles

### 1. Use Meaningful Names

Use descriptive names for tables, columns, and indexes. Avoid abbreviations and acronyms unless they are widely used in
a global scenario. For example, use `investment_offers` instead of `inv_offers`.

### 2. Use Consistent Naming Conventions

Use a consistent naming convention for tables and columns. The recommended convention is to use **snake_case** for
table names and column names. For example, use `investment_offers` instead of `InvestmentOffers`.

Also, you should ask yourself about the data type and how it will reflect at the database column. Here are some
conventions:

* the column is a boolean, use `is_` or `has_` as a prefix (e.g., `is_active`, `has_documents`)
* the column is a timestamp, use `at_` as a suffix (e.g., `created_at`, `updated_at`)
* the column is a foreign key, use `_id` as a suffix (e.g., `user_id`, `offer_id`)

### 3. Use Foreign Keys

Use foreign keys to enforce referential integrity between tables. This helps maintain data consistency and prevents
orphaned records. For example, if you have a `users` table and an `investment_offers` table, use a foreign key to link
the `user_id` column in the `investment_offers` table to the `id` column in the `users` table.

```php
\Illuminate\Support\Facades\Schema::create('table', function (Blueprint $table) {)
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
});

```

### 4. Use Indexes

Use indexes to improve query performance. Create indexes on columns that are frequently used in WHERE clauses,
JOINs, and ORDER BY clauses. For example, create an index on the `created_at` column in the `investment_offers` table
to speed up queries that filter by creation date.

### 5. Use Data Types Wisely

Use appropriate data types for columns and always ask yourself (or a teammate) if the data type is the best one for the
job.

Here's a better list:

- Use `VARCHAR` for short strings (e.g., names, titles)
- Use `TEXT` for long strings (e.g., descriptions, comments)
- Use `INTEGER` for whole numbers and **CURRENCY**
- Use `BOOLEAN` for true/false values
- Use `TIMESTAMP` for date and time values

> **Note**: We will use integer for currency values. This is a common practice in programming to avoid floating-point.

### 6. Denormalize When Necessary

In some cases, denormalization may be necessary to improve performance. This involves combining tables or adding
redundant data to reduce the number of JOINs required in queries. However, denormalization should be used sparingly and
only when performance is a critical concern. Always consider the trade-offs between normalization and denormalization.

#### Example: Denormalizing a Narrow Table

Suppose you have a `user_profiles` table with columns like `user_id`, `bio`, and `avatar_url`, and you want to merge
these into the `users` table for performance reasons.

**Migration to add columns to `users` and drop `user_profiles`:**

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable();
            $table->string('avatar_url')->nullable();
        });

        // Optionally, migrate data from user_profiles to users here

        Schema::dropIfExists('user_profiles');
    }

    public function down()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('bio')->nullable();
            $table->string('avatar_url')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['bio', 'avatar_url']);
        });
    }
}
```

> **Note**: Denormalization can lead to data redundancy and potential inconsistencies, so it should be done with
> caution.

### 7. Never rely on the `down()` method

The `down()` method in migrations becomes ineffective once data exists in production, as rolling back migrations can
lead to data loss or inconsistencies. For this reason, we do not use or depend on the `down()` method in our workflow.
