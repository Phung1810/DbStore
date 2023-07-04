<header class="header-container">
    <div class="header container">
        <div class="row mid_heade">
            <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12">
                <a class="logo" title="Magento Commerce" href="{{Route('index')}}"><img alt="Magento Commerce" src="{{asset('frontend/images/logo_store.jpg')}}" width="150px"></a>
            </div>
            <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12">
                <div class="search-box">
                    <form action="{{Route('search')}}" method="GET" id="search_mini_form" name="Categories">
                        <input type="text" placeholder="Tên sản phẩm..." maxlength="70" name="key" id="search">
                        <button id="submit-button" class="search-btn-bg"><span>Tìm kiếm</span></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
                <div class="top-cart-contain">
                    <div class="mini-cart">
                        @php
                        $number = 0;
                        $cart = session()->get('cart');
                        if (isset($cart)) {
                            foreach ($cart as $id => $item) {
                                $number++;
                            }
                        }
                        @endphp
                        <div class="basket dropdown-toggle" >
                            <a href="{{Route('cart')}}"><i class="fas fa-shopping-cart cart"></i>
                                <div class="cart-box">
                                    <span id="cart-total">{{$number}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                        <input value="" type="hidden">
                        <input id="enable_module" value="1" type="hidden">
                        <input class="effect_to_cart" value="1" type="hidden">
                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                    </div>
                </div>
                @if(Auth::check())
                <div class="signup"><a href="{{Route('logout')}}"><span></span>Đăng xuất</a></div>
                <div class="login"><a><span>Xin chào: {{Auth::user()->name}}</span></a></div>
                @else
                <div class="signup"><a href="{{Route('register')}}"><span>Đăng ký</span></a></div>
                <div class="login"><a href="{{Route('login')}}"><span>Đăng nhập</span></a></div>
                @endif
            </div>
        </div>
    </div>
</header>
