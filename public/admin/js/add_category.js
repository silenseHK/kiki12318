function uploadImg(){
    if($(this)[0]['files'].length){
        layer.load(1, {shade: false})
        var file = $(this)[0]['files'][0];
        var iptName = $(this).data('ipt');
        var that = this
        var fn = function(res){
            layer.closeAll()
            $("input[name="+iptName+"]").val(res.data.path)
            $(that).prev().attr('src',res.data.url)
        }
        uploadFile(file,fn);
    }
}

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
    var title = $.trim($('input[name=title]').val());
    if(!title)
        return layer.alert('分类名不能为空');
    var level = $.trim($('select[name=level]').val());
    var pid = $.trim($('select[pid=level]').val());
    var icon = $.trim($('input[name=icon]').val());
    if(!icon)
        return layer.alert('请上传分类图标');
    var status = $.trim($('input[name=status]').val());
    myPost(url,{title,level,pid,icon,status},function(res){
        console.log(res)
    })

}

function changeLevel(){
    var level = $(this).val()
    $('select[name=pid]').parent('div.col-md-3').hide()
    for(var i=level;i>0;i--)
        $("#cate"+i).show()
    autoPid(level)
}

function autoPid(level){
    var pname = "cate"+(level-1)
    var cname = "cate" + level
    var pid = $('.'+pname).val()
    // $.post()
    console.log(pname)
}