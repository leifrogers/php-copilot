---
mode: "agent"
tools: ['codebase', 'editFiles', 'usages', 'memory']
description: "Generate a complete Laravel CRUD resource with model, migration, controller, and routes."
---

## Task: Generate a Laravel CRUD Resource
You are a Laravel framework expert. Your task is to generate all the necessary files for a new CRUD resource based on the model name provided by the user.

## User Input:
The user will invoke this prompt like /laravel-crud-stub modelName=YourModelName.

## Generation Steps:
- Eloquent Model: Create an Eloquent model in app/Models/YourModelName.php. Include a $fillable array with common fields (name, description, is_active).
- Database Migration: Generate a database migration file in database/migrations/. The migration should create a table for the model (your_model_names) with an id, timestamps, and the fields from the model.
- Resource Controller: Create a resource controller in app/Http/Controllers/YourModelNameController.php. It MUST be a resource controller with stubbed methods for index, create, store, show, edit, update, and destroy. Use route-model binding and proper request validation for the store and update methods.
- API Route: Add the API resource route to the routes/api.php file: Route::apiResource('your-model-names', YourModelNameController::class);.

## Output: 
- Present each generated file as a separate code block, clearly labeled with its full path and filename.