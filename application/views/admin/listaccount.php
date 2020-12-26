                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> 

                    <div class="row">
                	<div class="col-lg-6">
                		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>');  ?>
					<?php if ($this->session->flashdata('flashAdmin')) : ?>
                		<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Account Administrator <strong>successful</strong> <?= $this->session->flashdata('flashAdmin'); ?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif; ?>
                		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newAdminModal">Add Account Administrator</a>
                		<h1 class="h5 mb-4 text-gray-800">List Account Administrator</h1>
                		<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Email</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 1; ?>
						  	<?php foreach ($userAdmin as $uA) : ?>
						    <tr>
						      <th scope="row"><?= $i; ?></th>
						      <td><?= $uA['name']; ?></td>
						      <td><?= $uA['email']; ?></td>
						      <td>
						      	<a href="<?= base_url(); ?>admin/changeadmin/<?= $uA['id']; ?>" class="badge badge-success" >edit</a>
						      	<a href="<?= base_url(); ?>admin/deleteAdmin/<?= $uA['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete it?')">delete</a>
						      </td>
						    </tr>
						    <?php $i++; ?>
							<?php endforeach; ?>
						  </tbody>
						</table>
                	</div>
                </div>   
                <div class="dropdown-divider mb-3 mt-3"></div>
                <div class="row">
                	<div class="col-lg-6">
                		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>');  ?>
					<?php if ($this->session->flashdata('flashMhs')) : ?>
                		<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Account Student <strong>successful</strong> <?= $this->session->flashdata('flashMhs'); ?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif; ?>
                		<h1 class="h5 mb-4 text-gray-800">List Account Student</h1>
                		<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Email</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 1; ?>
						  	<?php foreach ($userMhs as $uM) : ?>
						    <tr>
						      <th scope="row"><?= $i; ?></th>
						      <td><?= $uM['name']; ?></td>
						      <td><?= $uM['email']; ?></td>
						      <td>
						      	<a href="<?= base_url(); ?>admin/changemhs/<?= $uM['id']; ?>" class="badge badge-success" >edit</a>
						      	<a href="<?= base_url(); ?>admin/deleteMhs/<?= $uM['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete it?')">delete</a>
						      </td>
						    </tr>
						    <?php $i++; ?>
							<?php endforeach; ?>
						  </tbody>
						</table>
                	</div>
                </div>   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- Admin Modal -->
<div class="modal fade" id="newAdminModal" tabindex="-1" role="dialog" aria-labelledby="newAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newAdminModalLabel">Add New Administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/listaccount'); ?>" method="post">
	      <div class="modal-body">
	        <div class="form-group">
			    <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="<?= set_value('name');?>">
			    <?= form_error('name','<small class="text-danger ml-3">', '</small>'); ?>
			</div>
			<div class="form-group">
			    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
			    <?= form_error('email','<small class="text-danger ml-3">', '</small>'); ?>
			</div>
			<div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger ml-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                </div>
            </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Add</button>
	      </div>
	  </form>
    </div>
  </div>
</div>