function modalAviso(L, W, H, T) {
    $("#myIframeAviso").attr('src', '');
    $("#myModalAviso").modal({
        //backdrop: 'static'
    });

    $('#myModalAviso').on('shown.bs.modal', function () {
        $(this).find('.modal-dialog').css({
            width: W, //probably not needed
            height: H //probably not needed 
        });
        $(this).find('.modal-body').css({
            padding: '0',
            margin: '0',
            height: H
        });
        $(this).find('h4').css({
            padding: '0',
            margin: '0'
        });
        $(this).find('iframe').css({
            height: H
        });
        $(this).find('.modal-header h4').html(T);
        $("#myIframeAviso").attr('src', L);
    });
}

// chamada no load da pag index
if (window.location.pathname == '/') {
    modalAviso('/aviso_feriado.php', '', '480', 'Comunicados');
}

// chamada nos links comunicado
$(".comunicado-link").on("click", function () {
    modalAviso('/aviso_feriado.php', '', '480', 'Comunicados');
});