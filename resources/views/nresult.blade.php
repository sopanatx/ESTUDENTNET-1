<html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
       ระบบตรวจสอบคะแนนพฤติกรรมนักเรียน
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1" name="viewport"><link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet"><link rel="stylesheet" href="../Themes/Login/assets/bootstrap/css/bootstrap.min.css">

    <!-- Not required: presentational-only.css only contains CSS for prettifying the demo -->
    <link rel="stylesheet" href=.."/Themes/presentational-only.css">

    <!-- responsive-full-background-image.css stylesheet contains the code you want -->
    <link rel="stylesheet" href="/Themes/background-resonsive.css"></head>
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/fonts/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/swiper/css/swiper.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/text-rotate/simpletextrotator.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function makeaction(){
        document.getElementById('btn_submit').disabled = false;
    }
</script>
<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
<link class="main-stylesheet" href="pages/css/pages-icons.css" rel="stylesheet" type="text/css" />
<body>

<!-- /.login-logo -->
<section class="container center-block center-margin">
    <div class="text-center">
        <br>
        <br>
        <h1 class="light text-white"> ระบบตรวจสอบคะแนนพฤติกรรมนักเรียน </h1>
        <h2 class="text-white text-center" >
            ส่วนตรวจสอบคะแนนพฤติกรรม
        </h2>
    </div>
    <form  id="checks" method="post" action="{{ route('result') }}">
        @csrf
        <p class="text-center text-black"> ผลการค้นหา </p>
     <div>

     </div>
        <div class="jumbotron">

            <fieldset>
                <legend>ข้อมูลของบุคคลที่ค้นหา</legend>
                <br>
                <div class="form-group">
                    <label for="nid" class="col-lg-2 control-label">เลขประจำตัวนักเรียน</label>
                </div>
<br>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">ชื่อ : นายทดสอบ ทดสอบ</label>
                </div>

            </fieldset>

        </div>
        <br>
        <table class="table table-bordered">
            <thead class="table-responsive-block mapplic-minimap-background text-center" bgcolor="#E5EFF3">
            <tr>
                <th class="text-center" scope="col">วันที่</th>
                <th class="text-center" scope="col">รายละเอียด</th>
                <th class="text-center" scope="col">สถานที่</th>
                <th class="text-center" scope="col">คะแนนที่โดนหัก</th>
                <th class="text-center" scope="col">ผู้บันทึกข้อมูล</th>
            </tr>
            </thead>
        </table>
    </form>

</section>
<section class="text-center">
    <div class="text-center text-info">
        <div id="infodev" class="text-white">
            <br>
            <h5 class="checktext"> Server : Singapore :  SGP-XNI04 </h5>
            <h4 class="checktext"> Powered By NEXT!TECH TEAM | Copyright 2016 - 2019. All Right Reserved. </h4>
        </div>
    </div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Themes/Login/assets/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>
