<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo/IMG-20230513-WA0011.jpg" class="logo img-fluid" alt="Kind Heart Charity">
            <span>
                کانون فرهنگی هنری معراج
                <small>Meraj Art Cultural Center</small>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index">صفحه اصلی</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="about">درباره ما</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="subject">کلاس های آموزشی</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="match">مسابقات</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link click-scroll " href="news" >اخبار</a>  
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="contact">ارتباط با ما</a>
                </li>

                <li class="nav-item ms-3">

                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link custom-btn custom-border-btn btn">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link custom-btn custom-border-btn btn">ورود</a>
                 </li>
                 <li class="nav-item ms-3">
               
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-link custom-btn custom-border-btn btn">ثبت نام</a>
                                    @endif
                                @endauth
                        @endif
                    
                </li>

            </ul>
        </div>
    </div>
</nav>
