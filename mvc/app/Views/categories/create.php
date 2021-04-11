<!-- <div class="content-wrapper"> -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category Form</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create a new Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?=ROOT.'categories/store';?>">
                        <div class="card-body">
                        <div class="form-group">
                                <label for="catname">Category Name</label>
                                <input type="name" class="form-control" id="catname" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="catdes">Category Description</label>
                                <textarea class="form-control" id="catdes" name="des" placeholder="enter Category Name"></textarea>
                            </div>
                        </div>
                        <!-- </div>/.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</section>
