<!-- header -->
<header>
    <!-- header inner -->
    <div class="head-top">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="/">ZwalletConnect</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <ul class="social_icon text_align_right d_none">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="email text_align_right">

                        @guest
                            <li class="d_none"><a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        @endguest

                        @auth
                            <li>
                                <form class="logout inline-block" method="POST" action="logout">
                                    <button type="submit" class="text-sm"  style="font-size: 12px; background-color: transparent; padding: 6px 9px; border-radius: 10px; color: white; border: 2px solid white;">Logout</button>
                                    @csrf
                                </form>
                            </li>
                        @endauth
                        <li class="d_none"> <a href="/login" class="text-sm"  style="font-size: 12px; background-color: transparent; padding: 9px 13px; border-radius: 10px; color: white; border: 2px solid white;">Connect Wallet</a> </li>
                        <li>
                            <button class="openbtn" onclick="openNav()"><img src="{{ asset('images/menu_btn.png') }}"></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>