<?php $this->set('body_class', 'login'); ?>
<div class="forms-container">
    <div class="forms-content">
        <?= $this->Flash->render(); ?>
        <?= $this->Flash->render('auth'); ?>
        <form id="login" action="/account/users/login" method="POST">
            <h3>Login</h3>
            <div class="form-group">
                <input type="email" name="username" class="form-control" required="required" placeholder="Email" />
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" required="required" placeholder="Password" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn main-button" value="Login" />
            </div>
        </form>
    </div>
</div>