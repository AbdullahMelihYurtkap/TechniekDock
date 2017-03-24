$(document).ready(function() {
$("#submit").click(function() {
var username = $("#username").val();
var groupname = $("<?php $hindik ?>").val();  
if (username == '' || groupname == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php", {
username: username,
groupname: groupname,
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});