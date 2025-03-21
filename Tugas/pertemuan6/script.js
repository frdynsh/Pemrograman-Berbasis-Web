function ceknilai(){
    let nim = document.getElementById("nim").value;
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");
    
    if (nim === "" || isNaN(nilai)) {
        document.getElementById("hasil").innerText = "Error Nim dan Nilai Kosong!!";
        return;
    }

    if (nilai < 0 || nilai > 100) {
        document.getElementById("hasil").innerText = "Nilai tidak valid!!";
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
    document.getElementById("hasil").innerText = `${hurufMutu}`;
}
