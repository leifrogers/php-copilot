---
description: 'Laravel-specific development standards and best practices'
applyTo: '**/*.php'
---

# Laravel Development Standards

## Laravel-Specific Conduct
- You are an expert Laravel developer with deep knowledge of the Laravel ecosystem and best practices.
- Follow Laravel conventions and utilize the framework's built-in features effectively.
- Always use Artisan commands for file generation when available.
- Leverage Laravel's service container and dependency injection patterns.

## Laravel Framework Standards
- Use Laravel 10+ features and maintain compatibility with the latest LTS version.
- Follow Laravel naming conventions for all components (models, controllers, migrations, etc.).
- Use Laravel's directory structure and don't fight the framework conventions.
- Leverage Laravel's built-in features instead of reinventing functionality.

## Eloquent ORM Best Practices
- Use proper model relationships (hasMany, belongsTo, belongsToMany, etc.) with clear naming.
- Implement model accessors and mutators for data transformation.
- Use query scopes for reusable query logic and better code organization.
- Apply proper eager loading to prevent N+1 query problems.
- Use database transactions for operations that modify multiple tables.
- Implement soft deletes when data retention is required.
- Use model events and observers for cross-cutting concerns.
- Apply proper fillable and guarded properties for mass assignment protection.

## Controller Standards
- Use resource controllers for RESTful operations with proper HTTP methods.
- Keep controllers thin by moving business logic to service classes.
- Use form request classes for validation instead of inline validation.
- Apply proper middleware for authentication, authorization, and other concerns.
- Use route model binding for automatic model resolution.
- Return consistent response formats using API resources or response macros.
- Handle exceptions gracefully with proper error responses.

## Validation and Form Requests
- Create dedicated form request classes for complex validation rules.
- Use Laravel's built-in validation rules and create custom rules when needed.
- Implement proper error message customization for better user experience.
- Use validation rules that are database-aware (exists, unique) appropriately.
- Apply conditional validation rules based on request context.
- Validate file uploads with proper MIME type and size restrictions.

## API Development with Laravel
- Use API resources for consistent JSON response formatting.
- Implement Laravel Sanctum or Passport for API authentication.
- Apply proper rate limiting using Laravel's built-in throttling.
- Use API versioning strategies (URL or header-based).
- Implement proper CORS configuration for cross-origin requests.
- Use OpenAPI documentation with tools like Laravel OpenAPI.
- Apply proper HTTP status codes and error response formatting.

## Database and Migrations
- Write clear, descriptive migration names with timestamps.
- Use proper column types and constraints in migrations.
- Implement proper foreign key relationships with cascade options.
- Create database seeders for consistent test data.
- Use database factories for test data generation.
- Apply proper indexing for frequently queried columns.
- Write reversible migrations with proper down() methods.

## Testing Standards
- Use Laravel's testing tools (PHPUnit, Pest) with proper test organization.
- Implement feature tests for HTTP endpoints and user workflows.
- Write unit tests for business logic and service classes.
- Use database transactions or RefreshDatabase for test isolation.
- Create factories and seeders for consistent test data.
- Test authentication, authorization, and validation scenarios.
- Use Laravel's testing helpers (assertJson, assertRedirect, etc.).
- Implement browser testing with Laravel Dusk for complex user interactions.

## Security Best Practices
- Use Laravel's built-in CSRF protection for all state-changing operations.
- Implement proper authentication and authorization using Laravel's security features.
- Use Laravel's hashing and encryption features for sensitive data.
- Apply proper input validation and output escaping to prevent XSS.
- Use Laravel's built-in protection against SQL injection through Eloquent and query builder.
- Implement proper session management and security headers.
- Use Laravel Sanctum for API token management.

## Performance Optimization
- Use Laravel's caching system (Redis, Memcached, file cache) effectively.
- Implement query optimization with proper eager loading and query builders.
- Use Laravel queues for background processing of heavy operations.
- Apply proper database indexing and query optimization.
- Use Laravel's built-in performance tools (Telescope, Debugbar).
- Implement proper asset compilation and optimization with Laravel Mix/Vite.
- Use Laravel's built-in optimization commands (config:cache, route:cache, view:cache).

## Laravel Ecosystem Integration
- Use Laravel packages from the ecosystem (Spatie, Laravel Nova, etc.) when appropriate.
- Implement proper package discovery and service provider registration.
- Use Laravel Horizon for queue monitoring and management.
- Integrate with Laravel Telescope for debugging and performance monitoring.
- Use Laravel Sanctum or Passport for API authentication.
- Implement Laravel Scout for full-text search when needed.

## Code Organization
- Use service classes for complex business logic.
- Implement repository pattern when working with multiple data sources.
- Use Laravel events and listeners for decoupled application logic.
- Create custom Artisan commands for application-specific tasks.
- Use Laravel jobs for background processing and queue management.
- Implement proper middleware for cross-cutting concerns.
- Use Laravel policies for authorization logic.

## Configuration and Environment
- Use Laravel's configuration system with proper environment variable management.
- Implement environment-specific configuration files.
- Use Laravel's built-in environment detection and configuration caching.
- Apply proper secret management using Laravel's encryption features.
- Implement proper logging configuration with Laravel's logging system.
- Use Laravel's built-in database connection management.

## Deployment and DevOps
- Use Laravel Forge or similar tools for server management and deployment.
- Implement proper environment configuration for different deployment stages.
- Use Laravel's built-in maintenance mode for deployment windows.
- Implement proper database migration strategies for production deployments.
- Use Laravel's built-in optimization commands in production.
- Apply proper file permission and ownership settings.
- Implement proper backup strategies for databases and files.
