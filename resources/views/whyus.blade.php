<style>        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
span, a, a:hover {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}
.section-head {
  margin-bottom: 60px;
}
.section-head h4 {
  position: relative;
  padding:0;
  color:#f91942;
  line-height: 1;
  letter-spacing:0.3px;
  font-size: 34px;
  font-weight: 700;  
  text-align:center;
  text-transform:none;
  margin-bottom:30px;
}
.section-head h4:before {
  content: '';
  width: 60px;
  height: 3px;
  background: #f91942;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right:0;  
  margin:0 auto;
}
.section-head h4 span {
  font-weight: 700;
  padding-bottom: 5px;
  color:#2f2f2f
}
p.service_text{
  color:#cccccc !important;
  font-size:16px;
  line-height:28px;
  text-align:center;    
}
.section-head p, p.awesome_line{
  color:#818181;
  font-size:16px;
  line-height:28px;
  text-align:center;  
}

.extra-text {
    font-size:34px;
    font-weight: 700;
    color:#2f2f2f;
    margin-bottom: 25px;
    position:relative;
    text-transform: none;
}
.extra-text::before {
    content: '';
    width: 60px;
    height: 3px;
    background: #f91942;
    position: absolute;
    left: 0px;
    bottom: -10px;
    right: 0;
    margin: 0 auto;
}
.extra-text span {
    font-weight: 700;
    color:#f91942;
}
.item1 {
    background: #fff;
    text-align: center;
    padding: 30px 25px;
    -webkit-box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    border-radius: 20px;
    border:5px solid rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item1:hover{
    background:#f91942;
    box-shadow:0 8px 20px 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item1:hover .item1, .item1:hover span.icon{
    background:#fff;
    border-radius:10px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item1:hover h6, .item1:hover p{
    color:#fff;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item1 .icon {
    font-size: 40px;
    margin-bottom:25px;
    color: #f91942;   
    width: 90px;
    height: 90px;
    line-height: 96px;
    border-radius: 50px;
}
.item1 .feature_box_col_one{
    background:rgba(247, 198, 5, 0.20);
    color:#f91942
}
.item1 .feature_box_col_two{
    background:rgba(255, 77, 28, 0.15);
    color:#f91942
}
.item1 .feature_box_col_three{
    background:rgba(0, 147, 38, 0.15);
    color:#f91942
}
.item1 .feature_box_col_four{
    background:rgba(0, 108, 255, 0.15);
    color:#f91942
}
.item1 .feature_box_col_five{
    background:rgba(146, 39, 255, 0.15);
    color:#f91942
}
.item1 .feature_box_col_six{
    background:rgba(23, 39, 246, 0.15);
    color:#f91942
}
.item1 p{
    font-size:15px;
    line-height:26px;
}
.item1 h6 {
    margin-bottom:20px;
    color:#2f2f2f;
}
.mission p {
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 28px;
    font-weight: 500;
}
.mission i {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #f91942;
    border-radius: 50%;
    color: #fff;
    font-size: 25px;
}
.mission .small-text {
    margin-left: 10px;
    font-size: 13px;
    color: #666;
}
.skills {
    padding-top:0px;
}
.skills .prog-item1 {
    margin-bottom: 25px;
}
.skills .prog-item1:last-child {
    margin-bottom: 0;
}
.skills .prog-item1 p {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 10px;
}
.skills .prog-item1 .skills-progress {
    width: 100%;
    height: 10px;
    background: #e0e0e0;
    border-radius:20px;
    position: relative;
}
.skills .prog-item1 .skills-progress span {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background: #f91942;
    width: 10%;
    border-radius: 10px;
    -webkit-transition: all 1s;
    transition: all 1s;
}
.skills .prog-item1 .skills-progress span:after {
    content: attr(data-value);
    position: absolute;
    top: -5px;
    right: 0;
    font-size: 10px;
    font-weight:600;    
    color: #fff;
    background:rgba(0, 0, 0, 0.9);
    padding: 3px 7px;
    border-radius: 30px;
}

</style>
<div id="about"></div>
<div class="feat bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="section-head col-sm-12">
                <h4><span>Why Choose</span> Us?</h4>
                <p>When you choose us, you'll feel the benefit of 10 years' experience in data recovery. We understand the intricacies of data loss and are equipped with advanced tools to restore your valuable information.</p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item1"> 
                    <span class="icon feature_box_col_one"><img src="../images/accuracy.png" alt=""></span>
                    <h6>99.99% Accuracy</h6>
                    <p>We guarantee an impressive 99.99% accuracy in data recovery, ensuring that your files are restored with minimal risk of corruption.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
    <div class="item1"> 
        <span class="icon feature_box_col_two"><img src="../images/Saving.png" alt=""></span>
        <h6>Affordable Solution</h6>
        <p>Experience top-notch data recovery software at an unbeatable price of only 1500/-. Get the best value for your money without compromising on quality!</p>
        <p class="price" style="font-weight: bold; color: #28a745;">Only 1500/-</p>
    </div>
</div>

            <div class="col-lg-4 col-sm-6">
                <div class="item1"> 
                    <span class="icon feature_box_col_three"><img src="../images/customer_service.png" alt=""></span>
                    <h6>Customer Support</h6>
                    <p>Our dedicated support team is available around the clock to assist you with any queries, ensuring a smooth recovery process.</p>
                </div>
            </div>
        </div>
    </div>
</div>

