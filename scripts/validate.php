#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Validation script for PHP Copilot project files
 * 
 * This script validates:
 * - Prompt syntax and structure
 * - Chatmode configuration
 * - Instruction completeness
 * - File consistency and standards compliance
 */

// Note: No external dependencies required for validation

class CopilotValidator
{
    private array $errors = [];
    private array $warnings = [];
    private string $projectRoot;

    public function __construct(string $projectRoot)
    {
        $this->projectRoot = rtrim($projectRoot, '/');
    }

    public function validateProject(): bool
    {
        echo "🔍 Validating PHP Copilot project...\n\n";

        $this->validatePrompts();
        $this->validateChatmodes();
        $this->validateInstructions();

        $this->displayResults();

        return empty($this->errors);
    }

    private function validatePrompts(): void
    {
        echo "📝 Validating prompts...\n";

        $promptsDir = $this->projectRoot . '/prompts';
        if (!is_dir($promptsDir)) {
            $this->errors[] = "Prompts directory not found: {$promptsDir}";
            return;
        }

        $promptFiles = glob($promptsDir . '/*.prompt.md');
        foreach ($promptFiles as $file) {
            $this->validatePromptFile($file);
        }
    }

    private function validatePromptFile(string $file): void
    {
        $content = file_get_contents($file);
        $filename = basename($file);

        // Check for required sections
        $requiredSections = ['## Task:', '## User Input:', '## Output:'];
        foreach ($requiredSections as $section) {
            if (strpos($content, $section) === false) {
                $this->warnings[] = "Missing section '{$section}' in {$filename}";
            }
        }

        // Check for markdown formatting
        if (!preg_match('/^## Task:/', $content)) {
            $this->errors[] = "Prompt {$filename} must start with '## Task:' section";
        }

        // Check for placeholder consistency
        if (preg_match_all('/\{([^}]+)\}/', $content, $matches)) {
            foreach ($matches[1] as $placeholder) {
                if (empty(trim($placeholder))) {
                    $this->warnings[] = "Empty placeholder found in {$filename}";
                }
            }
        }
    }

    private function validateChatmodes(): void
    {
        echo "💬 Validating chatmodes...\n";

        $chatmodesDir = $this->projectRoot . '/chatmodes';
        if (!is_dir($chatmodesDir)) {
            $this->errors[] = "Chatmodes directory not found: {$chatmodesDir}";
            return;
        }

        $chatmodeFiles = glob($chatmodesDir . '/*.chatmode.md');
        foreach ($chatmodeFiles as $file) {
            $this->validateChatmodeFile($file);
        }
    }

    private function validateChatmodeFile(string $file): void
    {
        $content = file_get_contents($file);
        $filename = basename($file);

        // Check for YAML frontmatter
        if (!preg_match('/^---\s*\n.*?\n---\s*\n/s', $content)) {
            $this->errors[] = "Chatmode {$filename} missing YAML frontmatter";
            return;
        }

        // Extract and validate frontmatter
        preg_match('/^---\s*\n(.*?)\n---\s*\n/s', $content, $matches);
        $frontmatter = $matches[1];

        $requiredFields = ['description', 'tools', 'title'];
        foreach ($requiredFields as $field) {
            if (strpos($frontmatter, $field . ':') === false) {
                $this->errors[] = "Chatmode {$filename} missing required field: {$field}";
            }
        }

        // Check for required sections
        $requiredSections = ['# Persona:', '## Mode-Specific Instructions'];
        foreach ($requiredSections as $section) {
            if (strpos($content, $section) === false) {
                $this->warnings[] = "Missing section '{$section}' in {$filename}";
            }
        }
    }

    private function validateInstructions(): void
    {
        echo "📋 Validating instructions...\n";

        $instructionsDir = $this->projectRoot . '/instructions';
        if (!is_dir($instructionsDir)) {
            $this->errors[] = "Instructions directory not found: {$instructionsDir}";
            return;
        }

        $instructionFiles = glob($instructionsDir . '/*.instructions.md');
        foreach ($instructionFiles as $file) {
            $this->validateInstructionFile($file);
        }
    }

    private function validateInstructionFile(string $file): void
    {
        $content = file_get_contents($file);
        $filename = basename($file);

        // Check for YAML frontmatter
        if (!preg_match('/^---\s*\n.*?\n---\s*\n/s', $content)) {
            $this->errors[] = "Instruction {$filename} missing YAML frontmatter";
            return;
        }

        // Check for required sections based on file type
        if (strpos($filename, 'php-standards') !== false) {
            $requiredSections = [
                '# General Conduct',
                '## PHP Language and Syntax Standards',
                '## Security-First Mindset',
                '## Documentation and Code Quality'
            ];

            foreach ($requiredSections as $section) {
                if (strpos($content, $section) === false) {
                    $this->warnings[] = "Missing section '{$section}' in {$filename}";
                }
            }
        }
    }


    private function validatePhpFile(string $file): void
    {
        $content = file_get_contents($file);
        $filename = basename($file);

        // Check for strict types declaration
        if (strpos($content, 'declare(strict_types=1);') === false) {
            $this->warnings[] = "PHP file {$filename} missing strict types declaration";
        }

        // Check for namespace
        if (!preg_match('/^namespace\s+[A-Za-z\\\\]+;/m', $content)) {
            $this->warnings[] = "PHP file {$filename} missing namespace declaration";
        }

        // Check for class documentation
        if (strpos($content, 'class ') !== false && strpos($content, '/**') === false) {
            $this->warnings[] = "PHP file {$filename} missing class documentation";
        }

        // Basic syntax check
        $result = shell_exec("php -l " . escapeshellarg($file) . " 2>&1");
        if (strpos($result, 'No syntax errors') === false) {
            $this->errors[] = "PHP syntax error in {$filename}: " . trim($result);
        }
    }

    private function displayResults(): void
    {
        echo "\n" . str_repeat('=', 50) . "\n";
        echo "📊 VALIDATION RESULTS\n";
        echo str_repeat('=', 50) . "\n\n";

        if (!empty($this->errors)) {
            echo "❌ ERRORS (" . count($this->errors) . "):\n";
            foreach ($this->errors as $error) {
                echo "   • {$error}\n";
            }
            echo "\n";
        }

        if (!empty($this->warnings)) {
            echo "⚠️  WARNINGS (" . count($this->warnings) . "):\n";
            foreach ($this->warnings as $warning) {
                echo "   • {$warning}\n";
            }
            echo "\n";
        }

        if (empty($this->errors) && empty($this->warnings)) {
            echo "✅ All validations passed! Project is in excellent condition.\n\n";
        } elseif (empty($this->errors)) {
            echo "✅ No errors found! Only minor warnings to address.\n\n";
        } else {
            echo "❌ Validation failed! Please fix the errors above.\n\n";
        }

        echo "Summary:\n";
        echo "  - Errors: " . count($this->errors) . "\n";
        echo "  - Warnings: " . count($this->warnings) . "\n";
        echo "  - Status: " . (empty($this->errors) ? "PASS" : "FAIL") . "\n\n";
    }
}

// Main execution
if ($argc < 2) {
    echo "Usage: php validate.php <project-root-path>\n";
    echo "Example: php validate.php /path/to/php-copilot\n";
    exit(1);
}

$projectRoot = $argv[1];
if (!is_dir($projectRoot)) {
    echo "Error: Project root directory does not exist: {$projectRoot}\n";
    exit(1);
}

$validator = new CopilotValidator($projectRoot);
$success = $validator->validateProject();

exit($success ? 0 : 1);
