//Retrieving multiple data
$(document).ready(function(){
    var rootRef = firebase.database().ref().child("events");
  
    rootRef.on("child_added", snap => {

    var name = snap.child("event_name").val();
    var date = snap.child("event_date").val();
    var time = snap.child("event_time").val();
    var place = snap.child("event_place").val()

    $("#table_body").append("<tr><td>" + name + "</td><td>" + date + "</td><td>" + time + "</td><td>" + place);
    });
})


