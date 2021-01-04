<?php include('header.php');?>
    <body class="has1">

        <h3 class="has2">Check In - Check Out</h3>

        <center>
        <div class="form-group">
            <input type="text" class="form-control" id="id_code"  placeholder="รหัสการซื้อตั๋ว">

            <button onclick="document.getElementById('check_in').style.display='block'" type="button" class="btn btn-success">Check In</button>
            <button onclick="document.getElementById('check_out').style.display='block'" type="button" class="btn btn-warning">Check Out</button>
        </div>
        </center>

<!-- /* Check In */ -->
        <center>
        <div id = "check_in" class="in">
             <form class="in-content">
                 <p><b>รหัสซื้อตั๋ว : T04284</b></p>
                 <img src="image/Check In.png" style = "width: 20%">
                 <h2>Check In</h2>
                 <p><b>30/12/2563 เวลา 23.00 น.</b></p>
                 <p><b>สุราษฎร์ธานี - เกาะเต่า</b></p>
                <buttion onclick="document.getElementById('check_in').style.display='none'" type="button" class="btn btn-success">OK</button>
            </form>
        </div>
        </center>

<!-- /* Check Out */ -->
        <center>
        <div id = "check_out" class="out">
            <form class="out-content">
                <p><b>รหัสซื้อตั๋ว : T04284</b></p>
                <img src="image/Check Out.png" style = "width: 20%">
                <h2>Check Out</h2>
                 <p><b>31/12/2563 เวลา 06.30 น.</b></p>
                 <p><b>สุราษฎร์ธานี - เกาะเต่า</b></p>
                <buttion onclick="document.getElementById('check_out').style.display='none'" type="button" class="btn btn-warning">OK</button>
            </form>
        </div>
        </center>