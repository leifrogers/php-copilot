---
description: 'Symfony-specific development standards and best practices'
applyTo: '**/*.php'
---

# Symfony Development Standards

## Symfony-Specific Conduct
- You are an expert Symfony developer with deep knowledge of the Symfony ecosystem and enterprise patterns.
- Follow Symfony conventions and leverage the framework's component-based architecture.
- Use Symfony's maker bundle for code generation and follow framework best practices.
- Embrace dependency injection and the service container for clean architecture.

## Symfony Framework Standards
- Use Symfony 6+ features and maintain compatibility with the latest LTS version.
- Follow Symfony directory structure and naming conventions.
- Use Symfony Flex for package management and recipe execution.
- Leverage Symfony's component architecture and avoid framework coupling.
- Use environment-based configuration with proper parameter handling.

## Dependency Injection and Services
- Use constructor injection for all service dependencies.
- Apply service autowiring and autoconfiguration for clean service definitions.
- Implement proper service tagging for related services.
- Use service aliases and synthetic services when appropriate.
- Apply compiler passes for complex service container modifications.
- Use service decorators for extending existing functionality.
- Implement proper service scoping (singleton, prototype) based on requirements.

## Controller Best Practices
- Keep controllers thin and delegate business logic to services.
- Use dependency injection for all controller dependencies.
- Apply proper request/response handling with Symfony's HTTP foundation.
- Use parameter converters for automatic request parameter conversion.
- Implement proper exception handling with error controllers.
- Use Symfony's security component for authentication and authorization.
- Apply proper routing configuration with annotations or YAML/XML.

## Doctrine ORM Integration
- Use Doctrine entities with proper mapping configuration.
- Implement repository patterns with custom query methods.
- Use Doctrine migrations for database schema management.
- Apply proper entity relationships and lazy loading strategies.
- Use Doctrine events and lifecycle callbacks appropriately.
- Implement proper transaction management and batch processing.
- Use Doctrine fixtures for test data management.

## Form Component Usage
- Create form types for reusable form functionality.
- Use Symfony's validation component with constraint annotations.
- Implement proper form themes and rendering customization.
- Use data transformers for complex form data handling.
- Apply proper CSRF protection and form security measures.
- Use form events for dynamic form modification.
- Implement file upload handling with proper validation.

## Security Implementation
- Use Symfony's security component for authentication and authorization.
- Implement custom authentication providers and user providers when needed.
- Use security voters for complex authorization logic.
- Apply proper password hashing and security policies.
- Implement proper session management and security headers.
- Use security firewalls for different application areas.
- Apply proper CSRF protection and input validation.

## Event System and Architecture
- Use Symfony's event dispatcher for decoupled application logic.
- Implement event subscribers for related event handling.
- Use kernel events for request/response lifecycle management.
- Apply proper event naming conventions and documentation.
- Implement custom events for application-specific workflows.
- Use event priorities for proper event handling order.

## Configuration Management
- Use Symfony's configuration component for structured configuration.
- Implement proper environment variable handling and parameter conversion.
- Use configuration trees for complex configuration structures.
- Apply proper configuration validation and normalization.
- Use semantic configuration for bundle configuration.
- Implement proper configuration caching and optimization.

## Console Commands
- Create console commands for application-specific tasks.
- Use proper input/output handling and argument/option validation.
- Implement progress bars and interactive commands.
- Use command events and proper error handling.
- Apply proper command testing and documentation.
- Use command locking for preventing concurrent execution.

## Testing Standards
- Use Symfony's testing framework with PHPUnit integration.
- Implement functional tests with Symfony's WebTestCase.
- Write unit tests for services and business logic.
- Use test fixtures and proper test data management.
- Implement database testing with proper test isolation.
- Use Symfony's testing tools (Client, Crawler, Profiler).
- Test security, forms, and console commands thoroughly.

## API Development
- Use API Platform for REST and GraphQL API development.
- Implement proper serialization and normalization.
- Use Symfony's HTTP client for external API integration.
- Apply proper API versioning and content negotiation.
- Implement rate limiting and security measures.
- Use OpenAPI documentation and validation.

## Performance Optimization
- Use Symfony's cache component for application caching.
- Implement proper HTTP caching with Symfony's HTTP cache.
- Use Symfony's profiler for performance analysis and optimization.
- Apply proper asset management and optimization.
- Use Doctrine query optimization and proper indexing.
- Implement background job processing with Symfony Messenger.
- Use opcache and proper PHP optimization techniques.

## Bundle Development
- Create reusable bundles for shared functionality.
- Use proper bundle structure and configuration.
- Implement bundle dependency injection and service configuration.
- Use semantic configuration for bundle parameters.
- Apply proper bundle testing and documentation.
- Use bundle inheritance and overriding when appropriate.

## Messenger Component
- Use Symfony Messenger for asynchronous message handling.
- Implement proper message routing and transport configuration.
- Use message handlers for business logic processing.
- Apply proper message serialization and error handling.
- Implement message retry strategies and dead letter queues.
- Use message buses for different types of messages (command, query, event).

## Workflow Component
- Use Symfony Workflow for complex business processes.
- Define proper workflow states and transitions.
- Implement workflow guards and event handling.
- Use workflow marking stores for state persistence.
- Apply proper workflow visualization and debugging.

## Translation and Internationalization
- Use Symfony's translation component for multi-language support.
- Implement proper translation domain organization.
- Use translation extraction and validation tools.
- Apply proper locale management and fallback strategies.
- Use translation caching and optimization.

## Deployment and Production
- Use Symfony's deployment best practices and optimization commands.
- Implement proper environment configuration and secret management.
- Use Symfony's cache warming and optimization features.
- Apply proper logging and monitoring configuration.
- Implement health checks and readiness probes.
- Use proper file permissions and security hardening.
