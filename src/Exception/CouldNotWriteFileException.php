<?php
/**
 * Sandro Keil (https://sandro-keil.de)
 *
 * @link      http://github.com/sandrokeil/php-to-zephir for the canonical source repository
 * @copyright Copyright (c) 2018 Sandro Keil
 * @license   http://github.com/sandrokeil/php-to-zephir/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace PhpToZephir\Exception;

class CouldNotWriteFileException extends RuntimeException
{
    public static function forFile(string $file): CouldNotWriteFileException
    {
        return new self(
            sprintf('Could not write file "%s".', $file)
        );
    }
}