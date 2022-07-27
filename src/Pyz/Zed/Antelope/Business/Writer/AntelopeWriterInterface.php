<?php

namespace Pyz\Zed\Antelope\Business\Writer;

interface AntelopeWriterInterface
{
    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    public function save(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
