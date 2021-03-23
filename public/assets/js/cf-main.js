var searchFieldEnabled = false;
var searchFieldOnNavbarEnabled = false;

var cartItems = [];

$(document).ready(function(){
    $(".search-btn").click(toggleSearchField);
    $(".search-btn-on-navbar").click(toggleSearchFieldOnNavbar);

    $(".popular-categories a").click(function (e){
        e.preventDefault();
    })

    $(".footer_cat").click(function (e){
        e.preventDefault();
    });

    $(".link-disabled").click(function(e){
        e.preventDefault();
    });

    if(localStorage != null){
        cartItems = JSON.parse(localStorage.getItem("cart"));
        if(cartItems == null) cartItems = [];

        console.log("Initialized cart items: " + cartItems);
    }
    $(".add-to-cart-btn").click(addToCart);
})

function toggleSearchField(){
    let search = $("#search-input");

    // search.toggle();
    if(searchFieldEnabled)
        search.fadeOut();
    else
        search.fadeIn();

    searchFieldEnabled = !searchFieldEnabled;
}

function toggleSearchFieldOnNavbar() {
    let search = $("#search-input-on-navbar");

    // search.toggle();
    if(searchFieldOnNavbarEnabled)
        search.fadeOut();
    else
        search.fadeIn();

    searchFieldOnNavbarEnabled = !searchFieldOnNavbarEnabled;

}

function addToCart(){
    if(localStorage == null){
        alert("Your browser doesn't support local storage");
        return;
    }

    let courseId = parseInt($(this).data("courseid"));
    if(!cartItems.includes(courseId))
        cartItems.push(courseId);

    console.log(`Added courseId: ${courseId} to cart`);
    console.log("Cart:" + cartItems);

    localStorage.setItem("cart", JSON.stringify(cartItems));

    alert("Course added to cart.");
}
