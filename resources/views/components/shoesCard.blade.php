<link rel="stylesheet" href="{{ asset('css/components/shoesCard.css') }}">


    <div class="card-container">
        <div class="img-container">
            <object class="shoes-img" data="{{ asset('assets/aerost_hoops.svg') }}" type=""></object>
        </div>
        <div class="caption-container">
            <div class="caption-title">{{ $title }}</div>
            <div class="info">
                <div class="price">Rp{{ $price }}</div>
                <div class="stars">
                    <iconify-icon icon="material-symbols:star" style="color: #f5c451;"></iconify-icon>
                    {{ $stars }}
                </div>
            </div>
        </div>
    </div>
