<footer class="footer mt-auto py-3 bg-body-tertiary border-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item col-12 col-lg-auto">
                        <a class="nav-link px-2 text-body-secondary" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-12 col-lg-auto">
                        <a class="nav-link px-2 text-body-secondary" aria-current="page" href="{{ route('browser_games.index') }}">Browser Games</a>
                    </li>
                    <li class="nav-item col-12 col-lg-auto">
                        <a class="nav-link px-2 text-body-secondary" aria-current="page" href="{{ route('about.index') }}">About Me</a>
                    </li>
                    <li class="nav-item col-12 col-lg-auto">
                        <a class="nav-link px-2 text-success" aria-current="page" target="_blank" href="http://diy.peshkov.website">DIY</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="row d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <div class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">{{ config('app.title', 'Igor Peshkov') }}</div>
                <div class="mb-3 mb-md-0 text-body-secondary">Copyright &copy; {{ date('Y') }}</div>
            </div>
            <div class="col-md-4 justify-content-end list-unstyled d-flex">
                <ul class="nav">
                    <li class="ms-3 nav-item">
                        <a href="https://webmaster.yandex.ru/siteinfo/?site=peshkov.website"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?peshkov.website&theme=dark&lang=ru"/></a>
                    </li>
                    <li class="ms-3 nav-item">
                        <a class="text-body-secondary" href="https://github.com/darkdiesel" target="_blank">
                            <i class="fa-brands fa-square-github fa-xl"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="https://www.linkedin.com/in/igorpeshkov1988/" target="_blank">
                            <i class="fa-brands fa-linkedin fa-xl"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="http://www.youtube.com/user/MrDarkdiesel" target="_blank">
                            <i class="fa-brands fa-youtube fa-xl"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="skype:igor.peshkov.1988?chat" target="_blank">
                            <i class="fa-brands fa-skype fa-xl"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="https://www.tiktok.com/@igor_peshkov" target="_blank">
                            <i class="fa-brands fa-tiktok fa-xl"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="https://www.facebook.com/igor.peshkov.27.07.1988/" target="_blank">
                            <i class="fa-brands fa-square-facebook fa-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
