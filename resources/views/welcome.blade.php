@extends('layouts.app')

@section('content')

<!--================Home Carousel Area =================-->
<section class="home_carousel_area">
    @component('components.home.carousel')
    @endcomponent
</section>
<!--================End Home Carousel Area =================-->

<!--================Special Offer Area =================-->
<section class="special_offer_area">
    @component('components.home.specialoffer')
    @endcomponent
</section>
<!--================End Special Offer Area =================-->

<!--================Latest Product isotope Area =================-->
<section class="fillter_latest_product">
    @component('components.home.latestproducts')
    @endcomponent
</section>
<!--================End Latest Product isotope Area =================-->

<!--================Product_listing Area =================-->
<section class="product_listing_area">
    @component('components.home.productslisting')
    @endcomponent
</section>
<!--================End Product_listing Area =================-->

<!--================Featured Product Area =================-->
<section class="feature_product_area">
    @component('components.home.featureproduct')
    @endcomponent
</section>
<!--================End Featured Product Area =================-->

<!--================Form Blog Area =================-->
<section class="from_blog_area">
    @component('components.home.latestblog')
    @endcomponent
</section>
<!--================End Form Blog Area =================-->
@endsection