
var port = process.env.PORT || 5000;
// Chunk 1
require('dotenv').config();
const express = require('express');
const path = require('path');
const sendMail = require('./mail');
const { log } = console;
const app = express();

var http = require('http');
var fs = require('fs');
 ///////

 app.use(express.static(path.join(__dirname, 'public')));

///////
const PORT = process.env.PORT || 5000;
// Data parsing
app.use(express.urlencoded({
    extended: false
}));
app.use(express.json());


// email, subject, text
app.post('/email', (req, res) => {
    const { subject, email, text } = req.body;
    log('Data: ', req.body);

    sendMail(email, subject, text, function(err, data) {
        if (err) {
            log('ERROR: ', err);
            return res.status(500).json({ message: err.message || 'Internal Error' });
        }
        log('Email sent!!!');
        return res.json({ message: 'Email sent!!!!!' });
    });
});


// Render home page
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});
// Render home page
app.get('/index.html', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});
// Error page
app.get('/error', (req, res) => {
    res.sendFile(path.join(__dirname, 'views', 'index.html'));
});

// Email sent page
app.get('/email/sent', (req, res) => {
    res.sendFile(path.join(__dirname, 'views', 'Info.html'));
});

//Acomodaciones
app.get('/Acomodaciones.html', (req,res)=>{
    res.sendFile(path.join(__dirname,'views','Acomodaciones.html'));
    });

//Cursos
app.get('/Cursos.html', (req,res)=>{
    res.sendFile(path.join(__dirname,'views','Cursos.html'));
    });
//Malta
app.get('/Malta.html', (req,res)=>{
    res.sendFile(path.join(__dirname,'views','Malta.html'));
    });
//Informacion
app.get('/Contactenos.html', (req,res)=>{
res.sendFile(path.join(__dirname,'views','Info.html'));
});

// Start server
app.listen(PORT, () => log('Server is starting on PORT, ', 8080));