<?php
declare(strict_types=1);

function foobar(): int {
    return 1.0; // strictly type-checked return
}

foobar();
