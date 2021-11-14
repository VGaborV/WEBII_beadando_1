        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    

        <?php if(isset($params['uzenet'])) { ?>
            <h1><?= $params['uzenet'] ?></h1>
            <?php if($params['ujra']) { ?>
                <a href="/belepes">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>

                    </div>
                </div>
            </div>
        </div>