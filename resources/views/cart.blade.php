@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shopping Cart</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Cart::count() > 0)

            <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="https://picsum.photos/180/120?image={{ mt_rand(1, 50) }}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Destino: {{ $item->model->destiny->ciudad }}</a></div>
                            <div class="cart-table-description">Fecha salida: {{ $item->model->fecha_despegue }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            {{--<a href="#">Remove</a> <br>--}}
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button id = "butonRemove" type="submit" class="btn btn-success">Remove</button>
                            </form>
                            <a href="#">Save for Later</a>
                        </div>
                        <div>
                            <select class="quantity" data-id="{{ $item->rowId }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>{{ $item->subtotal}}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end cart-table -->

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ Cart::subtotal() }}<br>
                        {{ Cart::tax() }} <br>
                    <span class="cart-totals-total">{{ Cart::total() }}</span>
                    </div> 
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="#" class="button">Continue Shopping</a>
                <a href="{{ route('checkout.index')}}" class="btn btn-success">Proceed to Checkout</a>
            </div>
            @else

                <h3>No items in Cart!</h3>
            @endif
            <h2>2 items Saved For Later</h2>

            <div class="saved-for-later cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                            <div class="cart-table-description">15 inch, 1TB SSD, 32GB RAM</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for Later</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

            </div> <!-- end saved-for-later -->

        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection

@section('extra-js')
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        (function(){
            //clase que contiene el contador
            const classname = document.querySelectorAll('.quantity')
            //convert array
            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function(){
                    const id = element.getAttribute('data-id')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function (response) {
                        console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
            // Array.from(classname).forEach(function(element) {
            //     element.addEventListener('change', function() {
            //         const id = element.getAttribute('data-id')
            //         axios.patch(`/cart/${id}`, {
            //             quantity: this.value
            //         })
            //         .then(function (response) {
            //             // console.log(response);
            //             window.location.href = '{{ route('cart.index') }}'
            //         })
            //         .catch(function (error) {
            //             // console.log(error);
            //             window.location.href = '{{ route('cart.index') }}'
            //         });
            //     })
            // })
        })();
    </script>
@endsection