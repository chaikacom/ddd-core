<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

interface HasEqualsTo
{
    /**
     * @param ObjectInterface $object
     *
     * @return bool
     */
    public function equalsTo(ObjectInterface $object);
}
