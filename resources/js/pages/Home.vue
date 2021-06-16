<template>
  <div class="Banner-images">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="images/Untitled-1.jpg" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-2.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-4.jpg" alt="Third slide" />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselId"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselId"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="text-center" id="bloodd">
        <h4 id="h5" style="color: #ff4343">"รู้ไว้ไม่เสียหาย"</h4>
        <h4 id="h4">ข้อมูลที่คุณควรรู้ก่อน-หลังบริจาคโลหิต</h4>
        <router-link
          class="btn btn-lg btn3d"
          id="donate"
          style="color: #fff0e2"
          to="/prepareblood"
          ><span class="glyphicon glyphicon-ok"></span> คลิ๊กเลย</router-link
        >
      </div>
      <div class="text-center">
        <img id="imhome" src="images/6288030.png" alt="" />
      </div>

      <div class="p-3 mb-2" style="color: #fff0e2" id="H1">
        เกร็ดความรู้เกี่ยวกับ "โลหิต"
      </div>

      <div class="row" id="row1">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4 class="text-center">ความรู้พื้นฐานเกี่ยวกับ "โลหิต"</h4>
            <img
              id="imthum"
              src="images/040.png"
              alt=""
              class="rounded mx-auto d-block"
            />
            <a
              href="/#/typeblood"
              class="btn btn-danger text-center"
              role="button"
              >อ่านเพิ่มเติม</a
            >
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4 class="text-center">ประเภทของโลหิต</h4>
            <img
              id="imthum"
              src="images/025.png"
              alt=""
              class="rounded mx-auto d-block"
            />
            <a
              class="btn btn-danger text-center"
              role="button"
              href="/#/typeblood1"
              >อ่านเพิ่มเติม</a
            >
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4 class="text-center">หลักการให้และรับโลหิต</h4>
            <img
              id="imthum"
              src="images/012b.png"
              alt=""
              class="rounded mx-auto d-block"
            />
            <a href="/#/typeblood2" class="btn btn-danger" role="button"
              >อ่านเพิ่มเติม</a
            >
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="row" id="rowdee">
        <div class="col" id="coldee">
          <p id="pdee" class="text-center" style="color: #fff0e2">
            ข้อดีของการบริจาคเลือด
          </p>
          <p id="pdeehead">ข้อที่ 1 ทำให้สุขภาพแข็งแรง</p>
          <p>
            หลายๆคนคงสงสัยว่าการบริจาคเลือด
            เป็นการเอาเลือดออกจากตัวแล้วร่างกายจะแข็งแรงขึ้นได้อย่างไร จริงๆแล้ว
            เลือดที่บริจาคออกไปเป็นเลือดส่วนเกินของร่างกายค่ะ หรือประมาณ 7%
            ของปริมาณเลือดทั้งหมดในร่างกาย
            โดยก่อนจะบริจาคจะมีการพิจารณาจากน้ำหนักตัวของผู้ให้บริจาคก่อน
            ดังนั้นเลือดที่เสียไปจะไม่เป็นอันตรายต่อร่างกาย
            ตรงกันข้ามกลับกระตุ้นให้ไขกระดูกผลิตเม็ดโลหิตใหม่ขึ้นมาแทน
            ระบบไหลเวียนของเลือดจะดีขึ้น ทำให้ร่างกายแข็งแรงตามมา
          </p>
          <p id="pdeehead">ข้อดีข้อที่ 2 หุ่นดี ผิวเปล่งปลั่ง</p>
          <p>
            มีความเชื่อผิดๆ กันอยู่อย่างนึงว่าการบริจาคเลือดจะทำให้อ้วนขึ้น
            ทำให้สาวๆ ไม่ค่อยกล้าบริจาค แต่จากข้อมูลของ
            สสวท.ได้ออกมาเปิดเผยว่าเป็นความเชื่อที่ผิด
            การบริจาคเลือดไม่ได้ทำให้อ้วน
            แต่กลับทำให้ผู้บริจาคมีรูปร่างที่ดีขึ้นด้วยซ้ำไป
            นอกจากนี้เลือดใหม่ที่ถูกผลิตขึ้นรวมทั้งการไหลเวียนของเลือดที่ดีขึ้น
            จะช่วยให้ผิวพรรณเปล่งปลั่ง มีน้ำมีนวล และยังช่วยให้หน้าใสขึ้นด้วย
            ไม่ต้องกินวิตามินเสริมก็สามารถมีผิวพรรณสดใสได้เหมือนกันนะ
          </p>
          <p id="pdeehead">ข้อดีข้อที่ 3 ลดความเสี่ยงที่จะเป็นมะเร็งได้ด้วย</p>
          <p>
            สถาบันคาโรลินสกา สตอคโฮล์ม สวีเดน
            ได้ศึกษาข้อมูลจากผู้บริจาคเลือดสวีเดนและเดนมาร์ค พบว่า
            การบริจาคเลือดช่วยลดความเสี่ยงจากมะเร็งได้หลายชนิดเลย เช่น มะเร็งตับ
            มะเร็งปอด มะเร็งลำไส้ใหญ่ มะเร็งกระเพาะอาหาร ฯลฯ
            นอกจากนี้ยังมีข้อมูลเพิ่มเติมว่าในรายที่มีธาตุเหล็กในร่างกายมากเกินไป
            มีผลต่อการเกิดโรคเส้นเลือดหัวใจอุดตันหรือมะเร็งบางชนิด
            การบริจาคเลือดจะช่วยลดปริมาณธาตุเหล็กส่วนเกินเหล่านั้นออกไปได้
            และยิ่งเราบริจาคเลือดบ่อยเท่าไหร่
            ความเสี่ยงโรคมะเร็งจะลดลงมากเท่านั้น โดยเฉพาะในเพศชาย
            แต่ความถี่ของการบริจาคเลือดระบุไว้ว่า
          </p>
        </div>
        <div class="col">
          <img id="imdee" src="images/5483126.png" class="rounded mx-auto d-block" alt="" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
<style >
#coldee{
  background-color:  #fff0e2;
  border-radius: 40px;
}
#imdee{
  width: 600px;
}
#pdeehead {
  font-size: 15px;
  color: #ff4343;
}
#rowdee {
  margin-top: 4%;
}
#pdee {
  font-size: 25px;
  background-color: #ff4343;
  border-radius: 30px;
}
.carousel-inner img {
  width: 100%; /* Set width to 100% */
  margin: auto;
  min-height: 200px;
}
.thumbnail {
  position: relative;
  padding: 0px;
  margin-bottom: 20px;
  margin-top: 30px;
}
.thumbnail img {
  width: 100%;
}
.thumbnail a.btn {
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}
.card-header .card {
  background-color: #fff0e2;
}
#H1 {
  margin-top: 3%;
  text-align: center;
  font-size: 20px;
  border-radius: 40px;
  background-color: #ff4343;
}
.image-hearder {
  padding: 20px;
  width: 500px;
}
#imhome {
  width: 500px;
}
#donate {
  background-color: #ff4343;
  border-radius: 40px;
  font-size: 20px;
  box-shadow: 0 0 0 1px #fff inset, 0 8px 0 0 #e2d4c8, 0 8px 8px 1px;
  background-color: #ff4343;
}
#bloodd {
  margin-top: 3%;
}
#h4 {
  margin-bottom: 2%;
  font-size: 40px;
}
#h5 {
  margin-top: 2%;
  font-size: 50px;
}
#imthum {
  width: 200px;
}
#row1 {
  background-color: #fff0e2;
  border-radius: 40px;
}
</style>