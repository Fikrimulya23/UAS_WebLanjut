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
        <h4>Form Edit Produk</h4>
        <hr>
        <form action="<?php echo base_url('admin/update/'.$user['id']); ?>" method="post">

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control"
                    placeholder="Username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <textarea name="password" class="form-control"
                    placeholder="Password"><?php echo $user['password']; ?></textarea>
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
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>