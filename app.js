const express = require('express')
const app = express()
app.set('view engine','ejs')
app.use(express.static('public'))

server = app.listen(5000,()=>{console.log("Running")})

const io = require('socket.io')(server)

io.on('connect',(socket) => {
    console.log('New user connected')
})


app.get('/',(req,res) => {
    console.log("Hello");
    res.json("index");
})