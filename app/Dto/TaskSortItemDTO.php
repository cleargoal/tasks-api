<?php

declare(strict_types=1);

namespace App\Dto;

use App\Enums\TaskSortFieldEnum;

class TaskSortItemDTO
{
    public function __construct(
        public TaskSortFieldEnum $field,
        public string $direction,
    ) {}
}
