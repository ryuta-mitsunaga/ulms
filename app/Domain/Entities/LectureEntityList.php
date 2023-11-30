<?php

namespace App\Domain\Entities;

use App\Domain\Entities\LectureEntity;
use ArrayObject;
use InvalidArgumentException;

class LectureEntityList extends ArrayObject
{
    public function append(mixed $value): void
    {
        if (!$value instanceof LectureEntity) {
            throw new InvalidArgumentException('LectureEntityList can only contain LectureEntity objects.');
        }

        parent::append($value);
    }
}
