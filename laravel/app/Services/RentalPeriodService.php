<?php

namespace App\Services;

use App\Repositories\RentalPeriodRepository;

final class RentalPeriodService extends BaseService
{
    function __construct(RentalPeriodRepository $repository)
    {
        $this->repository = $repository;
    }

    function showRentalPeriodProductPrice()
    {
        return $this->repository->showRentalPeriodProductPrice();
    }

    function showRentalPeriodId(string $periodName)
    {
        return $this->repository->findPeriodId($periodName);
    }
}
