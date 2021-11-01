<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="title">
                <div class="col">
                    <h1>mohamed salah</h1>
                </div>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-3 card-left pb-5">
                <div class="container-fluid sticky-xl-top pt-5">
                <form action="">
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword3" onclick="Toggle()">
                      </div>
                    </div>
                    <button class="btn btn-dark">Login</button>
                </form>
                <table style="width:100%" class="mt-4 mb-4">
                    <thead>
                        <tr>
                            <th>Team</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>El Mokawloon</td><td>2010–2012</td>
                        </tr>
                        <tr>
                            <td>Basel</td><td>2012–2014</td>
                        </tr>
                        <tr>
                            <td>Chelsea</td><td>2014–2016</td>
                        </tr>
                        <tr>
                            <td>Fiorentina</td><td>2015</td>
                        </tr>
                        <tr>
                            <td>Roma</td><td>2016–2017</td>
                        </tr>
                        <tr>
                            <td>Liverpool</td><td>2016–2017</td>
                        </tr>
                    </tbody>
                </table>
                <footer>
                    <span>Copyright &copy Digital Master Studio</span>
                </footer>
                </div>
            </div>
            <div class="col-md-9 p-5 card-right">
                <div class="container">
                    <div class="row">
                        <div class="col-auto mx-auto d-block p-2">
                            <img src="img/salah_1.jpg" alt="" height="179px">
                        </div>
                        <div class="col-auto mx-auto d-block p-2">
                            <img src="img/salah_2.jpg" alt="" height="179px">
                        </div>
                        <div class="col-auto mx-auto d-block p-2">
                            <img src="img/salah_3.jpg" alt="" height="179px">
                        </div>
                    </div>
                </div>
                <p>Mohamed Salah Ghaly (bahasa Arab: محمد صلاح غالي‎ , pengucapan bahasa Arab Mesir: [mæˈħam.mæd sˤɑˈlɑːħ ˈɣæːli]; lahir 15 Juni 1992) adalah pemain sepak bola profesional Mesir yang bermain sebagai penyerang untuk klub Inggris Liverpool dan timnas Mesir.</p>
                <p>Salah memulai karier seniornya di klub tempat lahirnya, El Mokawloon di Liga Premier Mesir tahun 2010, langsung bergabung dengan Basel untuk harga dirahasiakan. Di Swiss, ia menjadi bintang ketika ia memenangkan titel liga di musim debutnya, memenangkan SAFP Golden Player Award dalam proses. Performa Salah kemudian menarik minat klub Premier League Chelsea, dan ia bergabung dengan harga £11 juta pada tahun 2014. Namun, ia jarang digunakan di musim debutnya dan diizinkan pergi sebagai pinjaman ke klub Serie A Fiorentina dan Roma, dengan yang terakhir, membelinya secara permanen seharga €15 juta.</p>
                <p>Menyusul performanya yang konsisten di Roma membawa mereka ke tempat kedua dan rekor poin total tahun 2017, Salah kembali ke Premier League untuk bergabung dengan Liverpool untuk rekor klub ketika itu, seharga £36.9 juta. Ketika masa keduanya di Inggris, Salah mengadaptasi permainannya dari sayap murni menjadi penyerang komplet dan dengan cepat menjadi titik fokus tim. Ia kemudian memecahkan rekor klub dalam musim debutnya, menerima Premier League Golden Boot setelah mencetak 32 gol dari 36 pertandingan. Ia juga menjadi pemain pertama yang memenangkan 3 Premier League Player of the Month dalam musim yang sama. Performanya yang luar biasa memberinya banyak penghargaan pada akhir musim 2017–18, termasuk PFA Players' Player of the Year, Football Writers' Player of the Year dan PFA Fans' Player of the Year. Salah meraih tempat ketiga untuk the 2018 Best FIFA Men's Player.</p>
                <p>Dalam level internasional, Salah mewakili Mesir pada level muda, memenangkan medali perunggu dalam Africa U-20 Cup of Nations, dan berpartisipasi dalam 2011 FIFA U-20 World Cup dan 2012 Summer Olympics. Ia juga memenangkan CAF Most Promising African Talent Tahun 2012.[6] Membuat debutnya dengan timnas senior tahun 2011, ia membantu Mesir mencapai final 2017 Africa Cup of Nations, dan ia menjadi top skorer ketika kualifikasi CAF untuk membantu Mesir lolos ke 2018 FIFA World Cup. Untuk performanya, Salah dinamai CAF African Footballer of the Year dan BBC African Footballer of the Year.[7][8] Ia juga terpilih dalam CAF Team of the Year dan Africa Cup of Nations Team of the Tournament.</p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("typepass");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>