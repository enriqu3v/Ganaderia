<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="col-md-8">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-user"></i> <?php  echo lang('manage_profile'); ?>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <div class="panel-body">
                                        <?php echo validation_errors(); ?>
                                        <form role="form" action="profile/addNew" method="post" enctype="multipart/form-data">
                                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><?php  echo lang('name'); ?></label>
                                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                                    if (!empty($profile->username)) {
                                                        echo $profile->username;
                                                    }
                                                    ?>' placeholder="" <?php ?>>
                                                </div>
                                            <?php } else { ?>

                                                <div class="col-md-4  col-lg-4 col-sm-4">
                                                    <section class="panel">
                                                        <div class="weather-bg">
                                                            <div class="panel-body report_color">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-xs-6">
                                                                        <i class="fa fa-user"></i> 
                                                                        <?php
                                                                        if (!empty($profile->username)) {
                                                                            echo $profile->username;
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </section>
                                                </div>

                                                <input type="hidden" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                                if (!empty($profile->username)) {
                                                    echo $profile->username;
                                                }
                                                ?>' placeholder="" <?php ?>>

                                                <div class="clearfix">
                                                </div>
                                                <br> <br>
                                                <?php
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php  echo lang('change_password'); ?></label>
                                                <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="********">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php  echo lang('email'); ?></label>
                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='<?php
                                                if (!empty($profile->email)) {
                                                    echo $profile->email;
                                                }
                                                ?>' placeholder="" <?php
                                                       if (!empty($profile->username)) {
                                                           echo $profile->username;
                                                       }
                                                       ?>' placeholder="" <?php ?>>
                                            </div>

                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($profile->id)) {
                                                echo $profile->id;
                                            }
                                            ?>'>

                                            <button type="submit" name="submit" class="btn btn-info submit_button"><?php  echo lang('submit'); ?></button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>
