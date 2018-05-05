<?php

include("../views/admin/header.php");

?>

            <div class="row justify-content-md-center mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Sindria MVC - Register</h4>
                            <form class="form-horizontal" role="form" method="POST" action="#">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" value="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email" value="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Password</label>

                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password_confirmation">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


<?php

include("../views/admin/footer.php");

?>