<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associate aaray </title>
</head>

<body>
    <div>

    </div>
    <script>
    const people = [{
            name: "John",
            age: 30
        },
        {
            name: "Alice",
            age: 25
        },
        {
            name: "Bob",
            age: 35
        },
        {
            name: "hello kon ",
            age: 90,
            friend: [{
                    name: 'hello kon1',
                    age: 20
                },
                {
                    name: 'hello kon2',
                    age: 202
                }
            ]
        }
    ];

    people.forEach(person => {
        console.log(`${person.name} is ${person.age} years old`);

        if (person.friend){
            person.friend.forEach(friend => {
                console.log(`${friend.name} is ${friend.age} year old `);
                
            });
        }
    });

  
    /* 
    Output:

    John is 30 years old
    Alice is 25 years old
    Bob is 35 years old
    hello kon  is 90 years old
    hello kon1 is 20 year old 
    hello kon2 is 202 year old 
    
    */
    </script>
</body>

</html>