<?php include ROOT . '/views/layouts/header.php'; ?>
                
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                  <div class="col-sm-4 col-sm-offset-4 padding-right" style="margin-top: 10%">
                    <div class="signup-form">
                    <form style="margin-top: 10%" class="form-horizontal" method="POST" action="#">
                    	<h1  align="center">Войти в аккаунт</h1>
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>
                    </div>
                  </div>