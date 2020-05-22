<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Contract\HasEqualsTo;
use Zelenin\Ddd\Core\Domain\Contract\HasId;
use Zelenin\Ddd\Core\Domain\Object\ObjectInterface;

interface Entity extends ObjectInterface, HasId, HasEqualsTo
{
}
