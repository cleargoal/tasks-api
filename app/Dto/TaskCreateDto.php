<?php

declare(strict_types=1);

namespace App\Dto;

use App\Enums\StatusEnum;
use App\Enums\PriorityEnum;

readonly class TaskCreateDto
{
    public function __construct(
        public int $userId,
        public string $title,
        public string $description,
        public StatusEnum $status = StatusEnum::TODO,
        public PriorityEnum $priority = PriorityEnum::LOW,
        public ?int $parentId = null,
    ) {}
}
