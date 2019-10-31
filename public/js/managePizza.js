$(document).ready(function(){

    $('.delete-pizza').click(function () {

        $('#delete-id').val($(this).data('id'))
        
    })

    $('.delete-confirm').click(function () {

       let id  = $('#delete-id').val()
       $.ajax({
            type: 'post',
            url: '/deletePizza',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "delete",
                'id':id
            },
            success: function(response) {

                $('.delete-message-text').text(response.message)
                setTimeout("location.reload(true);",1500);             
            }
        })
        
    })

    $('.edit-pizza').click(function () {

        let id = $(this).data('id')
        $('#update_id').val(id)
        $.ajax({
            type: 'get',
            url: '/getPizza/'+ id,
            success: function(response) {

                $('#name_edit').val(response.pizza.name)
                $('#price_edit').val(response.pizza.price)
                $('#category_edit').text(response.pizza.category) 
                $('#category_edit').val(response.pizza.category) 
                $('#edit-img').attr('src','storage/uploads/'+response.pizza.picture) 
                
                //then show the modal
                $('#editModal').modal('show');
            }

        } )  

     })
    

  
});