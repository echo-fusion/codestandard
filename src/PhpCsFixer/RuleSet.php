<?php

declare(strict_types=1);

namespace EchoFusion\CodeStandard\PhpCsFixer;

interface RuleSet
{
    public function name(): string;

    /**
     * @return array<string,array<string,mixed>|bool>
     */
    public function rules(): array;
}
