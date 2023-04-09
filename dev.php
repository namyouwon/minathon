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
        function generateText() {
            const prompt = document.getElementById('text-input').value;
            const apiKey = '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';
            const apiUrl = 'https://api.openai.com/v1/chat/completions';
            const maxTokens = 100;
            const temperature = 0.5;
            const n = 1;
            const stop = '\n';

            const data = {
                prompt,
                max_tokens: maxTokens,
                temperature,
                n,
                stop,
            };

            const headers = {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${apiKey}`,
            };

            fetch(apiUrl, {
                    method: 'POST',
                    headers: headers,
                    body: JSON.stringify(data),
                })
                .then(response => response.json())
                .then(data => {
                    const output = document.getElementById('output');
                    const generatedText = data.choices[0].text.trim();
                    output.value = generatedText;
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>