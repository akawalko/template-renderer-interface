# template-renderer-interface
Interface for a class that renders templates for string and [PSR-7](https://www.php-fig.org/psr/psr-7/) response objects.

## Installation

You can download this library using [Composer](https://getcomposer.org/):

```
composer require akawalko/template-renderer-interface
```

## Methods

### __get(string $name);
Get template variable. Return mixed value.

### __set(string $name, $value): void;
Set template variable.

### __isset(string $name): bool;
Determine if a variable is declared and is different than null.

### __unset(string $name): void;
Unset a given variable

### getVar(string $name);
Get template variable. Return mixed value.

### setVar(string $name, $value): self;
Set template variable.

### getVars(): array;
Get template variables.

### setVars($data = []): self;
Set template variables from assoc. array or object.

### renderToString(string $templatePath, $data = []): string;
Render the template to string with given data.

### renderToResponse(ResponseInterface $response, string $templatePath, $data = []): ResponseInterface;
Render the template to PSR compliant Response class with given data.

### render();
A shortcut method that executes renderToString() or renderToResponse() based on the arguments passed. 
Return ResponseInterface or string.
