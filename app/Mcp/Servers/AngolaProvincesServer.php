<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\Capital\listCapitals;
use App\Mcp\Tools\Commune\getCommune;
use App\Mcp\Tools\Commune\listCommunes;
use App\Mcp\Tools\Country\getCountryInfo;
use App\Mcp\Tools\EthnicGroup\getEthnicGroup;
use App\Mcp\Tools\EthnicGroup\listEthnicGroups;
use App\Mcp\Tools\Language\getLanguage;
use App\Mcp\Tools\Language\listLanguages;
use App\Mcp\Tools\Municipality\getMunicipality;
use App\Mcp\Tools\Municipality\listMunicipalities;
use App\Mcp\Tools\Municipality\listMunicipalityCommunes;
use App\Mcp\Tools\Province\getProvince;
use App\Mcp\Tools\Province\listProvinceCommunes;
use App\Mcp\Tools\Province\listProvinceEthnicGroups;
use App\Mcp\Tools\Province\listProvinceLanguages;
use App\Mcp\Tools\Province\listProvinceMunicipalities;
use App\Mcp\Tools\Province\listProvinces;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Angola Provinces MCP Server')]
#[Version('1.0.0')]
#[Instructions(<<<'TEXT'
Read-only data about the administrative divisions of Angola: provinces and their capitals, the municipalities, communes and districts under them, and the ethnic groups and languages of each province.

Every record is identified by a slug (e.g. "bengo", "dande", "ambundu"). Names and slugs are in Portuguese, as in the official data, while field names and messages are in English.

How to use the tools:

- Start with `get-country-info` for the overview of the country and the total of each kind of record.

- Provinces: `list-provinces` gives their slugs. `get-province` returns one province with its capital and the totals of what it contains. `list-province-municipalities`, `list-province-communes`, `list-province-ethnic-groups` and `list-province-languages` list what a province contains.

- Capitals: `list-capitals` gives the capital of every province at once, with its type (municipality, commune or district).

- Municipalities: `list-municipalities` lists all of them page by page, each with its province, and `list-province-municipalities` lists those of one province. Take the slug from either, then use `get-municipality` or `list-municipality-communes`.

- Communes: a commune is identified by the slug of its municipality and its own slug, because two communes can share a slug. Take both from `list-municipality-communes`, from `list-province-communes` or from `list-communes` (which lists every commune, page by page, each with its municipality) and use `get-commune`.

- Ethnic groups and languages: `list-ethnic-groups` and `list-languages` give their slugs. `get-ethnic-group` and `get-language` say in which provinces each one is present.

There is no search by name: list the provinces or the municipalities and pick the slug from the result. A slug that does not exist returns an error saying what was not found. Districts may be empty due to the new administrative divisions.
TEXT)]
class AngolaProvincesServer extends Server
{
    /**
     * The tools are listed in a single page: not every client follows the pagination cursor.
     */
    public int $defaultPaginationLength = 50;

    protected array $tools = [
        getCountryInfo::class,
        listProvinces::class,
        listCapitals::class,
        getProvince::class,
        listProvinceMunicipalities::class,
        listProvinceCommunes::class,
        listProvinceEthnicGroups::class,
        listProvinceLanguages::class,
        listMunicipalities::class,
        getMunicipality::class,
        listMunicipalityCommunes::class,
        listCommunes::class,
        getCommune::class,
        listEthnicGroups::class,
        getEthnicGroup::class,
        listLanguages::class,
        getLanguage::class,
    ];

    protected array $resources = [
        //
    ];

    protected array $prompts = [
        //
    ];
}
