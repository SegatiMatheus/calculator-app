jQuery(function($){
    function showSuccess(returnSuccess){
        console.log(returnSuccess);
        
        Swal.fire({
            title: 'Sucesso!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                if (returnSuccess.redirect != undefined) {
                    window.location.href = returnSuccess.redirect;
                } else {
                    location.reload();
                }
            }
        });
    }

    function showError(returnError){
        console.log(returnError);

        let mensagemErroText = '';

        if (typeof returnError != 'string') {
            $.each(returnError, function(i, item){
                mensagemErroText += '<p>'+item+'</p>';
            });
        } else {
            mensagemErroText = returnError;
        }       

        Swal.fire({
            title: 'Erro!',
            html: mensagemErroText,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }

    $('.formAjax').on('submit', function(e){
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var type = form.attr('method');
        var data = form.serialize();
        
        $.ajax({
            type: type,
            url: url,
            data: data,
            success: function(response) {
                console.log(response);
                showSuccess(response);
            },
            error: function(response) {
                console.log(response);
                showError(response.responseJSON.error);
            }
        });
    });
});
