 <aside id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <?php foreach ($params['routes'] as $url => $oldal) { ?>
                                        <?php if(! isset($_SESSION['login']) && $oldal['visibleLoggedOut'] || isset($_SESSION['login']) && $oldal['visibleLoggedIn']) { ?>
                                            <li class="nav-item <?= (($url === $params['keres']) ? 'active' : '') ?>">
                                                <a class="nav-link" href="/<?= $url ?>"><?= $oldal['title'] ?></a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
  </aside>