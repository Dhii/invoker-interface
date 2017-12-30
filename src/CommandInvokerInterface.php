<?php

namespace Dhii\Invocation;

use Dhii\Util\String\StringableInterface as Stringable;
use Traversable;

/**
 * Something that can invoke commands.
 *
 * @since [*next-version*]
 */
interface CommandInvokerInterface
{
    /**
     * Invokes a command.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $code The command to invoke.
     * @param array|Traversable $args The arguments to pass to the command, if any
     */
    public function invoke($code, $args = null);
}
