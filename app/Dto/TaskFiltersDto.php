<?php

declare(strict_types=1);

namespace App\Dto;

use App\Enums\PriorityEnum;
use App\Enums\StatusEnum;

readonly class TaskFiltersDto
{
    public function __construct(
        public ?string $title,
        public ?string $description,
        public ?PriorityEnum $priority = PriorityEnum::LOW,
        public ?StatusEnum $status = StatusEnum::TODO,
    ) {}
}
