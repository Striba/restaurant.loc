@if(count($item) > 0)
<div class="row">
    <div class="grid_7">
        <div class="blog">
            <div class="blog_title"><a href="#">{{ $item->title }} </a></div>
            <img src="{{asset(env('THEME'))}}/images/page4_img1.jpg" alt="">
            <p>Колличество порции: {{$item->amount}}</p>
            <p>Цена: {{ $item->price }}</p>
            <p>Rehoncus. Aliquam nibh antegestas id ictum ado. Praesenterto faucibus maleada faucibusnec laeetert metus id laoreet. </p>
            <p>Nullam consectetur orci sed nulla facilisisequaterto. Curabitur vel lorem sit amet nulla perermentum. Aliquam nibh ante, egestas id dictum a, commodo luctus libero. Raesent faucibus malesuada faucibus. Donecertolin laoreet metus id laoreet malesuadarem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. </p>

        </div>
    </div>

</div>
@endif