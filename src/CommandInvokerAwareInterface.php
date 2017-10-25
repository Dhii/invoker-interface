<?php

namespace Dhii\Invocation;

/**
 * Something that can have a command invoker retrieved.
 *
 * @since [*next-version*]
 */
interface CommandInvokerAwareInterface
{
    /**
     * Retrieves the command invoker associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return CommandInvokerInterface|null The invoker, if any.
     */
    public function getCommandInvoker();
}
