<?php

declare(strict_types=1);

namespace Denosys\BooBoo\Formatter;

class NullFormatter extends AbstractFormatter
{
    public function format($e)
    {
        return; // Silence the error.
    }
}
