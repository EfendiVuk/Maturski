// uzimanje svih select tagova sa stranice
selekti = document.getElementsByTagName('select');
console.log(selekti);
let objekatPretrage = {};//name:value

//dodavanje eventa na select 
for (let i = 0; i < selekti.length; i++) {
    selekti[i].addEventListener('change', function () {
        objekatPretrage = {};
        objekatPretrage[this.name] = this.value;
        console.log(objekatPretrage);
    });
}

// direktna pretraga pomocu polja
polje = document.getElementById('ipolje');

// akcija na direktnu pretragu
//polje.addEventListener('keypress', function () {



// akcija na taster i preuzimanje podataka kroz ajax
$('#itrazi').click(function () {
    // ajax
    $.get('./datoteka/vebprodavnica.txt', function (data, status) {
        // redovi

        let niz = data.split('\n');
        nizPodaci = [];
        nizSvojstva = ["sifra", "model", "proizvodjac", "ram", "cpu", "kamera", "ekran", "slika", "cena"];
        proizvodi = [];
        //console.log(data.split('\n'));
        console.log(niz);

        // deljenje reda na komponente
        for (let i = 0; i < niz.length; i++) {
            nizPodaci.push(niz[i].split(','));
        }
        //console.log(nizPodaci);

        // oslobadjanje od space-a
        for (let i = 0; i < nizPodaci.length; i++) {
            for (let j = 0; j < nizPodaci[i].length; j++) {
                nizPodaci[i][j] = nizPodaci[i][j].trim();
            }
        }
        console.log(nizPodaci);

        //{sifra:"s20lite", proiz:"saamsung"...}
        //konverzija u objekat
        for (let i = 0; i < nizPodaci.length; i++) {
            let obj = new Object();
            for (let j = 0; j < nizPodaci[i].length; j++) {
                //definisanje kljuca = uzimanje vrednosti
                obj[nizSvojstva[j]] = nizPodaci[i][j];
            }
            proizvodi.push(obj);
        }
        // niz objekata
        console.log(proizvodi);

        // pretraga objekata
        rezultat = proizvodi.filter(function (obj) {
            for (let kljuc in objekatPretrage) {
                return obj[kljuc] === objekatPretrage[kljuc];
            }

            // pretraga sa input polja
//            if (obj.ram.search(polje.value) === -1) {
//                console.log("Nema!");
//            } else {
//                return obj;
//            }

            //return obj.ram==="6GB";
        });

        console.log(rezultat);

        tabela = document.getElementById('tabela');
        str = "<table border=1 class='table table-dark text-center'><thead><tr><th>Sifra</th><th>Model</th><th>Proizvodjac</th><th>Ram</th><th>Procesor</th><th>Kamera</th><th>Ekran</th><th>Slika</th><th>Cena</th></tr></thead>";

        console.log(str);

        for (let objekti of rezultat) {
            str += "<tr>";
            for (let kljuc in objekti) {
                if (kljuc == "slika") {
                    str += `<td><img src='./slike/${objekti[kljuc]}'></td>`;
                } else {
                    str += `<td>${objekti[kljuc]}</td>`;
                }

            }
            str += "</tr>";
        }
        str += "</table>";

        tabela.innerHTML = str;




    });
});

// kraj za input pretragu
//});