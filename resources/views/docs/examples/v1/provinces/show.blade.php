<x-code :endpoint="route('api.v1.provincias.find', 'uige')">
    {
        "success": true,
        "code": 200,
        "message": "Sucesso",
        "data": {
            "nome": "Uíge",
            "slug": "uige",
            "extensao": 58698,
            "data_fundacao": "31-05-1887",
            "capital": {
                "nome": "Uíge",
                "slug": "uige"
            },
            "municipios": [
                {
                    "nome": "Maquela do Zombo",
                    "slug": "maquela-do-zombo",
                    "distritos": [],
                    "comunas": [
                        {
                            "nome": "Maquela do Zombo",
                            "slug": "maquela-do-zombo"
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
                    "nome": "Kikongo",
                    "slug": "kikongo"
                }
            ]
        }
    }
</x-code>
