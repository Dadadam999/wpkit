<?php

namespace Wpkit\Controller;

use Wpkit\Model\ArgumentModel;

class TemplateEngine
{
    private static string $rootPath = __DIR__ . '/../Template';

    /**
     * @param ArgumentModel[] $arguments
     */
    public static function generate(
        string $templateName,
        array $arguments,
        string $outputPath
    ): void {
        $templateContent = file_get_contents(self::$rootPath . '/' . $templateName);

        foreach ($arguments as $argument) {
            $templateContent = str_replace('{{' . $argument->name . '}}', $argument->value, $templateContent);
        }

        file_put_contents($outputPath, $templateContent);
    }
}
