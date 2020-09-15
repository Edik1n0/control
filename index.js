const express = require('express');
const path = require('path');
const exphbs = require('express-handlebars');
const methodOverride = require('method-override');
const session = require('express-session');

// Init
const app = express();
require('./database');

// Settings
app.set('port', process.env.PORT || 7000);
app.set('views', path.join(__dirname, 'views'));
app.engine('.hbs', exphbs({
    defaultLayout: 'main',
    layoutDir: path.join(app.get('views'), 'layouts'),
    partialsDir: path.join(app.get('views'), 'partials'),
    extname: '.hbs'
}));
app.set('view engine', '.hbs');

// Middlewares
app.use(express.urlencoded({extended: false}));
app.use(methodOverride('_method'));
app.use(session({
    secret: 'controlappk',
    resave: true,
    saveUninitialized: true
}));

// Variables Globales

// Routes
app.use(require('./routes/index'));
app.use(require('./routes/notes'));
app.use(require('./routes/users'));

// Static
app.use(express.static(path.join(__dirname, 'public')));

// Server listening
app.listen(app.get('port'), () => {
    console.log('Server on Port', app.get('port'));
});