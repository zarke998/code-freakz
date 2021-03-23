$(document).ready(function(){
    initializeCart();

    $(".confirm-order-btn").click(confirmOrder);
});

function initializeCart(){
    if(cartItems.length == 0){
        displayCart([]);
    }
    else{
        $.ajax({
            url: "/cart/getItems",
            method: "GET",
            data: {
                cartItems: cartItems
            },
            success: function(data){
                console.log("Cart data: ");
                console.log(data);

                displayCart(data);
            },
            error: function(xhr){
                console.log("Error fetching cart items." + xhr.responseText);
            }
        });
    }
}

function displayCart(items){
    let container = $(".cart-container");

    let content = ``;
    let total = 0;

    items.forEach(function(item){
        content += `<tr>
                        <td><img src="${item.images[0].src}" style="width: 100px;" alt="Image"/></td>
                        <td>${item.name}</td>
                        <td>${item.price}$</td>
                        <td class="" style="padding-right: 0px"><a class="cf-button cart-item-remove-btn" href="#" data-courseid="${item.id}">Remove</td>
                    </tr>`;
        total+= parseFloat(item.price);
    });

    $(".cart-total span").text(`${total}$`);
    $(container).html(content);

    $(".cart-item-remove-btn").click(removeCartItem);
}

function removeCartItem(e){
    e.preventDefault();

    // Remove from storage
    let courseId = parseInt($(this).data("courseid"));
    cartItems = cartItems.filter(item => item !== courseId);
    localStorage.setItem("cart", JSON.stringify(cartItems));

    $(this).parent("tr").remove();

    initializeCart();
}

function confirmOrder(e){
    e.preventDefault();

    if(cartItems.length == 0){
        alert("No items.");
        return;
    }

    $.ajax({
        url: "/cart/save",
        method: "POST",
        data: {
            cartItems: cartItems,
            "_token" : $('meta[name="csrf-token"]').attr('content')
        },
        success: function(){
            alert("Order confirmed successfully.");

            cartItems = [];
            localStorage.setItem("cart", JSON.stringify(cartItems));

            location.href = "/";
        },
        error: function (xhr){
            alert("Error confirming order.");

            console.log("Error confirming order:" + xhr.responseText);
        }
    })
}
