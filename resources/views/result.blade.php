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
<style type="text/css">
    body {
        padding-top: 5rem;            /* Provide Space from Top */
        background: #942626;          /* Set background color for body to justify transparency of Jumbotron */
    }

    .jumbotron {
        background: none;             /* Transparent background */
    }

</style>
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
        <div class="jumbotron transparent">
            <h1 class="display-4 text-black">ข้อมูลผู้ที่ค้นหา</h1>
            <h5 class="lead text-black">ข้อมูลดังกล่าวเป็นข้อมูลเบื้องต้น โดยรายละเอียดของท่านถูกปรับปรุงล่าสุดวันที่ </h5>
            <h6 class="lead text-date"> {{formatDateThai($chkshow->updated_at)}}   หากพบว่าข้อมูลดังกล่าวมีข้อผิดพลาด หรือไม่ถูกต้อง ให้ทำการติดต่อ...</h6>
             <hr class="my-4">

                <h3 class="text-black text-center bold"> เลขประจำตัวนักเรียน : {{$chkshow->std_id}} </h3>
                <h3 class="text-black text-center bold"> ชื่อ-สกุล : {{$chkshow->std_name}} </h3>
                <h3 class="text-black text-center bold"> ชั้น มัธยมศึกษาปีที่ {{$chkshow->class}}/{{$chkshow->room}} </h3>
            <h3 class="text-date text-center bold"> คะแนน ความประพฤติปัจจุบัน​ : {{$chkshow->point}}</h3>
            <h3 class="text-black text-center bold"> ข้อมูลปรับปรุงล่าสุดวันที่ {{formatDateThai($chkshow->updated_at)}}  </h3>
         <center>
          <button class="btn btn-primary font-montserrat all-caps text-center center ">กลับไปค้นหาข้อมูลอีกครั้ง</button>
         </center>
             <br>
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
            <tbody>
            @foreach ($chklogshow as $data)
                <tr>
                    <td class="text-black bold text-center" bgcolor="#E5EFF3">{{ formatDateThai($data->created_at)}}</td>
                    <td class="text-black bold text-center" bgcolor="#E5EFF3">{{$data->detail  ?? "No record"}}</td>
                    <td class="text-black bold text-center" bgcolor="#E5EFF3">{{$data->location  ?? "No record"}}</td>
                    <td class="text-black bold text-center" bgcolor="#E5EFF3">{{$data->point_fund  ?? "No record"}}</td>
                    <td class="text-black bold text-center" bgcolor="#E5EFF3">{{$data->save_man  ?? "No record"}}</td>
                </tr>
            @endforeach
            </tbody>
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
