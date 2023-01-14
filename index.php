<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['Nama'];
    $komentar = $_POST['komentar'];

    //simpan komentar ke database
    $sql = "INSERT INTO komentar VALUES('$nama','$komentar')";
    mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS UAS SEMESTER 1</title>
    <link rel="stylesheet" href="gaya.css">
</head>

<body>
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href="http://stihm-bima.ac.id/"><img src="http://stihm-bima.ac.id/wp-content/uploads/2022/04/IMG-20220319-WA0013-1024x967.jpg" alt="" class="putih"></a>
                <a href="http://stihm-bima.ac.id/"><img src="1.jpg" alt="" class="hitam"></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutus">About</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#galery">Galery</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Komentar</a></li>
                    <li><a href="#kontak">Kata Orang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="layar-penuh">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="video-indonesia.mp4" type="video/mp4">
            </video>
            <div class="intro">
                <h3>Visit Indonesia</h3>
                <br>
                <p>Negara kita, Indonesia, merupakan negara kepulauan yang memiliki begitu banyak keindahan alam.
                </p>
                <p>Keindahan alam itu telah termasyhur hingga ke seluruh penjuru dunia. Maka itu, kita harus mensyukuri
                    rahmat Tuhan kepada bangsa ini.</p>
                <p>
                    <a href="https://www.indonesia.travel/id/id/home" class="tombol">WonderFull Indonesia</a>
                </p>
            </div>
        </header>
        <main>
            <section id="aboutus">
                <div class="layar-dalam">
                    <h3>Tentang Indonesia</h3>
                    <p class="ringkasan">Indonesia merupakan negara terbesar dan terluas di Asia Tenggara. Gugusan
                        ribuan pulau membentang dari Sabang hingga Merauke membentuk keadaan alam Indonesia yang kaya.
                    </p>
                    <p>
                        Negara yang disebut Negara kepulauan ini tak diragukan lagi kekayaan sumber daya alamnya.
                        Indonesia memiliki flora dan fauna yang melimpah.
                    </p>
                    <p>
                        Indonesia juga terletak di garis khatulistiwa yang membuatnya menjadi negara tropis yang hangat
                        dengan curah hujan yang tinggi.
                    </p>
                    <p>
                        Dari ribuan pulau Indonesia, pulau terpadat penduduknya adalah Pulau Jawa. Lebih dari setengah
                        (65 persen) penduduk Indonesia hidup di Pulau Jawa.
                    </p>
                    <div class="konten-isi">
                        <p>Indonesia juga memiliki lebih dari 127 gunung api. Sekitar 69 di antaranya merupakan gunung
                            api
                            aktif. Ada pun, sebagian dari gunung api terletak di dasar laut dan tidak terlihat di
                            permukaan
                            laut. Indonesia memiliki banyak gunung api karena merupakan pertemuan dua rangkaian gunung
                            api
                            aktif. Selain itu, terdapat puluhan patahan aktif di wilayah Indonesia.</p>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="support">
                <div class="layar-dalam support">

                    <div>
                        <img src="pengampu.jpeg.jpg" alt="">
                        <h6>Dosen Pengampu</h6>
                        <p>
                            Ibu Endang Sri Sumanti, S.T., M.Pd
                        </p>
                    </div>
                </div>
            </section>
            <section id="galery">
                <div>
                    <a href="https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/13343069_290500964624356_6817005112438496888_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHaXiSg04wuMOohTbNAbOX4_TevIuSxvRj9N68i5LG9GFLGqO3IgnS5eHn_EfLc1DWTDvk07Yr_SOK3jPWVlm6k&_nc_ohc=pdK2dS9BizYAX8SSP2Y&_nc_ht=scontent-sin6-2.xx&oh=00_AfACkz9GNBMpw2JHFOgYaHQn6q4wmzP8gR2OgrmtxBjiXg&oe=63E87723"><img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/13343069_290500964624356_6817005112438496888_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHaXiSg04wuMOohTbNAbOX4_TevIuSxvRj9N68i5LG9GFLGqO3IgnS5eHn_EfLc1DWTDvk07Yr_SOK3jPWVlm6k&_nc_ohc=pdK2dS9BizYAX8SSP2Y&_nc_ht=scontent-sin6-2.xx&oh=00_AfACkz9GNBMpw2JHFOgYaHQn6q4wmzP8gR2OgrmtxBjiXg&oe=63E87723" alt=""></a>
                    <a href="https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/13394111_290501401290979_1934400319778102016_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFhVDlEIVohGBiwHYg66usPrccuq-CuVgStxy6r4K5WBG7NrROHqIAKy-AwfqPUVEmXoZdv1oezFy_mfDGSHheQ&_nc_ohc=0DBbk1fonGMAX9sdjfG&tn=f0TTD0kBhByrtJXY&_nc_ht=scontent-sin6-2.xx&oh=00_AfCzvBlA1SuBQoZKyDY6Oxsfiup172LfMA7UYvWQ-KJlGQ&oe=63E87A20"><img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/13394111_290501401290979_1934400319778102016_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFhVDlEIVohGBiwHYg66usPrccuq-CuVgStxy6r4K5WBG7NrROHqIAKy-AwfqPUVEmXoZdv1oezFy_mfDGSHheQ&_nc_ohc=0DBbk1fonGMAX9sdjfG&tn=f0TTD0kBhByrtJXY&_nc_ht=scontent-sin6-2.xx&oh=00_AfCzvBlA1SuBQoZKyDY6Oxsfiup172LfMA7UYvWQ-KJlGQ&oe=63E87A20" alt=""></a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13332766_290502174624235_5657695717848718645_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEQcnSxv2eASsxfUgNEKBKl4nwNIn9P2wbifA0if0_bBvz9l8013ifnEqZC0TReZsDqs7uf2ABU8EHcBmujHjDd&_nc_ohc=jb8ZZKjrmFAAX8ErIWX&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmp1J8HqbCJJhv3RN5vWpdZf4wmvGeAQYzM_0l5AlRrw&oe=63E88218"><img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13332766_290502174624235_5657695717848718645_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEQcnSxv2eASsxfUgNEKBKl4nwNIn9P2wbifA0if0_bBvz9l8013ifnEqZC0TReZsDqs7uf2ABU8EHcBmujHjDd&_nc_ohc=jb8ZZKjrmFAAX8ErIWX&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmp1J8HqbCJJhv3RN5vWpdZf4wmvGeAQYzM_0l5AlRrw&oe=63E88218" alt=""></a>
                    <a href="https://img.jakpost.net/c/2016/08/03/2016_08_03_9314_1470211428._large.jpg"><img src="https://img.jakpost.net/c/2016/08/03/2016_08_03_9314_1470211428._large.jpg" alt=""></a>
                    <a href="foto3.jpg"><img src="foto3.jpg" alt=""></a>
                    <a href="foto4.jpg"><img src="foto4.jpg" alt=""></a>
                    <a href="foto5.jpg"><img src="foto5.jpg" alt=""></a>
                    <a href="foto6.jpg"> <img src="foto6.jpg" alt=""></a>
                    <a href="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/13900345_318923545115431_3040756221445433718_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFBFHHMMCsFoEGmxhf8Mrua37ewRishg9vft7BGKyGD23AItQvxABmZPCk2UnLBCeu4rhL4LVHMIOYiwXHCZM5X&_nc_ohc=9TA_kHFjOrYAX_9a2xe&_nc_ht=scontent-sin6-3.xx&oh=00_AfAEp39abdcXG6o9AysFgtOZNNlcC7ttsLGAQWqwLDZS_g&oe=63E89AE5"><img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/13900345_318923545115431_3040756221445433718_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFBFHHMMCsFoEGmxhf8Mrua37ewRishg9vft7BGKyGD23AItQvxABmZPCk2UnLBCeu4rhL4LVHMIOYiwXHCZM5X&_nc_ohc=9TA_kHFjOrYAX_9a2xe&_nc_ht=scontent-sin6-3.xx&oh=00_AfAEp39abdcXG6o9AysFgtOZNNlcC7ttsLGAQWqwLDZS_g&oe=63E89AE5" alt=""></a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-9/74591914_2334851703293674_8936468182827270144_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeEc6XARU3tRh0hAru6hsBDRs8BHddIIhDyzwEd10giEPLUsXfVCzkO6gqOvFoF2Inv28oOPV--JLDHkca5DBYCk&_nc_ohc=BAvS_LzGI5EAX_jhR6-&_nc_ht=scontent-sin6-4.xx&oh=00_AfCowvgkDhgfE6feeZe_QvIhWMR8pqb_qt0jRPHoDZAPIQ&oe=63E8CEDE"><img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-9/74591914_2334851703293674_8936468182827270144_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeEc6XARU3tRh0hAru6hsBDRs8BHddIIhDyzwEd10giEPLUsXfVCzkO6gqOvFoF2Inv28oOPV--JLDHkca5DBYCk&_nc_ohc=BAvS_LzGI5EAX_jhR6-&_nc_ht=scontent-sin6-4.xx&oh=00_AfCowvgkDhgfE6feeZe_QvIhWMR8pqb_qt0jRPHoDZAPIQ&oe=63E8CEDE" alt=""></a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13165907_277137345960718_4282702191974438852_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeG_2UtCg7lfO8ZX_RtPId2TsLlA2m_xyuKwuUDab_HK4iwfVQkjEJHRWVxKRENtxsIsdko5ZQDj1Ktb6LQY6F8N&_nc_ohc=usEvBTh9x-IAX8Hm4gH&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmeyUCQ9mNxV8LvWHoY5qwvPWkCdBkuJPnoioO_8JKzQ&oe=63E8858D">
                        <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13165907_277137345960718_4282702191974438852_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeG_2UtCg7lfO8ZX_RtPId2TsLlA2m_xyuKwuUDab_HK4iwfVQkjEJHRWVxKRENtxsIsdko5ZQDj1Ktb6LQY6F8N&_nc_ohc=usEvBTh9x-IAX8Hm4gH&_nc_ht=scontent-sin6-4.xx&oh=00_AfDmeyUCQ9mNxV8LvWHoY5qwvPWkCdBkuJPnoioO_8JKzQ&oe=63E8858D" alt="">
                    </a>
                    <a href="https://scontent-sin6-2.xx.fbcdn.net/v/t31.18172-8/13198398_1140107429386006_4647528537667755066_o.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGwdtLQtp9FXJIlB5iLwf5KX8djdkhEHUpfx2N2SEQdYOc3Zn2oWSiFZykFVfks_5DfmuhQF0n4zSOBC3PiEGB&_nc_ohc=SUUipru-98EAX8Sd5YL&_nc_ht=scontent-sin6-2.xx&oh=00_AfAV43Eq74G57VEqEOPhzykUuOqJwSZyEJMMHjZrLZQ9qw&oe=63E87140">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t31.18172-8/13198398_1140107429386006_4647528537667755066_o.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGwdtLQtp9FXJIlB5iLwf5KX8djdkhEHUpfx2N2SEQdYOc3Zn2oWSiFZykFVfks_5DfmuhQF0n4zSOBC3PiEGB&_nc_ohc=SUUipru-98EAX8Sd5YL&_nc_ht=scontent-sin6-2.xx&oh=00_AfAV43Eq74G57VEqEOPhzykUuOqJwSZyEJMMHjZrLZQ9qw&oe=63E87140" alt="">
                    </a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14232619_339837249690727_681024952239645672_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHBZXT60GSBKzj1CVdNkY7sQ3A2iFrKjOVDcDaIWsqM5alaLf_vriZzZX9Jn3O3OWM3tglxvqKrprSCAa5VscNc&_nc_ohc=6HTt-SEn86sAX9PEmeC&_nc_ht=scontent-sin6-4.xx&oh=00_AfBytW3X3E7dOuBy5DBEoL8Ic6fTgl2e0A8XD3HEsFff6w&oe=63E889AC">
                        <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14232619_339837249690727_681024952239645672_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHBZXT60GSBKzj1CVdNkY7sQ3A2iFrKjOVDcDaIWsqM5alaLf_vriZzZX9Jn3O3OWM3tglxvqKrprSCAa5VscNc&_nc_ohc=6HTt-SEn86sAX9PEmeC&_nc_ht=scontent-sin6-4.xx&oh=00_AfBytW3X3E7dOuBy5DBEoL8Ic6fTgl2e0A8XD3HEsFff6w&oe=63E889AC" alt="">
                    </a>
                    <a href="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/14224677_339837366357382_5781582559247640700_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeG4Ig_7PlT2S6-UGTbJvHXFABPBpML6z8YAE8GkwvrPxr9q9ymG6sUXoT8RdeGv5ylUXq6ixkJo85LED01Vg8wn&_nc_ohc=iRTVazT5mnMAX-cnV5w&_nc_ht=scontent-sin6-3.xx&oh=00_AfAlmjuSXmj3XLxo_wBok45vjiqzZHo2kwEn8MTjo7KUww&oe=63E879EE">
                        <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/14224677_339837366357382_5781582559247640700_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeG4Ig_7PlT2S6-UGTbJvHXFABPBpML6z8YAE8GkwvrPxr9q9ymG6sUXoT8RdeGv5ylUXq6ixkJo85LED01Vg8wn&_nc_ohc=iRTVazT5mnMAX-cnV5w&_nc_ht=scontent-sin6-3.xx&oh=00_AfAlmjuSXmj3XLxo_wBok45vjiqzZHo2kwEn8MTjo7KUww&oe=63E879EE" alt="">
                    </a>
                    <a href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.18169-9/14292338_339839433023842_6477766006307142714_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFqyERh0OtpYMJSW9QUXsx19DS4bNCwjSX0NLhs0LCNJfMT2pTMECVj7Rub9SzQGoXzTYLdyVEl7N5QYJYgLuur&_nc_ohc=UAQkJCxuW6UAX_vx2AK&_nc_ht=scontent-sin6-1.xx&oh=00_AfCtiKU6ixGAVDEin6MQg-9Ba0NqQBdlbkiq-peRYVDgdA&oe=63E8881C">
                        <img src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.18169-9/14292338_339839433023842_6477766006307142714_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFqyERh0OtpYMJSW9QUXsx19DS4bNCwjSX0NLhs0LCNJfMT2pTMECVj7Rub9SzQGoXzTYLdyVEl7N5QYJYgLuur&_nc_ohc=UAQkJCxuW6UAX_vx2AK&_nc_ht=scontent-sin6-1.xx&oh=00_AfCtiKU6ixGAVDEin6MQg-9Ba0NqQBdlbkiq-peRYVDgdA&oe=63E8881C" alt="">
                    </a>
                    <a href="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/14322278_339840189690433_1401623302871901746_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeGhHHQYDlYRmIxRAVoJVKGm4koRHwKpv-niShEfAqm_6RlTH16RftGaEHzFxksMPzgYAqIg1JR0NVayCXLlfoXB&_nc_ohc=aYmbSQ9RymcAX-tiNnd&_nc_ht=scontent-sin6-3.xx&oh=00_AfC4W4S7fNMN72Z5S2l947NsJA4ymBV0OrWNAyQvKIB4MQ&oe=63E884EF">
                        <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/14322278_339840189690433_1401623302871901746_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeGhHHQYDlYRmIxRAVoJVKGm4koRHwKpv-niShEfAqm_6RlTH16RftGaEHzFxksMPzgYAqIg1JR0NVayCXLlfoXB&_nc_ohc=aYmbSQ9RymcAX-tiNnd&_nc_ht=scontent-sin6-3.xx&oh=00_AfC4W4S7fNMN72Z5S2l947NsJA4ymBV0OrWNAyQvKIB4MQ&oe=63E884EF" alt="">
                    </a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14233179_339840389690413_1287811625187160634_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEj7OkIRr_aP4sBMSuvOl4Bj92R1WHEvmyP3ZHVYcS-bF2AUk-brvtV1KLefGW12SRD2jWRoAohSB2qZ7vYAsW_&_nc_ohc=u7MjZnOAlEgAX8MyI14&_nc_ht=scontent-sin6-4.xx&oh=00_AfCZOBLkRWGseoVpqLdetbkWvGfJ_ineOU2sCbwUtFzG4w&oe=63E887DE">
                        <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14233179_339840389690413_1287811625187160634_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEj7OkIRr_aP4sBMSuvOl4Bj92R1WHEvmyP3ZHVYcS-bF2AUk-brvtV1KLefGW12SRD2jWRoAohSB2qZ7vYAsW_&_nc_ohc=u7MjZnOAlEgAX8MyI14&_nc_ht=scontent-sin6-4.xx&oh=00_AfCZOBLkRWGseoVpqLdetbkWvGfJ_ineOU2sCbwUtFzG4w&oe=63E887DE" alt="">
                    </a>
                    <a href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.18169-9/13095834_277142605960192_4132453528990794625_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFhb5HQ0z2VqaxEcgWZzCjte5q_cTiDtfR7mr9xOIO19MFcoSp-jc5rgTs1Ed0eHJd1a-aL8IYT1IoBAa505Iv2&_nc_ohc=Z911FwEugp8AX9CriAL&_nc_ht=scontent-sin6-1.xx&oh=00_AfDYsp84L7ImaKTD2QExlF8jWIBDukQC-9T6LD3P_Qz5tA&oe=63E8950E"><img src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.18169-9/13095834_277142605960192_4132453528990794625_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeFhb5HQ0z2VqaxEcgWZzCjte5q_cTiDtfR7mr9xOIO19MFcoSp-jc5rgTs1Ed0eHJd1a-aL8IYT1IoBAa505Iv2&_nc_ohc=Z911FwEugp8AX9CriAL&_nc_ht=scontent-sin6-1.xx&oh=00_AfDYsp84L7ImaKTD2QExlF8jWIBDukQC-9T6LD3P_Qz5tA&oe=63E8950E" alt=""></a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14233179_339840389690413_1287811625187160634_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEj7OkIRr_aP4sBMSuvOl4Bj92R1WHEvmyP3ZHVYcS-bF2AUk-brvtV1KLefGW12SRD2jWRoAohSB2qZ7vYAsW_&_nc_ohc=u7MjZnOAlEgAX8MyI14&_nc_ht=scontent-sin6-4.xx&oh=00_AfCZOBLkRWGseoVpqLdetbkWvGfJ_ineOU2sCbwUtFzG4w&oe=63E887DE"><img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/14233179_339840389690413_1287811625187160634_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeEj7OkIRr_aP4sBMSuvOl4Bj92R1WHEvmyP3ZHVYcS-bF2AUk-brvtV1KLefGW12SRD2jWRoAohSB2qZ7vYAsW_&_nc_ohc=u7MjZnOAlEgAX8MyI14&_nc_ht=scontent-sin6-4.xx&oh=00_AfCZOBLkRWGseoVpqLdetbkWvGfJ_ineOU2sCbwUtFzG4w&oe=63E887DE" alt=""></a>
                    <a href="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13729000_313827935672400_5217929878321109861_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHiTcjWOC1WwE5joEtoLsLE3qFz4PwCiL3eoXPg_AKIvTyoQPYnlPzIkm91Fwq2sAJ_Uso0CoMEsb2Fr1hWKSJm&_nc_ohc=g1YIPcHepY8AX-v6L2Q&_nc_ht=scontent-sin6-4.xx&oh=00_AfDcCTTcGu6y2c2IfCFh7PWEoLJvh2bOfcdeoxawtv3NeQ&oe=63E87170"><img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.18169-9/13729000_313827935672400_5217929878321109861_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHiTcjWOC1WwE5joEtoLsLE3qFz4PwCiL3eoXPg_AKIvTyoQPYnlPzIkm91Fwq2sAJ_Uso0CoMEsb2Fr1hWKSJm&_nc_ohc=g1YIPcHepY8AX-v6L2Q&_nc_ht=scontent-sin6-4.xx&oh=00_AfDcCTTcGu6y2c2IfCFh7PWEoLJvh2bOfcdeoxawtv3NeQ&oe=63E87170" alt=""></a>
                    <a href="https://scontent-sin6-3.xx.fbcdn.net/v/t31.18172-8/14242292_358581381197055_2240055834856357672_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFYL7u4_RDooU9t1bIZNfdO9Wf_XdvEH2H1Z_9d28QfYbrBuysnLDzCAFVzqsct-4dTMz_iIDzQQFawImB9VQoQ&_nc_ohc=GQZFtxywgSwAX_VB0md&_nc_ht=scontent-sin6-3.xx&oh=00_AfDVTZS7V8g7Enpwq7I2APnVfZ75bORZ8svleK4P9m74zQ&oe=63E892BC">
                        <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t31.18172-8/14242292_358581381197055_2240055834856357672_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFYL7u4_RDooU9t1bIZNfdO9Wf_XdvEH2H1Z_9d28QfYbrBuysnLDzCAFVzqsct-4dTMz_iIDzQQFawImB9VQoQ&_nc_ohc=GQZFtxywgSwAX_VB0md&_nc_ht=scontent-sin6-3.xx&oh=00_AfDVTZS7V8g7Enpwq7I2APnVfZ75bORZ8svleK4P9m74zQ&oe=63E892BC" alt="">
                    </a>

                </div>

            </section>
            <section class="quote">
                <div class="layar-dalam">
                    <p>Belajarlah dari alam karena alam bisa memberikan pembelajaran dan keindahan yang tak ternilai.
                        <br>
                        "Kamu harus terus meletakkan satu kaki di depan yang lain, dan kemudian suatu hari Anda melihat
                        ke belakang dan Anda telah mendaki gunung."
                    </p>
                </div>
            </section>
            <section id="team">
                <div class="layar-dalam">
                    <h3>Team Pendaki Gunung</h3>
                    <p class="ringkasan">"Pendaki yang berpengalaman tidak terintimidasi oleh gunung, dia terinspirasi
                        olehnya."</p>
                    <div class="tim">
                        <div>
                            <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/13124514_1140296616033754_6076375955912974506_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHzIVY4VkRYMmpXaxcod4W5GlEs49-SMQIaUSzj35IxAoe8WWLv5kgwsazEywVMkbC2lPbANaw6IaP85dCyvV8a&_nc_ohc=gHAcg6cBs7EAX-ARuM1&_nc_ht=scontent-sin6-3.xx&oh=00_AfDwjCUCBb4VDCCsT-K5uaqn4umnuyvtELPktUX8Sif4tA&oe=63E8D72B" alt="">
                            <h6>Merza Aditia</h6>
                            <span>Jakarta - Indonesia</span>
                        </div>

                        <div>
                            <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t31.18172-8/24879623_571464643194652_8220773120499946728_o.jpg?_nc_cat=100&ccb=1-7&_nc_sid=84a396&_nc_eui2=AeG6-v55bdyftqU-ZOAbif9E5LxZQfT7iDrkvFlB9PuIOh0zG2Iq38TYbg8EWjVN-a7qi740s6zVkNC2vcy86Y0e&_nc_ohc=kn52p4g6UtAAX_d7IiW&_nc_ht=scontent-sin6-4.xx&oh=00_AfDOvlHjSPxto3O3cAkW4yZhy4xujGE3J42kHLgbQthFyA&oe=63E8D7B0" alt="">
                            <h6>Arif Munandar</h6>
                            <span>Bima NTB - Indonesia</span>
                        </div>
                        <div>
                            <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/14237676_339839666357152_2321906930508423320_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeGSNAFxE0KPj6ryYBlvmARvHpLXdzYiTrQektd3NiJOtPeEoKcfGKcRYzulqKmq0vyCh2ghJPj8cGLsI8rr7srY&_nc_ohc=0M32m-2hw_EAX-fixzJ&tn=f0TTD0kBhByrtJXY&_nc_ht=scontent-sin6-2.xx&oh=00_AfCGbZdYgdcXmzRs86o_ZrIGR7GkFND1pPtDjCytyzM5Vw&oe=63E8CD15" alt="" height="65%">
                            <h6>Syakur Warijo</h6>
                            <span>Jawa - Indonesia</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="blog">
                <div class="layar-dalam">
                    <h3>Komentar</h3>
                    <div class="ruangan">
                        <form action="" method="post">
                            <div class="room nama">
                                <label for="Nama">Nama</label>
                                <input type="text" name="Nama" id="Nama" placeholder="Nama" size="30">
                            </div>
                            <div class="room sandi">
                                <label for="komentar">Komentar</label>
                                <textarea name="komentar" id="komentar" placeholder="Komentar" cols="30" rows="10"></textarea>
                            </div>
                            <div class="room">
                                <button class="tombol" type="submit" name="submit">Kirim Komentar</button>
                            </div>
                        </form>
                    </div>
                </div>

    </div>
    </div>
    </section>
    </main>
    <footer id="kontak">
        <div class="layar-dalam">
            <div class="kataorang">
                <?php


                $ambildata = mysqli_query($con, "SELECT * FROM komentar");
                $tampil = mysqli_fetch_assoc($ambildata);

                echo "<h5>$tampil[Nama]</h5>";
                echo "<p>$tampil[Komentar]</p>";

                ?>
            </div>
        </div>
        <div class="layar-dalam">
            <div class="copyright">
                &copy; 2023 | Dibuat Oleh Arif Munandar Kelas C Universitas Muhammadiyah Bima
            </div>
        </div>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>