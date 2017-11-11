firebase.auth().onAuthStateChanged(function(user) {
         if (user) {
          window.location="dashboard.php";
          } else {
            $('.error').html("PLEASE LOG IN");
          }
        }); 

        $("#login").click(function(){
        var email = $("#loginEmail").val();
        var password = $("#loginPassword").val(); 
             if(email !="" && password !=""){ 
                 firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error){
                    $('.error').html("Wrong details");
                 });
             }
        });
