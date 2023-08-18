<?php 

session_start();




?>



<?php

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

 $title="Deshboard";?>



<?php require "includes/admin-sidebar.php";
require "includes/top-bar.php";?>



<div class="cardbox"> 
    <!-- divvv started  cardbox-->
                <div class="card">
                    <div>
                        <div class="numbers">
                            1,504
                        </div>
                        <div class="cardname">
                           Daily view
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="eye-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            8,504
                        </div>
                        <div class="cardname">
                           All Users
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="people-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            50400
                        </div>
                        <div class="cardname">
                           Investors
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="logo-usd"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            104
                        </div>
                        <div class="cardname">
                        Entrepreneur
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="bulb-outline"></ion-icon>  
                    </div>

                </div>
         </div>
            <!-- cardbox end-->


               <!-- chart -->

               <div class="grapbox">
               
                <div class="box box1">
                     <canvas id="myChart"></canvas>
                   
                    <!--<img src="photo/chart.png">-->
                </div>
                <div class="box box2">
                <canvas id="invest"></canvas>
                <!--<img src="photo/rrr.jpg">-->
                </div>
                <div class="box box1">
                    <canvas id="visits"></canvas>
                    <!--<img src="photo/chart.png">-->
                </div>
                
               </div>
               <!-- chart end-->

        

            <!-- details -->

            <div class="details">
                <div class="record">
                    <div class="cardHeader">
                          <h2>Recent Request</h2>
                          <a href="#" class="btn">view all</a>
                    </div>

                     <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Campany</td>
                                <td>valuation</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>star rank</td>
                                <td>1200M</td>
                                <td>paid</td>
                                <td><span class="status delivered">Delevered</span></td>
                                
                            </tr>

                            <tr>
                                <td>star </td>
                                <td>1000$</td>
                                <td>paid</td>
                                <td><span class="status delivered">Delevered</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amibn</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">not Delevered</span></td>
                                
                            </tr>

                            <tr>
                                <td>Amin</td>
                                <td>200$</td>
                                <td>paid</td>
                                <td><span class="status pending">Pending</span></td>
                                
                            </tr>

                            <tr>
                                <td>kabab</td>
                                <td>700$</td>
                                <td>not paid</td>
                                <td><span class="status pending">not Delevered</span></td>
                                
                            </tr>
                        </tbody>
                     </table>

                </div>


 

                     <!-- user start -->

            <!-- <div class="recentcustomer">
                <div class="cardHeader">
                    <h2>Recent customer</h2>
                    
                </div>
                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="pic.jpg"></div>
                        </td>
                        <td><h4>Devid<br><span>Italy</span></h4></td>
                    </tr>
                </table> -->
            <!-- </div> -->
            <!-- user end -->


            </div>
            <!-- details end-->



            

            
          </div><!-- main div -->
     
        </div><!-- container div -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script type="text/javascript" src="my_chart.js"></script>
                


