<!DOCTYPE html>
<html lang="en">
<?php
$mysqli = new mysqli("localhost", "root", "", "minathon");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submitDiary'])) {
    $sqlInsertDiary = "INSERT INTO `diary`(`Date`, `Title`, `Describe detail`, `accountID`,`Time`,`Topic`) VALUES ('" . date("Y-m-d") . "','" . $_POST['inputTitle'] . "','" . $_POST['inputDiary'] . "','3','" . date('H:i:s') . "','')";
    $diary = mysqli_query($mysqli, $sqlInsertDiary);
  }
}
?>

<head>
  <meta charset="utf-8">
  <style>
    body {
      background-image: url("https://inngochuong.com/uploads/images/mau-san-pham/mau-backgroud-dep-don-gian/mau-background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .card {
      background-image: url("https://c.wallhere.com/photos/4f/99/P30_pro_colorful_cyan_background-1713711.jpg!d");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Healing | Minathon 2023</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../minathon/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../minathon/dist/css/adminlte.min.css">
</head>

<body class="text-dark">
  <!-- Navbar -->
  <nav  class=" navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <!-- <h1  font-family: Verdana; class="navbar-nav" >
      Healing
    </h1> -->
    <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block" style="display: none;">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar " type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home page</a></li>
              <li class="breadcrumb-item active">Where you share</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Trending Topic</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0" style="display: block;">
                  <ul class="products-list product-list-in-card">
                    <li class="item">
               
                      <div class="product-info">
                        <a href="family.php" class="product-title">Family invoice</a>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-info">
                        <a href="#" class="product-title">Friend</a>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-info">
                        <a href="#" class="product-title">Relationships</a>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-info">
                        <a href="#" class="product-title">Travel</a>
                      </div>
                    </li>
                    <!-- /.item -->
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
            </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9 ">
            <div class="card ">
              <div class="card-header p-2 ">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link " href="#timeline" data-toggle="tab">Diary</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Today</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body ">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <div class=" tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <?php
                      $sqlListDiary = "SELECT * FROM `diary` ORDER BY `Time` DESC";
                      $listDiary = mysqli_query($mysqli, $sqlListDiary);
                      $temp = 0;
                      foreach ($listDiary as $item) {
                        if ($item['Date'] == $temp) {
                      ?>
                          <div>
                            <i class="fas fa-envelope bg-primary"></i>
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> <?= $item['Time'] ?></span>
                              <h3 class="timeline-header"><a href="#"><?= $item['Title'] ?></a></h3>
                              <div class="timeline-body">
                                <?= $item['Describe detail'] ?>
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              </div>
                            </div>
                          </div>
                        <?php
                        } else {
                          $temp = $item['Date'];
                        ?>
                          <div class="time-label">
                            <span class="bg-success">
                              <?= $item['Date'] ?>
                            </span>
                          </div>
                          <div>
                            <i class="fas fa-envelope bg-primary"></i>
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> <?= $item['Time'] ?></span>
                              <h3 class="timeline-header"><a href="#"><?= $item['Title'] ?></a></h3>
                              <div class="timeline-body">
                                <?= $item['Describe detail'] ?>
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              </div>
                            </div>
                          </div>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="post">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Suggest</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputSuggest" id="inputSuggest" placeholder="Suggest" value = "Tại sao chỉ cần cảm thấy vui vẻ trong hiện tại lại đủ để tạo nên những ngày xứng đáng và trân trọng?">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="Title">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Diary</label>
                        <div class="col-sm-10">
                          <textarea style="height:200px" class="form-control" type="text" class="form-control" name="inputDiary" id="inputDiary" placeholder="Input diary"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit" name="submitDiary" class="btn btn-success" value="Post"></input>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class=" active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Cỏ xanh</a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="green.php" class="btn btn-success"> View Dairy</a>
                        <a href="#" class="link-black text-sm float-right"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                        </span>
                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="https://www.w3schools.com/howto/img_avatar2.png" alt="User Image">
                        <span class="username">
                          <a href="#">Sói xám</a>
                        </span>
                        <span class="description">3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="btn btn-success"> View Dairy</a>
                        <a href="#" class="link-black text-sm float-right"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                        </span>
                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../minathon/dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="../../minathon/dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../minathon/dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="../../minathon/dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../minathon/dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../minathon/dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="btn btn-success"> View Dairy</a>
                        <a href="#" class="link-black text-sm float-right"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                        </span>
                      </p>
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../minathon/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../minathon/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../minathon/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../minathon/dist/js/demo.js"></script>
</body>

</html>