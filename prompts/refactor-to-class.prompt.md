---
mode: "agent"
tools: ['codebase', 'editFiles', 'usages', 'memory']
description: "Refactor procedural PHP code into an object-oriented class."
---

## Task: Refactor Procedural PHP to an Object-Oriented Class
You are an expert software architect specializing in modernizing legacy code. Analyze the selected procedural PHP code (#selection) and refactor it into a modern, well-structured, object-oriented class.

## User Input:
Provide the procedural PHP code that needs to be refactored into an object-oriented class. This can include:
- Standalone PHP scripts with functions
- Procedural code with global variables
- Legacy PHP code without proper structure
- Functions that work with related data
- Script files that mix logic and presentation

Example format:
```php
// Procedural code here
$users = [];

function addUser($name, $email) {
    global $users;
    $users[] = ['name' => $name, 'email' => $email];
}

function getUserByEmail($email) {
    global $users;
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return $user;
        }
    }
    return null;
}
```

## Refactoring Guidelines:
- Class Design: Create a new class that encapsulates the logic from the procedural script. The class name should reflect its primary purpose.
- Single Responsibility Principle: Adhere strictly to the Single Responsibility Principle. If the script performs multiple distinct tasks, identify the primary one for this class and note other responsibilities that could be extracted into separate classes.

## State and Behavior:

- Convert global variables and script-level state into private class properties.
- Convert standalone functions into class methods. Logic internal to the class's operation should become private methods.
- Modern PHP: The refactored class MUST use modern PHP 8.x features
- Apply declare(strict_types=1);.
- Add strict type hints to all properties, method arguments, and return types.
- Use constructor property promotion if applicable.
- Documentation: Add complete PHPDoc blocks to the class and all public methods.

## Output: 
- Provide the complete, refactored class code. Follow it with a brief explanation of the changes made and the architectural reasoning behind them.