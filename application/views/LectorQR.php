<center>
        <div class="Lector-contorno" >
    <video class="Lector" id="preview">
      
    </video>
    <div class="content-btn-cmb-camara ">
    <button class="btn btn-Utec">Cambiar de Camara</button>
    <br><br></div>
  </div>
</center>

<script>
let scanner = new Instascan.Scanner(
             {
                 video: document.getElementById('preview')
             }
         );
         scanner.addListener('scan', function(content) {
             alert('Conenido: ' + content);
           window.open(content, "_blank");
       });
         var ArrCamaras 
         var contCam = 0;
         Instascan.Camera.getCameras().then(cameras => 
         {
           ArrCamaras = cameras;
             if(cameras.length > 0){
                if(cameras.length == 1){$(".content-btn-cmb-camara").addClass("hidden")}
               scanner.start(cameras[0]);
            } else {
                 console.error("no existe camara en el dispositivo!");
             }
         });
         $(".content-btn-cmb-camara").click(function(){
        contCam ++;
           if(contCam <= ArrCamaras.length){
              
              scanner.start(cameras[contCam]);
            }else{
               contCam =0;
             scanner.start(cameras[contCam]);
            }
        });
</script>