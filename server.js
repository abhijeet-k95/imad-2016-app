var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/signup_new_php.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'signup_new_php.php'));
});


app.get('/article-two', function (req, res) {
    res.send("article two been requested");
});


app.get('/article-three', function (req, res) {
    res.send("article three been requested");
});


app.get('/ui/stylesheet.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'stylesheet.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});

app.get('/ui/rose.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'rose.jpg'));
});


var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
