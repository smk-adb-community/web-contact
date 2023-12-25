<?php
// format_phone_number('0812-3456-7891');
function format_phone_number($phoneNumber) {
    // Menghapus apapun yang bukan angka
    $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);

    // Cek apakah nomor yang dimasukkan itu memiliki panjang yang valid
    $phoneNumberLength = strlen($phoneNumber);
    if ($phoneNumberLength >= 10 && $phoneNumberLength <= 14) {
        // Format menjadi tampilan nomor Indonesia +62-XXX-XXXX-XXXX
        $phoneNumber = preg_replace("/^0/", "+62", $phoneNumber);
        return preg_replace("/^(\+62)(\d{3})(\d{4})(\d{1,4})$/", "$1-$2-$3-$4", $phoneNumber);
    } else {
        // format menjadi +XX-XXX-XXXX-XXXX
        return preg_replace("/^(\d{1,2})(\d{3})(\d{4})(\d{4})$/", "+$1-$2-$3-$4", $phoneNumber);
    }
}