<?php

/**
 * @param int $value
 * @return string
 */
function findType(int $value): string
{
    $types = [
        'liniano' => [3, 5],
        'linio'   => [5],
        'it'      => [3],
    ];

    foreach ($types as $key => $vals) {
        $is = array_reduce($vals, function ($carry, $val) use ($value) {
            return $value % $val === 0 && $carry;
        }, true);

        if ($is) {
            return $key;
        }
    };
    return $value;
}

for ($i = 0; $i <= 100; $i++) {
    echo sprintf('%s<br/>', findType($i));
}
