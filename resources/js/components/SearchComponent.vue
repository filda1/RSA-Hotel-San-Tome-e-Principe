
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
        top: -130px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
</style>

<template>
   
         <section class="search-sec">
    
        <form action="#" method="post" novalidate="novalidate">
   
            <div class="row">
                <div class="col-lg-19 mx-auto">
                    <div class="row">
                      <!--  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup Hotel">
                        </div> -->  
                        <div class="col-lg-3 col-md-3 col-sm-22 p-0">

                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Enter Pickup Hotel</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                                              
                    <date-picker v-model="date" type= "date" format="YYYY-MM-dd" lang="en" ></date-picker>
                                                                       
                        
                                
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <input type="text" class="date form-control search-slt" placeholder="Check-out">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Nº Person</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn" id="reset-date">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
 
    </section>
   
</template>

<script>

 import DatePicker from 'vue2-datepicker'

    export default {

        components: { DatePicker },

        data() {
               return {

                  date: ''
               }
        }
    }
</script>
