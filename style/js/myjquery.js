/**
 * Created by Muhammad on 08.09.2015.
 * Time 00:52:00
 */

const URL = "http://localhost/maktab/";


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
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}




function task_problem_page(str){
    task_problem_page_id = str;
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("problems").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","problem/page/"+str,true);
    xmlhttp.send();
}
function task_submit_page(str){
    alert(str);
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("problem").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","problem/page/"+str,true);
    xmlhttp.send();
}
function task_status_page(str){
    alert(str);
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("problem").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","problem/page/"+str,true);
    xmlhttp.send();
}
function task_standings_page(str){
    alert(str);
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("problem").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","problem/page/"+str,true);
    xmlhttp.send();
}
function task_attempts_page(str){
    alert(str);
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("problem").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","problem/page/"+str,true);
    xmlhttp.send();
}

function is_Problem(str){
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("isproblem").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET",url+"problem/is_problem/"+str,true);
    xmlhttp.send();
}
function avatar(str){
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("avatar").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET",url+"login/is_login_img/"+str,true);
    xmlhttp.send();
}

function task_status_result(id){
    var  xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("task_for_result_id").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET",url+"problem/task_for_result_in_status/"+id,true);
    xmlhttp.send();
}