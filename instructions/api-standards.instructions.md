---
description: 'API development standards and best practices'
applyTo: '**/*.php'
---

# API Development Standards

## API Design Philosophy
- Design APIs as products with clear value propositions and user experiences.
- Follow API-first development approach with contract-driven design.
- Prioritize consistency, predictability, and developer experience.
- Design for scale, security, and maintainability from the beginning.
- Apply progressive disclosure principles for API complexity management.

## RESTful API Standards
- Use HTTP methods semantically (GET for retrieval, POST for creation, PUT/PATCH for updates, DELETE for removal).
- Design resource-oriented URLs with consistent naming conventions (nouns, not verbs).
- Use proper HTTP status codes to communicate operation results accurately.
- Implement HATEOAS (Hypermedia as the Engine of Application State) for API discoverability.
- Apply proper resource nesting and relationship representation.
- Use query parameters for filtering, sorting, and pagination consistently.

## HTTP Status Code Usage
- 200 OK: Successful GET, PUT, PATCH operations
- 201 Created: Successful POST operations that create resources
- 204 No Content: Successful DELETE operations or PUT operations with no response body
- 400 Bad Request: Invalid request syntax or parameters
- 401 Unauthorized: Authentication required or failed
- 403 Forbidden: Authenticated but not authorized for the resource
- 404 Not Found: Resource does not exist
- 422 Unprocessable Entity: Valid request syntax but semantic errors
- 429 Too Many Requests: Rate limit exceeded
- 500 Internal Server Error: Unexpected server error

## Request/Response Format Standards
- Use JSON as the primary data format with proper Content-Type headers.
- Implement consistent response structure with data, meta, and error sections.
- Use camelCase for JSON property names for consistency.
- Apply proper null value handling and optional field representation.
- Use ISO 8601 format for timestamps and dates.
- Implement proper boolean value representation (true/false, not 1/0).

## API Versioning Strategies
- Use URL path versioning (api/v1/users) for major version changes.
- Implement header-based versioning for minor changes and feature flags.
- Apply semantic versioning principles (major.minor.patch) for API versions.
- Maintain backward compatibility within major versions.
- Provide proper deprecation notices and migration guides.
- Use API version negotiation for client-specific responses.

## Authentication and Authorization
- Implement OAuth 2.0 or JWT tokens for stateless authentication.
- Use API keys for service-to-service authentication.
- Apply proper token validation and refresh mechanisms.
- Implement role-based access control (RBAC) for fine-grained permissions.
- Use HTTPS everywhere for secure token transmission.
- Apply proper token expiration and revocation strategies.
- Implement rate limiting per user/API key to prevent abuse.

## Input Validation and Sanitization
- Validate all input parameters against expected types and formats.
- Use white-listing for input validation instead of black-listing.
- Implement proper SQL injection prevention with parameterized queries.
- Apply XSS prevention through proper output encoding.
- Validate file uploads with proper MIME type and size restrictions.
- Use schema validation (JSON Schema) for complex request validation.
- Provide detailed validation error messages with field-specific feedback.

## Error Handling and Response Format
- Use consistent error response structure across all endpoints.
- Provide error codes, messages, and details for proper error handling.
- Include correlation IDs for request tracing and debugging.
- Apply proper error logging without exposing sensitive information.
- Use problem details (RFC 7807) format for structured error responses.
- Implement proper error message localization for international APIs.

## Pagination and Filtering
- Use cursor-based pagination for large datasets and better performance.
- Implement offset-based pagination for simple use cases.
- Provide pagination metadata (total count, next/previous links, page info).
- Use query parameters for filtering (filter[field]=value).
- Implement proper sorting with multiple field support.
- Apply field selection (sparse fieldsets) for response optimization.
- Use search functionality with proper indexing and performance optimization.

## Caching Strategies
- Implement HTTP caching headers (ETag, Last-Modified, Cache-Control).
- Use CDN for static content and geographically distributed caching.
- Apply application-level caching for expensive operations.
- Implement cache invalidation strategies for data consistency.
- Use cache versioning for proper cache busting.
- Apply proper cache key design for effective cache utilization.

## Rate Limiting and Throttling
- Implement rate limiting based on API key, user, or IP address.
- Use sliding window or token bucket algorithms for rate limiting.
- Provide rate limit headers (X-RateLimit-Limit, X-RateLimit-Remaining).
- Apply different rate limits for different endpoint types and user tiers.
- Implement proper rate limit exceeded responses with retry information.
- Use rate limiting for both read and write operations appropriately.

## API Documentation
- Use OpenAPI (Swagger) specification for comprehensive API documentation.
- Provide interactive documentation with try-it-out functionality.
- Include code examples in multiple programming languages.
- Document authentication requirements and security considerations.
- Provide clear error response examples and troubleshooting guides.
- Maintain up-to-date documentation with API changes.
- Include API changelog and migration guides for version updates.

## Security Best Practices
- Use HTTPS everywhere with proper TLS configuration.
- Implement proper CORS policies for cross-origin requests.
- Apply Content Security Policy (CSP) headers.
- Use proper input validation and output encoding.
- Implement SQL injection and XSS prevention measures.
- Apply proper authentication and authorization for all endpoints.
- Use security headers (HSTS, X-Frame-Options, X-Content-Type-Options).
- Implement proper logging and monitoring for security events.

## API Testing and Quality Assurance
- Implement comprehensive API test suites covering all endpoints.
- Use contract testing for API consumer compatibility.
- Apply load testing for performance and scalability validation.
- Implement security testing for vulnerability assessment.
- Use automated testing in CI/CD pipelines for continuous validation.
- Apply proper test data management and isolation.
- Implement end-to-end testing for complex API workflows.

## Monitoring and Observability
- Implement proper logging with structured log format (JSON).
- Use distributed tracing for request flow visibility across services.
- Apply proper metrics collection (response times, error rates, throughput).
- Implement health checks and readiness probes for service monitoring.
- Use real-time alerting for critical errors and performance degradation.
- Apply proper log correlation and search capabilities.
- Implement API analytics for usage patterns and optimization opportunities.

## Microservices API Patterns
- Design APIs for service autonomy and loose coupling.
- Implement proper service communication patterns (synchronous/asynchronous).
- Use API gateways for cross-cutting concerns (authentication, rate limiting, logging).
- Apply proper service discovery and load balancing.
- Implement circuit breaker patterns for fault tolerance.
- Use event-driven architecture for loosely coupled service communication.
- Apply proper data consistency patterns (eventual consistency, saga pattern).
