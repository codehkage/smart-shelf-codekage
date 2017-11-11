// $(document).ready(function(){
//     var rootref = firebase.database().ref().child("School");

//     rootref.on("child_added", snap =>{
//         // window.alert(snap.val());
//         var name = snap.child("Name").val();
//         var email = snap.child("Email").val();
//          // window.alert(name);
//         $("#table_body").append("<tr><td>"+name+"</td><td>"+email+"</td><td><button>Remove</button></td></tr>");
//     });x
// });  