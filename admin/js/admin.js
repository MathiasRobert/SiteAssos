$("#wizard-picture").change(function(){
  readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');

        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#equipeForm").validate({
    rules: {
        photo: {
            accept: "image/*",
            extension: "png|jpeg|jpg|gif"
        }
    },
    messages: {
    nom: "Veuillez entrer un nom",
    prenom: "Veuillez entrer un prenom",
    poste: "Veuillez entrer un poste",
    photo: "Fichier de type image seulement",
    mail: {
      required: "Veuillez entrer un email",
      email: "Veuillez entrer un email au bon format"
    }
  }
});

$("#articleForm").validate({
    rules: {
        photo: {
            accept: "image/*",
            extension: "png|jpeg|jpg|gif"
        }
    },
    messages: {
    titre: "Veuillez entrer un titre",
    photo: "Fichier de type image seulement",
    categorie: "Veuillez sélectionner une catégorie"
  }
});

$("#evenementForm").validate({
    rules: {
        affiche: {
            accept: "image/*",
            extension: "png|jpeg|jpg|gif"
        }
    },
    messages: {
    titre: "Veuillez entrer un titre",
    lieu: "Veuillez entrer un lieu",
    prix: "Veuillez entrer un prix",
    affiche: "Fichier de type image seulement",
    dateDeb: "Veuillez entrer une date de début"
  }
});

$(".selectpicker").selectpicker();
$(".select").dropdown({ "dropdownClass": "dropdown-menu", "optionClass": "" });

    $('.form-control').on("focus", function(){
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function(){
        $(this).parent(".input-group").removeClass("input-group-focus");
    });

$('.datetimepicker').datetimepicker({
            format: 'DD-MM-YYYY H:mm',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
         });

         $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
         });

         $('.timepicker').datetimepicker({
            format: 'H:mm',    // use this format if you want the 24hours timepicker
//            format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true

            }
         });
