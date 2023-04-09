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
        .chatbox{
            background-image: url("");
            background-color: white;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Healing | Minathon 2023</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="text-dark">
    <!-- Navbar -->
    <nav class=" navbar navbar-expand">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            Healing
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
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
                    <span class="badge badge-warning navbar-badge">15</span>
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
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
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
                                                <a href="#" class="product-title">Family invoice</a>
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
                        <div class="card direct-chat direct-chat-warning chatbox">
                            <div class=" card-header text-dark " style="background-color:rgb(133, 220, 244)">
                                <h3 class="card-title">Cỏ xanh</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="direct-chat-messages">
                                <!-- <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">You</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                    </div>
                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                    <div class="direct-chat-text">
                                    I would love to.
                                    </div>
                                </div> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Message ..." class="form-control">
                                    <span class="input-group-append">
                                    <button type="button" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                                </form>
                            </div>
                        </div>

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9 ">
                        <div class="card ">
                            <div class="card-header p-2 ">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="index.php" >Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?p=1" >Diary</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php" >Today</a></li>
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
                                                <span class="description"></span>
                                                <br>
                                                <br>
                                        <div class="timeline timeline-inverse">
                                            <div class="time-label">
                                                <span class="bg-success">
                                                    22.2.2023
                                                </span>
                                            </div>
                                            <div>
                                            <i class="fas fa-envelope bg-primary"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> </span>
                                                <h3 class="timeline-header"><a href="#"> Tháng 4 Sài Gòn, với những cơn mưa đầu mùa</a></h3>
                                                <div class="timeline-body">
                                                   Không phải cứ tạnh mưa thì sẽ có cầu vồng,
                                                    Cũng như là,
                                                    Không phải cứ chân thành thì sẽ nhận được chân tình,
                                                    Không phải cứ có một người hết lòng yêu thì sẽ có
                                                    một người đáp lại,
                                                    Và,
                                                    Không phải cứ có một người mòn mỏi chờ đợi, 
                                                    thì sẽ có một người trở về,
                                                    Thôi thì có những mối quan hệ nếu có thể rời xa sớm một chút, bạn sẽ bớt đau lòng..
                                                </div>
                                            </div>
                                            </div>
                                            <div class="time-label">
                                                <span class="bg-success">
                                                    8.2.2023
                                                </span>
                                            </div>
                                            <div>
                                            <i class="fas fa-envelope bg-primary"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> </span>
                                                <h3 class="timeline-header"><a href="#"> Chào tháng 4, tháng của những lời nói dối ngọt ngào </a></h3>
                                                <div class="timeline-body">
                                                   Tháng 4, tháng đầy hoài niệm, tháng cho ta mê mải đi tìm những kỉ niệm xưa cũ, tháng lang thang vô định những chiều trở gió…
                                                    Tháng mới, mong niềm vui và may mắn luôn cạnh bên bạn chặng đường phía trước, 
                                                    và mong bạn nhớ rằng;
                                                    Không phải bạn yêu ai người đó cũng sẽ yêu lại bạn, nhưng hãy cứ yêu, yêu sai thì yêu lại, có ai yêu một lần rồi sống với tình yêu đó một đời đâu…
                                                    Không phải ai cũng sẽ thành thật, nhưng cứ sống chính trực, hết lòng mình, để bản thân không phải hối tiếc về sau…
                                                    Tháng mới, nên làm những thứ mà bản thân đang theo đuổi, rồi bạn sẽ nhận kết quả xứng đáng, 
                                                    tin tôi đi,
                                                    thành công sẽ đến với người luôn cố gắng…
                                                    Tháng mới vui vẻ và bình an ❤️
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        
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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>