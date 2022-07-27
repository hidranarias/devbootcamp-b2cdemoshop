<?php

namespace Pyz\Zed\Antelope\Persistence\Mapper;

interface AntelopeMapperInterface
{
    public function mapAntelopeTransferToEntity(AntelopeTransfer $antelopeTransfer, PyzAntelope $antelope): PyzAntelope;

    public function mapEntityToAntelopeTransfer(PyzAntelope $antelope, AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
