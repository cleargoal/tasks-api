<?php

declare(strict_types=1);

namespace App\Dto;

use App\Enums\PriorityEnum;

readonly class TaskUpdateDto
{
    public function __construct(
        public ?int $parentId = null,
        public ?string $title = null,
        public ?string $description = null,
        public ?PriorityEnum $priority = null
    ) {}
}
