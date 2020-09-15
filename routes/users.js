const express = require('express');
const router = express.Router();

router.get('/signin', (req,res) => {
    res.send('Ingeso a la app');
});

router.get('/signup', (req,res) => {
    res.send('Regístrate/Formulario');
});

module.exports = router;