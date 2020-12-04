<?php include('header.php');?>

<style>
   form {
      width: 48%;
      background: #ccc;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid black;
    }

    form ol {
      padding-left: 0;
    }

    form li, div > p {
      background: #eee;
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      list-style-type: none;
      border: 1px solid black;
    }

    form img {
      height: 100px;
      order: 1;
      
    }

    
    @media (max-width: 995px) {
     form {
      width: 90%;
    }
 }
  </style>

    <body class="has1">
        
        <h3 class="has3">ฟอร์มแจ้งชำระเงินสำหรับการโอนเงินผ่านบัญชีธนาคาร</h3>
        
        <center>
        <div class="form-group">
             
            <input type="text" class="form-control" id="Name"  placeholder="รหัสการซื้อตั๋ว">
            

            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
            
        <form>
            <input type='file' id="upload" onchange="showMyImage(this)" />
            <img id="thumbnil" style="width:100%; max-width: auto; max-height:auto; margin:10px 0; display:none;" src="" alt="logo" />
            <br>
        </form>
            <br>
            <button type="button" class="btn btn-info">ยืนยันการชำระเงิน</button>
            
        </div>
        </center>

<script>
    function showMyImage(fileInput) {
      var files = fileInput.files;
        //console.log(files);
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            console.log(file.name);
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
            thumbnil.style.display = 'block';
            //$("#banner_name").text(file.name);

        }
    }
  </script>