$(document).ready(function(){
      $("#myTable").DataTable({
        "language":{
            "emptyTable":     "Pas de données disponibles dans le tableau",
            "info":           "Affichage _START_ à _END_ de _TOTAL_ entrées",
            "infoEmpty":      "Affichage 0 à 0 de 0 entrées",
            "infoFiltered":   "(filtré à partir de _MAX_ total entrées)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Afficher _MENU_ entrées",
            "loadingRecords": "Chargement en cours...",
            "processing":     "Processing...",
            "search":         "Recherche:",
            "zeroRecords":    "Pas enregistrements correspondants trouvés",
            "paginate": {
                "first":      "Premier",
                "last":       "Dernier",
                "next":       "Suivant",
                "previous":   "Précédent"
            },
            "aria": {
                "sortAscending":  ": activer tri en ordre croissant",
                "sortDescending": ": activer tri décroissant"
            }
        }
      });
    });