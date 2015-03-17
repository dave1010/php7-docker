<?php

function foobar(): int {
    return 1.0; // strictly type-checked return
}

var_dump(foobar());
