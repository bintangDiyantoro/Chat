$(function () {
    $('#content').on('keyup', function () {
        var message = $(this).val();
        // console.log(message);
    });
    $('.send').on('click', function () {
        $.ajax({
            url: 'http://localhost/chat/send',
            type: 'post',
            datatype: 'json',
            data: {
                'name': $('h1').text().split(" ")[1].replace("!", ""),
                'content': $('#content').val()
            },
            success: function () {
                $('#content').val("");
            }
        });
    });
    setInterval(function () {
        $('.chat-content').load('http://localhost/chat/content');
    }, 1);
});