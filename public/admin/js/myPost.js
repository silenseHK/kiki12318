function myPost(url,params,fn){

    var _token = $('meta[name="csrf-token"]').attr('content');
    params._token = _token;
    $.post(url,params,function(res){
        fn(res)
    },'json')

}