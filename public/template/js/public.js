$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
<<<<<<< HEAD
 function loadMore(){
    const page = $('#page').val();
    $.ajax({
        type:'POST',
        dataType:'JSON',
        data: {page},
        url:'/services/load-product',
        success : function(result){
            console.log(result)
            if(result.html != ''){
                $('#loadProduct').append(result.html);
                $('#page').val(page + 1);
            }else {
                
                $('#button-loadMore').css('display', 'none');
            }
        }
    })
 }
=======

function loadMore() {
    const page = $('#page').val();
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: { page },
        url: '/services/load-product',
        success: function(result) {
            console.log(result);
            if (result.html != '') {
                $('#loadProduct').append(result.html);
                $('#page').val(page + 1);
            } else {
                // Khi không còn sản phẩm để load, ẩn nút Load More
                $('#button-loadMore').css('display', 'none');
            }
        },
        error: function(xhr, status, error) {
            console.log('Error: ' + error);
            $('#button-loadMore').css('display', 'none');
        }
    });
}
>>>>>>> origin/tim_kiem_user_admin
