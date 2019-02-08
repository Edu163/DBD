<div class="might-like-section">
    <div class="container">
        <h2>Te podría interezar...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href=# class="might-like-product">
                    <img src="https://picsum.photos/200/150?image={{ mt_rand(1, 50) }}" alt="product">
                    <div class="might-like-product-name">Viaje a: {{ $product->destiny->ciudad }}</div>
                </a>
            @endforeach

        </div>
    </div>
</div>
