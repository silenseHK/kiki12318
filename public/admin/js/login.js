
function doLogin(){
    var account = $.trim($('input[name=account]').val());
    var password = $.trim($('input[name=password]').val());
    if(!account || !password)
        return layer.msg("账号或密码不能为空")
    if(!reg_email.test(account) && !reg_phone.test(account))
        return layer.msg('账号格式应为邮箱或者手机号')
    myPost('/admin/doLogin',{account,password},function(res){
        if(res.status > 0){
            layer.msg('帐号或者密码错误')
        }else if(res.status == 0){
            layer.msg('登陆成功')
            setTimeout(function(){
                location.href = '/admin/index'
            },1500)
        }
    })
}

function logout(){
    layer.confirm('确定退出登录吗?', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post('/admin/logout',{},function(res){
            layer.msg(res.msg)
            if(res.status == 0)
                setTimeout(function(){
                    location.href = '/admin/login'
                },1500)
        },'json')
    }, function(){

    });
}