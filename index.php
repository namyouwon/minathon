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
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Đại bàng</a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                      Lá mơ lông có tác dụng làm dịu cơn đau dạ dày và giảm các triệu chứng khác như buồn nôn, nôn mửa, đầy hơi.
                    Cách sử dụng là lấy khoảng 10-15 lá mơ lông tươi rửa sạch, ngâm trong nước muối loãng khoảng 30 phút rồi giã nhuyễn vắt nước để uống.
                    Ngoài ra, nên ăn nhẹ, kiêng thức ăn cay, nóng, chất kích thích và ăn đều đặn, tránh ăn quá no hoặc quá đói.
                    Nếu triệu chứng không giảm hoặc càng nặng hơn, cần đi khám bác sĩ để được chẩn đoán và điều trị kịp thời.
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
                          <a href="#">Chim trắng</a>
                        </span>
                        <span class="description">3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                      Sáu tháng sau khi chúng tôi kết hôn, anh ấy bị tai nạn xe hơi.
                        Khi tỉnh lại thì anh đã mất đi trí nhớ.
                        Anh ấy đã quên mình có một bạch nguyệt quang cầu mà không được, cũng đã quên mất chúng tôi chỉ là hợp đồng hôn nhân. 
                        1
                        Tôi và Phó Kim Minh gặp nhau trong một buổi xem mắt. Anh có bạch nguyệt quang mà mình không thể với tới, tôi cũng có chu sa chí mà mình chưa thể quên đi. 
                        Để tránh bị ba mẹ đôi bên giục giã, chúng tôi quyết định lập nên một bản hợp đồng hôn nhân. 
                        Kết hôn được nửa năm, anh chăm sóc tôi rất chu đáo, mọi công việc trong gia đình đều là một tay anh quán xuyến. Ngay cả đồ ăn mà anh làm cũng vừa vặn hợp với khẩu vị của tôi.
                        Có lần tôi thức khuya làm hợp đồng mà ngủ gục trên bàn làm việc, đến khi tỉnh dậy thì thấy Phó Kim Minh đã hoàn thành giúp tôi, ngày thứ 2 khi lên bàn đàm phán thì mới biết anh chính là bên A.
                        Phải công nhận một chuyện là anh có vẻ ngoài đẹp trai anh tuấn, năng lực không chê vào đâu được, hoàn toàn đáp ứng được tiêu chuẩn về con rể của mẹ tôi.
                        Để ba mẹ hai bên yên lòng, tôi và Phó Kim Minh đóng vai là một cặp vợ chồng tình cảm sâu đậm, nhưng tiếc là chúng tôi không hề thích đối phương.
                        Mặc dù chúng tôi dùng đồ đôi, trong phòng có treo ảnh cưới, nhưng từ khi kết hôn đến nay vẫn ngủ riêng 2 phòng ngủ.
                        Tôi đã nghĩ, nếu không có sự cố kia xảy ra, tôi và Phó Kim Minh sẽ sống như vậy cho đến cuối đời, là bạn cùng phòng có giấy đăng ký kết hôn.
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
                        <img class="img-circle img-bordered-sm" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Tiểu hổ</a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                      Sài Gòn hoa lệ - hoa thì ở chợ Hồ Thị Kỷ, lệ thì cho những ai hay khóc và không chăm lo cho đôi mắt mình.
Thú nhận đi, đã bao lâu rồi bạn chưa thực sự nâng niu đôi mắt của mình. Đôi mắt chính là nơi chứa cả thế giới quan, là nơi tình yêu, tâm hồn được thể hiện. Vậy nên, hãy quan tâm và yêu thương nó nhiều hơn mỗi ngày nhé.
Trùng hợp thay, sắp tới đây sẽ có triển lãm nghệ thuật “Mở” Mắt lần đầu tiên do bệnh viện Mắt Sài Gòn tổ chức với hàng trăm nghìn tròng kính cũ được “xin” lại từ những ca phẫu thuật mắt thành công.
Nếu bạn đang muốn khám phá thêm về sự mới lạ, diệu kỳ của đôi mắt thì hãy đến với triển lãm nhé.
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
                          <a href="#">Sơn lâm</a>
                        </span>
                        <span class="description">3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                      Mong rằng những ngày tháng tuổi trẻ không bị hoang phí, có thể tìm ra một hướng đi cho bản thân, có một công việc khiến mình có động lực thức dậy mỗi sáng.
Bây giờ phải biết trân trọng những đồng tiền kiếm ra, có thể chưa nhiều nhưng là mồ hôi và công sức, sẽ cố gắng làm được nhiều hơn thế.
Chuyện gia đình nhất định phải đặt lên hàng đầu, có thể báo hiếu thì nhất định không để bố mẹ vất vả hơn. Mai kia lúc mệt mỏi quá, vẫn có nơi bình yên để trở về.
Chuyện tình cảm đừng để phải bi lụy, cô đơn cũng được, bên cạnh nhau cũng được, phải học cách buông bỏ. Người tốt thì trân trọng, kẻ xấu thì rời xa, bản thân mình còn chưa biết tự yêu thương thì đừng mong chờ người khác.
Cuộc sống có thể còn nhiều ngã rẽ nữa, lấy đi nhiều nụ cười và nước mắt, chỉ mong bản thân đủ mạnh mẽ, đủ kiên trì.
                                            </p>

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