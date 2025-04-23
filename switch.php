<?php
// switch(expresi){
//     case 'nilai1':
//         //kode jika expresi == nilai1
//         break; // fall-through
//     case 'nilai2':
//             //kode jika expresi == nilai2
//             break;
//     default:
    
// }

// Amox -> antibiotik
// pct -> analgetik
// metformin -> antidiabetik

// menentukan kategori obat

$nama_obat = "vitamin c"; // ceritanya input dari admin

switch(strtolower($nama_obat)){
    case "amoxicillin":
    case "ciprofloxacin":
    case "cefadroxil":
        echo "Kategori: Antibiotik";
        break;

    case "paracetamol":
    case "ibuprofen":
    case "asam mefenamat":
        echo "Kategori : Analgetik";
        break;
    
    case "Metformin":
    case "Glibenclamide":
        echo "Kategori : Antidiabetik";
        break;
    
    default:
        echo "Kategori : Obat Lainnya";
        break;
}
?>