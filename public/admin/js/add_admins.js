
function myFormSubmit(){

    var myForm = $('#my_form');
    var url = myForm.attr('action');
    var err = false;
    $('input.dis-empty').each(function(k,v){
        if(!$.trim($(v).val())){
            err = true;
            layer.alert('请将数据补充完整');
            return false;
        }
    })
    if(err)
        return false;
    var nickname = $.trim($('input[name=nickname]').val());
    var email = $.trim($('input[name=email]').val());
    if(!reg_email.test(email)){
        layer.alert('邮箱格式错误');
        return false;
    }
    var phone = $.trim($('input[name=phone]').val());
    if(!reg_phone.test(phone)){
        layer.alert('手机号格式错误');
        return false;
    }
    var password = $.trim($('input[name=password]').val());
    var password_confirmation = $.trim($('input[name=password_confirmation]').val());
    if(password !== password_confirmation){
        layer.alert('两次输入的密码不相同');
        return false;
    }

    var status = $.trim($('input[name=status]').val());

    var fn = function(res){
        if(res.status > 0){
            layer.alert('图片上传失败')
            return false;
        }
        var avatar = res.data.path;

        var func = function(res){
            layer.alert(res.msg)
            if(res.status==0)
                setTimeout(function(){
                    location.reload();
                },1500)
        }

        myPost(url,{nickname,email,phone,password,password_confirmation,avatar,status},func);
    }

    var file = $('input[name=avatar]')[0]['files'][0];
    uploadFile(file,fn);


}