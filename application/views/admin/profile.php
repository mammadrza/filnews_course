


<?php $this->load->view('admin/admin_header_css') ?>

<?php $this->load->view('admin/admin_left_menu') ?>







<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>All news</h2>
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


                        <?php
                        if($this->session->userdata('success')){ ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->userdata('success');$this->session->unset_userdata('success')  ?>
                            </div>
                       <?php  } ?>







                        <table class="table  white">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($allNews as $allNewsKey){ ?>
                            <tr>
                                <td><?php echo $allNewsKey['title'] ?></td>
                                <td><?php echo $allNewsKey['description'] ?></td>
                                <td><?php echo $allNewsKey['date'] ?></td>
                                <td><img class="imageSize" src="<?php echo base_url('uploads/'.$allNewsKey['image'])  ?>" alt=""></td>
                                <td>
                                    <span>update</span>
                                    /
                                    <span>delete</span>
                                </td>


                            </tr>
                            <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php $this->load->view('admin/admin_footer') ?>