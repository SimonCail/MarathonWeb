@props(['voyages'])
<h1 class="profile-voyages-title">Les Voyages : </h1>

<div class="profile-voyages-users">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($voyages as $voyage)
                <div class="swiper-slide">
                    <li style="height: 500px">
                        @if ($voyage->visuel && file_exists(public_path('storage/' . $voyage->visuel)))
                            <a href="{{ route('voyage.show', $voyage->id) }}" style="width: 100%; height: 100%; object-fit: cover"><img src="{{ asset('storage/' . $voyage->visuel) }}" alt="Visuel"/></a>
                        @else
                            <a href="{{ route('voyage.show', $voyage->id) }}" style="width: 100%; height: 100%; object-fit: cover"><img src="{{$voyage->visuel}}" alt="Visuel"/></a>
                        @endif
                        <div style="display: flex; justify-content: center; align-items: center">
                            <svg width="24" fill="var(--orange)" stroke="var(--orange)" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M12 10c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2m0-5c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3m-7 2.602c0-3.517 3.271-6.602 7-6.602s7 3.085 7 6.602c0 3.455-2.563 7.543-7 14.527-4.489-7.073-7-11.072-7-14.527m7-7.602c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602"/>
                            </svg>
                            <span class="profil-titre-image">{{ $voyage->titre }}</span>
                            @auth
                                <p>{{ $voyage->likes()->count() }} likes</p>
                            @endauth
                        </div>
                        <div style="display: flex; margin-bottom: 20px">
                            @can('update', $voyage)
                            <a href="{{ route('voyage.edit', $voyage->id) }}" style="width: 100%; height: 100%; object-fit: cover; color: white; padding: 10px 20px; background-color: var(--brown); border-radius: 5px; font-size: 1rem; border: none; cursor: pointer; transition: background-color 0.3s ease; margin-right: 10px;">Modifier</a>
                            @endcan

                            @can('delete', $voyage)
                            <form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                                @endcan

                            <form action="{{ route('voyage.like', $voyage->id) }}" method="POST">
                                @csrf
                                @auth
                                <button type="submit">
                                    @if($voyage->likes()->where('user_id', auth()->id())->exists())
                                        Unlike
                                    @else
                                        Like
                                    @endif
                                </button>
                                @endauth
                            </form>

                        </div>
                    </li>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination" style="bottom: 205px !important;"></div>
        <div class="swiper-button-prev" style="bottom: 430px !important; left: 78px !important;"></div>
        <div class="swiper-button-next" style="bottom: 430px !important; right: 78px !important;"></div>
    </div>
</div>

<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<style>

    .swiper-container .swiper-pagination {
        position: absolute;
        bottom: -85px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
    }

    .swiper-button-prev,
    .swiper-button-next {
        position: absolute;
        top: auto;
        bottom: 102px;
        z-index: 10;
    }

    .swiper-button-prev {
        left: 59px;
    }


    .swiper-button-next {
        right: 59px;
    }
</style>
