@extends('layouts/app1')

 <link rel="shortcut icon" href="/user/img/rsa.png">
@include('layouts/head7')
@section('head')


<style>

.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: 111px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}


.product_view .modal-dialog{max-width: 1050px; width: 65%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

        *,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-preferred-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}

</style>  


<body>

<br><br>  
<section> 
<div class="container">

<div class="row" style="max-width:3000px;"
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong style="font-family:Century Gothic;font-size:16px">http://rsaecolodge.pt</strong>
                        <br>
                        <label style="font-family:Century Gothic;font-size:16px">Roça Santo António, São Tomé</label>
                        <br>
                        <label style="font-family:Century Gothic;font-size:16px">GPS: 6PMG+P9 Santo António</label>
                        <br>
                        <abbr title="Phone"></abbr><label style="font-family:Century Gothic;font-size:16px">(+239) 998 01 70 / (+239) 998 66 52</label>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em style="font-family:Century Gothic;font-size:16px">{{$checkin}}/ {{$checkout}}</em>
                        
                    </p>
                    <p>
                        <em></em>
                        
                    </p>
                    <p>
                        <em style="font-family:Century Gothic;font-size:16px">Ref #: {{$uniqid}}</em>
                    </p>
                </div>
            </div>
            
            
    
@if ($superior == "no")
            <div class="row">
              
                <br><br><br<br><br><br> 
                </span>
        <form action="/reserve" method="POST" role="reserve" >
           {{ csrf_field() }}
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="font-family:Century Gothic;font-size:16px">{{ __('messages.Quartos') }}</th>
                            <th style="font-family:Century Gothic;font-size:16px"></th>
                            <th class="text-center" style="font-family:Century Gothic;font-size:16px">{{ __('messages.Preços') }}</th>
                            <th class="text-center" style="font-family:Century Gothic;font-size:16px">Total</th>
                        </tr>
                    </thead>
             @if( isset($data))
                    <tbody>
         
                    @for ($i =0; $i<$endd; $i++)
                        <tr>
                            <td class="col-md-9"><em style="font-family:Century Gothic;font-size:16px">{{$data[0]->name_room}}</em></h4></td>
                            <td class="col-md-1" style="font-family:Century Gothic;font-size:16px;text-align: center">1</td>
                            
                            
                           
                <div style="display: none">       
                           
                           <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                      
                    @if (($T1 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->activity, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($data[0] ->activity, 2) }}  name='precio_temporada'/> 
   
                      
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price}} </td>
                       
                       <input  type='hidden' value={{ $data[0] ->price }}  name='precio_temporada'/> 
                       
                    @endif
                  
                    <!--*************************************************************************************************-->
                   
                    @if (($T3 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->activity, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($data[0] ->activity, 2) }}  name='precio_temporada'/> 
                      
                    @endif 

                    @if (($T3 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price}} </td>
                       
                       <input  type='hidden' value={{ $data[0] ->price }}  name='precio_temporada'/> 
                       
                       
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                   
                    @if (($T2 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->service, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($data[0] ->service, 2) }}  name='precio_temporada'/>
                      
                    @endif 

                   @if (($T2 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price2}} </td>
                       
                       <input  type='hidden' value={{ $data[0] ->price2 }}  name='precio_temporada'/> 
                       
                    @endif
                    
                    <!--*************************************************************************************************-->
                   
                     @if (($T4 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->service, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($data[0] ->service, 2) }}  name='precio_temporada'/>
                      
                    @endif 

                   @if (($T4 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price2}} </td>
                       
                       <input  type='hidden' value={{ $data[0] ->price2 }}  name='precio_temporada'/> 
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                    
                           
                </div>       
                           
                       <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                      
                    @if (($T1 =="OK") && ($numero_dias > 3))
                      
                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->activity, 0) }}</td>  
                      
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price}}</td>
                                            
                    @endif
                  
                    <!--*************************************************************************************************-->
                   
                    @if (($T3 =="OK") && ($numero_dias > 3))

                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->activity, 0) }}</td> 
                      
                    @endif 

                    @if (($T3 =="OK") && ($numero_dias <= 3)) 

                    <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price}}</td>
                                             
                    @endif
                    
                     <!--*************************************************************************************************-->
                   
                    @if (($T2 =="OK") && ($numero_dias > 3))
                      
                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->service, 0) }}</td>
                      
                    @endif 

                   @if (($T2 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price2}}</td>
                    @endif
                    
                    <!--*************************************************************************************************-->
                   
                     @if (($T4 =="OK") && ($numero_dias > 3))
                    
                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($data[0] ->service, 0) }}</td>
                    @endif 

                   @if (($T4 =="OK") && ($numero_dias <= 3))
                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$data[0] ->price2}}</td> 
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                       
                           
                           <!--<td class="col-md-1 text-center">€{{$total}}</td>-->
                           
                            
                        </tr>
                       
                        <input  type='hidden' value={{$data[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{$checkin}} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                  
                              <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                              <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  />   

                    @endfor
                    
                    
                     @if(($d !== 0))

                     

                        
                        <input  type='hidden' value={{$id_extraroom}} name=" id_extraroom"  style="width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value= {{($price_extraroom)}}  name="price_extraroom"  style="width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value= {{$name_extraroom}}   name="name_extraroom"  style="width:20px;height:5px;"/>

                                              
                          <input type='hidden' value={{$checkin}}   name="checkin"  style="width:1px;height:1px;"/> 
                                        
                           <input  type='hidden' value={{$checkout}}  name="checkout"  style="  width:20px; 
                                            height:5px;"/> 

                          <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                        
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                            <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  />  
                   
                   

             @endif
                  
                      
                   
              @endif
            

             @if(($name_extraroom2 !== 0))

                    <!--   <tr>
                          <td class="col-md-9"><em>  {{$name_extraroom2}} </em></h4></td>
                          <td class="col-md-1" style="text-align:center"> {{$person_roomindividual}}x</td>
                          <td class="col-md-1 text-center">€{{($price_extraroom2)}}</td>
                          <td class="col-md-1 text-center">€{{$total}}</td>
                    </tr>

                    <input  type='hidden' value={{$id_extraroom2}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($price_extraroom2)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>

                             <input type='hidden' value={{$checkin}}  name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                            height:5px;"/> 
                                 
                             <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                      
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                            <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  /> 
 -->
                   

             @endif
             
             
              @if(( $endi== 0))
              @else
                   <tr>
                         <td class="col-md-9"><em style="font-family:Century Gothic;font-size:16px">{{$dataex[0] ->name_room}}</em></h4></td>
                            <td class="col-md-1" style="font-family:Century Gothic;font-size:16px;text-align: center">1 </td>
                            
                            
                            
                         <div style="display: none">       
                           
                           <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                      
                    @if (($T1 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->activity, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($dataex[0] ->activity, 2) }}  name='precio_temporada'/> 
   
                      
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price}} </td>
                       
                       <input  type='hidden' value={{ $dataex[0] ->price }}  name='precio_temporada'/> 
                       
                    @endif
                  
                    <!--*************************************************************************************************-->
                   
                    @if (($T3 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->activity, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($dataex[0] ->activity, 2) }}  name='precio_temporada'/> 
                      
                    @endif 

                    @if (($T3 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price}} </td>
                       
                       <input  type='hidden' value={{ $dataex[0] ->price }}  name='precio_temporada'/> 
                       
                       
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                   
                    @if (($T2 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->service, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($dataex[0] ->service, 2) }}  name='precio_temporada'/>
                      
                    @endif 

                   @if (($T2 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price2}} </td>
                       
                       <input  type='hidden' value={{ $dataex[0] ->price2 }}  name='precio_temporada'/> 
                       
                    @endif
                    
                    <!--*************************************************************************************************-->
                   
                     @if (($T4 =="OK") && ($numero_dias > 3))


                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->service, 0) }} </td>
                      
                      <input  type='hidden' value={{ number_format($dataex[0] ->service, 2) }}  name='precio_temporada'/>
                      
                    @endif 

                   @if (($T4 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price2}} </td>
                       
                       <input  type='hidden' value={{ $dataex[0] ->price2 }}  name='precio_temporada'/> 
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                    
                           
                </div> 
                
                
                 
                    <!--*************************************************************************************************-->
                      
                    @if (($T1 =="OK") && ($numero_dias > 3))
                      
                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->activity, 0) }}</td>  
                      
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price}}</td>
                                            
                    @endif
                  
                    <!--*************************************************************************************************-->
                   
                    @if (($T3 =="OK") && ($numero_dias > 3))

                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->activity, 0) }}</td> 
                      
                    @endif 

                    @if (($T3 =="OK") && ($numero_dias <= 3)) 

                    <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price}}</td>
                                             
                    @endif
                    
                     <!--*************************************************************************************************-->
                   
                    @if (($T2 =="OK") && ($numero_dias > 3))
                      
                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->service, 0) }}</td>
                      
                    @endif 

                   @if (($T2 =="OK") && ($numero_dias <= 3)) 

                       <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price2}}</td>
                    @endif
                    
                    <!--*************************************************************************************************-->
                   
                     @if (($T4 =="OK") && ($numero_dias > 3))
                    
                      <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ number_format($dataex[0] ->service, 0) }}</td>
                    @endif 

                   @if (($T4 =="OK") && ($numero_dias <= 3))
                     <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$dataex[0] ->price2}}</td> 
                       
                    @endif
                    
                     <!--*************************************************************************************************-->
                       
                           
                           
                            
                    
                         
                    </tr>

                    <input  type='hidden' value={{$id_extraroom2}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($price_extraroom2)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>

                             <input type='hidden' value={{$checkin}}  name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                            height:5px;"/> 
                                 
                             <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                      
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                            <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  /> 
                            
                            <input  type='hidden' value="1"  name='uno'  /> 
                            <input  type='hidden' value={{ $endi }}  name='endi'  /> 
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
 
                   

             @endif
                          <tr>
                            <td class="col-md-9" style="font-family:Century Gothic;font-size:16px"><em>{{ __('messages.c1') }}</em></h4></td>
                            <td class="col-md-1" style="font-family:Century Gothic;font-size:16px;text-align: center">{{ $children }}</td>
                            <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ $precio_children }} </td>
                            <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$precio_children}}</td>
                         </tr>
                         
                          <tr>
                            <td class="col-md-9" style="font-family:Century Gothic;font-size:16px"><em>{{ __('messages.b1') }}</em></h4></td>
                            <td class="col-md-1" style="font-family:Century Gothic;font-size:16px;text-align: center">{{ $baby }}</td>
                            <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{ $precio_baby }}</td>
                            <td class="col-md-1 text-center" style="font-family:Century Gothic;font-size:16px">€{{$precio_baby}}</td>
                         </tr>

                     <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong style="font-family:Century Gothic;font-size:16px">Subtotal: </strong>
                            </p>
                            <p>
                              
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong style="font-family:Century Gothic;font-size:16px">€{{$total/$numero_dias}}</strong>
                            </p>
                            <p>
                            
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong style="font-family:Century Gothic;font-size:16px">Noites: </strong>
                            </p>
                            <p>
                              
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong style="font-family:Century Gothic;font-size:16px">x{{$numero_dias}}</strong>
                            </p>
                            <p>
                            
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong style="font-family:Century Gothic;font-size:16px">€{{$total}}</strong></h4></td>
                            <td>   </td>
                          
                        </tr>
                       

                       
                    </tbody>
                    
                </table>
                <input  type='hidden' value={{ $total}}  name='total'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value= {{ $totalfinal }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $iva }} name='iva'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $uniqid }} name='uniqid'  style=" width:20px; height:5px;"/> 
                
                <input type='hidden' value={{ $checkin }} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                <input  type='hidden' value={{ $checkout }} name="checkout"  style="  width:20px;height:5px;"/> 
                <input  type='hidden' value={{$name_extraroom}}   name="name_extraroom"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  /> 
                
                
                                     <input  type='hidden' value={{ $roomcama1 }}  name='roomcama1'  />
                                     <input  type='hidden' value={{ $roomcama2 }}  name='roomcama2'  />
                                     <input  type='hidden' value={{ $roomcama3 }}  name='roomcama3'  />
                                     <input  type='hidden' value={{ $roomcama4 }}  name='roomcama4'  />
                
                 <input  type='hidden' value={{ $superior }}  name='superior'>
                 
                

             <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                                  
                                  
           <input  type='hidden' value="1"  name="uno"  style="  width:20px; 
                                  height:5px;"/>
                 
                  <br>
                <div align="left"><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:15px">{{ __('messages.next') }}</button></div>
               
                <br>
                    
                    <br><br>
                    <label align="left" style="font-family:Century Gothic;font-size:16px">{{ __('messages.obs') }}</label><br>
                
                <input align="left" type='text'  name='info'  size="165"/>
                
                <label align="left" style="font-family:Century Gothic;font-size:12px">
                  {{ __('messages.obs1') }}</label>
               
                <br>
                
            </div><br>
            <br><br><br><br><br><br><br><br><br><br>
            <div>
                    <h1 style="text-align:center;">
                       
                    </h1>
                    
                </div>
                
 <!--  </form> -->
 
            </section>
            
    <!-- SUPERIOR -->
    
                <input  type='hidden' value={{ $total}}  name='total'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value= {{ $totalfinal }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $iva }} name='iva'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $uniqid }} name='uniqid'  style=" width:20px; height:5px;"/> 
                
                <input type='hidden' value={{ $checkin }} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                <input  type='hidden' value={{ $checkout }} name="checkout"  style="  width:20px;height:5px;"/> 
                <input  type='hidden' value={{$name_extraroom}}   name="name_extraroom"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{ $precio_children }}  name='precio_children'  />  
                <input  type='hidden' value={{ $precio_baby }}  name='precio_baby'  /> 
                
                
                                     <input  type='hidden' value={{ $roomcama1 }}  name='roomcama1'  />
                                     <input  type='hidden' value={{ $roomcama2 }}  name='roomcama2'  />
                                     <input  type='hidden' value={{ $roomcama3 }}  name='roomcama3'  />
                                     <input  type='hidden' value={{ $roomcama4 }}  name='roomcama4'  />
                
                 <input  type='hidden' value={{ $superior }}  name='superior'>
                 
                 <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px; 
                                  height:5px;"/> 


     <input  type='hidden' value={{ $endds}}  name="endds"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endis}}  name="endis"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                  
           <input  type='hidden' value="1"  name="uno"  style="  width:20px; 
                                  height:5px;"/>
                 
                
            <br><br><br><br><br><br><br><br><br><br>
            <div>
                    <h1 style="text-align:center;">
                       
                    </h1>
                    
                </div>
                
 
  </form>
            </div>



@endif

</body>

@section('footer')
@endsection