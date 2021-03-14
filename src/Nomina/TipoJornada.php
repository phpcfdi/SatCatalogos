<?php

declare(strict_types=1);

namespace PhpCfdi\SatCatalogos\Nomina;

use PhpCfdi\SatCatalogos\Common\AbstractEntryIdentifiable;
use PhpCfdi\SatCatalogos\Common\EntryIdentifiable;

class TipoJornada extends AbstractEntryIdentifiable implements EntryIdentifiable
{
    public function __construct(string $id, string $texto)
    {
        parent::__construct($id, $texto, 0, 0);
    }
}