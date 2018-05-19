<?php

namespace BA\Helpers;

class BA_Math {
    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     * @assert (1, 2) == 3
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
