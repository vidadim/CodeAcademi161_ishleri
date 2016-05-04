<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
    <link media="all" type="text/css" rel="stylesheet" href="http://fotolar.zz.mu/public/tema/css/bootstrap.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://fotolar.zz.mu/public/tema/css/sb-admin.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://fotolar.zz.mu/public/tema/font-awesome/css/font-awesome.css">
    <style>
    /* Tab Navigation */
    
    .nav-tabs {
        margin: 0;
        padding: 0;
        border: 0;
    }
    
    .nav-tabs > li > a {
        background: #DADADA;
        border-radius: 0;
        box-shadow: inset 0 -8px 7px -9px rgba(0, 0, 0, .4), -2px -2px 5px -2px rgba(0, 0, 0, .4);
    }
    
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:hover {
        background: #F5F5F5;
        box-shadow: inset 0 0 0 0 rgba(0, 0, 0, .4), -2px -3px 5px -2px rgba(0, 0, 0, .4);
    }
    </style>
    <link media="all" type="text/css" rel="stylesheet" href="http://fotolar.zz.mu/public/tema/css/upload/pure.css">
    <style>
    .progress {
        position: relative;
        margin: 10px auto;
        border: 1px solid #DDD;
        border-radius: 3px;
    }
    
    .percent {
        position: absolute;
        display: inline-block;
        top: 0px;
        left: 48%;
        color: #333;
    }
    
    .upload input {
        display: none;
    }
    
    .pure-button {
        margin: 5px 0;
        text-align: center;
    }
    
    .upload {}
    
    .upload a:hover {
        text-decoration: none;
    }
    </style>
    <script type="text/javascript">
    // select file function only for styling up input[type="file"]
    function select_file() {
        document.getElementById('image').click();
        return false;
    }
    </script>
</head>

<body>
    <div style="height:60px;background:#555;color:white;font-size:16px;margin-top:-50px;margin-bottom:20px;">
        <div class="container">
            <div class="row">
                <h3>File Upload</h3>
            </div>
            <!--row bitiş-->
        </div>
        <!--container bitiş-->
    </div>
   <!--  <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs pull-right">
                    <li role="presentation" class="active">
                        <a href="http://fotolar.zz.mu"><i class="glyphicon glyphicon-home"></i> Ana Sayfa</a>
                    </li>
                    <li role="presentation">
                        <a href="http://fotolar.zz.mu/galeri"><i class="glyphicon glyphicon-picture"></i> Resim Galerisi</a>
                    </li>
                    <li role="presentation">
                        <a href="http://fotolar.zz.mu/hakkinda"><i class="glyphicon glyphicon-info-sign"></i> Hakkında</a>
                    </li>
                    <li role="presentation">
                        <a href="http://fotolar.zz.mu/ara"><i class="glyphicon glyphicon-search"></i> Ara</a>
                    </li>
                </ul>
            </div>
        </div> -->

        <form action="{{ URL::to('imageSave') }}" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
</form>



        <div class="row">

            <!-- <div class="col-lg-6 col-md-offset-3" style="text-align:center;"> -->
                <!--status message will appear here-->
              <!--   <div class="status"></div> -->
                <!--status bitiş-->
                <!--image upload form-->
               <!--  <form class="pure-form" action="{{URL::to('upload')}}" enctype="multipart/form-data" method="post">
                    <div class="upload">
                        <a onclick="select_file()" class="pure-button">Bir resim seçin</a>
                        <input id="image" type="file" name="file" required>
                    </div> -->
                    <!--upload bitiş-->
                    <!-- <div class="etiket">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Etiketler</label>
                            <input type="text" class="form-control" name="tags" id="tags" placeholder="Resim, upload, bilişim" required>
                        </div>
                    </div>
                </form>  -->
            <!-- </div> -->

            <div class="row">
                <div class="col-lg-6 col-md-offset-3" style="text-align:center;">
                    <!--image preview-->
                    <img src="" style="display:none">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-offset-3" style="text-align:center;">
                    <div class="yukle">
                        <input class="pure-button pure-button-primary" type="submit" value="Yükle!">
                    </div>
                    </form>
                    <!--progress bar-->
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar">
                            <div class="percent">0%</div>
                        </div>
                    </div>
                    <!--progress bitiş-->
                    <!-- Resim Yüklendikten sonra açıl ve bilgileri göster...-->
                    <div class="goster" style="display:none;">
                        <h1>Bilgiler buraya gelsin bakalım...</h1>
                        <a id="sonuc">Resmi Göster</a>
                    </div>
                </div>
                <!--col-lg-6 bitiş-->
            </div>
            <!--row bitiş-->
        </div>
        <script src="http://fotolar.zz.mu/public/tema/js/jquery-1.10.2.js"></script>
        <script src="http://fotolar.zz.mu/public/tema/js/bootstrap.js"></script>
        <script src="http://fotolar.zz.mu/public/tema/js/upload/jquery.form.min.js"></script>
        <script src="http://fotolar.zz.mu/public/tema/js/upload/script.js"></script>
</body>

</html>

