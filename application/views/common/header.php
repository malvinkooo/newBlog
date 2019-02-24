<header>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Главная</a></li>
                    <li class="menu-has-children"><a href="/categories/">Категории</a>
                        <ul>

                            <?php foreach($categories as $itm): ?>
                                <li><a href="/category?id=<?=$itm['id'];?>"><?=$itm['name'];?></a></li>
                            <?php endforeach ?>

                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="navbar-right">
                <form class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
                        <span class="lnr lnr-cross"></span>
                    </span>
                </form>
            </div>
        </div>
    </div>
</header>