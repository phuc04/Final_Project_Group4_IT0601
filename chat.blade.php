<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Dialogflow</title>
    <!-- Nhúng jQuery (có thể dùng CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div>
        <h1>Chatbot with Dialogflow</h1>

        <!-- Khung chat -->
        <div id="chatbox" style="border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll;">
            <!-- Các tin nhắn sẽ hiển thị tại đây -->
        </div>

        <!-- Form nhập tin nhắn -->
        <input type="text" id="user-input" placeholder="Type your message here" style="width: 80%;"/>
        <button id="send-message">Send</button>
    </div>

    <!-- Sử dụng AJAX để gửi yêu cầu tới server -->
    <script>
        $('#send-message').on('click', function() {
            var message = $('#user-input').val();  // Lấy tin nhắn từ ô nhập liệu
            var sessionId = 'unique-session-id';   // Bạn có thể tạo session ID riêng cho mỗi user

            if (message.trim() === "") {
                alert("Please enter a message!");
                return;
            }

            // Gửi yêu cầu AJAX tới server
            $.ajax({
                url: '/dialogflow/message',  // URL của route đã cấu hình trong Laravel
                method: 'POST',
                data: {
                    message: message,        // Dữ liệu gửi đi gồm tin nhắn và session ID
                    session_id: sessionId
                },
                success: function(response) {
                    // Hiển thị tin nhắn của người dùng
                    $('#chatbox').append('<div><strong>You:</strong> ' + message + '</div>');
                    $('#user-input').val('');  // Xóa nội dung ô nhập liệu sau khi gửi

                    // Hiển thị phản hồi từ Dialogflow (response.intent và response.response là từ Laravel controller)
                    $('#chatbox').append('<div><strong>Bot:</strong> ' + response.response + '</div>');

                    // Tự động cuộn xuống cuối khung chat
                    $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    alert("An error occurred, please try again.");
                }
            });
        });
    </script>
</body>
</html>