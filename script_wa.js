// =============== end script wa ===============================
// fungsi untuk klik tombol

let input = document.getElementById("chat")
input.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn").click();
    }
});

dialog = document.querySelector('dialog');
showButton = document.querySelector('dialog + button')
closebtn = document.getElementById('close')

closebtn.addEventListener('click', () => {
    dialog.close()
})
modal = () => {

    document.getElementById("open").click();
    showButton.addEventListener('click', () => {
        dialog.showModal()
    })
}

// fungsi DOM mengubah text
function myFunction() {




    // Get the value of the input field with id="chat"
    let x = document.getElementById("chat").value;
    let y = document.createElement("p");
    // If x is Not a Number or less than one or greater than 10
    let text;

    a = "kangen";
    b = "zaini"
    c = "nuri";
    d = "zaini kangen";
    e = "cinta"
    f = "selpi"

    if ( x == b || x == c ) {
        // document.getElementById("bls").innerHTML = text;
        // document.getElementById("input1").innerHTML = text;
        text = "Lovyuu 🤣";
        text2 = "anjaaay 😂";
        text3 = "bingung"
        text4 = "ayoolooo"
        text5 = "mau ngapain"
        nambah = document.createElement("p");
        nambah.innerHtml == text3;
        document.body.appendChild(y);
        document.getElementById("input1").innerHTML = text3;
        document.getElementById("input2").innerHTML = text;
        document.getElementById("input3").innerHTML = text;
        document.getElementById("input4").innerHTML = text2;
        document.getElementById("input5").innerHTML = text3;
        document.getElementById("input6").innerHTML = text4;
        document.getElementById("input7").innerHTML = text5;
        document.getElementById("input8").innerHTML = text2;
        document.getElementById("input9").innerHTML = text2;

    } else if (x == "kangenn") {
        window.location.assign("index.php")
    }
     else if (x == "bom") {
        window.location.assign("index.php")
    }

    else if (x == "r") {
        document.location.reload(true)

    }
    else if ( x == "bombom" || x == "bom" ) {
        modal()
        document.getElementById("text-modal").innerHTML = "bombom baik"
    } 
    else if (x == e) {
        a = "Baik "
        document.getElementById("input4").innerHTML = a;
        document.getElementById("input6").innerHTML = a;
    } else if (x == a || x == e || x == d) {
        document.getElementById("input3").innerHTML = "samaa <small>01:00</small>";
    
    }else if(x == "bohong"){
        
        document.getElementById("input3").innerHTML = "bnerr <small>01:00</small>";
    }
     else if (x == a) {
        text = "tidak boleh";
        document.getElementById("input2").innerHTML = text;
        document.getElementById("input4").innerHTML = "gaboleh random ";
        document.getElementById("input5").innerHTML = "coba ketik 1 ";
        document.getElementById("input6").innerHTML = "coba ketik zhy ";
        document.getElementById("input7").innerHTML = "gaboleh random ";
    } else {

        // modal();
        // document.getElementById("text-modal").innerHTML = "yg bner napa ngetik !!";
        document.getElementById("input2").innerHTML = "yg bner napa ngetik ";
        document.getElementById("input4").innerHTML = " ";
        document.getElementById("input5").innerHTML = " ";
        document.getElementById("input6").innerHTML = " ";
        document.getElementById("input8").innerHTML = " ";
        document.getElementById("input9").innerHTML = " ";
        document.getElementById("input7").innerHTML = " ";
        document.getElementById("input3").innerHTML = " ";
        document.getElementById("input1").innerHTML = " ";
        // document.location.reload(true)
        document.getElementById("input10").innerHTML = " ngetik nya yg bneer ";
        alert('gaboleh random')
    }


}

