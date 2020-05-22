<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Contract\HasEqualsTo;
use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

interface ValueObject extends ObjectInterface, HasEqualsTo
{
}
