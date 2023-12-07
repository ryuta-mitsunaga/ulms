<?php

namespace App\UseCase\DTO;

use ArrayObject;
use InvalidArgumentException;

class LectureAggregationListDTO extends ArrayObject
{
    public function append(mixed $value): void
    {
        if (!$value instanceof LectureAggregationDTO) {
            throw new InvalidArgumentException('LectureAggregationListDTO can only contain LectureAggregationDTO objects.');
        }

        parent::append($value);
    }

    public function toArray(): array
    {
        $array = [];

        foreach ($this as $lecture_aggregation_dto) {
            $array[] = $lecture_aggregation_dto->toArray();
        }

        return $array;
    }
}
