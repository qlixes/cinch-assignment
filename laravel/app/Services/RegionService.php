<?php

namespace App\Services;

use App\Repositories\RegionRepository;

final class RegionService extends BaseService
{
    function __construct(RegionRepository $repository)
    {
        $this->repository = $repository;
    }

    function showRegionProductPrices()
    {
        return $this->repository->showRegionProductPrices();
    }

    function showRegionId(string $regionName)
    {
        return $this->repository->findRegionId($regionName);
    }
}
