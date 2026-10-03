<x-code :endpoint="route('api.v2.provinces')">
    {
        "success": true,
        "code": 200,
        "message": "Success",
        "data": [
            {
                "name": "Luanda",
                "slug": "luanda",
                "area": "18.826 km²",
                "founded_at": "1576-01-25",
                "capital": {
                    "name": "Ingombota",
                    "slug": "ingombota"
                },
                "municipalities": [
                    {
                        "name": "Belas",
                        "slug": "belas",
                        "districts": [],
                        "communes": [
                            {
                                "name": "Benfica",
                                "slug": "benfica"
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
                        "name": "Kimbundu",
                        "slug": "kimbundu"
                    }
                ]
            }
        ]
    }
</x-code>
