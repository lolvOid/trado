@extends('dashmaster')

@section('dashboard')



 <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href=" dashboard">Home</a></li>
                            <li class="active"> BlockChain  Statistics</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
             
         

                      <div class="row">
                            <div class="col-md-6">
                                    <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Bitcoin Price Chart   </h4>
                                               
                                                  
                                                </div>
                                                <div class="btcwdgt-chart" bw-cash="true" bw-theme="light"></div>
                                   </div>   
                     
                              
                                  
                               
                                

                                  
                                 


                                    </div>

                                    <div class="row">
                                           
                        <div class="col-md-6">
                                    
                                    
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Bitcoin Blogposts</h4>
                                       
                                          
                                        </div>

                     
                            
                                    <div class="btcwdgt-news-ticker" bw-theme="light"></div>
                                   
                              </div> 
                             </div>
                                            <div class="col-md-6">
                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">Bitcoin Hashing</h4>
                                                           
                                                              
                                                            </div>
                                                    
                                                      
                                                        <div class="btcwdgt-pool" bw-theme="light"></div>
                                                    </div>
                                                 </div>
                                          

                                                 <div class="col-md-6">


                                                        <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">Bitcoin Pricing (USD)   </h4>
                                                                   
                                                                      
                                                                    </div>
                                                    <div class="btcwdgt-price" bw-cash="true" bw-theme="light"></div>
                                                       </div>
                                              </div>
                                    </div>  
                </div>


        @endsection()