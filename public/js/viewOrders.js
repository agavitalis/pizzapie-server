$(document).ready(function(){

    $('.delete-order').click(function () {

        $('#delete-id').val($(this).data('id'))
        
    })

    $('.delete-confirm').click(function () {

       let id  = $('#delete-id').val()
       $.ajax({
            type: 'post',
            url: '/deleteOrder',
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

    $('.deliver-order').click(function () {

        $('#deliver-id').val($(this).data('id'))
        
    })

    $('.deliver-confirm').click(function () {

       let id  = $('#deliver-id').val()
       $.ajax({
            type: 'post',
            url: '/deliverOrder',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "deliver",
                'id':id
            },
            success: function(response) {

                $('.deliver-message-text').text(response.message)
                setTimeout("location.reload(true);",1500);             
            }
        })
        
    })

   

  
});