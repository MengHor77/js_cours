<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Fetch JSON</title>
</head>
<body>
    <div>
        Fetching JSON from local file and console to see data.
    </div>
    <!-- 
    - {} curly braces should  hold object.
    -[] sqare brackets  hold array
        
    
    -->

    <script>
        // Path to the JSON file served from your local XAMPP server
        const jsonFilePath = 'http://localhost/js_cours/js/js_json.json';

        // Fetch the JSON file
        fetch(jsonFilePath)
            .then(response => {
                // Check if the response is OK (status code 200)
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // Parse the JSON from the response
            })
            .then(data => {
                // Log the JSON data to the console
                console.log(data);
            })
            .catch(error => {
                // Handle any errors that occur during the fetch
                console.error('There was a problem with the fetch operation:', error);
            });
    </script>
</body>
</html>
