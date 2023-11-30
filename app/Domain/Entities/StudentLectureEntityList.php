<?php

namespace App\Domain\Entities;

use App\Domain\Entities\StudentLectureEntity;
use ArrayObject;
use InvalidArgumentException;

class StudentLectureEntityList extends ArrayObject
{
    public function append(mixed $value): void
    {
        if (!$value instanceof StudentLectureEntity) {
            throw new InvalidArgumentException('StudentLectureEntityList can only contain StudentLectureEntity objects.');
        }

        parent::append($value);
    }
}
