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

                <div class="jumbotron transparent">
                    <h1 class="display-4 text-black text-center">โปรดกรอกเลขประจำตัวนักเรียน เพื่อทำการตรวจสอบ</h1>
                    <h6 class="lead text-date text-center">    หากพบว่าข้อมูลดังกล่าวมีข้อผิดพลาด หรือไม่ถูกต้อง ให้ทำการติดต่อ...</h6>
                    <hr class="my-4">

                    <h5 class="small hint-text m-t-5 font-arial text-center" style="color:#ff4d4d">
                        หากค้นหาไม่พบข้อมูล กรุณาติดต่อ XXXXXXXX
                    </h5>
                    <h6 class="small hint-text m-t-5 font-arial text-center" style="color:#ff4d4d">
                        ให้กดยืนยันว่า i'm not a robot ด้านล่างก่อน จึงจะสามารถกดค้นหาได้ครับ
                    </h6>
                    <center>
                        <form  id="checks" method="post" action="{{ route('result') }}">
                            @csrf
                            <div class="form-group form-group-default center-margin center-block center-scale">
                                <label class="text-center">เลขประจำตัวนักเรียน</label>
                                <input  name="std_id" id="std_id" class="form-control text-center" type="number" style="font-size: 30px;" required>
                            </div>
                            <div class="g-recaptcha"   data-callback="makeaction" data-sitekey="6LdrAZgUAAAAALEjhuaoPBtTc6RfXzLr5pbZ0B82" required></div>

                            <div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <button type="submit" id="btn_submit" name="btn_submit" class="btn btn-primary font-montserrat all-caps fs-12 text-center text-white"  disabled>ตรวจสอบข้อมูล</button>

                                <br>
                            </div>
                        </form>



                        <br>
                        <div class="clearfix"></div>

</section>
<section class="text-center">
    <div class="text-center text-info">
        <div id="infodev" class="text-white">
            <br>
            <h5 class="checktext" style="color:#ffffff"> Server : Singapore :  SGP-XNI04 </h5>
            <h4 class="checktext" style="color:#ffffff"> Powered By NEXT!TECH TEAM | Copyright 2016 - 2019. All Right Reserved. </h4>
        </div>
    </div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Themes/Login/assets/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>
