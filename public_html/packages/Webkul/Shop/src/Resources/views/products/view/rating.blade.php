{!! view_render_event('bagisto.shop.products.view.rating.before', ['product' => $product]) !!}
<div class="rating-summary fix mtb-10">
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="rating-feedback">
        <a href="#">(1 review)</a>
        <a href="#">add to your review</a>
    </div>
</div>

{!! view_render_event('bagisto.shop.products.view.rating.after', ['product' => $product]) !!}