<?php include('header.php');?>

<style>
.fullheight {
     height: 120vh;
 }
 
 .align-times-center {
     align-items: center;
     justify-content: center;
 }
 
 .img {
     background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
 }
 
 .img-fixed {
     background-attachment: fixed;
 }
 
 .container {
     width: 100%;
     margin: 5 auto;
 }

 @media (max-width: 890px) {
     .fullheight {
        height: 100vh;
    }
 }
 @media (max-width: 520px) {
     .fullheight {
        height: 100vh;
    }
 }
</style>

<script>
    var listSeat = []; //List Boat Seat ID
    var listSeatNumber = []; //List Boat Seat Number
</script>

    <section class="fullheight align-times-center img img-fixed" 
        style="background-image: url('image/tk.png');">
        <div class="container">
                <div class="slogan">
                    
                    <h1>จองตั๋ว - ซื้อตั๋ว ออนไลน์<br>
                    <br>เรือนอน สุราษฎร์ธานี - เกาะเต่า</h1>
                
                </div>
        
                <div class="box">
                    <form action="index_page_2.php" class="form-group " method="POST" >
                    <h2>เลือกวันที่ต้องการออกเดินทาง</h2>    
                        
                    <p><b>ต้นทาง</b></p>
                        <select name="list" id='select-Location_start' onchange="getSearchBoat(
                            document.getElementById('select-Location_start').value,
                            document.getElementById('select-Location_end').value)">
                            <option>------ ต้นทาง ------</option>
                        </select></br></br>

                        <p><b>ปลายทาง</b></p>
                    
                        <select name="list" id='select-Location_end' onchange="getSearchBoat(
                            document.getElementById('select-Location_start').value,
                            document.getElementById('select-Location_end').value)">
                            <option>------ ปลายทาง ------</option>
                        </select></br></br>
                        
                        <!-- javascript -->
                        <script>
                            getSelectLocation();
                        </script>
                        <!-- javascript -->

                        <p><b>เลือกหมายเลขเรือ</b></p>
                        
                        <select name="list" id='boat-number'>
                            <option value="1">------ เลือกหมายเลขเรือ ------ </option>
                        </select></br></br>


                        <p><b>วันที่ออกเดินทาง</b></p>
                            <input type="date" name="" value="<?php echo date('Y-m-d') ?>"></br></br>
                    
                        <center>
                            <button type="submit"class="btn btn-primary"><span>ค้นหาที่นั่ง</span></button></a>
                        </center>
                    </form>
                </div>
        </div>
    </section> 

    <div class="container2">
        <form action="index_page_2.php" method="POST">
        <center><h2>เลือกวันที่ต้องการออกเดินทาง</h2> <br></center>   
        
        <p><b>ต้นทาง</b></p>   
        <center>         
         <select class="form-control" >
             <option value="1">------ ต้นทาง ------<br>
             <option value="2">สุราษฎร์ธานี<br>
             <option value="3">เกาะเต่า<br>
         </select></br>
         </center>  
        
         <p><b>ปลายทาง</b></p>
         <center>         
         <select class="form-control">
             <option value="1">------ ปลายทาง ------<br>
             <option value="2">สุราษฎร์ธานี<br>
             <option value="3">เกาะเต่า<br>
         </select></br>
         </center>

        <p><b>เลือกหมายเลขเรือ</b></p>
        <center> 
            <select name="list" class="form-control" id='boat-number'>
                <option value="1">------ เลือกหมายเลขเรือ ------ </option>
            </select></br>
        </center>

        <p><b>วันที่ออกเดินทาง</b></p>
        <center>
            <input class="form-control" type="date" value="<?php echo date('Y-m-d') ?>"><br>
        </center>

        <center>
            <button type="submit"class="btn btn-primary"><span>ค้นหาที่นั่ง</span></button></a>
        </center>
        </form>
    </div>

    
    <?php include('footer.php');?>
    