<?php

namespace Dhii\Invocation;

use Traversable;

/**
 * Something that can have invocation arguments retrieved.
 *
 * @since [*next-version*]
 */
interface ArgsAwareInterface
{
    /**
     * Retrieves the invocation arguments associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return array|Traversable The arguments.
     */
    public function getArgs();
}
