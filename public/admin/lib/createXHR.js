function cXHR() {
    try {return new XMLHttpRequest()}catch (e) { };
    try {return new ActiveXObject('Microsoft.XMLHTTP')}catch (e) { };
}