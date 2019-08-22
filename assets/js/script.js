$(function () {
    setInterval(function () {
        $('.chat-content').load('http://localhost/chat/content');
    }, 1);
});