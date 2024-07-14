<?php

namespace App\Entity\DataMappers;

use App\Entity\Interfaces\EntityInterface;

abstract class AbstractDM
{
    /**
     * @param EntityInterface $entity
     *
     * @return array
     */
    abstract public function entityAsArray(EntityInterface $entity): array;
}
