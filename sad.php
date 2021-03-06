<?php 
require_once 'checkrole.php';
?>
<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>RMUTT Counselling</title>
    <style>
        *{
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>

<?php  require_once 'banner.php'; ?>
<?php  require_once 'navbar.php'; ?>
  <div class="container">  
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <strong><p align="center" style="color:#FF6633; font-size:32px" > แบบทดสอบภาวะซึมเศร้า PHQ-9 </p></strong>

        <h4 align="center"> โปรดใส่คะแนนให้ตรงกับคำตอบของท่าน</h4>

        <h5 align="center"> (เกณฑ์ให้คะแนน: ไม่เลย = 0, มีบางวันหรือไม่บ่อย = 1, มีค่อนข้างบ่อย = 2, มีเกือบทุกวัน = 3)</h5><br>

        <strong><p align="left" style="color:#FF9900; font-size:18px"> ในช่วง <u>2 สัปดาห์ </u>ที่ผ่านมา ท่านมีอาการดังต่อไปนี้บ่อยแค่ไหน? </p></strong>

        <form id="formq" name="formq" method="post" action="calculate_question.php">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

            <tr bgcolor="#E0FFFF	" >
              <td height="30" style="font-size:17px" ><strong>1. เบื่อ ทำอะไร ๆ ก็ไม่เพลิดเพลิน</strong></td>
              
              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q1" id="myRange1">
              <p align="right"> คะแนน: <span id="demo1"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange1");
              var output1 = document.getElementById("demo1");
              output1.innerHTML = slider.value;

              slider.oninput = function() {
               output1.innerHTML = this.value;}
              </script> </td>

            </tr>

            <tr bgcolor="#F5FFFA">
              <td height="30" style="font-size:17px" ><strong>2. ไม่สบายใจ ซึมเศร้า หรือท้อแท้</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q2" id="myRange2">
              <p align="right"> คะแนน: <span id="demo2"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange2");
              var output2 = document.getElementById("demo2");
              output2.innerHTML = slider.value;

              slider.oninput = function() {
               output2.innerHTML = this.value;}
              </script> </td>

            

            </tr>

            <tr bgcolor="#E0FFFF">
              <td height="30" style="font-size:17px" ><strong>3. หลับยาก หรือหลับ ๆ ตื่น ๆ หรือหลับมากไป</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q3" id="myRange3">
              <p align="right"> คะแนน: <span id="demo3"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange3");
              var output3 = document.getElementById("demo3");
              output3.innerHTML = slider.value;

              slider.oninput = function() {
               output3.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#F5FFFA">
              <td height="30" style="font-size:17px" ><strong>4. เหนื่อยง่าย หรือไม่ค่อยมีแรง</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q4" id="myRange4">
              <p align="right"> คะแนน: <span id="demo4"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange4");
              var output4 = document.getElementById("demo4");
              output4.innerHTML = slider.value;

              slider.oninput = function() {
               output4.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#E0FFFF">
              <td height="30" style="font-size:17px" ><strong>5. เบื่ออาหาร หรือกินมากเกินไป</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q5" id="myRange5">
              <p align="right"> คะแนน: <span id="demo5"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange5");
              var output5 = document.getElementById("demo5");
              output5.innerHTML = slider.value;

              slider.oninput = function() {
               output5.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#F5FFFA">
              <td height="30" style="font-size:17px" ><strong>6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว หรือเป็นคนทำให้ตัวเอง หรือครอบครัวผิดหวัง</strong></td>
              
              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q6" id="myRange6">
              <p align="right"> คะแนน: <span id="demo6"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange6");
              var output6 = document.getElementById("demo6");
              output6.innerHTML = slider.value;

              slider.oninput = function() {
               output6.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#E0FFFF">
              <td height="30" style="font-size:17px" ><strong>7. สมาธิไม่ดีเวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q7" id="myRange7">
              <p align="right"> คะแนน: <span id="demo7"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange7");
              var output7 = document.getElementById("demo7");
              output7.innerHTML = slider.value;

              slider.oninput = function() {
               output7.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#F5FFFA">
              <td height="30" style="font-size:17px" ><strong>8. พูดหรือทำอะไรช้าจนคนอื่นมองเห็น หรือกระสับกระส่ายจนท่านอยู่ไม่นิ่งเหมือนเคย</strong></td>

              <td><input type="range" min="0" max="3" value="0" class="slider" name ="q8" id="myRange8">
              <p align="right"> คะแนน: <span id="demo8"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange8");
              var output8 = document.getElementById("demo8");
              output8.innerHTML = slider.value;

              slider.oninput = function() {
               output8.innerHTML = this.value;}
              </script> </td>
            </tr>

            <tr bgcolor="#E0FFFF">
             <td height="30" style="font-size:17px" ><strong>9. คิดทำร้ายตนเอง หรือคิดว่าถ้าตาย ๆ ไปเสียคงจะดี</strong></td>

             <td><input type="range" min="0" max="3" value="0" class="slider" name ="q9" id="myRange9">
              <p align="right"> คะแนน: <span id="demo9"></span></p> 
 
              <script>
              var slider = document.getElementById("myRange9");
              var output9 = document.getElementById("demo9");
              output9.innerHTML = slider.value;

              slider.oninput = function() {
               output9.innerHTML = this.value;}
              </script> </td>
            </tr>
    
          </table><br>

          <button type="submit" name="save"  class="btn btn-primary btn-block"> บันทึกคำตอบ</button>

          <br><b><h4> หมายเหตุ </h4></b>
          <p style="font-size:16px">&emsp;&emsp;&emsp;&emsp; แบบประเมินนี้พัฒนาจาก แบบสอบถามสุขภาพผู้ป่วย (Patient Health Questionnaire: PHQ-9) ศ. นพ.มาโนช หล่อตระกูล <br>และคณะ คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี 
                  การประเมินนี้เป็นการประเมินระดับภาวะซึมเศร้าในขั้นต้น ส่วนการวินิจฉัยนั้นจำเป็น<br>ต้องพบแพทย์เพื่อซักประวัติ ตรวจร่างกาย รวมถึงส่งตรวจเพิ่มเติมที่จำเป็น เพื่อยืนยันการวินิจฉัยที่แน่นอน 
                  รวมถึงเพื่อแยกโรคหรือภาวะอื่น ๆ เนื่องจากภาวะซึมเศร้าเป็นจากสาเหตุต่างๆ ได้มากมาย เช่น โรคทางจิตเวชอื่นที่มีอาการซึมเศร้าร่วมด้วย โรคทางร่างกายเช่นโรคไทรอยด์ โรคแพ้ภูมิตัวเอง หรือเป็นจากยาหรือสารต่างๆ
                  ผลการประเมินและคำแนะนำที่ได้รับจากโปรแกรมนี้จึงไม่สามารถใช้แทนการตัดสินใจของแพทย์ได้ การตรวจรักษาเพิ่มเติมหรือการให้ยารักษาขึ้นอยู่กับดุลยพินิจของแพทย์และการปรึกษากันระหว่างแพทย์และตัวท่าน </p>
          <br>
          <br>
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>