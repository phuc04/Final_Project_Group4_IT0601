@extends('Layout_user')
@section('title')
    My Wishlist
@endsection
@section('content')
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3">
                    <article class="col-main">
                        <div class="my-account">
                            <div class="page-title">
                                <h2>My Wishlist</h2>
                            </div>
                            <div class="my-wishlist">
                                <div class="table-responsive">
                                    <fieldset>
                                        <input type="hidden" value="ROBdJO5tIbODPZHZ" name="form_key">
                                        <table id="wishlist-table" class="clean-table linearize-table data-table">
                                            <thead>
                                                <tr class="first last">
                                                    <th class="customer-wishlist-item-image"></th>
                                                    <th class="customer-wishlist-item-info"></th>
                                                    <th class="customer-wishlist-item-quantity">Quantity</th>
                                                    <th class="customer-wishlist-item-price">Price</th>
                                                    <th class="customer-wishlist-item-cart"></th>
                                                    <th class="customer-wishlist-item-remove"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="loadwish">

                                            </tbody>
                                        </table><br>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="buttons-set">
                                <p class="back-link"><a href="{{ url()->previous() }}"><small>« </small>Back</a></p>
                            </div>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <aside class="col-left sidebar col-md-3 col-sm-4 col-xs-12 col-sm-pull-8 col-md-pull-9">
                    <div class="side-banner"><img src="{{ asset('frontend/images/side-banner.jpg') }}" alt="banner"></div>
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                            <ul>
                                <li><a href="#">Account Dashboard</a></li>
                                <li><a href="#">Account Information</a></li>
                                <li><a href="#">Address Book</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Billing Agreements</a></li>
                                <li><a href="#">Recurring Profiles</a></li>
                                <li><a href="#">My Product Reviews</a></li>
                                <li><a href="#">My Tags</a></li>
                                <li class="current"><a href="#">My Wishlist</a></li>

                                <li><a href="#">My Downloadable</a></li>
                                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block block-compare">
                        <div class="block-title "><span>Compare Products (2)</span></div>
                        <div class="block-content">
                            <ol id="compare-items">
                                <li class="item odd">
                                    <input type="hidden" value="2173" class="compare-item-id">
                                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#"
                                        class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a>
                                </li>
                                <li class="item last even">
                                    <input type="hidden" value="2174" class="compare-item-id">
                                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#"
                                        class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a>
                                </li>
                            </ol>
                            <div class="ajax-checkout">
                                <button type="submit" title="Submit"
                                    class="button button-compare"><span>Compare</span></button>
                                <button type="submit" title="Submit"
                                    class="button button-clear"><span>Clear</span></button>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    function loadWishlist(){
        $.ajax({
            type: 'get',
            url: '{{ route('wishlist.index') }}',
            dataType: 'json',
            success:function(response){
                $('#loadwish').html(response.data);
            }
        });
    }
    $(document).ready(function(){
        // Load Wishlist
        loadWishlist();
        // Add Cart
        $(document).on('click','.formCart', function(e){
            e.preventDefault();
            var id_pro = $(this).data('id');
            var qtycart = $('#qty'+id_pro).val();

            $.ajax({
                type: 'post',
                url: '{{ route('cart.store') }}',
                data: {
                    qtycart:qtycart,
                    id_pro:id_pro
                },
                dataType: 'json',
                success:function(response){
                    loadSidebar();
                    toastr.success(response.message, 'Notification');
                }
            });
        });
        // Del Wishlist
        $(document).on('click','.delwishlist', function(e){
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type: 'post',
                url: '{{ route('wishlist.store') }}',
                data: {id:id},
                dataType: 'json',
                success:function(response){
                    loadWishlist();
                }
            });
        });
    });
</script>
@endsection
