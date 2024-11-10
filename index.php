<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tio Imam - ILUSTRATOR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">  
    <div class="container">
      <a class="navbar-brand" href="#">Tio Imam.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="social-icon" href="https://wa.me/qr/IZVBLI5XE2Z6I1"><i class="ri-whatsapp-line"></i></a>
            </li>
            <li class="nav-item">
              <a class="social-icon" href="https://www.instagram.com/_wnnxcyyl/profilecard/?igsh=MW41dGlkeTZleTAxag=="><i class="ri-instagram-line"></i></a>
            </li>
            <li class="nav-item">
              <a class="social-icon" href="https://youtube.com/@tioimamsandiawan7024?si=FW5BG3NCf7bu34oK"><i class="ri-youtube-line"></i></a>
            </li>
          </ul>
      </div>
    </div>
  </nav>

<!-- Home -->
<?php

include 'koneksi.php';
$query = "SELECT * FROM users";
$query_sql = mysqli_query($koneksi,$query);
$tampil = mysqli_fetch_assoc($query_sql);

?>
 <section id="home" class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-2 fw-bold" data-aos="fade-up" data-aos-duration="1000">Hi There!! i' am <span class="text-brand"><?php echo $tampil['name']?></span></h1>
                <p class="mt-3 mb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo $tampil['bio']?></p>
                <a href="#contact" class="btn btn-brand">Contact me</a>
            </div>
        </div>
    </div>
 </section>

 <!-- skils -->
   <section id="skills" class="section-padding section-connector">
    <div class="container"> 
        <div class="row"> 
            <div class="col-12"> 
                 <div class="setion-title text-center">
                    <h1  data-aos="zoom-in-down" data-aos="fade-up" data-aos-duration="1000">Skills</h1>
                    <p> These are some of the abilities I have</p>
                        <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row gy-4 text-center">
        <?php

        include 'koneksi.php';
        $skills_query = "SELECT * FROM skills";
        $query_sql = mysqli_query($koneksi,$skills_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);

        ?>

        <?php
        foreach ($ambildata as $tampil) {
        ?>
        <div class="col-lg-3"> 
            <div class="skills py-5 px-4 border" data-aos="fade-up"  
            data-aos-duration="1000"> 
                <div class="skills-icon"> 
                    <i class="ri-megaphone-line"></i>
                </div> 
                <h3 class="mt-5 fw-bold"><?php echo $tampil['name_skills']?></h3>
                <p><?php echo $tampil['descrip']?></p>
                    <a href="./assets/images/<?php echo $tampil['image']?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <?php
        }
        ?>
                   
                </div>
            </div>
        </div>
    </div>
  </section>

 <!-- Project  -->
  <section id="project" class="section-padding section-connector">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="setion-title text-center">
                    <h1 data-aos="zoom-in-down" data-aos-duration="1000">Project</h1>
                    <p>These are some of the projects I have made</p>
                        <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row g-2">
        <?php

        include 'koneksi.php';
        $project_query = "SELECT * FROM project";
        $query_sql = mysqli_query($koneksi,$project_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);

        ?>

        <?php
        foreach ($ambildata as $tampil) {
        ?>
            <div class="col-lg-4">
                <div class="project">
                    <img src="./assets/images/<?php echo $tampil['image']?>" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" 
                    data-aos-duration="1000"><!--membut animasi gambar -->
                    <div class="content">
                        <a href="./assets/images/<?php echo $tampil['image']?>" class="btn btn-outline-light">View Project</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        </div>
    </div>
    </div>
  </section>
<!-- resume -->
<section id="resume" class="section-padding section-connector">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="setion-title text-center">
                    <h1 data-aos="zoom-in-down"  data-aos-duration="1000">Education & Experience</h1>
                    <p> Illustration design
                        teachers who have
                        taught me until I am
                        proficient</p>
                        <div class="line"></div>
                </div>
            </div>
        </div>
        <!-- EDUCATION -->
        <div class="row gy-5">
            <div class="col-md-6">
                <div class="row">
        <?php

        include 'koneksi.php';
        $education_query = "SELECT * FROM education";
        $query_sql = mysqli_query($koneksi,$education_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
        
        ?>

        <?php
        foreach ($ambildata as $tampil) {
        ?>
        <div class="col-12" data-aos="fade-right" data-aos-duration="1000">
                        <div class="eduexp p-5 pt-0">
                            <h5 class="mt-4 fw-bold"><?php echo $tampil['title_education'] ?></h5>
                            <small class="text-brand"><?php echo $tampil['start_date'] ?> - <?php echo $tampil['end_date']?></small>
                            <p class="mb-0"><?php echo $tampil['education_description']?></p>
                        </div>
                    </div>      
        <?php
        }
        ?>
       
                </div>
            </div>
            <!-- EXPERIENCE -->
            <div class="col-md-6">
                <div class="row">
                <?php

        include 'koneksi.php';
        $experience_query = "SELECT * FROM experience";
        $query_sql = mysqli_query($koneksi,$experience_query);
        $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);

        ?>

        <?php
        foreach ($ambildata as $tampil) {
        ?>
                    <div class="col-12" data-aos="fade-left" data-aos-duration="1000">
                        <div class="eduexp1 p-5 pt-0">
                            <h5 class="mt-4 fw-bold"><?php echo $tampil['job_title'] ?></h5>
                            <small class="text-brand"><?php echo $tampil['start_date'] ?> - <?php echo $tampil['end_date']?></small>
                            <p class="mb-0"><?php echo $tampil['job_description']?></p>
                        </div>
                    </div>
         <?php
        }
        ?>
                </div>
            </div>
        </div>
    </div>
  </section>
<!-- Contact -->
 <section id="contact" class="section-connector">
    <div class="container section-padding">

        <div class="row">
            <div class="col-12">
                <div class="setion-title text-center">
                    <h1 data-aos="zoom-in-down"  data-aos-duration="1000">Contact</h1>
                    <p> contact me by filling in the form below</p>
                        <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="prosesinput.php" method="post" class="row g-3"> <!--row g-3 digunakan untuk memberi jarak-->
                    <div class="form-grup col-md-6">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-grup col-md-6">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-grup col-md-12">
                        <textarea name="message" class="form-control" placeholder="Enter Your Message" rows="4"></textarea>
                    </div>
                    <div class="form-grup col-md-12">
                        <button name="submit" type="submit" class="btn btn-brand ">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <footer>
        <div class="footer-top">
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-4">
                        <h4><a href="#" class="text-white fw-bold" >Tio Imam</a></h4>
                        <p>As a ilustrator, I work with various types of clients.</p>
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item">
                              <a class="social-icon1" href="https://wa.me/qr/IZVBLI5XE2Z6I1"><i class="ri-whatsapp-line"></i></a>
                            </li>
                            <li class="nav-item">
                              <a class="social-icon1" href="https://www.instagram.com/_wnnxcyyl/profilecard/?igsh=MW41dGlkeTZleTAxag=="><i class="ri-instagram-line"></i></a>
                            </li>
                            <li class="nav-item">
                              <a class="social-icon1" href="https://youtube.com/@tioimamsandiawan7024?si=FW5BG3NCf7bu34oK"><i class="ri-youtube-line"></i></a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-3 ms-auto">
                            <h4 class="fw-bold">Quick Links</h4>
                            <ul>
                                <li><a href="#">Skills</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">Contact</h4>
                            <ul>
                                <li>Email:<?php echo $tampil['email']?></li>
                                <li>phone: <?php echo $tampil['no_telp']?></li>
                                <li>Address:<?php echo $tampil['address']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyright text goes here</p> 
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Design By Tio Imam</p> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
 </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./assets/js/app.js"></script>

</body>
</html>