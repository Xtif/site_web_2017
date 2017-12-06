function clickPage(el) {
  var text = $(el).text().toLowerCase();
  localStorage.setItem('ancre', text);
  // // evt.preventDefault(); 
  var target = 'index.php?#' + text;
  window.location.replace("index.php");
  // $('html, body').stop().animate({scrollTop: $(target).offset().top - 134}, 1000);
}


$(document).ready(function() 
{
  if (localStorage.getItem('ancre') != 'undefined' && localStorage.getItem('ancre') != null) {
    var ancre = localStorage.getItem('ancre');
    var destination = $('#' + ancre);
    $('html, body').animate({scrollTop: destination.offset().top - 134}, 1000);
    window.localStorage.clear();
  };

  //Scrool smooth vers une ancre
  $('a[href^="#"]').click(function(evt) // au clic sur un lien avec une ancre, contenant donc un #
  {
  	// bloquer le comportement par défaut: on ne rechargera pas la page
    evt.preventDefault(); 
    // enregistre la valeur de l'attribut href dans la variable target
		var target = $(this).attr('href');

    //le sélecteur $(html, body) permet de corriger un bug sur chrome et safari (webkit)
		$('html, body').stop().animate({scrollTop: $(target).offset().top - 134}, 1000);
    // on arrête toutes les animations en cours 
    // on fait maintenant l'animation vers le haut (scrollTop) vers notre ancre target
  });


/*********Gestion de la superposition des images page d'accueil**********/
  //Zone de survol grise
  var img_width = $('.superpose').width();
  $('.zone-survol').css({'width': img_width});

  var img_height = $('.superpose').height();
  $('.zone-survol').css({'height': img_height});
 

  //Mouseover zone grise et texte
  $('.superpose').each(function() {
  	$(this).hover(function() {
			$(this).find('.zone-survol').toggleClass('hidden');
			$(this).find('.text-survol').toggleClass('hidden');
  	});
  });



/********************PAGE PROJET**************************/
  //Gestion de la fenetre modale d'agrandissement des photos
  $('.img-projet').click(function() {
    $('.img-projet-modal').attr('src', $(this).attr('src'));
    $('#modal').modal('toggle');
  });




/*********************BLOC PARCOURS***********************/
  //Centrage des cercles
  var widthCercle = $('.cercle-jalon').width();
  var widthBody = $('body').width();
  var centrage = (widthBody/2)-(widthCercle/2);
  $('.cercle-jalon').css({'left': centrage});




/********REDIMENSIONNEMENT DE LA FENETRE A LA VOLEE********/
  window.onresize = resize;
 
  function resize()
  {
    //Centrage des cercles page d'accueil
    var widthCercle = $('.cercle-jalon').width();
    var widthBody = $('body').width();
    var centrage = (widthBody/2)-(widthCercle/2);
    $('.cercle-jalon').css({'left': centrage});

    //Zone de survol grise page d'accueil
    var img_width = $('.superpose').width();
    $('.zone-survol').css({'width': img_width});

    var img_height = $('.superpose').height();
    $('.zone-survol').css({'height': img_height});
   
  }

});


