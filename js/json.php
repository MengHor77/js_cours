<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Lesson</title>
        <style>
                div {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    padding: 20px;
                    background-color: #f9f9f9;
                    }

                    h1 {
                        color: #333;
                    }

                    pre {
                        background-color: #eaeaea;
                        padding: 10px;
                        border-radius: 5px;
                        overflow-x: auto;
                }
        </style>
</head>

<body>
   <div >

 
    <h1>JSON Lesson</h1>
    <p>This lesson covers the basics of JSON (JavaScript Object Notation) and how to work with it in JavaScript.</p>

    <h2>JSON Structure</h2>
    <p>JSON uses a key-value pair structure. Here are the main components:</p>

    <h3>Objects</h3>
    <pre>{
    "key1": "value1",
    "key2": "value2"
}</pre>

    <h3>Arrays</h3>
    <pre>{
    "arrayKey": ["value1", "value2", "value3"]
}</pre>

    <h2>Example: Creating JSON</h2>
    <p>Below is an example of creating a JSON string from a JavaScript object.</p>
   

    <script>
    // Define a JavaScript Object
    const person = {
        name: "Alice",
        age: 28,
        isStudent: false,
        courses: ["Math", "Science", "History"]
    };

    // Convert the JavaScript Object to a JSON String
    const jsonString = JSON.stringify(person);
    console.log(jsonString); // Output: {"name":"Alice","age":28,"isStudent":false,"courses":["Math","Science","History"]}
    </script>

    <h2>Output</h2>
    <p>Open the console (F12) to see the JSON string output.</p>
    </div>
</body>

</html>