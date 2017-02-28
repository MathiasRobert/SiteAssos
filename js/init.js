var googleUser = {};
var startApp = function() {
  gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '1096079681177-bja5umgc4353a46gj51fs1jdlo02u5to.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
};

function attachSignin(element) {
  auth2.attachClickHandler(element, {},
    function(googleUser) {
      var id_token = googleUser.getAuthResponse().id_token;
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'traiteConnexion.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          var rep = xhr.responseText.split(' ');
          var profile = googleUser.getBasicProfile();
          console.log(rep);
          if(rep[0] != profile.getId()) {
            console.log("Erreur ID");
            signOut();
          } else if(rep[1] != "ensc.fr") {
            console.log("Erreur domaine");
            signOut();
          } else {
            $.post( "traiteConnexionSession.php", { name: profile.getName(), image: profile.getImageUrl(), email: profile.getEmail() });
            alertSuccess(profile.getName());
          }
        } else if (xhr.readyState === XMLHttpRequest.DONE && xhr.status != 200) {
          console.log("Erreur");
          signOut();
        }
      };
      xhr.send('idtoken=' + id_token);
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
}
function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
  console.log('User signed out.');
  });
};

function alertSuccess(name) {
  var alert = '<div class="alert alert-success fade in"><div class="container"><div class="alert-icon"><i class="material-icons">check</i></div><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="material-icons">clear</i></span></button><b>Success Alert:</b> Bienvenue ' + name + '</div></div>';
  $(".nav").after(alert);
  console.log("saluttt");
   }
