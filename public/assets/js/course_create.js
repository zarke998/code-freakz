$(document).ready(function(){
    $('#course_image_input').change(function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $("#course_image_input~img").attr('src', tmppath);
    });
});
