<?php

$name = "Иван";
$city = "Калининград";
$profession = "Инженер";
$email = "ivan@maill.ru";
$phone = 89091234567;
$array = [
     'array_name' => ['Готовка', 'Электроника', 'Media', 'Программирование'],
   'level' => [90, 70, 50, 60]
 ];
 
$age_year = 2022-1987; //возраст в годах
$age_day = (2022-1987)*365; //возраст в днях

$work = [
      'work' => ['Хлебозавод ЗАО «Типек»', 'Кирпичный завод ООО «Пятый элемент»', 'Россети Янтарь'],
      'year' => ['Июль 2007г. – Август 2014г', 'Август 2014г. – Октябрь 2014г', 'Октябрь 2014г. – По настоящее время']
 ];
 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>
                <?php
         echo $name;
         ?>
              </h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $profession;?>
            </p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php
         echo $city;
         ?>
            </p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php
         echo $email;
         ?>
            </p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php
         echo $phone;
         ?>
            </p>
            <hr>
            <p class="w3-large w3-text-theme"><b><i
                  class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Возраст</b></p>
            <p>В днях</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="text-align: center;">
                <?php
              echo $age_day;
            ?>
              </div>
            </div>
            <p>В годах</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="text-align: center;">
                <?php
              echo $age_year;
            ?>
              </div>
            </div>

            <br>
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <p>
              <?php
   echo $array['array_name'][0];
   ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php
   echo $array['level'][0];
   ?>%">
                <?php
   echo $array['level'][0];
   ?>%
              </div>
            </div>
            <p>
              <?php
   echo $array['array_name'][1];
   ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php
   echo $array['level'][1];
   ?>%">
                <div class="w3-center w3-text-white">
                  <?php
   echo $array['level'][1];
   ?>%
                </div>
              </div>
            </div>
            <p>
              <?php
   echo $array['array_name'][2];
   ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php
   echo $array['level'][2];
   ?>%">
                <?php
   echo $array['level'][2];
   ?>%
              </div>
            </div>
            <p>
              <?php
   echo $array['array_name'][3];
   ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php
   echo $array['level'][3];
   ?>%">
                <?php
   echo $array['level'][3];
   ?>%
              </div>
            </div>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>


          </div>
        </div><br>



        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>
                <?php
              echo $work['work'][2];
              ?>
              </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              <?php
              echo $work['year'][2];
              ?>
            </h6>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>
                <?php
              echo $work['work'][1];
              ?>
              </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              <?php
              echo $work['year'][1];
              ?>
            </h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>
                <?php
              echo $work['work'][0];
              ?>
              </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              <?php
              echo $work['year'][0];
              ?>
            </h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p><br>
          </div>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>

</body>

</html>