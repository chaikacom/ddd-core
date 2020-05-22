<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Exception\NotMatchTypeException;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

abstract class DefaultEntity extends DefaultObject implements Entity
{
    /**
     * @var Id
     */
    protected $id;

    /**
     * @param Object $object
     *
     * @return bool
     */
    public function equalsTo(ObjectInterface $object)
    {
        if (!$this->sameTypeAs($object)) {
            throw new NotMatchTypeException($this);
        }

        return $this->getId()->id() === $object->getId()->id();
    }

    /**
     * @return Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Id $id
     */
    public function setId(Id $id)
    {
        $this->id = $id;
    }
}
