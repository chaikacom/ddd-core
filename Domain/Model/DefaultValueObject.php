<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

abstract class DefaultValueObject extends DefaultObject implements ValueObject
{
    /**
     * @param ObjectInterface $object
     *
     * @return bool
     */
    abstract public function equalsTo(ObjectInterface $object);
}
