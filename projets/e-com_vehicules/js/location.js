// Permet aux photos de la bannière du header de défiler toutes les 15 secondes.

$('.carousel').carousel({
    interval: 15000
});


// Mise en place du code Javascript pour que le carousel des véhicules se charge progressivement une fois quand l'utilisateur scroll.

var myCars = [
    // Objets du tableau (key et value)
    {
        img: "img/vehicule1.png",
        name: "Peugeot 208",
        description: "Diesel, 5 portes, GPS, Autoradio, Forfait 1000 km (0,5/km supplémentaire)",
        prix: "999€ - Agence de Paris"
    },
    {
        img: "img/vehicule2.png",
        name: "Ford Focus",
        description: "Diesel, 5 portes, GPS, Autoradio, Forfait 1000 km (0,5/km supplémentaire)",
        prix: "999€ - Agence de Paris"
    },
    {
        img: "img/vehicule3.png",
        name: "Audi A1",
        description: "Diesel, 5 portes, GPS, Autoradio, Forfait 1000 km (0,5/km supplémentaire)",
        prix: "1100€ - Agence de Paris"
    },
    {
        img: "img/vehicule4.png",
        name: "Opel Mokka",
        description: "Diesel, 5 portes, GPS, Autoradio, Forfait 1000 km (0,5/km supplémentaire)",
        prix: "1150€ - Agence de Paris"
    }
];

// Création d'une boucle avec '$.each()' pour afficher les différents véhicules.
function afficherCars() {
//ouverture de la div à l'intérieure de laquelle les instructions js vont charger le caroussel au scroll de l'utilisateur.
    var listCars = '<div class="row cars">'; 
    var i = 0;
    

    $.each(myCars, function () {

        // listCars correspond au code html que la boucle va répeter une fois au scroll de l'utilisateur.
        // On y rappel le tabelau des objets "myCars" comprenant "images, noms, descriptions et prix des véhicules". 

        listCars += '<div id="user-cars" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 center">';
        listCars += '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">';
        listCars += '<div class="carousel-inner">';
        listCars += '<div class="carousel-item active">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '<div class="carousel-item">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '<div class="carousel-item">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '<div class="carousel-item">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';

        listCars += '<a class="carousel-control-prev href="#carouselExampleford" role="button" data-slide="prev">';
        listCars += '<span class="carousel-control-prev" aria-hidden="true"><i class="fas fa-angle-left fa-3x"></i>';
        listCars += '</span>';
        listCars += '<span class="sr-only">Previous';
        listCars += '</span>';
        listCars += ' </a>';

        listCars += '<a class="carousel-control-next" href="#carouselExampleopel" role="button" data-slide="next">';
        listCars += '<span class="carousel-control-next" aria-hidden="true"><i class="fas fa-angle-right fa-3x"></i>';
        listCars += '</span>';
        listCars += '<span class="sr-only">Next';
        listCars += '</span>';
        listCars += '</a>';
        listCars += '</div>';
        listCars += '</div>';
        listCars += '</div>';

        listCars += '<div id="user-cars" class="col-6 mt-5">';
        listCars += '<h2>' + myCars[i].name + '</h2>';
        listCars += ' <p>' + myCars[i].description + '</p>';
        listCars += ' <p>' + myCars[i].prix + '</p>';
        listCars += ' <button class="btn btn-outline-reservation bg-success text-white " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réserver et Payer</button>';
        listCars += '</div>';

        i++; //on lui indique de retourner la valeur du i avant de l'incrémenter.

    });
    // } // fin de la boucle

    listCars += "</div>"; //fermeture de la div 

    //Sélectionne dans la div de l'html l'id list_cars et y ajoute "listCars" de notre js afin d'y afficherle caroussel des véhicules.
    $('#list_cars').html(listCars);


    // Permet l'affichage progressif des véhicules avec la création de nouvelles variables "userCars, time, $=i, chaque fois que l'utilisateur fait défiler la souris.

    var userCars = $('#list_cars');
    var time = 500;
    var $i = 0;
    userCars.each(function () {
        var selectedUserCard = "#user-cars" + $i;
        selectedUserCard = $(selectedUserCard);
        setTimeout(function () { selectedUserCard.fadeIn(500); }, time);
        time += 500;
        $i++
    });
}

    // On cré une fonction qui indique qu'au scroll de l'utilisateur le caroussel doit se répeter.
    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if (myCars.length < 8) { 
                $('#list_cars').append('<img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif" alt="...">');
                afficherCars()
                setTimeout(function () {
                }, 3000);
            }
        }
    });
});