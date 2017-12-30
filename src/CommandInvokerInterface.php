<?php

namespace Dhii\Invocation;

use Dhii\Invocation\Exception\CommandInvokerExceptionInterface;
use Dhii\Invocation\Exception\InvocationFailureExceptionInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use Traversable;
use Exception as RootException;

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
     *
     * @throws InvocationFailureExceptionInterface If the command could not be invoked.
     * @throws CommandInvokerExceptionInterface    For any problem related to the invoker.
     * @throws RootException                       For any problem not related to the invoker.
     */
    public function invoke($code, $args = null);
}
