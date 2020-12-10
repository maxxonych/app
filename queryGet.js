document.ready = ()=> {
    function show() {
        $.ajax({
            url: 'Controller.php',
            cache: false,
            success: function (html) {
                $('#query').html(html);
            }
        })
    }
}