$(function() {
var xhr = new XMLHttpRequest();
xhr.withCredentials = true;
var body = 'useragent=' + encodeURIComponent(navigator.userAgent);
xhr.open("POST", 'http://yis24.ru/analitics.php', true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.send(body);
})
