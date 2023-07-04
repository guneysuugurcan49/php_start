<?php
/*
function yazdirma($sayi)
{
    echo $sayi;
    if($sayi < 10)
    {
        yazdirma($sayi + 1);
    }
}
yazdirma(1);
*/
$kategoriler = [
    [
    'id' => 1,
    'parent' => 0,
    'name' => 'Dersler'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Guncel'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Blog'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'Php Derleri'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'C# Derleri'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'PHP fonksiyonlar'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Recursive fonksiyonlar'
    ]
];
function kategoriListele($kategoriler , $parent = 0)
{
    echo '<ul>';
    foreach($kategoriler as $kategori)
    {
        if($kategori['parent'] == $parent) 
        {
        echo '<li>' . $kategori['name'];
        echo kategoriListele($kategoriler , $kategori['id']);
        echo '</li>';
        }
    }
    echo '</ul>';//alt alta kategori şeklinde yazdırma
}

kategoriListele($kategoriler);
?>