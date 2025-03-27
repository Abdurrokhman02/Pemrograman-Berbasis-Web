function salam(){
    alert('alo dek') //munculnya di notif
}

function contohLet(){
    let y = 10;
    if (true){
        let y = 20;
        console.log("Nilai dalam blok:", y);
    }
    console.log("Nilai luar blok:", y);
}

function tipedata(){
    let nama = "Abdurrokhman"; //string
    let umur = 30; //number
    let isStudent = false; //boolean
    let buah = ["Apel", "Mangga", "Jeruk"]; //array
    let mahasiswa = {nama: "Abdurrokhman", usia: 15, jurusan: "Informatika"}; //objek

    console.log(nama);
    console.log(buah[1]);
    console.log(mahasiswa.jurusan);
}