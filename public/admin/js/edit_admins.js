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

}