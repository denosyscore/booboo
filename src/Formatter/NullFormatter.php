<?php

namespace Denosys\BooBoo\Formatter;

class NullFormatter extends AbstractFormatter
{
    public function format($e)
    {
        return; // Silence the error.
    }
}
