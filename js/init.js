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
          if(rep[0] != profile.getId()) {
            signOut(1);
          } else if(rep[1] != "ensc.fr") {
            signOut(2);
          } else {
            $.post(
              "traiteConnexionSession.php",
              { name: profile.getName(), image: profile.getImageUrl(), email: profile.getEmail() },
              function (data) {
                document.location = data.location;
              },
              'json');
          }
        } else if (xhr.readyState === XMLHttpRequest.DONE && xhr.status != 200) {
          signOut(3);
        }
      };
      xhr.send('idtoken=' + id_token);
    }, function(error) {
      console.log(JSON.stringify(error, undefined, 2));
    });
}

function signOut(i) {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    $.post("traiteDeconnexionSession.php");

    if(i == 1)
      document.location += '?alerteErreurID=true';
    else if(i == 2)
      document.location += '?alerteErreurDomaine=true';
    else if(i == 3)
      document.location += '?alerteErreur=true';
    else if(i == 0)
      document.location += '?alerteDeconnexion=true';
  });
};
