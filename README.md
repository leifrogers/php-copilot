---
post_title: "PHP Copilot Expert - GitHub Copilot Configuration for PHP Development"
author1: "Leif Rogers"
post_slug: "php-copilot-expert"
microsoft_alias: ""
featured_image: ""
categories: ["Development Tools", "PHP"]
tags: ["GitHub Copilot", "PHP", "Development", "Security", "Laravel", "Symfony", "Prompt Engineering"]
ai_note: "This documentation was enhanced with AI assistance"
summary: "A comprehensive GitHub Copilot configuration that transforms your coding assistant into a Senior PHP Architect and Security Specialist"
post_date: "2025-07-04"
---

# PHP Copilot Expert

A comprehensive GitHub Copilot configuration for PHP development, providing expert-level guidance for modern PHP applications with security, performance, and best practices built-in.

## What This Project Provides

This repository contains specialized GitHub Copilot configurations that transform your coding assistant into a **Senior PHP Architect and Security Specialist**. It includes:

- **Expert Chatmode**: A specialized PHP Expert persona for planning, coding, and security reviews
- **Prompt Library**: Ready-to-use prompts for common PHP development tasks
- **Standards & Guidelines**: Comprehensive PHP coding standards and security practices
- **Framework Support**: Specialized guidance for Laravel, Symfony, and modern PHP patterns

## Prerequisites

Before installing, ensure you have:

- **GitHub Copilot subscription** (required for all functionality)
- **VS Code** with GitHub Copilot extension installed
- **Git** (for cloning the repository)
- **PHP 8.1+** (for running validation scripts and generated code)

### Verify Prerequisites

```bash
# Check GitHub Copilot is installed and active
code --list-extensions | grep -i copilot

# Verify PHP version (8.1+ required)
php --version

# Check Git is available
git --version
```

## Installation

### Quick Setup
1. Clone this repository to your local machine
2. Open the folder in VS Code with GitHub Copilot enabled  
3. The chatmodes, prompts, and instructions will be automatically available

```bash
git clone https://github.com/leifrogers/php-copilot.git
cd php-copilot
code .
```

### Verify Installation
```bash
php scripts/validate.php $(pwd)
```

If the validation passes, you should see confirmation that all components are properly configured.

## Quick Start

### 1. Install the Chatmode
Copy the `chatmodes/PHP-Expert.chatmode.md` file to your VS Code chatmodes directory:

```bash
# For VS Code
cp chatmodes/PHP-Expert.chatmode.md ~/.vscode/chatmodes/
```

### 2. Use PHP Expert Commands
In GitHub Copilot Chat, activate the PHP Expert mode and use these commands:

- **`/plan`** - Break down feature requests into detailed implementation plans
- **`/review`** - Perform comprehensive security and performance code reviews
- **`/generate`** - Create PHP code following best practices
- **`/test`** - Generate PHPUnit tests for your classes

### 3. Access Prompt Library
Use the specialized prompts in the `prompts/` directory for specific tasks:

- `create-phpunit-test.prompt.md` - Generate comprehensive test suites
- `laravel-crud-stub.prompt.md` - Create complete Laravel CRUD resources
- `refactor-to-class.prompt.md` - Modernize legacy procedural code
- `symfony-service-class.prompt.md` - Generate Symfony service classes

## Example Usage

### Planning a Feature
```text
@PHP-Expert /plan

Create a user authentication system with JWT tokens, rate limiting, and password reset functionality.
```

### Code Review
```text
@PHP-Expert /review

[Select your PHP code and the expert will provide security, performance, and architectural feedback]
```

### Generate Tests
```text
Use the create-phpunit-test prompt with #file pointing to your PHP class to generate comprehensive PHPUnit tests.
```

## Features

### 🔒 **Security-First Approach**
- SQL injection prevention with prepared statements
- XSS protection and input validation
- CSRF token implementation
- Secure file handling and authentication patterns

### ⚡ **Performance Optimized**
- Modern PHP 8.x features (enums, readonly properties, union types)
- Efficient database query patterns
- Caching strategies and memory optimization
- N+1 query prevention

### 📐 **Standards Compliant**
- PSR-1, PSR-4, PSR-12 compliance
- SOLID principles enforcement
- Comprehensive PHPDoc documentation
- Test-driven development practices

### 🏗️ **Framework Expertise**
- Laravel best practices (Eloquent, Form Requests, Middleware)
- Symfony patterns (DI Container, Services, Doctrine)
- Modern PHP patterns and architecture

## Requirements

- **GitHub Copilot subscription** (required)
- **VS Code** with GitHub Copilot extension
- **PHP 8.1+** development environment (for generated code)

## Getting Help

The PHP Expert is designed to be your senior colleague in the codebase. It will:
- Explain architectural decisions and best practices
- Provide security-focused solutions
- Generate production-ready code with proper error handling
- Create comprehensive tests for your classes
## Project Structure
php-copilot/
├── chatmodes/
│   ├── API-Expert.chatmode.md            # API development specialist
│   ├── Laravel-Expert.chatmode.md        # Laravel framework expert
│   ├── PHP-Expert.chatmode.md            # Main PHP expert persona
│   └── Symfony-Expert.chatmode.md        # Symfony framework expert
├── instructions/
│   ├── api-standards.instructions.md     # API development standards
│   ├── laravel-standards.instructions.md # Laravel coding standards
│   ├── php-standards.instructions.md     # Comprehensive PHP standards
│   └── symfony-standards.instructions.md # Symfony coding standards
├── prompts/
│   ├── code-review.prompt.md             # Code review and analysis
│   ├── create-api-endpoint.prompt.md     # API endpoint generation
│   ├── create-migration.prompt.md        # Database migration creation
│   ├── create-phpunit-test.prompt.md     # Test generation
│   ├── laravel-crud-stub.prompt.md       # Laravel CRUD scaffolding
│   ├── performance-analysis.prompt.md    # Performance optimization
│   ├── refactor-legacy.prompt.md         # Legacy code modernization
│   ├── refactor-to-class.prompt.md       # OOP refactoring
│   ├── security-review.prompt.md         # Security analysis
│   └── symfony-service-class.prompt.md   # Symfony service creation
├── scripts/
│   └── validate.php                      # Validation script
├── LICENSE                               # MIT License
└── README.md                             # This file
```

## Key Features

### PHP Expert Chatmode
- **Planning**: Detailed feature breakdown with file lists, database changes, and test requirements
- **Review**: Security vulnerability detection, performance analysis, and standards compliance
- **Architecture**: SOLID principles guidance and modern PHP patterns
- **Testing**: PHPUnit test generation and TDD practices

### Comprehensive Standards
- PHP 8.1+ compatibility requirements
- Strict typing enforcement (`declare(strict_types=1)`)
- Modern language features (constructor promotion, match expressions, enums)
- Security-first coding practices
- Performance optimization guidelines

### Ready-to-Use Prompts
Each prompt is designed for specific development scenarios:
- **Testing**: Generate complete test suites with mocking and edge cases
- **CRUD Operations**: Full Laravel resource scaffolding
- **Legacy Modernization**: Convert procedural code to OOP with modern PHP
- **Service Architecture**: Symfony-style service creation with DI

### Ready-to-Use Prompts
Each prompt is designed for specific development scenarios:
- **Testing**: Generate complete test suites with mocking and edge cases
- **CRUD Operations**: Full Laravel resource scaffolding
- **Legacy Modernization**: Convert procedural code to OOP with modern PHP
- **Service Architecture**: Symfony-style service creation with DI

## Requirements

- GitHub Copilot subscription
- VS Code with GitHub Copilot extension
- PHP 8.1+ development environment (for generated code)

## Getting Help

The PHP Expert is designed to be your senior colleague in the codebase. It will:
- Explain architectural decisions and best practices
- Provide security-focused solutions
- Generate production-ready code with proper error handling
- Create comprehensive tests for your classes
- Help modernize legacy PHP applications

## Troubleshooting

### Common Issues

#### GitHub Copilot Not Working
- Ensure you have an active GitHub Copilot subscription
- Verify the extension is enabled in VS Code
- Try reloading VS Code window (`Cmd+R` on macOS)

#### Chatmode Not Available
- Check that chatmode files are in the correct directory
- Restart VS Code after copying files
- Verify file permissions are correct

#### Validation Script Fails
```bash
# Ensure PHP 8.1+ is installed
php --version

# Check file permissions
ls -la scripts/validate.php

# Run with verbose output
php scripts/validate.php $(pwd) --verbose
```

### Getting Support
- Create an issue on GitHub for bugs or feature requests
- Check existing issues for similar problems
- Provide system information and error messages when reporting issues

## FAQ

### Q: Do I need a GitHub Copilot subscription?
**A:** Yes, this project requires an active GitHub Copilot subscription to function.

### Q: Can I customize the chatmodes and prompts?
**A:** Absolutely! All files are designed to be customizable for your team's needs.

### Q: What PHP versions are supported?
**A:** PHP 8.1 and higher. The generated code uses modern PHP features.

### Q: Does this work with other editors besides VS Code?
**A:** Currently optimized for VS Code, but prompts and instructions can be adapted for other editors.

## Contributing

We welcome contributions that enhance the PHP development experience! Here's how to contribute:

### Contributing Guidelines

1. **Fork the repository** and create a feature branch
2. **Follow PHP standards** outlined in `instructions/php-standards.instructions.md`
3. **Test your changes** using the validation script
4. **Update documentation** if adding new features
5. **Submit a pull request** with a clear description

### Areas for Contribution
- Additional framework-specific chatmodes
- New prompts for common development tasks
- Security enhancements and best practices
- Performance optimization patterns
- Documentation improvements

### Code Standards
- Follow PSR-12 coding standards
- Include comprehensive documentation
- Add tests for new functionality
- Maintain backward compatibility
