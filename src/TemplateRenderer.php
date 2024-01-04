<?php

declare(strict_types=1);

namespace Akawalko\TemplateRendererInterface;

use Psr\Http\Message\ResponseInterface;

interface TemplateRenderer
{
    /**
     * Get template variable.
     * @return mixed
     */
    public function __get(string $name);

    /**
     * Set template variable.
     */
    public function __set(string $name, $value): void;

    /**
     * Determine if a variable is declared and is different than null.
     */
    public function __isset(string $name): bool;

    /**
     * Unset a given variable
     */
    public function __unset(string $name): void;

    /**
     * Get template variable.
     * @return mixed
     */
    public function getVar(string $name);

    /**
     * Set template variable.
     */
    public function setVar(string $name, $value): self;

    /**
     * Get template variables.
     */
    public function getVars(): array;

    /**
     * Set template variables from assoc. array or object.
     */
    public function setVars($data = []): self;

    /**
     * Render the template to string with given data.
     */
    public function renderToString(string $templatePath, $data = []): string;

    /**
     * Render the template to PSR compliant Response class with given data.
     */
    public function renderToResponse(ResponseInterface $response, string $templatePath, $data = []): ResponseInterface;

    /**
     * A shortcut method that executes renderToString() or renderToResponse() based on the arguments passed.
     * @return ResponseInterface|string
     */
    public function render(...$arguments);
}
