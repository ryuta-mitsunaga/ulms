<?php

namespace App\Domain\Entities;

class LectureEntity
{
    public function __construct(
        private int $id,
        private string $lecture_type,
        private string $title,
        private string $description,
        private array $mon_period,
        private array $tue_period,
        private array $wed_period,
        private array $thu_period,
        private array $fri_period,
        private array $sat_period,
        private array $sun_period,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getLectureType(): string
    {
        return $this->lecture_type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getMonPeriod(): array
    {
        return $this->mon_period;
    }

    public function getTuePeriod(): array
    {
        return $this->tue_period;
    }

    public function getWedPeriod(): array
    {
        return $this->wed_period;
    }

    public function getThuPeriod(): array
    {
        return $this->thu_period;
    }

    public function getFriPeriod(): array
    {
        return $this->fri_period;
    }

    public function getSatPeriod(): array
    {
        return $this->sat_period;
    }

    public function getSunPeriod(): array
    {
        return $this->sun_period;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'lectureType' => $this->lecture_type,
            'title' => $this->title,
            'description' => $this->description,
            'monPeriod' => $this->mon_period,
            'tuePeriod' => $this->tue_period,
            'wedPeriod' => $this->wed_period,
            'thuPeriod' => $this->thu_period,
            'friPeriod' => $this->fri_period,
            'satPeriod' => $this->sat_period,
            'sunPeriod' => $this->sun_period,
        ];
    }
}
