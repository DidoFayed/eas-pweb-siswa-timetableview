<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Timetable</title>

    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="sidenav">
        <div class="profile" align="center">
        <img src="img/profile.png" alt="sano">
        <p style="margin-top: 20px;">Katsuki Bakugo<br>
            <span class="small">Siswa</span></p>
        </div>
        <a href="jadwal.php" id="u">Timetable View</a>
        <a href="#" id="u">Result View</a>
        <a href="#" id="u">Assignment Submission</a>
        <a href="study_material.php" id="u">Study Material</a>
    </div>


    <!-- <div class="search-container" align="right" style="margin-top: 30px; margin-right:60px;">
        <form action="">
          <input type="text" placeholder="  Search" name="search" style="width: 10%; border-radius: 1rem;" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
          <button type="submit" style="border-radius: 1rem;">🔍</button>
        </form>
      </div> -->

    <div class="content">
        
        <header>
            <div class ="sub-title">
            <h3>Timetable View</h3>
            <h1><b>Timetable View</b></h1>
            </div>
            
            
            <!-- <div class = "bar" >            
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div> -->
            
            </br>
            <div class="drpdwn" align =" right">
            <div class="dropdown" align = "right">
                    <button class="dropbtn"><a style="text-decoration: none; color: white;" href="jadwal.php"> Senin </a>
                        <i class="fa fa-caret-down" ></i>
                    </button>
                    <button class="dropbtn" style= "background-color: #2222;"><a style="text-decoration: none; color: white;" href="jadwal-selasa.php"> Selasa </a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <button class="dropbtn"><a style="text-decoration: none; color: white;" href="#"> Rabu </a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <button class="dropbtn" style= "background-color: #2222;"><a style="text-decoration: none; color: white;" href="#"> Kamis </a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <button class="dropbtn"><a style="text-decoration: none; color: white;" href="#"> Jumat </a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <!-- <div class="dropdown-content" align="right">
                    <a href="#">Senin</a>
                    <a href="#">Selasa</a>
                    <a href="#">Rabu</a>
                    <a href="#">Kamis</a>
                    <a href="#">Jumat</a> -->
                </div>
            </div>
</br>
                <div class="search-container" align="center" style="margin-top: 30px; margin-right:60px;">
                <form action="">
                <input type="text" placeholder="  Cari Jadwal" name="search" style="width: 25%; height: 35px; border-radius: 1rem;" required value="<?php if(isset($_GET['Cari'])){echo $_GET['search']; } ?>">
                <button type="submit" style="border-radius: 1rem;">🔍</button>
                </form>
            </div>
        </header>
    </br>
</br>

        
<div class="row">
            
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>MT0104</p>
                        </div>
                        <h2 class="card-title-side">Matematika</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <img src="img/calendar-icon.png">
                            <h4>Senin</h4>
                            <img src="img/clock-icon.png">
                            <h4>07:00-08:15</h4>
                            <img src="img/class-icon.png">
                            <h4>XII-A5</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="details.php" class="btn-1">
                        <h4>Study Material</h4>
                        <img src="img/material-icon.png">
                    </a>
                </div>
            </div>
            
        </div>


        <div class="row">
            
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>BI0105</p>
                        </div>
                        <h2 class="card-title-side">Bhs Indonesia   </h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <img src="img/calendar-icon.png">
                            <h4>Senin</h4>
                            <img src="img/clock-icon.png">
                            <h4>08:20-09:35</h4>
                            <img src="img/class-icon.png">
                            <h4>XII-A3</h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="#" class="btn-1">
                        <h4>Study Material</h4>
                        <img src="img/material-icon.png">
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">
            
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>SB0201</p>
                        </div>
                        <h2 class="card-title-side">Seni Budaya</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <img src="img/calendar-icon.png">
                            <h4>Senin</h4>
                            <img src="img/clock-icon.png">
                            <h4>10:00-10:45</h4>
                            <img src="img/class-icon.png">
                            <h4>SRP-01</h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="#" class="btn-1">
                        <h4>Study Material</h4>
                        <img src="img/material-icon.png">
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">
            
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>BE0204</p>
                        </div>
                        <h2 class="card-title-side">Bhs Inggris</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <img src="img/calendar-icon.png">
                            <h4>Senin</h4>
                            <img src="img/clock-icon.png">
                            <h4>10:45-11:30</h4>
                            <img src="img/class-icon.png">
                            <h4>LBG-01</h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="#" class="btn-1">
                        <h4>Study Material</h4>
                        <img src="img/material-icon.png">
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">
            
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>EK0303</p>
                        </div>
                        <h2 class="card-title-side">Ekonomi</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <img src="img/calendar-icon.png">
                            <h4>Senin</h4>
                            <img src="img/clock-icon.png">
                            <h4>12:15-13:35</h4>
                            <img src="img/class-icon.png">
                            <h4>XII-S4</h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="#" class="btn-1">
                        <h4>Study Material</h4>
                        <img src="img/material-icon.png">
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>