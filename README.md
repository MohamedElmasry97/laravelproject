<h3> Self-Join Relation for Category using Laravel </h3>
<h5>create Files [ model - Controller - migration ]</h5>
<p> this is the screenshot from every files that menion before</p>

1- [controller](https://user-images.githubusercontent.com/62992225/155034850-fa2f2949-fd4e-4f33-a4a0-957efbb68e0a.png)

2- [migration](https://user-images.githubusercontent.com/62992225/155034854-e968df07-b047-41b1-84c1-ddcaa46afb45.png)

3- [model](https://user-images.githubusercontent.com/62992225/155034855-9231df9c-97ec-4137-b3a1-47c2c16b18b6.png)

after created our Main Files migrate our DB and seeder

![DB](https://user-images.githubusercontent.com/62992225/155035385-65edcc8f-a412-4a1d-8e57-df6355770ec2.png)

note :- make our dummy data by using tinker or seeder

![factory](https://user-images.githubusercontent.com/62992225/155035388-90db4296-14ba-4df0-ab09-a29431159245.png)

after make our dummy data its look like ( by IDs )


![example](https://user-images.githubusercontent.com/62992225/155035554-fdf44d94-b98f-47aa-b925-36c83e4c10a7.png)


<h2>Finally!! the <link href="#output.json">output</link> </h2> 

```sh
[
    {
        "id": 1,
        "category_name": "Tobin Mertz",
        "parent_id": null,
        "created_at": "2022-02-21T20:39:21.000000Z",
        "updated_at": "2022-02-21T20:39:21.000000Z",
        "subcategories": [
            {
                "id": 4,
                "category_name": "Reyes Pfeffer",
                "parent_id": 1,
                "created_at": "2022-02-21T20:39:22.000000Z",
                "updated_at": "2022-02-21T20:39:22.000000Z",
                "subcategories": [
                    {
                        "id": 5,
                        "category_name": "George Shanahan",
                        "parent_id": 4,
                        "created_at": "2022-02-21T20:39:22.000000Z",
                        "updated_at": "2022-02-21T20:39:22.000000Z",
                        "subcategories": []
                    },
                    {
                        "id": 7,
                        "category_name": "Ms. Shirley Vandervort",
                        "parent_id": 4,
                        "created_at": "2022-02-21T20:39:22.000000Z",
                        "updated_at": "2022-02-21T20:39:22.000000Z",
                        "subcategories": [
                            {
                                "id": 2,
                                "category_name": "Mr. Grayson Lockman MD",
                                "parent_id": 7,
                                "created_at": "2022-02-21T20:39:22.000000Z",
                                "updated_at": "2022-02-21T20:39:22.000000Z",
                                "subcategories": []
                            },
                            {
                                "id": 6,
                                "category_name": "Jeffry Gerhold",
                                "parent_id": 7,
                                "created_at": "2022-02-21T20:39:22.000000Z",
                                "updated_at": "2022-02-21T20:39:22.000000Z",
                                "subcategories": []
                            }
                        ]
                    }
                ]
            }
        ]
    },
    {
        "id": 8,
        "category_name": "Forrest Schmitt",
        "parent_id": null,
        "created_at": "2022-02-21T20:39:22.000000Z",
        "updated_at": "2022-02-21T20:39:22.000000Z",
        "subcategories": [
            {
                "id": 3,
                "category_name": "Eve Reichert Jr.",
                "parent_id": 8,
                "created_at": "2022-02-21T20:39:22.000000Z",
                "updated_at": "2022-02-21T20:39:22.000000Z",
                "subcategories": []
            },
            {
                "id": 9,
                "category_name": "Jeanne Turcotte",
                "parent_id": 8,
                "created_at": "2022-02-21T20:39:22.000000Z",
                "updated_at": "2022-02-21T20:39:22.000000Z",
                "subcategories": []
            }
        ]
    },
    {
        "id": 10,
        "category_name": "Corine Roob",
        "parent_id": null,
        "created_at": "2022-02-21T20:39:22.000000Z",
        "updated_at": "2022-02-21T20:39:22.000000Z",
        "subcategories": []
    }
]
```
