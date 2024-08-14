 <style>
      .jumbotron {
        text-align: center;
        padding: 20px;
        margin: 10px 0px;
      }

      .gallery {
        padding: 40px;
      }

      .gallery img {
        width: 100%;
        border-radius: 0;
        position: relative;
      }
  .contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 20px rgba(214, 215, 216, 0.5);
  padding: 20px 0 30px 0;
}

.contact .info-box i {
  font-size: 35px;
  color: darkblue;
  border-radius: 10%;
  padding: 15px;
  border: 2px solid darkblue;
}

.contact .info-box h3 {
  font-size: 20px;
  color: black;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0; 
  font-weight: 500;
  font-size: 16px; 
  margin-bottom: 0;
  color: darkblue;
}

.contact .php-email-form {
  box-shadow: 0 0 20px rgba(214, 215, 216, 0.5);
  padding: 30px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #3fbbc0;
}

.contact .php-email-form input {
  padding: 10px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type=submit] {
  background: #3fbbc0;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #65c9cd;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
    </style>
     <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="YJsKGCzR"></script>
 <div id="slideWrapper" class="h-75">
        <div id="slides" class="cycle-slideshow" data-cycle-slides="div" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-caption="#slideTextWrapper" data-cycle-caption-template="<h1>{{title}}</h1><p>{{desc}}</p><h5>" data-target="#data-target" data-cycle-prev="#slideLeft" data-cycle-next="#slideRight">
            <span class="slideNav slideNavLeft" id="slideLeft"> <i class="fa fa-chevron-left" ></i></span>
            <span class="slideNav slideNavRight" id="slideRight"> <i class="fa fa-chevron-right"> </i></span> 
            <div style="background-image: url('images/about_3.jpg');" data-title="Karibu Uzima" data-cycle-desc="Rapid and accurate tests." data-target="Contents/Mediinfo.php" data-cycle-btn="Learn More"></div>
            <div style="background-image: url('images/dental_2.jpg');" data-title="Comfortable Environment" data-cycle-desc="Provision of patient-centred and affordable health care." data-cycle-btn="Learn More"></div>
            <div style="background-image: url('images/Lab_2.jpg');" data-title="Affordable Healthcare" data-cycle-desc="Rapid and accurate tests." data-cycle-btn="Learn More"></div>
            <div style="background-image: url('images/dental_3.jpg');" data-title="Experienced Practitioners" data-cycle-desc="Excellent dental clinic going the extra mile to make you smile."  data-cycle-btn="Learn More"></div>
            <div  style="background-image: url('images/maternity_7.jpg');" data-title="Compassionate Care" data-cycle-desc="Fully equiped with advanced life support."  data-cycle-btn="Learn More"></div>
            <div  style="background-image: url('images/maternity_9.jpg');" data-title="Friendly Staff"  data-cycle-desc="With supporting text below as a natural lead-in to additional content."  data-cycle-btn="Learn More"><a href="#"></a></div>
            <!-- Affordable Healthcare -->
      </div>
        <div id="slideOverlay" class="container-fluid">
            <div class="contentWrapper">
                <div class="row" style="position: relative">
                    <div class="col-xs-10 col-sm-6 col-md-6 center" id="slideTextWrapper">

                    </div>
                </div>

            </div>

        </div>

    </div>  <!-- end slideWrapper --> 
<?php include('Contents/Mediinfo.php'); ?>   
<?php include('Contents/serviceview.php'); ?>  
   <section id="generalservices" class="wrapper" style="background:;">

    <div class="container-fostrap"> 
              
        <div class="content" >
<div class="container" >
                </p> <h1 class="darkBlue pt-4 pb-4 ">
              General Services</h1> 
                <div class="row"> 
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/consulation1.jpg" />
                          </a>
                            <div class="card-content">
                                <h5 class=""><strong class="darkBlue">Consultation (General Clinics) – 24hrs
                                </strong></h5>
                                <p class="">
                                  concise, accurate and effective
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Consultation" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/lab_3.jpg" />
                          </a>
                            <div class="card-content">
                                <h5 class=""><strong class="darkBlue"> Laboratory
                                </strong></h5>
                                <p class="">
                                  rapid and accurate tests
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Laboratory" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href=" ">
                            <img src=" images/pharmacy_3.jpg"/>
                             </a>
                            <div class="card-content">
                               <h5 class=""><strong  class="darkBlue">Pharmacy
                                 </strong></h5>
                                <p class="">
                                    proper prescriptions not medicine abuse
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Pharmacy" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/consulation1.jpg" />
                          </a>
                            <div class="card-content">
                                <h5 class=""><strong class="darkBlue">Medical Clinic (Hypertension, Diabetes &Asthma)
                                  </strong>
                                </h5>
                                <p class="">
                                  concise, accurate and effective
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Laboratory" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                      
                     <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/maternity_2.jpg" />
                          </a>
                            <div class="card-content">
                                 <h5 class=""><strong class="darkBlue"> Family Care Services(Antenal ,Postnatal & Well Baby Clinic)
                                 </strong></h5>
                                <p class="">
                                  comfort, safety & care for both mother and child
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Maternity" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>   
                     <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/ultrasound.jpg" />
                          </a>
                            <div class="card-content">
                                 <h5 class=""><strong class="darkBlue" >Diagnostic & Imaging Services                                 
                                 </strong></h5>
                                <p class="">(Ultrasound ,CT Scan ,X-ray , Echo ,ECG & OGD / Colonoscopy)
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Ultrasound" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/ambulance_3.jpg" />
                          </a>
                            <div class="card-content">
                                <h5 class=""><strong class="darkBlue">Dental Clinic
                              </strong></h5>
                                <p class="">
                                  fully equiped with advanced life support
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Ambulance" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>  
                     <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/ambulance_3.jpg" />
                          </a>
                            <div class="card-content">
                                <h5 class=""><strong class="darkBlue">Nutrition Clinic
                                </strong></h5>
                                <p class="">
                                  fully equiped with advanced life support
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Ambulance" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card center" href="">
                            <img src="images/ambulance_3.jpg" />
                          </a>
                            <div class="card-content">
                            <h5 class=""><strong  class="darkBlue">Physiotherapy Services
                                </strong></h5>
                                <p class="">
                                  fully equiped with advanced life support
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="./index.php?q=Opservices#Ambulance" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
     <section id="" class="" style="margin:2%">
      
    </section><!-- End About Section -->     
      <section id="#"> <?php include ('Contents/Mygallery.php');?>  </section> 
   <section id="specializedservices"> <?php include ('Contents/specializedservices.php');?>  </section> 
  
    

 
    <section id="testimonials"> 
    <div class="container card">
      <h1 class="darkBlue pt-4 pb-4 center">New and Updates</h1> 
     <div class="row" style="text-align:center !important;">

  <div class="col-lg-6">
   <a class="twitter-timeline" href="https://twitter.com/uzimahosp?ref_src=twsrc%5Etfw">Tweets by uzimahosp</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <div class="col-lg-6">
    <div class="fb-page" data-href="https://www.facebook.com/Stscholasticauzimahosp" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Stscholasticauzimahosp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Stscholasticauzimahosp">Facebook</a></blockquote>
    </div>
  </div> 
</div>
</div>   </section> 
<div class="container  pt-4 pb-4 " >
      
     <div class="row ">
  <div class="col-lg-12 "><h1 class="darkBlue pt-4 pb-4 ">Google Reviews</h1> 
    <div class="pt-4 pl-2 pr-2 pb-2 ">
     <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-07908add-7127-43b8-b7bc-3f02ced61880"></div>
  </div>
</div>
</div>
 </div> 
 <section id="Insurance"> <?php include ('Contents/Insurances.php');?>  </section>
  <section id="Gallery">
   <div class="container-fluid"> 
    <h2 class="darkBlue pt-4 pb-0 center">Gallery</h2> 
    <div class="row gallery" > 
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/pharmacy.jpg">
          <img class="img-fluid"src="images/pharmacy.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/maternity_1.jpg">
          <img class="img-fluid"src="images/maternity_1.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/maternity_4.jpg">
          <img class="img-fluid"src="images/maternity_4.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/ambulance_1.jpg">
          <img class="img-fluid"src="images/ambulance_1.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/maternity_7.jpg">
          <img class="img-fluid"src="images/maternity_9.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/Lab_2.jpg">
          <img class="img-fluid"src="images/Lab_2.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/dental_3.jpg">
          <img class="img-fluid"src="images/dental_3.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/consulation2.jpg">
          <img class="img-fluid"src="images/consulation2.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/maternity_11.jpg">
          <img class="img-fluid"src="images/maternity_11.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/about_3.jpg">
          <img class="img-fluid"src="images/about_3.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/dental_1.jpg">
          <img class="img-fluid"src="images/dental_1.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="images/clinical_3.jpg">
          <img class="img-fluid"src="images/clinical_3.jpg">
        </a>
      </div>
    </div>
  </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run(".gallery", {
      animation: "slideIn"
    });
  </script>
