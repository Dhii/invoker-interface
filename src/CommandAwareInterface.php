<?php

namespace Dhii\Invocation;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can have an invocable command retrieved.
 *
 * @since [*next-version*]
 */
interface CommandAwareInterface
{
    /**
     * Retrieves the command associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The command.
     */
    public function getCommand();
}
