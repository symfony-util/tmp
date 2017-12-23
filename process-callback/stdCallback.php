<?php

/*
 * This file is part of the Symfony-Util package.
 *
 * (c) Jean-Bernard Addor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Process\Process;

function stdCallback($type, $buffer)
{
    if (Process::ERR === $type) {
        fwrite(STDERR, $buffer);
    } else {
        fwrite(STDOUT, $buffer);
    }
}
