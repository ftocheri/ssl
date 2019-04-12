

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Register
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <form method="post" action="/register/registerAction">

              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="name" type="text" class="form-control" placeholder="First Name">
              </div>

              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input name="lastname" type="text" class="form-control" placeholder="Last Name">
              </div>

              <div class="form-group">
                <textarea class="form-control" name="bio" rows="3" placeholder="A little about yourself..."></textarea>
              </div>

              <h4>Gender</h4>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios" value="Male" checked>
                <label class="form-check-label" for="exampleRadios1">
                Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios" value="Female">
                <label class="form-check-label" for="exampleRadios1">
                Female
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios" value="NA">
                <label class="form-check-label" for="exampleRadios1">
                Prefer not to answer
                </label>
              </div>

              <div class="form-check" style="padding-top: 20px; padding-bottom: 20px;">
                <input class="form-check-input" type="checkbox" value="" id="subscribeCheck">
                <label class="form-check-label" for="subscribeCheck">
                  Subscribe
                </label>
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

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->