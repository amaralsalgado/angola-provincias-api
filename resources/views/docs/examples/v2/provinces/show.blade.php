<x-code :endpoint="route('api.v2.provinces.find', 'uige')">
    {
        "success": true,
        "code": 200,
        "message": "Sucesso",
        "data": {
            "name": "Uíge",
            "slug": "uige",
            "area": 58698,
            "founded_at": "1887-05-31",
            "capital": {
                "name": "Uíge",
                "slug": "uige"
            },
            "municipalities": [
                {
                    "name": "Maquela do Zombo",
                    "slug": "maquela-do-zombo",
                    "districts": [],
                    "communes": [
                        {
                            "name": "Maquela do Zombo",
                            "slug": "maquela-do-zombo"
                        }
                    ]
                }
            ],
            "ethnic_groups": [
                {
                    "name": "Ambundu",
                    "slug": "ambundu"
                }
            ],
            "languages": [
                {
                    "name": "Kikongo",
                    "slug": "kikongo"
                }
            ]
        }
    }
</x-code>
