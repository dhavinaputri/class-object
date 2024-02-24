<?php

class Mahasiswa {
    // access modifer, typed properties dan properti
    // bisa di akses class yang sama dan class lain
    
    public string $nim;
    public string $nama;
    public int $umur;

    //hanya bisa diakses dalam class yang sama
    private string $email;

    //hanya bisa diakses dalam class yang sama dan anak anaknya
    protected string $nama_ibu;

    /* 1.bool
        2.int
        3.float
        4.string
        5.array
        6.iterable
        7.object
        8.?(nullable)
        9.self&parent
        20. classes & interfaces
    */
}