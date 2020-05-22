<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

interface HasSameTypeAs
{
    /**
     * @param ObjectInterface $object
     *
     * @return bool
     */
    public function sameTypeAs(ObjectInterface $object);
}
