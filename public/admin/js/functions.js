function uploadFile(file,fn,dir='avatar'){

    var formData = new FormData();
    formData.append('file',file);
    formData.append('dir',dir);
    var avatar = $('input[name=path_avatar]')
    $.ajax({
        type: "POST", // 数据提交类型
        url: "/common/uploadPic", // 发送地址
        data: formData, //发送数据
        async: true, // 是否异步
        processData: false, //processData 默认为false，当设置为true的时候,jquery ajax 提交的时候不会序列化 data，而是直接使用data
        contentType: false, //
        success: function(res){
            fn(res)
        },
        dataType:'json'
    });

}