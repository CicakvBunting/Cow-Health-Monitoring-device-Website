    let Lastbpm = databpm.slice(-1);
    document.getElementById("waktu terakhir bergerak").innerHTML = Lastbpm;

    let rstgrk = document.getElementById("reset gerak");
    rstgrk.addEventListener('click', event => {
        myFunction();
    });
    function testtombol() {
        alert('Tombol jalan');
    }

  