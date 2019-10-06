var express = require('express');
var app = express();
app.use(express.static(path.join(__dirname, 'public')));


app.get('/',function(req, res) {
    res.sendFile(__dirname + '/afterlogin_new.html');
    res.send()
});
app.listen(5000)