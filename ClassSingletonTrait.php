<?php


namespace Nicodinus\PhpSupportHelpers;


use LogicException;

trait ClassSingletonTrait
{
    /** @var static */
    private static self $_INSTANCE;

    /**
     * @param mixed ...$args
     * @return static
     */
    public static function getInstance(...$args)
    {
        if (!static::isInstanceCreated()) {
            return static::createInstance(...$args);
        }

        return static::$_INSTANCE;
    }

    /**
     * @param mixed ...$args
     * @return static
     */
    public static function createInstance(...$args)
    {
        if (static::isInstanceCreated()) {
            throw new LogicException("Cannot create another instance of this class!");
        }

        return static::$_INSTANCE = new static(...$args);
    }

    /**
     * @return bool
     */
    public static function isInstanceCreated(): bool
    {
        return !empty(static::$_INSTANCE);
    }
}