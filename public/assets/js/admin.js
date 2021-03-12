$(document).ready(function(){
    positionLeftNav();
    positionContentSection();
});

function positionLeftNav(){
    $(".admin-left-nav").css({
        top: $(".admin-top-nav").outerHeight()
    });
}

function positionContentSection(){
    $(".admin-page-content").css({
        'padding-top': $(".admin-top-nav").outerHeight(),
        'padding-left': $(".admin-left-nav").outerWidth()
    })
}
