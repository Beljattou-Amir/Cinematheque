const express = require("express")();
const cors = require("cors");
const http = require("http").createServer(express);
const io = require("socket.io")(http);
const { MongoClient } =require("mongodb");

const client = new MongoClient("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");

express.use(cors());

var collection;

io.on("connection", (socket) => {
    socket.on("join", async (gameId) => {
        try{
            let result = await collection.findOne({ "_id": gameId});
            if(!result) {
                await collection.insertOne({ "_id": gameId, message: []});
            }
            socket.join(gameId);
            socket.emit("joined", gameId);
            socket.activeRoom = gameId;
        } catch (e) {
            console.error(e);
        }
    });
    socket.on("message", (message) => {
        collection.updateOne({ "_id": socket.activeRoom}, {
            "$push": {
                "message": message
            }
        });
        io.to(socket.activeRoom).emit("message", message);
    });
});

express.get("/chat", async (request, response) =>  {
    try{
        let result = await collection.findOne({ "_id": request.query.room});
        response.send(result);
    } catch (e){
        response.status(500).send({ message: e.message});
    }
});

http.listen(3000, async () => {
    try{
        await client.connect();
        collection = client.db("Cinema").collection("chat");
        console.log("Listening on port :%s", http.address().port);
    } catch(e) {
        console.error(e);
    }
    
});