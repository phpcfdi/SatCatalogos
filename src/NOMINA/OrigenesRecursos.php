<?php

declare(strict_types=1);

namespace PhpCfdi\SatCatalogos\NOMINA;

use PhpCfdi\SatCatalogos\Common\AbstractCatalogIdentifiable;
use PhpCfdi\SatCatalogos\Common\EntryIdentifiable;
use PhpCfdi\SatCatalogos\Repository;

/**
 * Catálogo de Origenes Recursos
 * @method OrigenRecurso obtain(string $id, string $texto)
 */
class OrigenesRecursos extends AbstractCatalogIdentifiable
{
    protected function catalogName(): string
    {
        return Repository::NOMINA_ORIGENES_RECURSOS;
    }

    /**
     * @param array<string, mixed> $data
     * @return OrigenRecurso
     */
    public function create(array $data): EntryIdentifiable
    {
        return new OrigenRecurso(
            $data['id'],
            $data['texto'],
            ($data['vigencia_desde']) ? strtotime($data['vigencia_desde']) : 0,
            ($data['vigencia_hasta']) ? strtotime($data['vigencia_hasta']) : 0
        );
    }
}
