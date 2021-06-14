<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>siroCov</title>
    <link rel="shortcut icon" href="img/favicon.ico">
	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 navbar">
				<a href="index.html" class="logo navbar-brand text-white">siroCov</a>
				<select onchange="doGTranslate(this);" class="lg">        
                <option value="id|id">ID</option>       
                <option value="id|en" ></i>EN</option> 
                    </select>
 
     <div id="google_translate_element2"></div>
    


				<div class="hamburger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				  </div>
				<ul class="nav">
					<li class="nav-item"><a href="html/info.html" class="nav-link">Informasi Covid</a></li>
					<li class="nav-item"><a href="html/tes.html" class="nav-link">Tes Covid</a></li>
					<li class="nav-item"><a href="html/donasi.html" class="nav-link">Donasi</a></li>
				</ul>
			</div>

			<!-- slider banner	 -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="false">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
						<h1>Informasi Mengenai Covid-19</h1>
						<strong>Web untuk memonitoring atau memantau perkembangan Virus COVID-19</strong>
						<p>
						   Dengan prinsip "Bersama Menjaga Kesehatan Demi Terciptanya Kawasan Bebas COVID-19" agar dalam perkembangannya, seluruh masyarakat seluruh Indonesia mendapatkan wawasan mengenai apa itu COVID-19 secara terarah dan terpadu sehingga dapat mempercepat penyelesaian masa pandemi COVID-19 yang terjadi saat ini.
						   <head></head>
						</p>
						<a class="btn btn-primary" role="button" href="html/info.html">Informasi Covid</a>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>Data Covid-19 di Indonesia</h1>
							<div id="container2" style="width: 960px; height:250px; margin: 0 auto;"> </div>
			      	<?php
                		$data1 = file_get_contents('https://api.kawalcorona.com/indonesia');
                		$indo = json_decode($data1, true);
        			?>

        <div class="content">
            <div class="page-inner">
				<div class="title">
					<h3 class="mt-2"><span class="blink_me">Live Update </span><span style="color: white; font-weight: bold;" id="date"></span></h3>
				</div>
                <!-- card -->
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats bg-round bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <h6 class="card-category text-light">Positif</h6>
                                            <h4 class="card-title text-light"><?= $indo[0]['positif']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 ">
                        <div class="card card-stats bg-info card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 ">
                                        <div class="icon-big text-center mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <h6 class="card-category text-light">Sembuh</h6>
                                            <h4 class="card-title text-light"><?= $indo[0]['sembuh']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats bg-danger card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <h6 class="card-category text-light">Meninggal</h6>
                                            <h4 class="card-title text-light"><?= $indo[0]['meninggal']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>Data Covid ditiap Provinsi</h1>
			      		<div class="text">
							<div class="container">
								<?php
									$data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
									$provinsi = json_decode($data, true);
								?>
								<table class="table table-bordered table-sm">
									<thead>
										<th>No</th>
										<th>Nama Provinsi</th>
										<th>Jumlah Positif</th>
										<th>Jumlah Sembuh</th>
										<th>Jumlah Meninggal</th>
									</thead>
									<tbody>
										<?php
											$a=1;
											foreach($provinsi as $prv) :
										?>
										<tr>
											<td><?= $a++; ?></td>
											<td><?= $prv['attributes']['Provinsi']; ?></td>
											<td><?= $prv['attributes']['Kasus_Posi']; ?></td>
											<td><?= $prv['attributes']['Kasus_Semb']; ?></td>
											<td><?= $prv['attributes']['Kasus_Meni']; ?></td>
										</tr>
										<?php
											endforeach;
										?>
									</tbody>
								</table>
							</div>
							  

							
						  </div>
			      	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>



<!-- javascript -->
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  <script type="text/javascript"> 
   function googleTranslateElementInit2() {
    new google.translate.TranslateElement(
    {
     pageLanguage: 'id',
     autoDisplay: false
    },

    'google_translate_element2');
   }

   function GTranslateFireEvent(element,event){
    try{
     if(document.createEventObject){
      var evt=document.createEventObject();
      element.fireEvent('on'+event,evt)
     }   
     else{
      var evt=document.createEvent('HTMLEvents');
      evt.initEvent(event,true,true);
      element.dispatchEvent(evt)
     }
    }
    catch(e){}
   }

   function doGTranslate(lang_pair){
    if(lang_pair.value)lang_pair=lang_pair.value;
    if(lang_pair=='')return;
     var lang=lang_pair.split('|')[1];
     var teCombo;
     var sel=document.getElementsByTagName('select');
    for(var i=0;i<sel.length;i++)
     if(sel[i].className=='goog-te-combo')teCombo=sel[i];
     if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0)
     {
      setTimeout(function(){doGTranslate(lang_pair)},500)
     }
     else{
      teCombo.value=lang;GTranslateFireEvent(teCombo,'change');
      GTranslateFireEvent(teCombo,'change')
     }
   }
  </script>


	<script src="js/app.js"></script>

	<script>
		$(document).ready(function(){
var d = new Date();
var month = new Array();
  month[0] = "Januari";
  month[1] = "Februari";
  month[2] = "Maret";
  month[3] = "April";
  month[4] = "Mei";
  month[5] = "Juni";
  month[6] = "Juli";
  month[7] = "Agustus";
  month[8] = "September";
  month[9] = "Oktober";
  month[10] = "November";
  month[11] = "Desember";
  
  $("#date").html(d.getDate() + " " + month[d.getMonth()] + " " + d.getFullYear());
});


    $(function(){
        var title= {
            text:'Statistik Kasus Covid-19 di Indonesia'
        };

        var subtitle = {
            text : 'Sumber Data : kawalcorona.com'
        };

        var xAxis = {
            categories: ['8 Juni','9 Juni','10 Juni','11 Juni','12 Juni','13 Juni','14 Juni']
        };

        var yAxis = {
            title: {
                text: 'Jumlah ( Jiwa )'
            },
            plotlines:[{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        };

        var tooltip = {
            valueSuffix: ' jiwa'
        };

        var legend = {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        };

        var series = [
                {
                name: 'Positif',
                data: [8,46,93,125,159,197,238]
            },

                {
                name: 'Sembuh',
                data: [3,29,66,92,129,163,198]
            },

                {
                name: 'Meninggal',
                data: [2,14,26,38,52,66,79]
            }
        ];

    var json = {};
    json.title = title;
    json.subtitle = subtitle;
    json.xAxis = xAxis;
    json.yAxis = yAxis;
    json.tooltip = tooltip;
    json.legend = legend;
    json.series = series;

    $('#container2').highcharts(json);

    });
    </script>

	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
