<div class="container login">
    <div class="row">
        <div class="col s12 offset-s0 m6 offset-m3">

            <div class="card hidden" id="success">
                <div class="login__success">
                    <i class="material-icons login__success-icon green-text">check_circle</i>
                </div>
            </div>

            <!-- Normal login -->
            <form class="card" method="post" id="loginForm">
                <div class="card-content clearfix">
                    <span class="card-title black-text"><?= \admin\Module::t('login_pre_title', ['title' => Yii::$app->siteTitle]); ?></span>

                    <br />
                    <br />

                    <div class="row">
                        <div class="input input--text input--vertical col s12">
                            <label class="input__label" for="email"><?= \admin\Module::t('login_mail'); ?></label>
                            <div class="input__field-wrapper">
                                <input class="input__field" id="email" name="login[email]" value="<?= $model->email; ?>" type="email" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input input--text input--vertical col s12">
                            <label class="input__label" for="password"><?= \admin\Module::t('login_password'); ?></label>
                            <div class="input__field-wrapper">
                                <input class="input__field" id="password" name="login[password]" value="<?= $model->email; ?>" type="password" />
                            </div>
                        </div>
                    </div>

                    <br />

                </div>

                <div class="card-action">
                    <button class="btn right color green white-text" type="submit">
                        <?= \admin\Module::t('login_btn_login'); ?> <i class="material-icons right submit-icon">keyboard_arrow_right</i>
                        <div class="preloader-wrapper login__spinner right small active hidden spinner"><div class="spinner-layer"><div class="circle-clipper left"><div class="circle"></div></div></div></div>
                    </button>
                    <div class="clearfix"></div>
                </div>
            </form>
            <!-- /Normal login -->

            <!-- Token -->
            <form class="card hidden" method="post" id="secureForm">
                <div class="card-content clearfix">
                    <span class="card-title black-text"><?= \admin\Module::t('login_pre_title', ['title' => Yii::$app->siteTitle]); ?><</span>

                    <br />
                    <br />

                    <div class="row">
                        <div class="input input--text input--vertical col s12">
                            <label class="input__label" for="secure_token"><?= \admin\Module::t('login_securetoken'); ?></label>
                            <div class="input__field-wrapper">
                                <input class="input__field" name="secure_token" id="secure_token" value="<?= $model->email; ?>" type="text" />
                                <small><?= \admin\Module::t('login_securetoken_info'); ?></small>
                            </div>
                        </div>
                    </div>

                    <br />

                </div>

                <div class="card-action">
                    <button class="btn right green white-text" type="submit">
                        <?= \admin\Module::t('button_send'); ?> <i class="material-icons right submit-icon">keyboard_arrow_right</i>
                        <div class="preloader-wrapper login__spinner right small active hidden spinner"><div class="spinner-layer"><div class="circle-clipper left"><div class="circle"></div></div></div></div>
                    </button>
                    <button class="btn left red white-text" type="button" id="abortToken"><i class="material-icons left">cancel</i> <?= \admin\Module::t('button_abort'); ?></button>
                    <div class="clearfix"></div>
                </div>
            </form>
            <!-- /Token -->

            <div class="card-panel red lighten-1 white-text" id="errorsContainer" style="display:none;"></div>

        </div>
    </div>
</div>