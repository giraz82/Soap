<?php


namespace RicorocksDigitalAgency\Soap\Facades;


use Closure;
use Illuminate\Support\Facades\Facade;
use RicorocksDigitalAgency\Soap\Inclusion;
use RicorocksDigitalAgency\Soap\OptionSet;
use RicorocksDigitalAgency\Soap\Parameters\Node;
use RicorocksDigitalAgency\Soap\Request\Request;

/**
 * Class Soap
 * @package RicorocksDigitalAgency\Soap\Facades
 *
 * @method static Request to(string $endpoint)
 * @method static Node node(array $attributes = [])
 * @method static Inclusion include(array $parameters)
 * @method static OptionSet options(array $options)
 * @method static \RicorocksDigitalAgency\Soap\Soap beforeRequesting(callable $hook)
 * @method static \RicorocksDigitalAgency\Soap\Soap afterRequesting(callable $hook)
 * @method static void fake(array|Closure $callable = null)
 * @method static void assertSentCount($count)
 * @method static void assertNothingSent()
 * @method static void assertSent(callable $callback)
 * @method static void assertNotSent(callable $callback)
 */
class Soap extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'soap';
    }

}
