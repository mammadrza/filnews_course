
<?php $this->load->view('admin/admin_header_css') ?>
<?php $this->load->view('admin/admin_left_menu') ?>




<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Add news</h2>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="chrt3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="chart-container white">

                    <?php if($this->session->userdata('err')){ ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->userdata('err'); $this->session->unset_userdata('err'); ?>
                        </div>
                    <?php } ?>
                    <form action="<?php echo base_url('Admin/addNewsAct') ?> " method="post" enctype="multipart/form-data">

                        <input type="text" name="title" class="form-control" placeholder="news title">
                        <br>
                        <input type="text" name="desc" class="form-control" placeholder="news description">
                        <br>
                        <input type="file" name="images" >
                        <br>
                        <input type="date" name="dates" class="form-control" >
                        <br>
                        <button type="submit" class="btn btn-info">elave et gor ne cixir</button>

                    </form>





                </div>
            </div>
        </div>
    </div>
</section>







<?php $this->load->view('admin/admin_footer') ?>
