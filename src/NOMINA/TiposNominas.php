<?php

declare(strict_types=1);

namespace PhpCfdi\SatCatalogos\NOMINA;

use PhpCfdi\SatCatalogos\Common\AbstractCatalogIdentifiable;
use PhpCfdi\SatCatalogos\Common\EntryIdentifiable;
use PhpCfdi\SatCatalogos\Repository;

/**
 * Catálogo de Tipos de nominas
 * @method TipoNomina obtain(string $id)
 */
class TiposNominas extends AbstractCatalogIdentifiable
{
    protected function catalogName(): string
    {
        return Repository::NOMINA_TIPOS_NOMINAS;
    }

    /**
     * @param array<string, mixed> $data
     * @return TipoNomina
     */
    public function create(array $data): EntryIdentifiable
    {
        return new TipoNomina(
            $data['id'],
            $data['texto'],
            ($data['vigencia_desde']) ? strtotime($data['vigencia_desde']) : 0,
            ($data['vigencia_hasta']) ? strtotime($data['vigencia_hasta']) : 0
        );
    }
}
