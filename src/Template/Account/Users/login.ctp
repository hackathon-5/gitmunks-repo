<?php $this->set('body_class', 'login'); ?>
<div class="forms-container">
    <div class="forms-content">
<form id="login" action="/account/users/index" method="POST">
    <div class="form-group">
        <label>Your Email</label>
        <input type="email" name="username" class="form-control" required="required" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required="required" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Login" />
    </div>
</form>
</div>
</div>