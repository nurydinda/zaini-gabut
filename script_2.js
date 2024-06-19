dialog = document.querySelector('dialog');
showButton = document.querySelector('dialog + button')
closebtn = document.getElementById('close')

showButton.addEventListener('click', () => {
    dialog.showModal()
})

closebtn.addEventListener('click', () => {
    dialog.close()
})



let input = document.getElementById("chat")
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn").click();
        // document.getElementById("show").click();

    }
});

function reloads(){
    alert('aku di klick')
    document.location.reload()
}

// promp tambah 
// let person = aler("Nama Anda : ", "");
if (x != null) {
    document.getElementById("demo").innerHTML =
        "Hello " + person + "🙌 Coba Ketik Pesan anda di bawah ";
    "demo".style.textTransform = "uppercase"
}

// ketika di klik

// cungsi rubah text
function myFunction() {
    dialog = document.querySelector('dialog');
    showButton = document.querySelector('dialog + button')
    closebtn = document.getElementById('close')


    modal = () => {

        document.getElementById("show").click();
        showButton.addEventListener('click', () => {
            dialog.showModal()
        })
    }

    // Get the value of the input field with id="chat"
    let x = document.getElementById("chat").value;
    let y = document.createElement("p");
    // If x is Not a Number or less than one or greater than 10
    let text;

    a = "kangen";
    b = "zaini"
    c = "nuri";
    d = "dinda";
    e = "riska"
    f = "selpi"
    g = "zhy"
    h = "zhyy"
    i = "cinta"
    j = "nuri dinda lestari"
    k = "bombom"
    l = "atur"

    if (x == l || x == b || x == c || x == d || x == e || x == f || x == g || x == h || x == i) {
        // document.getElementById("bls").innerHTML = text;
        // document.getElementById("input1").innerHTML = text;
        text = "Lovyuu 😍";
        text2 = "Lovyuu 😂";
        text3 = "Lovyuuuuu"
        nambah = document.createElement("p");
        nambah.innerHtml == text3;
        document.body.appendChild(y);

        modal();
        document.getElementById("heading").innerHTML = x + '  ' + text3;


    } else if (x == j || x == "nuri" || x == "nuri dinda") {

        text3 = "Lovyuuuuu"
        modal();
        document.getElementById("heading").innerHTML = x + '  ' + text3;
        document.getElementById("heading").innerHTML = x + ' jlekk otak batu 😂🩻';
    } else if (x == "r") {
        document.location.reload(true)

    } else if (x == e) {
        a = "Baik "
        document.getElementById("input4").innerHTML = a;
        document.getElementById("input6").innerHTML = a;
    } else if (x == a || x == e) {
        document.getElementById("input3").innerHTML = "samaa <small>01:00</small>";

    } else if (x == "" || x == "atur") {
        text = "tidak boleh";
        document.getElementById("heading").innerHTML = "";

    } else if (x == 1 || x == "chat") {

        document.getElementById("next").click();

    } else {
        // document.getElementById("demo2").innerHTML = "gaboleh random ";
        // document.location.reload(true)
        // alert('Keywoard Tidak terdaftar')
        document.getElementById('value1').innerHTML = "helloo ";
        value = document.getElementById('value').innerHTML = x;
        document.getElementById('sambungan').innerHTML = " nama mu gaa ada di dafatr broo !! ";
        document.getElementById('notipe').innerHTML = "";
        value.style.color = "blue";
    }


}