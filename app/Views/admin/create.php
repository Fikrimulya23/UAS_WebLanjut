<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">CRUD</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">CRUD</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5 mb-5 text-center">
        <h4>Data User</h4>
    </div>
    <div class="container">
        <h4>Form Tambah User</h4>
        <hr>
        <form action="<?php echo base_url('admin/store'); ?>" method="post">

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <label>Role ID</label>
                <select name="role_id" class="form-control">
                    <option value="" disabled selected>-Select-</option>
                    <option value="1">User</option>
                    <option value="2">Admin</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>