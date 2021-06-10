<template>
  <div>
    <div id="about" class="container-fluid" style="background-color: #fff0e2">
      <div class="row">
        <div class="col-sm-8">
          <h6 id="head" style="color: #ff4343">About</h6>
          <br />
          
          <h4 id="head1">
            เว็บไซต์ของและแอปพลิเคชั่นของเรา สามารถเพิ่มความสะดวกสบายให้กับโรงพยาบาล
            โดยโรงพยาบาลสามารถหาเลือดที่ต้องการจากผู้ที่ประสงค์จะบริจาคโลหิตที่อยู่บริเวณใกล้เคียงโรงพยาบาลได้
            โดยไม่ผ่านสื่อกลาง
            เราจะทำการส่งข้อความไปยังผู้ที่ประสงค์จะบริจาคโลหิตลดปัญหาการที่เลือดไม่
            เพียงพอ หรือ ใช้เวลาในการนำเลือดกระจายไปโรงพยาบาลต่างๆ
          </h4>
          <br />
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #ff4343">
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
          <h6 class="text-center" id="head" style="color: #fff0e2">
            การให้ที่สะดวกสบายและง่ายทั้ง 2 ฝ่าย
          </h6>
          <img
            id="imabout"
            src="images/5483126.png"
            class="rounded mx-auto d-block"
            alt="..."
          />
        </div>
      </div>
    </div>
    <div class="text-center" id="im">
      <img src="images/blood.jpg" id="imright" class="rounded" />
      <img
        src="images/blood.jpg"
        id="imright"
        class="rounded"
        alt="..."
      />
      <img
        src="images/blood.jpg"
        id="imright"
        class="rounded"
        alt="..."
      />
    </div>
    <div
      id="portfolio"
      class="container-fluid text-center"
      style="background-color: #00b4a9"
    >
      <h2 style="color: #fff0e2">#ให้เลือดให้ชีวิต</h2>
    </div>
  </div>
</template>
 <style>
.container-fluid {
  padding: 40px 40px;
}
#head {
  font-size: 50px;
}

.slideanim {
  visibility: hidden;
}
.slide {
  animation-name: slide;
  -webkit-animation-name: slide;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  visibility: visible;
}
@keyframes slide {
  0% {
    opacity: 0;
    transform: translateY(70%);
  }
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
@-webkit-keyframes slide {
  0% {
    opacity: 0;
    -webkit-transform: translateY(70%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0%);
  }
}
#imabout {
  width: 500px;
}
#imslide {
  width: 450px;
}

#imright {
  width: 30%;
  margin-top: 3%;
  margin-bottom: 3%;
}

</style>