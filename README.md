# Dhii - Invoker - Interface

[![Build Status](https://travis-ci.org/Dhii/invoker-interface.svg?branch=develop)](https://travis-ci.org/Dhii/invoker-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/invoker-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/invoker-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/invoker-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/invoker-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/invoker-interface/version)](https://packagist.org/packages/dhii/invoker-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
Interfaces for command invocation.

### Interfaces
- [`CommandInvokerInterface`] - Something that can invoke a text command.
- [`CommandInvokerAwareInterface`] - Something that is aware of a command invoker.
- [`CommandAwareInterface`] - Something that is aware of a text command.
- [`ArgsAwareInterface`] - Something that is aware of invocation arguments.
- [`CommandInvokerExceptionInterface`] - An exception that relates to a command invoker.
- [`InvocationFailureExceptionInterface`] - An exception that signals a failed invocation.


[Dhii]:                                                         https://github.com/Dhii/dhii

[`CommandInvokerInterface`]:                                    src/CommandInvokerInterface.php
[`CommandInvokerAwareInterface`]:                               src/CommandInvokerAwareInterface.php
[`CommandAwareInterface`]:                                      src/CommandAwareInterface.php
[`ArgsAwareInterface`]:                                         src/ArgsAwareInterface.php
[`CommandInvokerExceptionInterface`]:                           src/CommandInvokerExceptionInterface.php
[`InvocationFailureExceptionInterface`]:                        src/InvocationFailureExceptionInterface.php
