document.ready = ()=> {
    $('#form').submit(function () {
        var str = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'Add.php',
            data: str,
            success: function (html) {
                $('#query').html(html);
            }
        });
        return false;
    });
}