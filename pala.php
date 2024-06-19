<?php
include 'template/header.php';
include 'template/sidebar.php';
?>


<style>
    .text-name {
        font-size: 37px;
    }

    button {
        border-radius: 11px;
        border: none;
        background-color: blue;
        color: white;
        outline: 1 wheat;
    }

    dialog {
        background-color: #f0efed;
        width: 100vh;
        height: 60vh;
        border-radius: 12px;
        border: none;
        box-shadow: grey 1px 2px 14px 2px;
        overflow: auto;
    }
    .fw-bold{
        font-weight: bold;
    }
</style>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php include 'template/navbar.php';  ?>
        <!-- End of Topbar -->
        <div class="container m-3">
            <a href="/tugas"><i class="fa fa-home"></i></a> <b class="text-primary">HTML MODERN</b>




            <div class="dialog" id="dialog">
                <div class="d-flex justify-content-center">
                 <div class="d-flex position-absolute ">
                     <button class="btn btn-success  mr-2" onclick="showw()">pertanyaan</button>
                    <a href="index2.php" class="btn btn-danger">Balik</a>
                 </div>     
                    <audio hidden class="text-right" controls="true" loop="true">
                        <source src="audio/ssstik.io_1717341974299.mp3" type="audio/mpeg">
                        Browsermu tidak mendukung tag audio, upgrade donk!
                    </audio>
                </div>
                <center>
                    <dialog open>
                    <div class="d-flex justify-content-right">
                    <button class="btn btn-warning btn-sm mt-2" onclick="hilang()">x</button>
                    </div>

                        <div class="from">
                            <h5>Jawab pertanyaan</h5>
                            <h3 class="rounded fw-bold" id="pertanyaan"></h3>
                            <h2><span class="text-primary">YES</span> or <span class="text-danger">NO!</span></h2>
                            <!-- <label for="">nama</label> -->
                            <h1 class="text-name mt-3 bg-primary p-2 rounded text-white" id="nama"><br></h1>
                            <div class="d-flex mb-5 ">
                                <input hidden id="input" value="tunggu..." class="form-control mr-2" type="text">
                                <!-- <input type="submit" value="iya" id="iya" onclick="iya()"></input> -->
                                <!-- <input type="submit" value="tidak" id="tidak" onclick="tidak()"></input> -->

                            </div>
                            <button class="btn btn-primary" id="kirim" onmouseover="kirim()">yes</button>
                            <button class="btn btn-success btn-lg mx-3 d-" onclick="reload()">refresh <i class="fa fa-rotate-right"></i></button>
                            <span class="refresh">
                                <button class="btn btn-danger justify-content-start" onmouseover="tidak()">noo</button>
                            </span>

                        </div>
                    </dialog>
                </center>
                <!-- <button onclick="test()">rondom</button> -->
            </div>

            <script>
                let input = document.getElementById("input")
                input.addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        document.getElementById("kirim").click();
                        // document.getElementById("show").click();

                    }
                });


                reload = () => {
                    document.location.reload()
                }

                // isi pertanyaan
                var values =
                    // isi pertanyaan
                    ["apakah bapak kamu jelek ?",
                     "zaini baik ?", "nuri baik ?","selpi baik ?","riska baik ?","aku baik ?","selpi jelek?","nuri jelek?","riska jelek?",
                     "apakah pala cocok dengan Nora ?", "pala ganteng ?","pala jelek ?", "bom-bom jahat","bom-bom baik?", "botol jleek?", "botol jlek?",
                     "nuri cantik?","selpi cantik?","riska cantik?", "zaini ganteng?","kamu jelek?", "kamu cakep?", "pirman ganteng?", "bom-bom ganteng?","bom-bom jlek?",
                    ],
                    valueToUse = values[Math.floor(Math.random() * values.length)];
                // do something with the selected value
                // alert(valueToUse);
                document.getElementById('pertanyaan').innerHTML = valueToUse;
                // alert(valueToUse);


                x = document.getElementById('input').value
                hilang = () => {
                    // alert('xaini')
                    dialog = document.querySelector('dialog');
                    dialog.close()
                }

                showw = () => {
                    dialog = document.querySelector('dialog');
                    dialog.showModal();
                }

                iya = () => {
                    // document.getElementById('input').value
                }

                tidak = () => {
                    // isi jawaban salah
                    var jawaban = ["iya banget", "iya mungkin", "ya kyaknya","100%","40%","18%","30%","78%","16%","98%","23%","91%","81%","71%","66%","10%","90%","50%", "kamu jelek","kamu jahat!","tidak", "tidak mungkin", "mungkin", "benar", "benar banget"]
                    setTimeout(() => {
                    valueToUse = jawaban[Math.floor(Math.random() * values.length)];
                    x = document.getElementById('input').value
                    document.getElementById('nama').innerHTML = valueToUse ;
                    x = document.getElementById('input').value

                    },500)

                }

                kirim = () => {
                    x = document.getElementById('input').value
                    document.getElementById('nama').innerHTML = x;
                    x = document.getElementById('input').value

                    // isi jawaban benar
                    var jawaban = ["iya banget", "iya mungkin", "ya kyaknya", "tidak", "tidak mungkin", "mungkin", "benar","100%","10%","90%","50%","40%","18%","30%","78%","16%","98%","23%","91%","81%","71%","66%","10%", "benar banget"]
                    valueToUse = jawaban[Math.floor(Math.random() * values.length)];
                    // do something with the selected value
                    // alert(valueToUse);

                    // alert(valueToUse);

                    y = "ya"
                    z = "tunggu..."
                    a = "benar"
                    if (x == y || x == z || x == a) {
                        setTimeout(() => {            
                            document.getElementById('nama').innerHTML = valueToUse
                            document.getElementById('nama').innerHTML = valueToUse
                            pesan2 = document.getElementById('nama')
                        },2000)
                    } else if (x == "tidak" || x == "no") {
                        document.getElementById('nama').innerHTML = "jawaban anda salah🙌"
                    } else {
                        
//                         tidak = () => {
// // document.getElementById('nama').innerHTML = "ketik <br> iya atau tidak ?"
//                         }
                    }
                }


                // kondisi
                // function test() {
                //     var values = ["test", "values", "go", "here"],
                //         valueToUse = values[Math.floor(Math.random() * values.length)];
                //     // do something with the selected value
                //     alert(valueToUse);
                // }
            </script>


            <!-- panggil script -->
            <!-- <script src="/script_1.js"></script> -->


        </div>
        <!-- End of Main Content -->

        <?php
        include 'template/footer.php'
        ?>