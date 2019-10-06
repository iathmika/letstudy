/*  const express = require('express')
const app = express()
app.set('view engine','ejs')
app.use(express.static('public'))

app.get('/',(req,res) => {
    //console.log("Hello");
    //res.json("index");
    res.render("index");
})

server = app.listen(5000,()=>{console.log("Running")})

const io = require('socket.io')(server)

io.on('connect',(socket) => {
    console.log('New user connected')
})
*/

const express = require('express')
const app = express()


//set the template engine ejs
app.set('view engine', 'ejs')

//middlewares
app.use(express.static('public'))


//routes
app.get('/', (req, res) => {
	res.render('index')
})

//Listen on port 3000
server = app.listen(5000)



//socket.io instantiation
const io = require("socket.io")(server)


//listen on every connection
io.on('connection', (socket) => {
	console.log('New user connected')

	//default username
	socket.username = "Anonymous"

    //listen on change_username
    socket.on('change_username', (data) => {
        socket.username = data.username
    })

    //listen on new_message
    socket.on('new_message', (data) => {
        //broadcast the new message
        io.sockets.emit('new_message', {message : data.message, username : socket.username});
    })

    //listen on typing
    socket.on('typing', (data) => {
        socket.broadcast.emit('typing', {username : socket.username})
        //feedback.html("<p> <i>" + data.username + "is typing..." + "</i></p>")
    })
})

