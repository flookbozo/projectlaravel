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
          <div class="carousel-caption d-none d-md-block"></div>
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
        <h4 id="h5"  style="color: #ff4343">"รู้ไว้ไม่เสียหาย" </h4>
        <h4 id="h4">ข้อมูลที่คุณควรรู้ก่อน-หลังบริจาคโลหิต</h4>
        <router-link
          class="btn  btn-lg btn3d"
          id="donate"
          style="color: #fff0e2"
          to="/prepareblood"
          ><span class="glyphicon glyphicon-ok"></span>
          คลิ๊กเลย</router-link
        >
      </div>
      <div class="text-center">
        <img id="imhome" src="images/6288030.png" alt="" />
      </div>

      <div class="p-3 mb-2 bg-danger text-white" id="H1">
        "บทความที่น่าสนใจ"
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4>ความสุขของ “การบริจาคโลหิต”</h4>
            <img
              src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4V4qANWrW0pdH9vmXPj9uOxgirUX3BKKLDZcvKHoED3JxAPLjA5.webp"
              alt=""
            />
            <a
              href="https://www.brandbuffet.in.th/2019/04/lpn-blood-donation-csr/"
              class="btn btn-danger col-xs-12"
              role="button"
              >View Snippet</a
            >
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4>ทำไมต้องบริจาคโลหิต?</h4>
            <img
              src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4Vt8Uke92MlL0Ygtxa8UglL81auEhUaq8jUD3B0bEv5YzHM6XVy.webp"
              alt=""
            />
            <a
              class="btn btn-danger col-xs-12"
              role="button"
              href="https://www.redcross.or.th/news/information/13117/"
              >View Snippet</a
            >
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <h4>บริจาคเลือด ส่งผลดีมากกว่าที่คิด</h4>
            <img
              src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4VnQRboWrCOVznBpo2KGwjocrEkxD55KtnAziS153RRU76jbIoc.webp"
              alt=""
            />
            <a
              href="https://hilight.kapook.com/view/27717"
              class="btn btn-danger col-xs-12"
              role="button"
              >View Snippet</a
            >
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
<style >
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
#bloodd{
  margin-top: 3%;
}
#h4{
  margin-bottom: 2%;
  font-size: 40px;
}
#h5{
 margin-top: 2%;
  font-size: 50px;
}
</style>