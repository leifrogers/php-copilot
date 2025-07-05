---
mode: "agent"
tools: ['codebase', 'editFiles', 'usages', 'memory']
description: "Generate a Symfony service class with specified dependencies and methods."
---

## Task: Generate a Symfony Service Class
You are a Symfony framework expert. Your task is to create a new service class based on the name and dependencies provided by the user.

## User Input:
The user will invoke this prompt like /symfony-service-class serviceName=MyNewService dependencies="LoggerInterface,EntityManagerInterface".

## Generation Steps:
- Create Service Class: Generate a new PHP class file in the src/Service/ directory named MyNewService.php.
- Namespace and Imports: The class MUST have the namespace App\Service. It MUST import all specified dependency interfaces.
- Dependency Injection: The dependencies (LoggerInterface, EntityManagerInterface) MUST be injected via the constructor. Use constructor property promotion. The properties should be private readonly.
- Boilerplate Method: Include a public method named execute() as a placeholder for the service's logic.
- PHPDoc: The class and all methods must be fully documented with PHPDoc blocks.

## Output: 
- Provide the complete code for the src/Service/MyNewService.php file in a single code block.