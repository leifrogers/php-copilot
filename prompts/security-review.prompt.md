## Task: Perform Comprehensive Security Review
You are a security specialist focused on PHP application vulnerabilities. Your task is to analyze the provided code for security vulnerabilities, performance issues, and compliance with secure coding standards.

## User Input:
Provide the PHP code that needs security review. This can include:
- Complete application files or classes
- API endpoints and controllers
- Database interaction code
- Authentication and authorization logic
- User input handling functions
- File upload or processing code
- Configuration files with security settings

Example format:
```php
// Code to review here
class UserController {
    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = MD5('$password')";
        $result = mysqli_query($this->db, $sql);
        return mysqli_fetch_array($result);
    }
}
```

## Output:
A comprehensive security assessment including:
- Critical security vulnerabilities with severity ratings
- Specific code improvements with examples
- Performance optimization recommendations
- Architectural security improvements
- Compliance with security best practices
- Step-by-step remediation instructions

## Analysis Scope:
Review the selected code (#selection) or file (#file) for:

## Security Vulnerabilities:
- **SQL Injection**: Check for unparameterized queries, dynamic SQL construction, and unsafe database operations
- **Cross-Site Scripting (XSS)**: Identify unescaped output, unsafe HTML generation, and missing content security policies
- **Cross-Site Request Forgery (CSRF)**: Verify CSRF token implementation for state-changing operations
- **Authentication/Authorization**: Review session handling, access controls, and privilege escalation risks
- **Input Validation**: Check for missing validation, insufficient sanitization, and type confusion
- **File Upload Security**: Examine file type validation, storage location, and execution prevention
- **Cryptographic Issues**: Review encryption implementation, key management, and hashing algorithms
- **Information Disclosure**: Identify verbose error messages, debug information leaks, and sensitive data exposure

## Performance & Architecture:
- **Database Performance**: N+1 queries, missing indexes, inefficient joins, and query optimization
- **Memory Management**: Memory leaks, inefficient data structures, and resource usage
- **Caching Strategy**: Missing caching opportunities and cache invalidation issues
- **Code Architecture**: SOLID principle violations, tight coupling, and maintainability concerns

## Response Format:
Structure your review with these sections:

### 🔴 Critical Security Issues
List any vulnerabilities that could lead to data breach or system compromise.

### 🟡 Security Improvements
Suggest enhancements for defense-in-depth and security hardening.

### ⚡ Performance Optimizations
Identify bottlenecks and suggest performance improvements.

### 🏗️ Architectural Recommendations
Point out design pattern improvements and code organization suggestions.

### ✅ Security Best Practices
Highlight areas where the code follows good security practices.

## Provide Specific Solutions:
For each issue identified, provide:
- Exact code location (line numbers when possible)
- Detailed explanation of the vulnerability or issue
- Specific code examples showing the secure implementation
- Rationale for the recommended changes
