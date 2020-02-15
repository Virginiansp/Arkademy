<?php
function biodata($nama, $umur)
{
    // definisi variabel
    $name = "Virginia Anisa Putri";
    $age = 20;
    $address = "Kp.Cukanggaeuh Rt. 001 Rw. 001 Ds. Jambuluwuk Kec. Ciawi Kab. Bogor 16720";
    $hobbies = array("Travelling", "Cooking", "Make Up");
    $is_married = false;
    $school = [
        ["name" => "PKBM Al-Jauhar", "year_in" => 2018, "year_out" => 2018, "major" => "IPS"],
    $skills = [
        ["name" => "English", "level" => "beginner"]
    ];
    $interest_in_coding = true;

    // gabungkan variabel dalam 1 array
    $data = [
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "school" => $school,
        "skills" => $skills,
        "interest_in_coding" => $interest_in_coding
    ];

    // ubah array dalam bentuk json
    $json = json_encode($data);

    // tampilkan hasil
    echo $json;
}

// panggil fungsi biodata
biodata("Virginia Anisa Putri", 20);
