<!-- Body Implement -->
<style>
    input[type='radio'] {
        display: inline;
        width: 30%;
    }

    .tableSet {
        overflow: auto;
    }

    td {
        cursor: pointer;
    }
</style>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">
                <center>บันทึกการซื้อตั๋ว</center>
            </h1><br><br>
            <b>เลือกที่นั่งเรือของลูกค้า</b><br><br>
            <div class="tableSet" id="tableSet">
                <table class="table table-bordered table-primary">
                    <?php
                    $seat = 1;
                    for ($n = 0; $n < 3; $n++) {
                        echo "<tr>";
                        if ($n == 1) {
                            echo "<td colspan='100'><center>ที่นั่งเรือ</center></td>";
                        } else {
                            for ($i = 0; $i < 25; $i++) {
                                echo "<td id='" . $seat . "' onclick='setTd(" . $seat . ")'>" . $seat . "</td>";
                                $seat++;
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <button id="floorOneBtn" class="btn btn-warning" onclick="floorOne()">ชั้น 1</button> <button id="floorTwoBtn" class="btn btn-warning" onclick="floorTwo()">ชั้น 2</button>

            <br><br>
            <b>เลขที่นั่งเรือ :</b> <label>กรุณาเลือกที่นั่งเรือ</label> <br><br>
            <input type="text" class="form-control" placeholder="ชื่อจริง"><br>
            <input type="text" class="form-control" placeholder="นามสกุล"><br>
            <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์"><br>
            <input type="radio" class="form-control">ชาย
            <input type="radio" class="form-control">หญิง
            <br><br><br><button class="form-control btn-success">Save</button>
            <br><button class="form-control btn-danger">Reset</button>
        </div>
    </main>
    <br>

    <script>
        document.getElementById("floorOneBtn").setAttribute("class","btn btn-success");
        var td = document.getElementById('8');
        var td1 = document.getElementById('1');

        td.setAttribute('bgcolor', '#14B62E');
        td.innerHTML = "<i class='fas fa-check-circle'></i>";

        td1.setAttribute('bgcolor', '#f5ef4c');
        td1.innerHTML = "<i class='fas fa-check-circle'></i>";

        let setTd = (idTd) => {
            let td = document.getElementById(idTd);
            if (td.getAttribute("bgcolor") == "#14B62E" || td.getAttribute("bgcolor") == "#f5ef4c") {
                alert("กูมีคนซื้่อแล้วไปซื่อที่อื่นซะๆๆ");
            } else if (td.innerHTML == idTd) {
                td.setAttribute('bgcolor', '#cfd2d4');
                td.innerHTML = "<i class='fas fa-check-circle'></i>";
            } else {
                td.innerHTML = idTd;
                td.setAttribute('bgcolor', '#b8daff');
            }
        }

        let floorTwo = () => {
            document.getElementById("floorOneBtn").setAttribute("class","btn btn-warning");
            document.getElementById("floorTwoBtn").setAttribute("class","btn btn-success");
            
            let div = document.getElementById("tableSet");
            div.innerHTML = "<table class='table table-bordered table-primary'><?php
                    $seat = 51;
                    for ($n = 0; $n < 3; $n++) {
                        echo "<tr>";
                        if ($n == 1) {
                            echo "<td colspan='100'><center>ที่นั่งเรือ</center></td>";
                        } else {
                            for ($i = 0; $i < 37; $i++) {
                                echo "<td id='" . $seat . "' onclick='setTd(" . $seat . ")'>" . $seat . "</td>";
                                $seat++;
                            }
                        }
                        echo "</tr>";
                    }
                    ?></table>"}

        let floorOne = () => {
            document.getElementById("floorOneBtn").setAttribute("class","btn btn-success");
            document.getElementById("floorTwoBtn").setAttribute("class","btn btn-warning");

            let div = document.getElementById("tableSet");
            div.innerHTML = "<table class='table table-bordered table-primary'><?php
                    $seat = 1;
                    for ($n = 0; $n < 3; $n++) {
                        echo "<tr>";
                        if ($n == 1) {
                            echo "<td colspan='100'><center>ที่นั่งเรือ</center></td>";
                        } else {
                            for ($i = 0; $i < 50; $i++) {
                                echo "<td id='" . $seat . "' onclick='setTd(" . $seat . ")'>" . $seat . "</td>";
                                $seat++;
                            }
                        }
                        echo "</tr>";
                    }
                    ?></table>"}
    </script>


    <!--  Finish -->