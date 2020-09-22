<?php

$data_siswa=[];

while(true)
{
    // Data Siswa

    $siswa=&$data_siswa;

    // Baner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    // User Input Data Siswa Magang 

    $input_siswa=readline("Masukkan Data Siswa ? ");

    // Validasi Huruf

    // Simpan Data Siswa
    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa)  || empty($input_siswa))
    {
        echo "\n";
        echo "Masukkan Nama Yang Benar Tanpa Tertera Angka !!"."\n";
        continue;
    }

    $siswa[]=$input_siswa;

    // Munculkan Data Siswa Magang

    $nomor=1;
    foreach($siswa as $key)
    {
        tampil("$nomor.$key" );
        $nomor++;
    }

    // Tannya User Untuk Memasukkan  Data Lagi

    $tanya=readline("Tambah Data?");

    if($tanya=="no")
    {
        tampil("terima kasih");
    break;
    }

}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya = readline("Tambah Data ?");
    if($tanya == "no")
    {
        tampil("Terima Kasih");
    exit;
    }
}

function tampilData($data)
{
    $nomor= 1;

    foreach ($data as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
}

function menuAplikasi()
{
    $data=["Input Data","Tampil Data","Update Data","Delete Data"];
}

// function inputData($data)
// { 
// }

// function tampilData($data)
// {
// }

// function updateData($data)
// {
// }

// function deleteData($data)
// {
// }


?>