<?php

declare(strict_types=1);

namespace App\Actions;

use App\Dto\TaskSortItemDTO;
use App\Enums\TaskSortFieldEnum;

class TaskSortTransformer
{

    public function transform(array $rawSort): array
    {
        return collect($rawSort)
            ->map(function ($sortItem) {
                [$field, $direction] = $sortItem;

                return new TaskSortItemDto(
                    TaskSortFieldEnum::from($field),
                    strtolower($direction)
                );
            })
            ->toArray();
    }
}
