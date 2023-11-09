<?php $this->load->view('header'); ?>



 <!-- slider section -->
 <section class="form-section">
    
    <div class="container my-0"  >
     
       <div class="row">
       <div class="col-md-4">
        <div class="position-relative rounded overflow-hidden h-100" style="min-height: 380px;">
        <h1 class="my-3 ">
        <b> Get Your Final Expense Now </b>
        </h1>
        
        <img src="<?= base_url(); ?>assets\images\newlove222.png" alt="">
</div>
        <!-- <img class="" src="<?= base_url(); ?>assets\images\team-22.jpg" > -->
        </div>
         <div class="col-md-4 card my-5 " style="background-color:#ff6500 !important; max-width:500px;
         background-size:cover; max-height:610px;">

         
         <div class="forms  my-4 ml-5 mr-5 " >
               <div class="arrow-form text-center " style="background-color: darkgreen !important; border-radius:10px;  padding:8px;"><img class="" src="<?= base_url(); ?>assets\images\WhatsApp_Image_2023-09-28_at_18.12.40-removebg-removebg-preview.png">
                   <span class=" text-white" style ="font-size:25px;  font-weight:bold; "> Get Your Free Quote </span>
                       
                 </div>
               
               
           </div>
           <?php
                   if($this->session->flashdata('success')){
                       echo "<div class='text-bold alert alert-success'>".$this->session->flashdata('success')."<br/></div>";
                   }elseif($this->session->flashdata('failure')){
                       echo "<div class='alert alert-danger'>".$this->session->flashdata('failure')."<br/></div>";
                   }
               ?>
           <form action="<?= base_url('Web/leadRegister'); ?>" method="POST" enctype="multipart/form-data" style="max-width:540px; ">
                   <div class="row">

                   <div class="col-6">
               <div class="form-group" >
                 <label for="inputEmail4">Name</label>
                 <input type="name"  name="name" class="form-control" id="inputName4" placeholder=" Name" style="height:45px;">
               </div>
               </div>
               <div class="col-6">
               <div class="form-group ">
                 <label for="inputPassword4">Email</label>
                   <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email " style="height:45px;">
               </div>
               </div>
               </div>
                   <div class="row">
                    <div class="col-6">
               <div class="form-group ">
                 <label for="inputEmail4">Phone Number</label>
                 <input type="number" name="number" class="form-control" id="inputPhone4" style="height:45px;" placeholder="Number" min="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
               </div>
               </div>

                   <div class="col-6">
               <div class="form-group" >
                 <label for="inputAddress" >Date Of Birth</label>
                 <input type="date" name="birth" 
                     placeholder="dd-mm-yyyy" value=""
                     min="1997-01-01" max="2030-12-31"  class="form-control" style="height:45px;">
               </div>
               </div>
               </div>

                   <div class="row">
                    <div class="col">
               <div class="form-group">
                 <label for="inputCity">Gender</label>
                   <input type="text" name="gender" class="form-control" id="inputGender4" placeholder="Gender" style="height:45px;">
               </div>
               </div>


                   <div class="col">
               <div class="form-group">
                 <label for="inputZip">Zip Code</label>
                   <input type="text" name="zip" class="form-control" id="inputZip4" min="5" style="height:45px;" maxlength="5" placeholder="Zip Code"
                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
               </div>
               </div>
               </div>

               <div class="form-group">
                 <div class="form-check">
                
                   <input class="form-check-input" name="radio_chek" type="checkbox"  id="leadid_tcpa_disclosure" required >
                     <label class="form-check-label" for="gridCheck">
                     Check me out*
                     </label>
                   </div>
               </div>
               <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>

               <div class="text-center p-3 my-0">
                 <button type="submit" class="btn btn-primary p-3 " style="border radius: 10px; "> <b>Request A Quote &rarr; </b></button>
                 </div>
             </form>
         </div>
         
         <div class="col-md-4 ">
         <h1 class="my-3 text-center">
         <b> Why Buy Final Expense Insurance ? </b>
               </h1>
               
               <p class="text-justify ml-3" style="text-size:15px;" >
               Final expense insurance, often referred to as burial or funeral insurance, is designed to cover the costs associated with a person's funeral, burial, and other end-of-life expenses. It provides financial security to your loved ones during a difficult time, ensuring that they are not burdened with the high costs of a funeral. This type of insurance is particularly beneficial for individuals who do not have substantial savings or life insurance coverage. By purchasing final expense insurance, you can ease the financial burden on your family, allowing them to focus on honoring your memory and grieving without added financial stress.
               </p>
               
               

         </div>
         
       </div>
       </div>
 </section>
 
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container ">
      <div class="container ">
        <div class="heading_container heading_center">
          <div class="row">
            <div class="col-md-6">

            <img class="h-100 w-100" src="<?= base_url(); ?>assets\images\1181421-Final-Expense-Insurance-Explained-Simply-_2_091421.png" >
            </div>
            <div class="col-md-6">
          <h2>
            <span>WELCOME TO FINAL EXPENSE</span>
          </h2>
          
          <p class="text-justify">
          Final Expense insurance, where we provide you with essential coverage and peace of mind during life's most challenging moments. Our purpose is to ease the financial burden on your loved ones when you pass away by offering affordable policies that cover funeral, burial, and other end-of-life expenses. We understand the importance of planning for the future, and we're here to help you secure your family's financial well-being. With Final Expense insurance, you're taking a responsible step towards ensuring a dignified farewell without leaving a financial legacy.
          </p>
        </div>
        </div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- end service section -->

  
  <section class="service_section  mt-2">
  
  <div id="customCarousel1" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <div class="container  ">
          <div class="row  " >
            <div class="col-md-6 ">
              <div class="detail-box">
                <h1 class="text-black">
                   <b>Final Expense  </b> <br>
                  
                </h1>
                <p class="text-justify text-black">
                Final expense insurance is a policy designed to cover funeral, burial, and end-of-life expenses. It offers a small, fixed death benefit, often with easy qualification and no medical exam. This insurance ensures that loved ones are not financially burdened by these costs and allows policyholders to plan for their final arrangements.
                </p>
                <div class="btn-box text-center my-3 " style="border: radius 20px;">
                  <a href="<?= base_url('Web/contact'); ?>" class="btn1">
                    <b> Contact-Us </b>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="" style="max-width:150px!important; max-height:400px;">
                <img src="<?= base_url(); ?>assets\images\Funeral-Expense-Insurance.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    
  </div>

</section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding my-5">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
        What Is  <span>Final Expense Insurance?</span>
        </h2>
        <p>
        Final expense insurance is a whole life insurance policy that has a small death benefit and is easy to get approved for. Final expense insurance is also called funeral insurance, burial insurance, simplified issue whole life insurance, or modified whole life insurance. All relate to small whole life policies with a face value (and death benefit) of $2,000 to
         $35,000.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box" >
            <img src="<?= base_url(); ?>assets\images\Untiled2s1.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box text-justify">
            <h3>
            What does a burial insurance policy cover?
            </h3>
            <p>
            Funeral Costs: This includes expenses related to the funeral service, such as the cost of the casket or urn, embalming, transportation of the deceased, and the services of the funeral director and staff.
            </p>
            <p>
            Burial or Cremation Costs: Burial insurance can cover the cost of purchasing a burial plot, grave marker, headstone, and the fees associated with cremation, including the urn.
            </p>
            <p>
            Medical Bills: Some burial insurance policies include coverage for unpaid medical bills or outstanding healthcare expenses of the deceased.
            </p>
            <p>
            Travel Expenses: In some cases, burial insurance policies may cover the cost of transporting the deceased's remains to their place of burial or the location of the funeral service if it is located some distance away.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        What Are The Benefits<span>  Of Final Expense Insurance?</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\growth.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            Financial Assistance
            </h5>
            <p>
            Final expense insurance helps ease the financial burden on your loved ones during a difficult time. It provides a lump-sum payout to cover expenses such as funeral and burial costs, cremation, memorial services, and unpaid medical bills.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\no-smoking.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            No Medical Exam
            </h5>
            <p>
            Many final expense insurance policies do not require a medical exam, making them more accessible to individuals who may have health issues or are older. This simplifies the application process and ensures coverage for those who may be declined for traditional life insurance.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\home.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            Affordable Premiums
            </h5>
            <p>
            Final expense insurance typically comes with lower premiums compared to larger life insurance policies. This makes it an affordable option for people on a fixed budget or those who only need a small amount of coverage.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\money.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            Fixed Death Benefit
            </h5>
            <p>
            The death benefit of a final expense insurance policy remains constant throughout the life of the policy, as long as premiums are paid. This predictability allows beneficiaries to know exactly how much money will be available to cover expenses.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\payroll.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            Quick Payout
            </h5>
            <p>
            Final expense insurance policies are designed to provide a quick payout to beneficiaries, often within days of the insured's passing. This enables families to promptly handle funeral and related expenses without waiting for a lengthy claims process.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <!-- <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-1.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Joseph Brown
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-2.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nancy White
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-3.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Earl Martinez
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-4.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Josephine Allard
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- end team section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                "Our customers value our final expenses insurance for its comprehensive coverage and peace of mind it provides. They appreciate the ease of application, affordable premiums, and the assurance that their end-of-life expenses will be taken care of, alleviating financial burden for their loved ones." </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                "Our customers praise our final expenses coverage for its affordability and comprehensive benefits. They find peace of mind knowing their loved ones won't bear financial burdens during a difficult time. The straightforward application process and compassionate service are also highly appreciated." </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Lazy
                    </h6>
                    
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                "Our customers commend our final expenses coverage for its affordability, offering a sense of security and relief. They appreciate the comprehensive benefits that ensure their end-of-life needs are met, sparing their family financial strain. The simplified application process and dedicated customer service further enhance their positive experience, making it a reliable choice for their peace of mind." </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= base_url(); ?>assets\images\team-1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zone
                    </h6>
                    
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                "Our customers speak highly of our final expenses coverage, emphasizing its affordability and accessible options for every budget. They find comfort in the comprehensive benefits that guarantee their end-of-life expenses will be taken care of, easing the burden on their loved ones. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
  <!-- end client section -->


  

    <?php $this->load->view('footer'); ?>