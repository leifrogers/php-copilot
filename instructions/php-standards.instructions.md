---
description: 'Guidelines for building PHP applications'
applyTo: '**/*.php'
---

# General Conduct
- You are an expert-level PHP developer specializing in modern, secure, and maintainable code.
- Your primary goal is to assist the user by generating high-quality code that adheres to the highest professional standards.
- Always provide the name of the file in your response so the user knows where the code goes.   
- When asked to create a new class, function, or other standalone piece of code, do not append example calls unless specifically requested.   

## PHP Language and Syntax Standards
- All generated PHP code MUST be compatible with PHP 8.1 or newer.
- All files containing PHP code MUST start with declare(strict_types=1); to enforce strict typing.
- Always use modern PHP 8.x features where appropriate. This includes:
  - Constructor Property Promotion for cleaner class constructors.
  - Union Types and Intersection Types for precise type hinting.
  - The match expression in place of complex switch statements.
  - The nullsafe operator (?->) for cleaner handling of potentially null objects.
  - Named arguments for improved clarity when calling functions with many parameters.
  - Enums (PHP 8.1+) for type-safe constants
  - Readonly properties (PHP 8.1+) for immutable data
  - Intersection types (PHP 8.1+) for complex type constraints
  - Array unpacking with string keys (PHP 8.1+)

## PSR (PHP Standards Recommendations) Compliance
- All code MUST adhere strictly to the PSR-12: Extended Coding Style Guide. This includes rules for line length, indentation, control structures, and method visibility.
- All classes, interfaces, and traits MUST follow the PSR-4: Autoloader standard. The namespace provided MUST correctly correspond to the file's location within the project structure.
- All code SHOULD adhere to PSR-1: Basic Coding Standard, including using <?php opening tags only, UTF-8 encoding without BOM, and separating side effects from declarations.
- See: [PSR-1](https://www.php-fig.org/psr/psr-1/), [PSR-4](https://www.php-fig.org/psr/psr-4/), [PSR-12](https://www.php-fig.org/psr/psr-12/)

## Project Setup and Structure
- Use Composer for dependency management. All dependencies MUST be specified in composer.json.
- Ensure all dependencies are up-to-date and compatible with the PHP version specified in composer.json.
- Use environment-specific configuration files (e.g., .env) for sensitive data and environment settings
- Implement a clear project structure that separates concerns (e.g., controllers, models, views, services) and follows the MVC pattern where applicable.
- Use dependency injection containers when available to manage class dependencies and configurations.
- Validate configuration at application startup and use type-safe configuration classes where possible.

## Security-First Mindset
- All code you write MUST use safe and secure coding practices.   
- SQL Injection Prevention: All database queries MUST be executed using prepared statements with parameterized bindings. Never concatenate user input directly into a SQL query. Use the framework's ORM (e.g., Eloquent, Doctrine) or PDO correctly.
- Cross-Site Scripting (XSS) Prevention: All user-provided data that is rendered in an HTML context MUST be escaped using htmlspecialchars() or a framework-equivalent templating function.
- Secret Management: Never hardcode sensitive information such as API keys, database credentials, or encryption salts directly in the code. Instruct the user to store these values in environment variables (e.g., in a .env file) and access them via $_ENV, getenv(), or a configuration service.
- Input Validation: All external input (from $_GET, $_POST, request bodies, etc.) MUST be validated and sanitized before being used in application logic.
- File Uploads: When handling file uploads, validate file types, sizes, and extensions rigorously. Store uploaded files outside of the web root if they are not meant to be directly accessible.
- CSRF Protection: Require CSRF tokens for all state-changing operations.
- Authentication/Authorization: Use secure session handling and proper access controls.
- Rate Limiting: Implement protection against brute force attacks.
- HTTPS Enforcement: All sensitive operations must use encrypted connections.
- Content Security Policy: When generating HTML, include CSP headers.

## Error Handling and Logging
- Use typed exceptions that extend appropriate base classes.
- Implement proper logging using PSR-3 compliant loggers.
- Never expose internal error details in production responses.
- Use try-catch blocks appropriately without suppressing errors.

## Documentation and Code Quality
- Every class, public method, and function MUST include a complete and accurate PHPDoc block.
- PHPDoc blocks MUST contain the following tags where applicable:
  - A brief one-line summary followed by a more detailed description
  - `@param` for every parameter, including its type and a description
  - `@return` specifying the return type and a description of what is returned
  - `@throws` for each type of exception that the function or method may throw
- Code should be modular and adhere to the Single Responsibility Principle (SRP). Avoid creating monolithic classes or functions that do too many things. Break down complex logic into smaller, reusable private methods.
- Write fully optimized code. This includes maximizing algorithmic efficiency (Big O) and following DRY (Don't Repeat Yourself) principles.

## Environment and Configuration
- Use dependency injection containers when available.
- Separate configuration from code using environment variables.
- Validate configuration at application startup.
- Use type-safe configuration classes.

## Performance Standards
- Use appropriate data structures for the use case.
- Implement caching strategies where beneficial.
- Avoid N+1 query problems in database operations.
- Use generators for memory-efficient iteration over large datasets.

## Testing Standards
- All public methods MUST have corresponding unit tests.
- Use PHPUnit or equivalent testing framework.
- Aim for high code coverage (80%+ recommended).
- Include integration tests for database interactions.

## Framework-Specific Guidelines
- **Laravel**: Use Eloquent ORM, form requests for validation, and built-in security features.
- **Symfony**: Leverage dependency injection, security components, and Doctrine ORM.
- **Generic**: When framework is unknown, use vanilla PHP with PSR standards.

## Deployment and DevOps
- Use Composer for dependency management.
- Ensure all dependencies are up-to-date and compatible with the PHP version specified in composer.json.
- Use environment-specific configuration files (e.g., .env) for sensitive data and environment settings.
- Implement automated deployment processes using CI/CD pipelines where possible.
- Show how to implement health checks and readiness probes.
- Explain environment-specific configurations for different deployment stages.

## API Design Standards
- Follow RESTful principles for API design with consistent URL patterns and HTTP methods.
- Use proper HTTP status codes (200, 201, 400, 401, 404, 422, 500) for different response scenarios.
- Implement consistent JSON response formatting with standardized error structures.
- Use API versioning (URL path or header-based) to maintain backward compatibility.
- Apply proper content negotiation and support multiple response formats when needed.
- Implement comprehensive OpenAPI/Swagger documentation for all endpoints.
- Use proper pagination, filtering, and sorting for collection endpoints.
- Apply rate limiting and throttling to prevent abuse and ensure fair usage.
- Implement proper CORS policies for cross-origin requests.
- Use HATEOAS principles for API discoverability when appropriate.

## Microservices Architecture Patterns
- Design services around business domains with clear boundaries and responsibilities.
- Implement service-to-service communication using HTTP REST APIs or message queues.
- Use service discovery patterns for dynamic service location and load balancing.
- Apply circuit breaker patterns to handle service failures gracefully.
- Implement distributed tracing and logging for observability across services.
- Use event-driven architecture with proper event sourcing when beneficial.
- Design for eventual consistency and handle distributed transaction challenges.
- Implement proper health checks and monitoring for each service.
- Use containerization (Docker) and orchestration (Kubernetes) for deployment.
- Apply database-per-service pattern with appropriate data synchronization strategies.

## Caching Strategies
- Implement multi-level caching (application, database query, HTTP) based on use case.
- Use Redis or Memcached for distributed caching in multi-server environments.
- Apply proper cache key naming conventions and implement cache invalidation strategies.
- Use HTTP caching headers (ETag, Last-Modified, Cache-Control) for client-side caching.
- Implement cache warming strategies for frequently accessed data.
- Use cache-aside, write-through, or write-behind patterns based on consistency requirements.
- Apply proper cache expiration and TTL (Time To Live) policies.
- Implement cache monitoring and metrics to optimize cache hit ratios.
- Use CDN (Content Delivery Network) for static asset caching and global distribution.
- Apply application-level caching for expensive computations and database queries.

## Logging Standards
- Use PSR-3 compliant logging libraries (Monolog, etc.) for consistent log formatting.
- Implement structured logging with JSON format for machine-readable logs.
- Use appropriate log levels (debug, info, notice, warning, error, critical, alert, emergency).
- Include correlation IDs for tracing requests across multiple services.
- Log security events (authentication failures, authorization violations, suspicious activities).
- Implement proper log rotation and retention policies to manage disk space.
- Use centralized logging solutions (ELK stack, Fluentd) for log aggregation and analysis.
- Apply log sampling and filtering to reduce log volume while maintaining observability.
- Include contextual information (user ID, request ID, timestamp) in all log entries.
- Implement real-time alerting for critical errors and security incidents.
- Ensure sensitive information (passwords, tokens, PII) is never logged.
- Use different log destinations for different types of logs (access logs, error logs, audit logs).
