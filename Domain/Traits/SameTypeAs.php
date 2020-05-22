<?php

namespace Zelenin\Ddd\Core\Domain\Traits;

use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

/**
 * @method static className()
 */
trait SameTypeAs
{
    /**
     * @param ObjectInterface $object
     *
     * @return bool
     */
    final public function sameTypeAs(ObjectInterface $object)
    {
        return static::className() === $object::className();
    }
}
