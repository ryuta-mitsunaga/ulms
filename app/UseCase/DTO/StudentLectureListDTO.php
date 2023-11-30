<?php

namespace App\UseCase\DTO;

use App\UseCase\DTO\StudentLectureDTO;
use ArrayObject;
use InvalidArgumentException;

class StudentLectureListDTO extends ArrayObject
{
    public function append(mixed $value): void
    {
        if (!$value instanceof StudentLectureDTO) {
            throw new InvalidArgumentException('LectureEntityList can only contain LectureEntity objects.');
        }

        parent::append($value);
    }
}
