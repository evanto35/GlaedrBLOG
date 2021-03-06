<div class="col-md-9">
    <h1 class="h2">Register:</h1>
    <hr>
    <form class="form-horizontal" method="post" action="<?=\Framework\Core\Config::APP_ROOT;?>/user/register">
        <fieldset>
            <div class="form-group danger">
                <label for="username" class="col-lg-2 control-label">Username
                </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                           autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                           autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label for="password-repeat" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="password-repeat" name="password-repeat"
                           placeholder="Repeat password"
                           autocomplete="off">
                </div>
            </div>
            <hr>
            <div class="form-group danger">
                <label for="name" class="col-lg-2 control-label">Name
                </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                           autocomplete="off">
                </div>
            </div>
            <div class="form-group danger">
                <label for="name" class="col-lg-2 control-label">Email
                </label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                           autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>