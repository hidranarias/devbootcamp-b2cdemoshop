<?php

namespace Pyz\Zed\Antelope\Business\Reader;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface;

class AntelopeReader implements AntelopeReaderInterface
{
    /**
     * @var AntelopeRepositoryInterface
     */
    protected AntelopeRepositoryInterface $antelopeRepository;

    /**
     * @param AntelopeRepositoryInterface $antelopeRepository
     */
    public function __construct(AntelopeRepositoryInterface $antelopeRepository)
    {
        $this->antelopeRepository = $antelopeRepository;
    }

    /**
     * @param AntelopeTransfer $antelopeTransfer
     *
     * @return AntelopeTransfer|null
     */
    public function getAntelope(AntelopeTransfer $antelopeTransfer): ?AntelopeTransfer
    {
        return $this->antelopeRepository->findAntelopeById($antelopeTransfer->getIdAntelope());
    }
}
