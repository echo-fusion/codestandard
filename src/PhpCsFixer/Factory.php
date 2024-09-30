<?php

declare(strict_types=1);

namespace EchoFusion\CodeStandard\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use function array_replace_recursive;

final class Factory
{
    /**
     * @param array<string,array<string,mixed>|bool> $overrideRules
     */
    public static function fromRuleSet(RuleSet $ruleSet, array $overrideRules = []): ConfigInterface
    {
        $config = new Config($ruleSet->name());
        $config->setRiskyAllowed(true);
        $config->setRules(array_replace_recursive($ruleSet->rules(), $overrideRules));

        return $config;
    }
}
