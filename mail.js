
const nodemailer = require('nodemailer');
const mailGun = require('nodemailer-mailgun-transport');



// const auth = {
//     auth: {
//         api_key: process.env.API_KEY ||  '925bb356321431ccd3c86f0b884a068d-3e51f8d2-2390d8e2', // TODO: Replace with your mailgun API KEY
//         domain: process.env.DOMAIN || 'sandbox066213869d2d47b690d3f88697e1ac07.mailgun.org' // TODO: Replace with your mailgun DOMAIN
//     }
// };

// const transporter = nodemailer.createTransport(mailGun(auth));

require('dotenv').config();

// import { createTransport } from 'nodemailer';
// const log = console.log;

// Step 1
// let transporter = createTransport({
//     service: 'gmail',
//     auth: {
//         user: process.env.EMAIL || 'triptolearn1@gmail.com', // TODO: your gmail account
//         pass: process.env.PASSWORD || 'Sistemas2020' // TODO: your gmail password
//     }
// });

const transporter = nodemailer.createTransport(
    {
        service: 'gmail',
        auth: {
            user: process.env.EMAIL || 'triptolearn1@gmail.com', // TODO: your gmail account
            pass: process.env.PASSWORD || 'Sistemas2020' // TODO: your gmail password
        }
    }   );


const sendMail = (email, subject, text, cb) => {
    const mailOptions = {
        from: 'triptolearn1@gmail.com', // TODO replace this with your own email
        to: 'ing.cfmedina@gmail.com', // TODO: the receiver email has to be authorized for the free tier
        subject,
        text: text 
    };

    transporter.sendMail(mailOptions, function (err, data) {
        if (err) {
            return cb(err, null);
        }
        return cb(null, data);
    });
}

module.exports = sendMail;
