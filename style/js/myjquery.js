/**
 * Created by Muhammad on 08.09.2015.
 * Time 00:52:00
 */

const URL = "http://localhost/maktab/";
//const URL = "http://qibray6m.uz/maktab/";


var newsLike = {
    'add': function(news_id) {
        //alert(news_id);
        $.ajax({
            url: URL+'Count.php?news_id='+news_id,
            type: 'post',
            data: 'news_id=' + news_id,
            dataType: 'json',
            success: function(json) {
                $('.alert').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }
                if(json['danger']){
                    $('#content').parent().before('<div class="alert alert-danger"><i class="fa fa-cog fa-spin"></i> ' + json['danger'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }
                document.getElementById("LikeCount").innerHTML = json['total'];
                $('html, body').animate({ scrollTop: 150 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}