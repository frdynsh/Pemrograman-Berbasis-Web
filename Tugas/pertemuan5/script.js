function ceknilai(){
    let nim = document.getElementById("nim").value;
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");
    
    if (nim === "" || isNaN(nilai)) {
        hasil.innerText = "Error Nim dan Nilai Kosong!!";
        hasil.style.color = "red";
        return;
    }

    if (nilai < 0 || nilai > 100) {
        hasil.innerText = "Nilai tidak valid!!";
        hasil.style.color = "red";
        return;
    }

    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }
    hasil.innerText = `${hurufMutu}`;
    hasil.style.color = "green";
}
