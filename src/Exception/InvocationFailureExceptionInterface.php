<?php

namespace Dhii\Invocation\Exception;

use Dhii\Invocation\CommandAwareInterface;
use Dhii\Invocation\ArgsAwareInterface;

/**
 * An exception that occurs when an invoker fails to invoke a command.
 *
 * @since [*next-version*]
 */
interface InvocationFailureExceptionInterface extends
        CommandInvokerExceptionInterface,
        CommandAwareInterface,
        ArgsAwareInterface
{
}
