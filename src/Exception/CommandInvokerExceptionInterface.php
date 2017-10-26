<?php

namespace Dhii\Invocation\Exception;

use Dhii\Invocation\CommandInvokerAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception related to a command invoker.
 *
 * @since [*next-version*]
 */
interface CommandInvokerExceptionInterface extends
        CommandInvokerAwareInterface,
        ThrowableInterface
{
}
