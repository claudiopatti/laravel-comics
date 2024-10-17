<header>

    <div class="header-top ">
        <div class="container d-flex justify-content-end text-white py-2 ">
            <a href="#" class="pe-5 text-white text-decoration-none ">
                DC POWER VISA<i class="fa-regular fa-registered"></i>
            </a>

            <a href="#" class="text-white text-decoration-none">
                ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
            </a>

        </div>

    </div>

    <div class="container d-flex  align-items-center justify-content-between ">
        <div class="py-2">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo dc">
        </div>

        <div class="d-flex align-items-center " >
            <div>
                <ul class=" mb-0 pe-5 d-flex align-items-center" >
                    @foreach ($titlesHeader as $title)
                    <li class=" px-3 fw-bold list-unstyled ">
                        <a href="{{ $title['url']}}" class="text-decoration-none text- text-black ">
                            {{ $title['title']}}
                        </a>
                    </li>
                    @endforeach
                </ul>

            </div>
            <div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                
            </div>
        </div>

    </div>
</header>