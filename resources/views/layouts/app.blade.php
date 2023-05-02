<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
      
         @vite(['resources/js/app.js', 'resources/scss/app.scss'])
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

                        <div class="container">
                            <a href="">
                                <ul class="list-unstyled d-flex gap-5">
                                    @foreach ($comics as $comic)
                                        <li>{{$comic['title']}}</li>
                                    @endforeach
                                </ul>
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
<style lang="scss" scoped>


section {
            position: relative;
        }

.container-comic {


    background-image: url(../img/jumbotron.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 25rem;
    padding: 1.125rem 18.75rem;
    display: flex;
    align-items: center;


}

.container-list {
    color: white;
    background-color: #1c1c1c;
    padding: 1.125rem 18.75rem;


    

       
    }
 h3 {
            top: -35px;
            position: absolute;
            padding: .5rem .9375rem;
            background-color: $secondary-color-text;
        }

    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 3.125rem;

        
    }


button {
            color: inherit;
            font-weight: bold;
            border: none;
            background-color: $secondary-color-text;
            padding: .5rem 3.75rem;
        }
        .container-cards {
        display: flex;
        align-items: center;

        word-wrap: break-word;
        

        }
        .container-card {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            width: 100%;

        }
</style>
