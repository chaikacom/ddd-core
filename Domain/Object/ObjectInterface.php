<?php

namespace Zelenin\Ddd\Core\Domain\Object;

use Zelenin\Ddd\Core\Domain\Contract\HasClassName;
use Zelenin\Ddd\Core\Domain\Contract\HasSameTypeAs;
use Zelenin\Ddd\Core\Domain\Contract\HasTypeOf;

interface ObjectInterface extends HasClassName, HasSameTypeAs, HasTypeOf
{
}
