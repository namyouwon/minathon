<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>OpenAI GPT-3 Demo</title>
</head>

<body>
    <label for="text-input">Enter a prompt:</label>
    <input type="text" id="text-input">
    <button id="generate-btn" onclick="generateText()">Generate</button>
    <br>
    <br>
    <label for="output">Generated Text:</label>
    <br>
    <input type="text" id="output" size="50">

    <script>
        // Set up the request parameters
        const apiKey = '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';
        const endpoint = 'https://api.openai.com/v1/engines/ada/completions',
            prompt = 'The quick brown fox',
            length = 50;

        // Set up the fetch request
        const requestOptions = {
        method: 'POST',
        headers: { 'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + apiKey },
        body: JSON.stringify({ prompt: prompt, length: length })
        };

        // Send the fetch request and handle the response
        fetch(endpoint, requestOptions)
        .then(response => response.json())
        .then(data => console.log(data.choices[0].text))
        .catch(error => console.log(error));

    </script>
</body>

</html>