// External JavaScript
function salam() {
    alert("Selamat datang di website kami!");
    console.log('Keren bisa muncul')
  }
  

// Variabel dalam javascript
    // a. let untuk deklarasi variable
    function contohLet() {
        let y = 90;
        if (true) {
            let y = 20;
            console.log("Nilai dalam blok:", y);
        }
        console.log("Nilai luar blok:", y);
    }
    contohLet(); 

    // b. const untuk deklarasi variable
    function contohconst(){
        // const z = 100;
        // z = 200;
    }
    contohconst();


// Tipe Data dalam JavaScript
    let nama = "Bendul"; // String
    let umur = 30; // Number
    let isStudent = false; // Boolean
    let buah = ["Apel", "Mangga", "Jeruk"]; // Array
    let mahasiswa = { nama: "Rina", usia: 20, jurusan: "Informatika" }; // Object


    console.log(nama);  // Output: Bendul
    console.log(buah[2]); // Output: Jeruk
    console.log(mahasiswa.nama); // Output: Rina
