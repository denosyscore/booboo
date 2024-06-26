<?php

declare(strict_types=1);

namespace Denosys\BooBoo\Handler;

class CallableHandler implements HandlerInterface
{
    /**
     * @var callable
     */
    protected $callable;

    /**
     * @param callable $callable
     */
    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }

    /**
     * @param \Exception $e
     *
     * @return \Exception
     */
    public function handle($e)
    {
        return call_user_func($this->callable, $e);
    }
}
