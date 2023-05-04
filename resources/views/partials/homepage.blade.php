

<section class="container-list">
    <div class="container-cards">

    <h3>CURRENT SERIES</h3>
        
        <div class="container-card">
            <div class="container-comics" >
                                            
                @foreach ($comics as $comic)
                    <a href="{{ route('comic')}}" >  
                        <img src="{{$comic['thumb']}}" alt=""> 
                        <h4>{{$comic['series']}}</h4> 
                    </a>  
                @endforeach    
                
            </div>
        </div>               
    </div>

    <div class="button">
        <button>LOAD MORE</button>
    </div>
   
</section> 
@include('partials.blue-section')