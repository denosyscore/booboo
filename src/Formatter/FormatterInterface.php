<?php

declare(strict_types=1);

namespace Denosys\BooBoo\Formatter;

interface FormatterInterface
{
    public function format($e);

    public function setErrorLimit($limit);

    public function getErrorLimit();
}
