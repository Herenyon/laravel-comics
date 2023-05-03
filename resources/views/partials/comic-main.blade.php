<section >
    <div class="top-blue">
        <img src="{{$comics[0]['thumb']}}" alt="">
    </div>
    
    <div class="comic-container">
        <div class="overview-container">
            <div>
                <h2>
                    {{$comics[0]['title']}}
                </h2>
                <div class="container-prezzo">
                    <div class="price">
                        <div>
                            U.S. Price: <strong>{{$comics[0]['price']}}</strong>
                        </div>
                        <div>
                        <strong>AVAILABLE</strong> 
                        </div>
                    </div>
                    <div class="dropdown">
                        Check Availability
                    </div>
                </div>
                <p>
                    {{$comics[0]['description']}}
                </p>
            </div>
            <div class="adv">
                <h6>ADVERTISEMENT</h6>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
            
            
        </div>
        <div class="container-spec">
            <div class="talent">
                <h5>Talent</h5>
                <div>
                    <div>Art By</div>

                    <div>
                       @foreach ($artists['artists'] as $artist)
                            @if ($loop->last)
                                {{ $artist }}
                            @else
                                {{ $artist }},
                            @endif
                        @endforeach
                    </div>
                    
                </div>
                <div>

                </div>
            </div>
            <div class="specs">
                <h5>Specs</h5>
            </div>
        </div>

    </div>
    
</section>