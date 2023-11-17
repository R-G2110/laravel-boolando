@php
    $menu_genere = config('header_menu.genere');
    $menu_user = config('header_menu.userMenu');
@endphp
<header>

    <div class="fixed  ">
        <div class="container flex justify-sb">

            <nav>
                <ul class="flex">
                    @foreach ($menu_genere as $item)
                        <li><a href="">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <div class="logo">
                <a href="#">
                    <img src="/logo/boolean-logo.png" alt="boolean-logo">
                </a>
            </div>

            <nav>
                <ul class="flex">
                    @foreach ($menu_user as $item)
                        <li><a href=""><i class="@php echo $item['text']@endphp"></i></a></li>
                    @endforeach

                </ul>
            </nav>

        </div>
    </div>

</header>
