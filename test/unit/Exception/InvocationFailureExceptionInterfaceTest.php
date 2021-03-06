<?php

namespace Dhii\Invocation\UnitTest\Exception;

use Xpmock\TestCase;
use Dhii\Invocation\InvocationFailureExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class InvocationFailureExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Invocation\Exception\InvocationFailureExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getFile()
                ->getLine()
                ->getMessage()
                ->getCode()
                ->getPrevious()
                ->getTrace()
                ->getTraceAsString()
                ->__toString()

                ->getCommandInvoker()
                ->getCommand()
                ->getArgs()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Invocation\CommandInvokerAwareInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Invocation\CommandAwareInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Invocation\ArgsAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
