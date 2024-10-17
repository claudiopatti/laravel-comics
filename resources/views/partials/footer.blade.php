<footer>
    <section class="fistSectionFooter">
        <div class="container d-flex">
            <div class="containerListInfofooter ">
                <div class="listInfoFooter d-flex">
                    <div>
                        <ul>
                            <h3 class="text-white">DC Comics</h3>
                            @foreach (config('infofooter.dcComicsFooter') as $item)
                                <li>
                                    <a href="{{ $item['url'] }}" class="text-decoration-none text-white opacity-75">
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <ul>
                            <h3 class="text-white">Shop Footer</h3>
                            @foreach (config('infofooter.shopFooter') as $item)
                                <li>
                                    <a href="{{ $item['url'] }}" class="text-decoration-none text-white opacity-75">
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                    <ul>
                        <h3 class="text-white">DC Footer</h3>
                        @foreach (config('infofooter.dcFooter') as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="text-decoration-none text-white opacity-75">
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <ul>
                        <h3 class="text-white">Sites Footer</h3>
                        @foreach (config('infofooter.sitesFooter') as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="text-decoration-none text-white opacity-75">
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="dcLogoFotterBg">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </section>
</footer>