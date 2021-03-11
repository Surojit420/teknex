function get_upload(x) 
{
    $("#"+x).trigger("click"); 
}
function show_photo(input, x,x2) 
{
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
        var FileType = input.files[0].type;
        // var ext = $('#'+x).val().split('.').pop().toLowerCase();
        var ext = $('#'+x).val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
            $('#'+x).val('');
        }else{
        
    
    reader.onload = function (e) {
    $('#'+x2)
    .attr('src', e.target.result)
    .width(100)
    .height(100);
    };
    reader.readAsDataURL(input.files[0]);
    // }else{
        //
        //alert('Maximum file size 1MB can be upload');
        $(input).val('');
    // }
    } 
    }
}