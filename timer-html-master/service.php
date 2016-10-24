<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
                text-align: left;
            }
            table#dataTable tr:hover td {
                background-color: #02bdd5;
            }
            table#dataTable {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Jobs Available Today: </h2>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page">
            <div class="container">
                <div class="row">
                        <div class="block">
                            <h2 id = "tableTitle" class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"></h2>
                               <script>$("#tableTitle").append(sessionStorage.getItem("UserInput") + " Positions:")</script>
                                <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                                <div id="table-responsive">
                                  <table class="table" id="dataTable">
                                    <thead>
                                      <tr class = "subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                                        <th>#</th>
                                        <th>Job ID</th>
                                        <th>Job Title</th>
                                        <th>Salary</th>
                                        <th>Location</th>
                                      </tr>
                                    </thead>
                                        <tbody id = "tableBody">
                                        </tbody>
                                 </table>
                            </div>
                        </div>
                </div>
            </div>
        </section>

       
        <!-- 
        ================================================== 
            Footer Section Start
        ================================================== -->
        <footer id="footer">
            <div class="container">
                <div class="col-md-8">
                    <p class="copyright">Copyright: <span>2015</span> . Design and Developed by <a href="http://www.Themefisher.com">Themefisher</a></p>
                </div>
                <div class="col-md-4">
                    <!-- Social Media -->
                    <ul class="social">
                        <li>
                            <a href="#" class="Facebook">
                                <i class="ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="Twitter">
                                <i class="ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="Linkedin">
                                <i class="ion-social-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer> <!-- /#footer -->
    </body>
    <script>
    var urlbase = "https://data.cityofnewyork.us/resource/swhp-yxa4.json?"
    var query;
    
    var query = urlbase + "agency=" + sessionStorage.getItem("UserInput");
    console.log(query);
        $.ajax({
            url: query,
            method: 'GET',
        }).done(function(result){
            $.each(result, function(i,v){
                var html = "";
                var jobID = v.job_id;
                var title= v.business_title;
                var loc = v.work_location;
                var salStart = v.salary_range_from;
                var salEnds = v.salary_range_to;
                var salTime = v.salary_frequency;
                html += '<tr'+ ' class=' + '"clickableRow"'+ 'id = ' + jobID + '>' + 
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + jobID + '</td>'+
                        '<td>' + title + '</td>' +
                        '<td>' + salStart + '-' + salEnds + ' ' + salTime +'</td>' +
                        '<td>' + loc    + '</td>' +
                        '</tr>';
                        
                $("#dataTable").append(html);
            })
        }).fail(function(err) {
          throw err;
        });
    tableBody.addEventListener('click',function(e){
     var target = e.target;
        if (target !== null && target.classList.contains('clickable-row')) 
        {
            var job_id = target.getAttribute('jobID');
            sessionStorage.setItem('jobID', job_id);
            console.log(job_id);
            //window.location.assign("showJob.html");
        }
    });
    

    </script>
</html>