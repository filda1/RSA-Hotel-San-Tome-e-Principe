<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
 

   

<div align="center">
 
     
    
    <container>
      
     
<div class="card" style="width: 60rem;" >
    <div align="left"><img src="http://rsaecolodge.pt/user/img/v.png" width="710" height="250"> </img></div>

  <div class="card-body">
   <br>

 
<div class="container">   
<div align="left">
    
    <div style="display:none !important;visibility:hidden; display:inline;">
          Confirmação de Reserva Roça Santo António Ecolodge, São Tomé -
    </div>
    
    
<div class="card-title" align="left" style="color:black;font-family:Century Gothic;font-size:18px">Caro cliente,
</div>
<div style="color:black;font-family:Century Gothic;font-size:16px">Muito obrigada por escolher a Roça Santo António Ecolodge, São Tomé.
A sua reserva está confirmada. Seguem os detalhes da sua reserva:
</div>
  
<br><br><br>  

  <div style="display:none !important;visibility:hidden; display:inline;">
        
        <p hidden> 
      {{ $e_message}} 
    
  
    {{ $str =(explode("*",$e_message)) }}
    
    {{ $cor =(explode(" ",$str[2])) }}
    </p>
 

    </div>
<h5><span  style="color:black;font-family:Century Gothic;font-size:18px"> Nº Reserva: </span><u style="color:black;font-family:Century Gothic;font-size:18px">{{ $str[0] }}</u></h5><div>
    <br>
  <div class="row">
    <div  class="column" align="left" style="color:black;font-family:Century Gothic;font-size:16px">
   
    Nome do cliente: <span><label>{{ $str[8] }}</label></span> <br>
    Email do cliente: <span><label>{{ $str[9] }}</label></span><br>
    Data de check-in: <span><label>{{ $str[1] }}</label></span> <br>
    Data de check-out: <span><label>{{ $cor[0] }}</label></span><br>
    N.º de noites: <span><label>{{ $str[14] }}</label></span> 
    </div>
   
    <div></div>

    <div  class="column"  style="color:black;font-family:Century Gothic;font-size:16px">
    Tipo de quarto: <span>{{ $str[5] }}</span><br>
    Cama: <span>{{ $str[16] }}</span><br>
    N.º de quartos: <span>1</span><br>
    N.º de adultos: <span>{{ $str[4] }}</span> <br>
    N.º de crianças (dos 3 aos 16 anos): <span>{{ $str[10] }}</span><br>
    N.º de bebés: (até aos 3 anos): <span>{{ $str[12] }}</span><br>
    </div>
       
</div>
<br>
<br>
<br>
<div align="left">
<h5><span style="color:black;font-family:Century Gothic;font-size:18px">Observações:</span></h5></div>
    <hr>
    <div align="left"style="color:black;font-family:Century Gothic;font-size:16px">
    <span><p align="justify">{{ $str[15] }}</p></span><br>
     
     <hr>
     <br><br>
     <div align="left">
     <h5><span style="color:black;font-family:Century Gothic;font-size:18px" >Informação de tarifas</span></h5>
     <hr>
     <span style="color:black;font-family:Century Gothic;font-size:16px"> Tarifa diária Quarto: <span>{{ $str[7]." "."€" }}</span> </span><br>
     <span style="color:black;font-family:Century Gothic;font-size:16px">Tarifa diária Cama extra criança/s: <span>{{ $str[11]." "."€" }}</span></span><br>
     <span style="color:black;font-family:Century Gothic;font-size:16px">Tarifa diária Cama extra bebé/s: <span>{{ $str[13]." "."€" }}</span> </span>
     
     <hr>
     <h5><span style="color:black;font-family:Century Gothic;font-size:18px" >Valor total da reserva: <span>{{  $str[3] ." "."€"." * " }}</span> </span></h5>
  
     <p style="color:black;font-family:Century Gothic;font-size:13px">Contactos do hotel: <br>
        Whatsapp: +244 925 883 286 <br>
        Telefone: +239 998 01 70 / +239 998 66 52<br>
        email: serviruma.rocasantoantonio@gmail.com / recepcao.roca.santoantonio@gmail.com</p>
   
        <p style="color:black;font-family:Century Gothic;font-size:10px">
           Check-In disponível entre as 14h00 e as 22h00. Para check-in tardio, por favor, informe o alojamento <br>
           No momento do check-in, deverá apresentar este voucher e o documento de identificação válido de todos os hóspedes.<br><br>
           * preço não inclui taxa turística de 75 STN (3,06 €) por pessoa que será pago no momento do check-in</p>    
       
      </div>
  </div>

</div>
</div>
<br><br>

</div>


</container>
</html>

