<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Umum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .chat-container {
            width: 400px;
            max-width: 100%;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        p {
            text-align: center;
            margin: 10px 0 0 0; /* Jarak di atas elemen */
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            Dr. A
        </div>
        <div class="chat-messages" id="chat-messages">
            <div class="message ai">
                <div class="message-content">
                    Hello! I'm Doctor A. How can I assist you today?
                </div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type your message here...">
            <button onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const userInput = document.getElementById('user-input');
            const messageText = userInput.value.trim();
            if (messageText === '') return;

            const chatMessages = document.getElementById('chat-messages');

            // User message
            const userMessage = document.createElement('div');
            userMessage.classList.add('message', 'user');
            const userMessageContent = document.createElement('div');
            userMessageContent.classList.add('message-content');
            userMessageContent.textContent = messageText;
            userMessage.appendChild(userMessageContent);
            chatMessages.appendChild(userMessage);

            // AI response
            const aiMessage = document.createElement('div');
            aiMessage.classList.add('message', 'ai');
            const aiMessageContent = document.createElement('div');
            aiMessageContent.classList.add('message-content');
            aiMessageContent.textContent = getAIResponse(messageText);
            aiMessage.appendChild(aiMessageContent);
            chatMessages.appendChild(aiMessage);

            // Scroll to the bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Clear input
            userInput.value = '';
        }

        function getAIResponse(message) {
            // Simple AI response logic (to be replaced with actual AI logic)
            if (message.toLowerCase().includes('hello')) {
                return 'Hello! How can I help you today?';
            } else if (message.toLowerCase().includes('fever')) {
                return 'I\'m sorry to hear that you have a fever. Have you taken any medication?';
            } else {
                return 'I\'m here to help. Can you please provide more details?';
            }
        }
    </script>
    <main>
        <p><a href= "dashboard.php">Kembali Ke Menu utama</a></p>
        <p><a href="index.php">Logout</a></p>
</body>
</html>