var height = document.getElementById("content").clientHeight;
var side_bar = document.getElementById("side-bar");
side_bar.style.maxHeight = height + "px";

function funLogin() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (username.length > 0 && password.length > 0) {
		alert("Dang nhap thanh cong");
	} else {
		alert("Dang nhap that bai");
	}
}
