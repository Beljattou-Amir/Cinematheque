const express = require('express');
const connectDB = require('./DB/Connexion');
const app = express();

connectDB();
const Port = process.env.Port || 3000;

app.listen(Port, () => console.log('Server started'));