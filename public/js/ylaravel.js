$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var editor = new wangEditor('content');

editor.config.uploadImgUrl = '/posts/image/upload';

// 设置 headers（举例）
editor.config.uploadHeaders = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
};

editor.create();


$('.like-button').click(function (event) {
    alert('a');
    var target = $(event.target);
    var current_like = target.attr('like-value');
    var user_id = target.attr('like-user');

    if (current_like == 1) {
        //取消关注
        $.ajax({
            url: "/user/" + user_id + '/unfan/',
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                if (data.error != 0) {
                    alert(data.msg);
                    return;
                }
                target.attr('like-value', 0);
                target.text('关注');
            }
        })
    } else {
        //关注
        $.ajax({
            url: "/user/" + user_id + '/fan/',
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                if (data.error != 0) {
                    alert(data.msg);
                    return;
                }
                target.attr('like-value', 1);
                target.text('取消关注');
            }
        })
    }
})