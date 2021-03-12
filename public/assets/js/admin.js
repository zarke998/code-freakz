var leftNavVisible = false;

$(document).ready(function(){
    positionLeftNav();
    positionContentSection();

    $("#left-nav-expand-btn").click(toggleLeftNav);
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

function hideLeftNav(){
    $(".admin-left-nav").animate({
        left: "-250"
    }, 300, "swing", function(){
        leftNavVisible = false;
    });
}
function showLeftNav(){
    $(".admin-left-nav").animate({
        left: "0"
    }, 300, "swing", function(){
        leftNavVisible = true;
    });
}
function toggleLeftNav(){
    if(leftNavVisible){
        hideLeftNav();
    }
    else{
        showLeftNav();
    }
}
