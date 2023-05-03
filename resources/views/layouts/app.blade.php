<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
      
         @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.header')
       <main>
        <section class="container-comic">

        </section>

        <section class="container-list">
            <div class="container-cards">

            <h3>CURRENT SERIES</h3>
                <div>
                    <div class="container-card">

                        <div class="container-comics" >
                            <a href="">
                                
                                    @foreach ($comics as $comic)
                                        
                                           <img src="{{$comic['thumb']}}" alt=""> 
                                            <h4>{{$comic['series']}}</h4> 
                                        
                                    @endforeach
                               
                            </a>
                        </div>
                    </div>
                </div>     
            </div>

        <div class="button">
            <button>LOAD MORE</button>
        </div>
    </section>
            
        
       </main>
       @include('partials.footer')
    </body>
</html>

