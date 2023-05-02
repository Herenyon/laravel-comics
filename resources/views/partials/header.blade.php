<header>
    
    <div class="d-flex">
        head 1
    </div>
         
    <div class="container-header">
        <div class="container-logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <div class="container-nav">
            <nav>
                <ul class="list-unstyled d-flex justify-content-center gap-3">
                    <li><a href="#"> CHARACTERS</a></li>
                    <li><a href="#"> COMICS</a></li>
                    <li><a href="#"> MOVIES</a></li>
                    <li><a href="#"> TV</a></li>
                    <li><a href="#"> GAMES</a></li>
                    <li><a href="#"> COLLECTIBLES</a></li>
                    <li><a href="#"> VIDEOS</a></li>
                    <li><a href="#"> FANS</a></li>
                    <li><a href="#"> NEWS</a></li>
                    <li><a href="#"> SHOP</a></li>
                </ul>
            </nav>
        </div>
    </div>      
        
    

</header>

<style lang="scss" scoped>

.container-header {

  display: flex;
  padding: 1.125rem 18.75rem;
  justify-content: space-between;
  align-items: center;

  .container-logo {
    width: 50%;

  }

  .container-nav {

    list-style: none;
    nav{
        ul {
        list-style: none;
        display: flex;


        li {
            padding: 10px;


            a {
                color: #464646;
                text-decoration: none;
                font-size: 0.95rem;
                font-weight: bold;
                padding-bottom: 15px;



            }

            &:hover {
                border-bottom: 5px solid #0282f9;

                a {
                    color: #0282f9;
                }
            }



        }
    }

    }
  }
}



</style>