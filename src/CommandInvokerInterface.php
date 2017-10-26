<?php

namespace Dhii\Invocation;

use Dhii\Util\String\StringableInterface as Stringable;

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
     * @param array             $args The arguments to pass to the command.
     */
    public function invoke($code, array $args = array());
}
