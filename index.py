from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def home():
    return render_template('base.html')


@app.route('/nosotros')  # Enlaces
def nosotros():
    return render_template('nosotros.html')

@app.route('/servicios')  # Enlaces
def servicios():
    return render_template('servicios.html')

@app.route('/servicio_detalle')  # Enlaces
def servicio_detalle():
    return render_template('servicio_detalle.html')

@app.route('/contacto')  # Enlaces
def contacto():
    return render_template('contacto.html')


if __name__ == '__main__':
    app.run(debug=True)
