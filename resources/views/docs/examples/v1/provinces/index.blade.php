<x-code :endpoint="route('api.v1.provincias')">
    {
        "success": true,
        "code": 200,
        "message": "Sucesso",
        "data": [
            {
                "nome": "Luanda",
                "slug": "luanda",
                "extensao": 113,
                "data_fundacao": "25-01-1576",
                "capital": {
                    "nome": "Ingombota",
                    "slug": "ingombota"
                },
                "municipios": [
                    {
                        "nome": "Belas",
                        "slug": "belas",
                        "distritos": [],
                        "comunas": [
                            {
                                "nome": "Benfica",
                                "slug": "benfica"
                            }
                        ]
                    }
                ],
                "etnias": [
                    {
                        "nome": "Ambundu",
                        "slug": "ambundu"
                    }
                ],
                "linguas": [
                    {
                        "nome": "Kimbundu",
                        "slug": "kimbundu"
                    }
                ]
            }
        ]
    }
</x-code>
