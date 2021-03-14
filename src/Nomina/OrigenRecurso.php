<?php

declare(strict_types=1);

namespace PhpCfdi\SatCatalogos\Nomina;

use PhpCfdi\SatCatalogos\Common\AbstractEntryIdentifiable;

class OrigenRecurso extends AbstractEntryIdentifiable
{
    public function __construct(string $id, string $texto)
    {
        parent::__construct($id, $texto, 0, 0);
    }
}