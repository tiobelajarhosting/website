window.onscroll = function() { //Setiap kali menggulir (scroll) halaman, fungsi window.onescrool akan dijalankan
    if (document.body.scrollTop > 0  || document.documentElement.scrollTop > 0 ) { //fungsi ini akan memeriksa apakah halaman sudah digulir ke bawah (lebih dari 0 piksel). Ada dua cara untuk mengakses posisi scroll pada halaman
        document.getElementById('navbar').classList.add('scrolled');//fungsnya untuk mengscrol atau 
    } else {
        document.getElementById('navbar').classList.remove('scrolled');
    }
}

//AOS
AOS.init();