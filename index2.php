<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper -->

<style>
    .black {
        background-color: black;
    }
</style>
<div id="content-wrapper" class="d-flex flex-column black">
    <!-- Main Content -->
    <div id="content bg-white rounded">
        <!-- Topbar -->
        <?php
        include 'template/navbar.php';
        ?>
        <!-- End of Topbar -->
        <div class="container m-3 ">
            <a href="/tugas/"><i class="fa fa-home"></i><b class="text-primary"> HOME</b></a>

<!-- 
            <dialog id="reload">
                <center>
                    Halaman ini akan Di Reaload
                    <button id="yes">ya</button>
                    <button>tidak</button>
                </center>
            </dialog> -->

            <center>
                <dialog id="dialog">
                    <b>
                        <div class="">
                        <h2 class="" id="heading"></h2>
                    </b>
                    </div>
                    <button id="close" autofocus class="btn btn-primary">Close</button>
                </dialog>
            <button id="show" autofocus hidden></button>
            </center>
        <style>
            dialog {
                /* background-color: ; */
                border: none;
                border-radius: 12px;
                box-shadow: #ececec 1 12px 0px 1px;
                padding: 40px;
            }

            #close {
                margin-top: 10px;
            }
        </style>






        <!--=================== script joged" ======================================= -->
        <div class="d-flex justify-content-center p-3 gap">
            <a onclick="reloads();" class="btn  mb-4 ">
                <div class="image d-grid">
                    <b id="input1 d-flex text-center">Bombom</b>
                    <br>
                    <img src="gambar/makan.gif" class="img" width="120" alt="gambar">
                </div>
            </a>
            <a href="index1.php" class="btn  mb-4 ">
                <div class="image d-grid">
                    <b id="input2">Fikri</b>
                    <br>
                    <img src="gambar/Gambar Gif - Download Animasi Bergerak Gratis - JAGAD ID.gif" class="img" width="150" alt="gambar">
                </div>
            </a>

            <a href="wa.php" id="next" class="btn  mb-4 ">
                <div class="image d-grid">
                    <b id="input2">zaini</b>
                    <br>
                    <img src="gambar/ngantuk.gif" class="img" width="120" alt="gambar">
                </div>
            </a>

            <a href="pala.php" class="btn  mb-4 ">
                <div class="image d-grid">
                    <b id="input3">pala</b>
                    <br>
                    <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar">
                </div>
            </a>
            <a class="btn  mb-4 ">
                <div class="image d-grid">
                    <b id="input4">firman</b>
                    <br>
                    <img src="gambar/bocil.gif" class="img" width="170" alt="gambar">
                </div>
            </a>
        </div>





        <style>
            .btn-chat {
                background-color: grey;
                color: white;
                border-radius: 0 12px 12px 12px;
            }

            .btn-chat:hover {
                background-color: grey;
                color: white;
                border-radius: 0 12px 12px 12px;
            }
        </style>
        <b class="pl-2 btn btn-chat" id="notipe">coba ketik di bawah !!</b><br>
        <b class="pl-2 btn" id="value1"></b><b class="text-primary " style="font-size: 20px;" id="value"> </b><b id="sambungan"></b>

        <div class="pn">
            <audio class="text-right" controls="true" loop="true" autoplay="true">
                <source src="audio/ssstik.io_1717341974299.mp3" type="audio/mpeg">
                Browsermu tidak mendukung tag audio, upgrade donk!
            </audio>
            <span class="text-primary">
                <p><small>01:00</small>✓✓</p>
            </span>
        </div>

        <!-- from input -->

        <div class="form d-flex col-8 justify-content-center gap">
            <label for=""><b>Nama:</b> </label><br>
            <input id="chat" type="text" class="form-control bg-secondaryy text-white p-2" placeholder="😊 Ketik pesan" value="">
            <button type="button" class="btn btn-success btn-sm px--2" id="myBtn" onclick="myFunction()"><i class="fa fa-play"></i></button>
        </div>

        <div class="d-flex justify-content-between">
            <img src="gambar/kipas.gif" class="img" width="150" alt="gambar">
            <!-- <div class="audio bg-secondar">
                    <p>minta lagu galau dong 🎶<span class="text-primary">✓✓</span></p>
                    <audio class="text-right" controls="true" loop="true" autoplay="true">
                        <source src="template/ssstik.io_1717341974299.mp3" type="audio/mpeg">
                        Browsermu tidak mendukung tag audio, upgrade donk!
                    </audio>
                    <p class="text-right">jgn galau deeck 😭<span class="text-primary">✓✓</span></p>
                    <p class="text-left">Oke 😭<span class="text-primary">✓✓</span></p>
                </div> -->
            <script>

            </script>
            <img src="gambar/ngoding.gif" class="img" width="150" alt="gambar">
        </div>


    </div>
    <!-- End of Main Content -->

    <!-- panggil script -->
    <script src="script_2.js"></script>
    <?php
    include 'template/footer.php'
    ?>



    <!-- css untuk ngerubah tampilan index2 -->
    <style>
        .pp {
            border-radius: 50%;
        }


        small {
            font-size: 10px;
            color: grey;
        }

        .chat {
            padding: 10px;
        }

        .pn {
            display: flex;
            justify-content: end;
            align-items: end;
        }

        .header {
            border-radius: 5px 5px 0px 0px;
            background-color: #303832;
        }

        .bg-secondaryy {
            background-color: #303832;
            color: white;
            padding-left: 14px;
        }

        .bg-secondaryy:focus {
            background-color: #303832;
            color: white;
        }

        .card-wa {
            width: 700px;
            border-radius: 10px;
        }

        audio {
            width: 200px;
        }

        p {
            font: 1em sans-serif;
            font-size: 13px;
        }

        img {
            border-radius: 8px;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .gap {
            gap: 6px;
            align-items: center;
        }
    </style>