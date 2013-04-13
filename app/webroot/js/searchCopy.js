function searchCopy() {
    var element=$('#MovementCopyIdSearch');
    var value=element.val();
    $('#MovementCopyId').val(null);
    $('#label2id').val(null);
    $('#MovementCopyIdSearch').css("background","#ffffff");
    if(''!=value) {
        var loption='#label2id option[value="'+value+'"]';
        var label=$(loption).val();
        if(null==label){
            $('#MovementCopyIdSearch').css("background","#ffaaaa");
        } else {
            $('#label2id').val(label);
            var option='#label2id option[value="'+label+'"]';
            var text=$(option).text();
            if(null==text) {
                $('#MovementCopyIdSearch').css("background","#ffaaaa");
            } else {
                $('#MovementCopyId').val(text);
            }
        }
    }
}