function searchCopy() {
    var element=$('#MovementCopyIdSearch');
    var value=element.val();
    $('#MovementCopyId').val(null);
    $('#MovementCopyIdSearch').css("background","#ffffff");
    if(''!=value) {
        var text=$('#MovementCopyId option').eq(value).val();
        if(null==text) {
            $('#MovementCopyIdSearch').css("background","#ffaaaa");
        } else {
            $('#MovementCopyId').val(text);
        }
    }
}