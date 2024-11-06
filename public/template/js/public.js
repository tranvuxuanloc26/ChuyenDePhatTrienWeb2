$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 }
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
 }
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
 }
>>>>>>> origin/san_pham_noi_bat
=======
 }
>>>>>>> origin/san_pham_mơi_nhat
=======
 }
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
