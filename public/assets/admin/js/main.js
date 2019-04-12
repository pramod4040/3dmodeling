
 $(document).ready(function() {

    $("#title").change(function () {
        var title = $(this).val();
        $.ajax({
            type: "get",
            url: '/admin/get-page-slug/' + title,
            //data: {'title':title},
            //cache: false,
            success: function (result) {

                $('#slug').val(result);
                $('#meta_title').val(title);
            }
        });
    });

    $("#news_title").change(function () {
        var title = $(this).val();
        $.ajax({
            type: "get",
            url: '/admin/get-news-slug/' + title,
            //data: {'title':title},
            //cache: false,
            success: function (result) {

                $('#slug').val(result);
            }
        });
    });


});