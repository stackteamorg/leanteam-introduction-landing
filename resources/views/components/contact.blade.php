 <!-- contact section starts
================================================== -->
<section id="contact" class="dtr-section dtr-py-100 bg-light-blue">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading">
                    
                    <h2>Contact Us</h2>
                    <p>Say Hello!</p>
                    
                </div>
                
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6"> 
                        
                        <!-- form starts -->
                        <div class="dtr-form">
                           
                            <form id="contactform" method="post" action="{{route('store')}}">
                            @csrf
                                <fieldset>
                                    <div class="dtr-form-row dtr-form-row-2col">
                                
                                        <p class="dtr-form-column">
                                            <input name="name" class="required name"  type="text" placeholder="Name">
                                        </p>
                                      
                                        <p class="dtr-form-column">
                                            <input name="email"  class="required email" type="text" placeholder="Email">
                                        </p>
                                    </div>
                                    <p>
                                        <input name="subject"  type="text" class="required" placeholder="Subject">
                                    </p>
                                    <p class="antispam">Leave this empty: <br />
                                        <input name="url" />
                                    </p>
                                    <p>
                                        <textarea rows="6" name="message" id="message"  placeholder="Message"></textarea>
                                    </p>
                                    <p class="text-center">
                                        <button class="dtr-btn btn-blue dtr-mt-minus30" type="submit" ><i class="icon-cursor dtr-ml-15"></i>Send Now!</button>
                                    </p>
                                    <div id="result"></div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- form ends --> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <div class="dtr-pl-30">
                            <p class="d-flex align-items-center"><i class="icon-geo-alt dtr-mr-10 text-size-md color-blue"></i><span class="font-weight-500 color-dark">Our Location</span></p>
                            <p>{{__('contact.address')}}</p>
                            <div class="spacer-20"></div>
                            <p class="d-flex align-items-center"><i class="icon-clock-fill dtr-mr-10 text-size-md color-blue"></i><span class="font-weight-500 color-dark">Work Timings</span></p>
                            <p>{!!__('contact.working-time')!!} </p>
                            
                            
                            <!-- social starts -->
                            <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                                <!-- <li><a href="#" class="dtr-social-button dtr-dribbble" target="_blank" title="dribbble"><span>Follow us</span></a></li> -->
                                <!-- <li><a href="#" class="dtr-social-button dtr-skype" target="_blank" title="skype"><span>Talk to us</span></a></li> -->
                                <!-- <li><a href="#" class="dtr-social-button dtr-whatsapp" target="_blank" title="whatsapp"><span>Talk to us</span></a></li> -->
                                <!-- <li><a href="#" class="dtr-social-button dtr-google" target="_blank" title="google"><span>Share on Google</span></a></li> -->
                            </ul>
                            <!-- social ends --> 
                            
                        </div>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- contact section ends
================================================== --> 