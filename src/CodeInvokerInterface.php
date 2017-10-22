<?php

namespace Dhii\Invocation;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can invoke commands by code.
 *
 * @since [*next-version*]
 */
interface CodeInvokerInterface
{
    /**
     * Invokes a command by code.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $code   The code of the command to invoke.
     * @param array             $params The parameters to pass to the command.
     */
    public function invoke($code, array $params = []);
}
