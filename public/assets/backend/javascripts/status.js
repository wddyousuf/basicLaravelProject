$(document).ready(function(){
    $('body').on('change','#status',function(){
        var id=$(this).attr('data-id');
        if(this.checked){
            var status= 1;
        }else{
            var status=0;
        }
        $.ajax({
            url: '/brand/brand_status/'+id+'/'+status,
            method: 'get',
            success: function(result){
                console.log(result);
            }
        });
    });
    $('body').on('change','#statuss',function(){
        var id=$(this).attr('data-id');
        if(this.checked){
            var status= 1;
        }else{
            var status=0;
        }
        $.ajax({
            url: '/category/category_status/'+id+'/'+status,
            method: 'get',
            success: function(result){
                console.log(result);
            }
        });
    });

});
