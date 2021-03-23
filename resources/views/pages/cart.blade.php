@extends("common.layouts.layout")

@section("title") CodeFreakz | Cart @endsection

@section("scripts")
    <script src="{{ asset("assets/js/cart.js") }}"></script>
@endsection

@section("content")
    <div class="row mb-5 mx-0">
        <div class="col-12">
            <h1 class="text-center py-4">Cart</h1>
        </div>
        <div class="col-10 offset-1" style="overflow: auto">
            <table class="cart-table w-100">
                <theawed style="border-bottom: 1px solid gray">
                    <td>Image</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Actions</td>
                </theawed>
                <tbody class="cart-container">

                </tbody>
            </table>
            <div class="d-flex justify-content-end mr-2 cart-total" style="font-size:24px">
                <p>Total: <span></span></p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="#" class="cf-button confirm-order-btn">Confirm order</a>
            </div>
        </div>
    </div>
@endsection
