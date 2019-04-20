
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1>Profile</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Profile Picture Form</h2>
            <img src="/assets/myimage.jpg"/>
            <form method="post" action="/profile/updatePicture" enctype="multipart/form-data">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="myfile" type="file" class="form-control" placeholder="Email">
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Submit">
              </div>

            </form>
          </div>
        </div>
      </div>


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

  </div>
  <!-- /.container -->